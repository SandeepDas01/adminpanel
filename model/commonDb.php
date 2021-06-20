<?php

function loginCheckDB()
{
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$query='select * from agency where a_email="'.$email.'" and a_password="'.$password.'" and a_status=1';
	$result=query($query);
	$flag=0;
	while($resultRow = fetchArray($result))
	{
		$_SESSION['admin_id']=$resultRow['a_id'];
		$_SESSION['am_code']=$resultRow['a_code'];
		setcookie($resultRow['a_id'], $resultRow['a_code'],time() + (86400 * 30), "/"); // 86400 = 1 day
		
	 	$flag=1;
	}
	return $flag;
	
}


function logoutDB()
{
	$_SESSION['admin_id']="";
	$_SESSION['am_code']='';
 	unset($_SESSION['admin_id']);
	unset($_SESSION['am_code']);
	
}


function modelinsert()
{
	$name=$_REQUEST['name'];
	$number=$_REQUEST['number'];
	$email=$_REQUEST['email'];
	$agency_id=$_REQUEST['agency_id'];
	$sql='insert into `joinmodel`(`refer_id`,`jm_name`,`jm_number`,`jm_email`,`jm_date`) 
			values("'.$agency_id.'","'.$name.'","'.$number.'","'.$email.'",now())';
	query($sql);
	
	
}


function insertsuggestion()
{
	$suggest_jobid=$_REQUEST['postid'];
	$suggest_modelid=$_REQUEST['modelid'];
	$sql='insert into `suggestion`(`suggest_jobid`,`suggest_agencyid`,`suggest_modelid`) 
			values("'.$suggest_jobid.'","'.$_SESSION['am_code'].'","'.$suggest_modelid.'")';
	query($sql);
	
}


function updateyes()
{
	$id=$_REQUEST['id'];
	$sql="update hiring 
	set h_status=2 where model_id=".$id;
	query($sql);
}

function updateno()
{
	$id=$_REQUEST['id'];
	$sql="update hiring 
	set h_status=3 where model_id=".$id;
	query($sql);
}



?>
