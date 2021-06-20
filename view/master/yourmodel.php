    <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Your all models are listed here.</h1>
                        </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Your all models are listed here
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                        
										
                                        <?php 
								$sqls= "select * from models_details
								where agency_id=".$_SESSION['am_code']." order by  u_code desc";
								
							
				$results=query($sqls);
				$i=1;
				$lists='<thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Model Name</th>
                                            <th>Model location</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
				
				while($resultRows = fetchArray($results))
				{
					$lists.='<tr>
							<td>'.$i++.'</td>
							<td>'.$resultRows['u_name'].'</td>
							<td>'.$resultRows['u_place'].'</td>
							<td><a href="?action=viewprofile&id='.$resultRows["u_code"].'"><button type="button" class="btn btn-info">View</button></a></td>
							</tr>';
							
											
								
								 
				}
			echo $lists;	
			echo '</tbody>';
				
				
				
				?>
										
										
										
										
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                
                
            </div>
         
               
               
         

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
		
		
			
<?php 

include('view/common/footer.php');
?>