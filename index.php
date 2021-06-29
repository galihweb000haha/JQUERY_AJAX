<?php 
error_reporting (E_ALL); 
ini_set("display_errors","On");
?> <!DOCTYPE HTML> 
<html> 
<head>
    <?php 
    require_once('./assets/requires/config.php');
    require_once('./assets/requires/header1.php');
    ?>  
</head>
<body>
    <div class="container mt-4">
        <div class="row" style="background-color:#ffffff;">
            <div class="col-sm-2">
                <div class="form-group">
                    <button class="btn btn-primary from-control" id="btnAddNew" data-toggle="modal" data-target="#CustomerModal">Add Customer</button>
                </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="keyword" placeholder="Search by name">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" id="cari_cust" type="button">Cari</button>
                        </div>
                    </div>
               </div>
            </div>
        </div>

        <div class="row" style="background-color:#ffffff;">
            <div class="col-md-12" style="padding:10px;">
                <div id="TableCustomer"></div> 
            </div>
        </div>
    </div>
        
        <div class="modal fade" id="CustomerModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content"> 
                    <div class="modal-header">
                        <div class="modal-title">
                            <h3 class="modal-title" id="h1-1">Data Customers</h3>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span 
                        aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body"> 
                        <div class = "row">
                            <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id = "message"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class ="col-md-4"> 
                                <div class ="form-group">
                                    <input type  ="hidden" id ="txtindex" value="0" class ="form-control">
                                    <input type ="text" id="txtcustid" class ="form-control" maxlength = "100" placeholder="ID">
                                </div>
                            </div>
                            <div class ="col-md-8"> 
                                <div class ="form-group">
                                    <input type ="text" id= "txtnama" class ="form-control" maxlength = "100" placeholder="Name">
                                </div>
                            </div>
                        </div> 
                        <div class = "row"> 
                            <div class = "col-md-12">
                                <div class = "form-group"> 
                                    <input type = "text" id = "txtaddr" class = "form-control" maxlength = "255" placeholder="Address">
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class = "form-group"  >
                                    <input type = "text" id = "txtphone" class = "form-control" maxlength = "100" placeholder="Phone"> 
                                </div>      
                            </div>
                        </div> 
                        <div class = "row">
                            <div class = "col-md-12"> 
                                <div class = "form-group"> 
                                    <input type = "text" id = "txtcity" class = "form-control" maxlength = "255" placeholder="City">
                                </div> 
                            </div> 
                        </div>
                    </div>
                    <div class = "modal-footer"> 
                        <button type = "button" class = "btn btn-primary" id = "btnSave">Save</button>
                        <button type = "button" class = "btn btn-danger" id = "btnDelete">Delete</button>
                        <button type = "button" class = "btn btn-secondary" data-dismiss = "modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog --> 
        </div>
        
        
        </body> 
        <script src ="<?php echo PATH;?>/assets/scripts/js/customer1.js"></script>
        </html>