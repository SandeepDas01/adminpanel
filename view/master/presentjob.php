<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PRESENT REQUIREMENT</h1>
                       
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
           
						
						<?php
						$sqls= "select * from requirem
								where r_status=1 order by r_id desc";
							
				$results=query($sqls);
				
				$lists='';
				while($resultRow = fetchArray($results))
				{
					$lists.='  
					
					 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           POST JOB
                        </div>
                        <div class="panel-body">
					<form >
							
							<div class="col-md-12">
							<div class="col-md-6">
							<div class="form-group">
                                            <label>PRODUCTION NAME : <h1 class="page-subhead-line">'.$resultRow['r_production'].'</h1></label>
                                            
                                        </div>
										</div>
										
										<div class="col-md-6">
										<div class="form-group">
                                            <label>DIRECTOR NAME : <h1 class="page-subhead-line">'.$resultRow['r_director'].'</h1 ></h1>
</label>
                                            
                                        </div>
							</div>
							<hr class="page-subhead-line">
									


<div class="col-md-12">
							<div class="col-md-6">
							<div class="form-group">
                                            <label>LOCATION :<h1 class="page-subhead-line">'.$resultRow['location'].'</h1></label>
                                            
                                        </div>
										</div>
										
										<div class="col-md-6">
										<div class="form-group">
                                            <label>PAY :<h1 class="page-subhead-line">'.$resultRow['ourrate'].'</h1></label>
                                           
                                        </div>
										</div>
										<hr class="page-subhead-line">
										
										<div class="col-md-12">
										<label>Description:<h1 class="page-subhead-line">'.$resultRow['r_desc'].'</hr></label>
										</div>
										<hr class="page-subhead-line">
										 <a href="?action=suggestmodelsgfviuegdbfiukbid&jobid='.$resultRow['r_id'].'"><button type="button" class="btn btn-info col-md-12" >SUGGEST MODEL</button></a>
							</div>
																		
										
										
                                        
										
								</div>		
										
                                
                                        
                                  
                                 
                                       

                                    </form>
									
									</div>
									</div>';
				}
				
				echo $lists;
				
						
						?>
						
                          
                            </div>
                        </div>
                            </div>
							</div>

                               
                           
                        </div>
                            </div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
		
		
		
		<script type="text/javascript">
    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || (k == 8 || k == 32) );
        }
    </script>
	
	
	<script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k >= 48 && k <= 57) || (k==45));
    }    
</script>
	
<?php 

include('view/common/footer.php');
?>