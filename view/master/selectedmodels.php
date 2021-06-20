 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Selected models</h1>
                       

                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="port-folio">
                      <div class="row " >
                       
              
				




				<?php
				
				
				
				

				$sql= "select * from models_details as md
						left join images as i on i.u_code=md.u_code
						left join hiring as h on h.model_id=md.u_code
						left join suggestion as s on s.suggest_modelid=md.u_code
						
						where s.suggest_agencyid=".$_SESSION['am_code']." and s.suggest_status=2 or h.h_status=2";
						
					
						
						
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
                                Name : '.$resultRow['u_name'].'
                                </span>
								<br>
								
								 <span>
                                Location : '.$resultRow['u_place'].'
                                </span>
								<br>
								
								
								<span>
								  <td>VBGST'.$resultRow['suggest_jobid'].'GSFTH<span><a href="?action=viewjobdetailsvdsuhvdusj&id='.$resultRow['suggest_jobid'].'">&nbspViewjob</a></span></td>
                                 </span>
<br>								 
										  
										  
								<span>
                                </span>
								</p> </div>
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