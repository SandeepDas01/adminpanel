 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SUGGEST YOUR MODELS</h1>
                        <h1 class="page-subhead-line">Suggest client your model by clicking on suggest. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="port-folio">
                      <div class="row " >
                       
              
				




				<?php
				
				
				$job=$_REQUEST['jobid'];
				

				$sql= "select * from models_details as md
	left join images as i on i.u_code=md.u_code
	
	where md.agency_id=".$_SESSION['am_code'];
	$result=query($sql);
	
	
	
	$list='';
	$number='';
	
	while($resultRow = fetchArray($result))
			{
				$list.='<div class="col-md-3 ">

                    <div class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src='.$resultRow['big_image'].' class="img-responsive " alt="" height="229px" width="370px"/>
                        <div class="overlay">
                          <p>
						  <span>
                               Name  : '.$resultRow['u_name'].'
                                </span>
								<br>
                                <span>
                                Location : '.$resultRow['u_place'].'
                                </span>
								<br>
								
                               
                                
                            </p>';
						
							$sqlm = "SELECT count(s_id) FROM `suggestion` WHERE 
							suggest_agencyid=".$_SESSION['am_code']." and suggest_jobid=".$job." and suggest_modelid=".$resultRow['u_code'];
						
							$resultm=query($sqlm);
							
							while($rty=fetchArray($resultm))
							{
								$number=$rty['count(s_id)'];
							}
							if($number>0)
	{
							
							$list.='<button class="preview btn btn-info" disabled="" >SUGGESTED</button>';
							
                           
	
	}
	else
	{
		
		 $list.='<a href="?action=insertsuggestionvidsajkbvid&modelid='.$resultRow['u_code'].'&postid='.$job.'"><button class="preview btn btn-info" value="Suggest" >Suggest</button></a>';
	}
							
							

                       $list.=' </div>
                    </div>
                </div>';
				
			}
	echo $list;

				
			?>
            </div>

            

            </div>
                </div>
               

            </div>
            <!-- /. PAGE INNER  -->
      
        <!-- /. PAGE WRAPPER  -->
		
		
		<?php 
		include('view/common/footer.php');
		?>