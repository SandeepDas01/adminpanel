 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">You Have suggested these models.</h1>
                        <h1 class="page-subhead-line">These models you suggested to clients.</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="port-folio">
                      <div class="row " >
                       
              
				




				<?php
				
				
				
				

				$sql= "select * from models_details as md
	left join images as i on i.u_code=md.u_code
	left join suggestion as s on s.suggest_modelid=md.u_code
	left join  requirem as r on r.r_id=s.suggest_jobid
	where s.suggest_agencyid=".$_SESSION['am_code']."
	order by s.s_id desc";
	$result=query($sql);
	
	
	
	$list='<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Location</th>
											<th>Job Id</th>
                                            <th>Pay</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
	$number='';
	$idm='';
	while($resultRow = fetchArray($result))
			{
				$idm=$resultRow['u_code'];
				$number=$resultRow['suggest_status'];
				$list.='
				<tr>
                                            <td>'.$resultRow['u_name'].'</td>
                                            <td>'.$resultRow['u_place'].'</td>
											  <td>VBGST'.$resultRow['r_id'].'GSFTH<span><a href="?action=viewjobdetailsvdsuhvdusj&id='.$resultRow['r_id'].'">&nbspViewjob</a></span></td>
                                            <td>'.$resultRow['ourrate'].'</td>
											
                                            <td>';
											if($number==3)
								{
									$list.='<button class="btn btn-danger">NOT Selected</button>';
								}
								else if($number==2)
								{
									$list.='<a href="https://wa.me/'.$resultRow['r_number'].'?text=Hey this side agency from your index">
									<button class="btn btn-success">Selected Whatsapp recruiter </button></span>';
								}
								else
								{
									$list.='<button class="btn btn-info">Process</button>';
								}
									
									
							$list.='</td>
                                        </tr>';
								
				
								
								
								
                               
                 
			}
		
								
								
								
				
				
	echo '</tbody></div>';
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