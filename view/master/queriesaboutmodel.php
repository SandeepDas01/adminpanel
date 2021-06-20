 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Queries related your model discuss here</h1>
                       

                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="port-folio">
                      <div class="row " >
                       
              
				




				<?php
				
				
				
				

				$sql= "select * from models_details as md
						left join images as i on i.u_code=md.u_code
						left join hiring as h on h.model_id=md.u_code
						where h.model_id=md.u_code and h.h_status=1 and md.agency_id=".$_SESSION['am_code'];
						
						
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
                               Production : '.substr($resultRow["h_production"],0,20).'...
                                </span>
								<br>
                                <span>
                                Description : '.$resultRow['h_description'].'
                                </span>
								<br>
								
								 <span>
                                Pay : '.$resultRow['ourrate'].'
                                </span>
								<br>
								<span>
                               <a href="?action=yesbkjvdbfbknkvbkk&id='.$resultRow['model_id'].'"><button class="btn btn-primary">Approve</button></a>
							    <a href="?action=nodvfhcjedvkjfkbf&id='.$resultRow['model_id'].'"><button class="btn btn-danger">Dismiss</button></a>
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