	
	
	
	<?php
	
	$profile=$_REQUEST['id'];
	$sql= "select * from models_details as md
	left join images as i on i.u_code=md.u_code
	where md.u_code=".$profile;
	$result=query($sql);
	$name='';
	$images='';
	while($resultRow = fetchArray($result))
			{
				$name=$resultRow['u_name'];
				$images=$resultRow['big_image'];
			}
	
	?>
		<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"><?php echo $name ?></h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
                 
                                 
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Image
                        </div>
                        <div class="panel-body">
                            <img src="<?php  echo $images;?>" style="width:255px;height:120px;">  
						   </div>
                       
                    </div>
                </div>
               
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Information
                        </div>
                        <div class="panel-body">
                           
<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
										
                                            <th>Information</th>
											 <th>Answer</th>
                                            
                                            
                                        </tr>
                                    </thead>
									 <?php 
								$sqls= "select * from models_details
								where u_code=".$profile;
								
							
				$results=query($sqls);
				
				$lists='';
				$name='';
			$age='';
			$dob='';
			$gender='';
			$ms='';
			$place='';
			$nationality='';
			$height='';
			$weight='';
			$skintone='';
			$eyecolor='';
			$haircolor='';
			$profession='';
			$education='';
			$station='';
			$outside_country='';
			$seminude='';
			$nude='';
			$passport='';
			$skills='';
			$hobbies='';
			$language='';
			$westernwear='';
			$biknishots='';
			$swimmingshots='';
			$calendershots='';
			$musicalbum='';
			$shorts='';
			$anyallergies='';
			$experience='';
			$fblink='';
			$twitter='';
			$whatsapp='';
			$instagram='';
			$contact="";
			$email='';
			
			
			
							while($resultRow = fetchArray($results))
				{
					$contact=$resultRow['number'];
			$email=$resultRow['email'];
						$name=$resultRow['u_name'];
			$age=$resultRow['u_age'];
			$dob=$resultRow['u_age'];
			$gender=$resultRow['u_gender'];
			$ms=$resultRow['u_marital'];
			$place=$resultRow['u_place'];
			$nationality=$resultRow['u_nationality'];
			$height=$resultRow['u_height'];
			$weight=$resultRow['u_weight'];
			$skintone=$resultRow['u_skintone'];
			$eyecolor=$resultRow['u_eyecolor'];
			$haircolor=$resultRow['u_haircolor'];
			$profession=$resultRow['profession'];
			$education=$resultRow['education'];
			$station=$resultRow['outstation'];
			$outside_country=$resultRow['outsidecountry'];
			$seminude=$resultRow['seminude'];
			$nude=$resultRow['nude'];
			$passport=$resultRow['passport'];
			$skills=$resultRow['skills'];
			$hobbies=$resultRow['hobbies'];
			$language=$resultRow['language'];
			$westernwear=$resultRow['westernwear'];
			$biknishots=$resultRow['swimsuit'];
			$swimmingshots=$resultRow['swimsuit'];
			$calendershots=$resultRow['calendershoot'];
			$musicalbum=$resultRow['musicalbum'];
			$shorts=$resultRow['shorts'];
			$anyallergies=$resultRow['allergies'];
			$experience=$resultRow['experience'];
			$timingfree=$resultRow['timingfree'];
			
			
			$fblink=$resultRow['fb'];
			$twitter=$resultRow['twitter'];
			$whatsapp=$resultRow['whatsapplink'];
			$instagram=$resultRow['instagram'];
				}
				
                                        
                                   ?>
								   
								   
								    <tbody>
      <tr>
        
        <td>Name</td>
        <td><?php echo $name;?></td>
      </tr>
      <tr>
        
        <td>Age</td>
        <td><?php echo $age;?></td>
      </tr>
      <tr>
        
        <td>Contact Timing</td>
        <td><?php echo $timingfree;?></td>
      </tr>
	        <tr>
       
        <td>Gender</td>
        <td><?php echo $gender;?></td>
      </tr>
      <tr>
       
        <td>Marital status</td>
        <td><?php echo $ms;?></td>
      </tr>
      <tr>
       
        <td>Place</td>
        <td><?php echo $place;?></td>
      </tr>
	        <tr>
        
        <td>Nationality</td>
        <td><?php echo $nationality;?></td>
      </tr>
	  
	   <tr>
        
        <td>Number</td>
        <td><?php echo $contact;?></td>
      </tr>
	  
	  
	   <tr>
        
        <td>Email</td>
        <td><?php echo $email;?></td>
      </tr>
	  
	  
      <tr>
       
        <td>Height</td>
        <td><?php echo $height;?></td>
      </tr>
      <tr>
        
        <td>Weight</td>
        <td><?php echo $weight;?></td>
      </tr>
	        <tr>
        
        <td>Skintone</td>
        <td><?php echo $skintone;?></td>
      </tr>
      <tr>
        
        <td>Eye color</td>
        <td><?php echo $eyecolor;?></td>
      </tr>
      <tr>
       
        <td>Hair color</td>
        <td><?php echo $haircolor;?></td>
      </tr>
	        <tr>
       
        <td>Profession</td>
        <td><?php echo $profession;?></td>
      </tr>
      <tr>
        
        <td>Education</td>
        <td><?php echo $education;?></td>
      </tr>
      <tr>
        
        <td>Outstation Shoot</td>
        <td><?php echo $station;?></td>
      </tr>
	        <tr>
       
        <td>Outside country Shoot</td>
        <td><?php echo $outside_country;?></td>
      </tr>
      <tr>
        
        <td>Seminude</td>
        <td><?php echo $seminude;?></td>
      </tr>
      <tr>
        
        <td>Nude</td>
        <td><?php echo $nude;?></td>
      </tr>
	        <tr>
        
        <td>Passport</td>
        <td><?php echo $passport;?></td>
      </tr>
      <tr>
       
        <td>Skills</td>
        <td><?php echo $skills;?></td>
      </tr>
      <tr>
        
        <td>Hobbies</td>
        <td><?php echo $hobbies;?></td>
      </tr>
	        <tr>
        <td>Language</td>
        <td><?php echo $language;?></td>
      </tr>
      <tr>
        <td>Wester wear</td>
        <td><?php echo $westernwear;?></td>
      </tr>
      <tr>
        <td>Swim Suit</td>
        <td><?php echo $swimmingshots;?></td>
      </tr>
	        <tr>
        
        <td>Calender Shoot</td>
        <td><?php echo $calendershots;?></td>
      </tr>
      <tr>
       
        <td>Music Album</td>
        <td><?php echo $musicalbum;?></td>
      </tr>
      <tr>
        <td>Water shoot</td>
        <td><?php echo $swimmingshots;?></td>
      </tr>
	        <tr>
        <td>shorts</td>
        <td><?php echo $shorts;?></td>
      </tr>
      <tr>
        <td>Any allergies</td>
        <td><?php echo $anyallergies;?></td>
      </tr>
      <tr>
        <td>Experience</td>
        <td><?php echo $experience;?></td>
      </tr>
	        
    </tbody>
                            </div>






						   </div>
                       
                    </div>
                </div>
            </div>
                   <!-- /. ROW  -->
           
            
            
            
          
                    <!-- /. ROW  -->
            
                    <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
		
			
<?php 

include('view/common/footer.php');
?>