	
		
		
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h1 class="page-subhead-line">General information is listed here.</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="#">
                                <i class="fa fa-users fa-5x"></i>
                                <h5>You have 
								<?php 
								$sql= "select count(agency_id) from models_details where agency_id=".$_SESSION['am_code'];
							
				$result=query($sql);
				$i=1;
				$list='';
				
				while($resultRow = fetchArray($result))
				{
					$list=$resultRow['count(agency_id)'];
								
								 
				}
				echo $list;?>
				
				Models
				
				</h5>
                            </a>
                        </div>
                    </div>
					
					
					
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-plug fa-5x"></i>
                                <h5><?php 
								
								
								
								$sql="select count(r_id) from requirem where r_status=1";
								$result=query($sql);
				$i=1;
				$list='';
				
				while($resultRow = fetchArray($result))
				{
					$list=$resultRow['count(r_id)'];
								
								 
				}
				echo $list;
				?> Present jobs</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                                <i class="fa fa-dollar fa-5x"></i>
                                <h5><?php
				
				
				
				

				$sql= "select count(s_id) from models_details as md
						left join images as i on i.u_code=md.u_code
						left join hiring as h on h.model_id=md.u_code
						left join suggestion as s on s.suggest_modelid=md.u_code
						
						where s.suggest_agencyid=".$_SESSION['am_code']." and s.suggest_status=2 or h.h_status=2";
						
					
						
						
	$result=query($sql);
	
	
	
	$list='';
	$number='';
	
	while($resultRow = fetchArray($result))
			{
				$list=$resultRow['count(s_id)'];
			}
	
echo $list;
				
			?> Models selected</h5>
                            </a>
                        </div>
                    </div>

                </div>
               
                        

            </div>
            <!-- /. PAGE INNER  -->
        </div>
		
		
		<?php
		
		include('view/common/footer.php');
		?>