<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>This is login panel of Digital Agency.</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script>
		    
		   document.addEventListener("contextmenu", function (e) {
        e.preventDefault();
    }, false);
    
		</script>
</head>
<body id="contextmenu" onmousedown="return false" >
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?action=maincsghdvjsv/?deam">
				<?php
            $sql= "select * from agency where a_id=".$_SESSION['admin_id'];
				$result=query($sql);
				$i=1;
				$list='';
				$a_contactpersonname='';
				while($resultRow = fetchArray($result))
				{
					$list=
								 $resultRow['a_name'];
								 $a_contactpersonname= $resultRow['a_contactpersonname'];
								 
				}
				echo $list;
			?>
				
				
				</a>
            </div>

            <div class="header-right">

                <a href="?action=logoutvhdhjsvdj/?mains" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $a_contactpersonname;?>
                            <br />
                                
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="?action=maincsghdvjsv/?deam"><i class="fa fa-dashboard "></i>Dashboard
										</a>
                    </li>
                   

                    <li>
                        <a href="?action=vdhjdkjbfkyourmodelsbdkjbfie"><i class="fa fa-flash "></i>Your Models</a>
                        
                    </li>
					
					
					 <li>
                        <a href="?action=dfasdjvshjbhvsdh"><i class="fa fa-anchor "></i>Join models</a>
                    </li>
                    
                        
                             <li>
                                <a href="?action=presentjobghdviasjvkihdbfiuej"><i class="fa fa-desktop "></i>Present jobs&nbsp&nbsp&nbsp&nbsp(<?php 
								
								
								
								$sql="select count(r_id) from requirem where r_status=1";
								$result=query($sql);
				$i=1;
				$list='';
				
				while($resultRow = fetchArray($result))
				{
					$list=$resultRow['count(r_id)'];
								
								 
				}
				echo $list;
				?>)
								
								
								 </a>
                            </li>
                             <li>
                                <a href="?action=suggestedmodelstevufudcibkjcdic"><i class="fa fa-code "></i>Status of models</a>
                            </li>
							
							
							
							
							<li>
                                <a href="?action=selectedmodelsvfkdjsbfdks"><i class="fa fa-code "></i>Selected models</a>
                            </li>
                   
                      
                     
                    
                   
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
	
		
		
		
		
		
		
		