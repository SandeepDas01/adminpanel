<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add your model </h1>
                        <h1 class="page-subhead-line">Before adding your models here you should have this <a href="?action=field">fields</a> of models and should have 12 images and whatsapp to +919001092208.</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">
                            <form name="action" action="" method="post">
							<input type="hidden" name="action" value="modelinsertbvdfigiiivw">
							
							
							<div class="form-group">
                                            <label>Agency Id</label>
                                            <input class="form-control" type="text" name="agency_id" value="<?php echo "CUSGDVYUVSGG891" ;echo $_SESSION['admin_id'];?>" readonly required>
                                           
                                        </div>
										
										
										
                                        <div class="form-group">
                                            <label>Enter Model Name</label>
                                            <input class="form-control" type="text" name="name" onkeypress="return blockSpecialChar(event)" required>
                                           
                                        </div>
										
										
										<div class="form-group">
                                            <label>Model Number with country code</label>
                                            <input class="form-control" type="text" name="number" onkeypress="return isNumber(event)" required>
                                           
                                        </div>
										
										
										
                                 <div class="form-group">
                                            <label>Enter Model Email</label>
                                            <input class="form-control" type="email" name="email" required>
                                    
                                        
                                  
                                 
                                        <button type="submit" class="btn btn-info">ADD MODEL</button>

                                    </form>
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