<?php	if ( ! defined('ABSPATH')) exit('No direct script access allowed');
model('commonDb');
model('dataHandling');
//session_start();
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : '' ;
 $header='common/header';
  $loginheader='common/loginheader';

if(isset($_SESSION['admin_id']))
{
	switch($action)
	{
		//Logo Master
		
		case 'main':
			view($header,'master/main');	
		break;
		
		
		case 'vdhjdkjbfkyourmodelsbdkjbfie':
			view($header,'master/yourmodel');	
		break;
		
		
		
		case 'viewprofile':
		view($header,'master/viewprofile');	
		break;
		
		
		
		case 'dfasdjvshjbhvsdh':
		view($header,'master/joinmodels');	
		break;
		
		
		case 'modelinsertbvdfigiiivw':
		modelinsert();
		view($header,'master/thanks');	
		break;
		
		
		case 'presentjobghdviasjvkihdbfiuej':
		view($header,'master/presentjob');	
		break;
		
		
		case 'suggestmodelsgfviuegdbfiukbid':
		view($header,'master/suggestmodels');	
		break;
		
		
		case 'insertsuggestionvidsajkbvid':
		insertsuggestion();
		view($header,'master/presentjob');	
		break;
		
		
		case 'suggestedmodelstevufudcibkjcdic':
		view($header,'master/suggestedmodels');	
		break;
		
		
		
		case 'queriesaboutmodebihjdbfihejfikje':
		view($header,'master/queriesaboutmodel');	
		break;
		
		
		
		case 'field':
		 view($header,'master/field');	
		break;
		
		
		
		case 'yesbkjvdbfbknkvbkk':
		updateyes();
		view($header,'master/queriesaboutmodel');	
		break;
		
		
		
		case 'nodvfhcjedvkjfkbf':
		updateno();
		view($header,'master/queriesaboutmodel');	
		break;
		
		case 'selectedmodelsvfkdjsbfdks':
		view($header,'master/selectedmodels');	
		break;
		
		
		case 'viewjobdetailsvdsuhvdusj':
		view($header,'master/jobdetails');	
		break;
		
		
		
		case 'logoutvhdhjsvdj/?mains':
			logoutDB();
		 	view($loginheader,'master/login');	
		break;
		
		
	 	default:
			view($header,'master/main');	
		break;
  	}
}
else if(isset($_REQUEST['action'])=='loginCheck')
{
	switch($action)
	{
		case 'loginCheck':
			$flag=loginCheckDB();
			if($flag==1)
			{
				view($header,'master/main');	
			}
			else
			{
				view($loginheader,'master/login');	
			}
		break;
		
		
		
		case 'logon':
		view($loginheader,'master/login');	
		break;
		
		
		
		case 'signupformbdaksbdkjdkjbd':
			view($loginheader,'master/signupform');	
		break;
		
		default:
			view($loginheader,'master/login');	
		break;
	}
	
}
else
{
	view($loginheader,'master/login');
}
?>
