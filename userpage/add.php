
						
			

        <div class="content mt-3">
            <div class="animated fadeIn">

            <?php
            require 'conn.php';
 
            ?>
               

                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>ADD Video</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="save_video.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                           <!-- <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <p class="form-control-static">Username</p>
                                                                </div>
                                                            </div>-->
                                                            <div class="row form-group">
                                                                <div class="col col-md-13"><label for="text-input" class=" form-control-label">Video</label></div>
                                                                <div class="col-12 col-md-19"><input type="file" id="video" name="video" placeholder="" class="form-control"><small class="form-text text-muted"></small></div>
                                                            </div>
                                                            
                                                                 
                                                            
                                                                
                                                                
                                                            
                                                            <button name="save" class="btn btn-primary">Save</button>
                                                            <!--<input type="save" class="btn btn-primary" value="save" name="save" id="save">-->
                                                        </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        
                                                        
                                                    </div>
                                                </div>
                                              


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
