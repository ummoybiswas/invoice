<?php include 'template/head_link.php';?>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
              
                    <!-- sidebar menu -->
                             <?php include 'template/nav.php';?>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
                  <?php include 'template/header.php';?>
            <!-- /top navigation -->
            <div class="right_col" role="main">

                <br />
                <div class="">
                    
                        <div class="x_panel">
                                <div class="x_title">

                                    <h2><i class="fa fa-user"></i> Personal Details </h2>
                                    <ul class="nav navbar-right panel_toolbox ">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                 
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                               
                                   
                                    
                                    <!-- start form for validation -->
                            <form  action="<?php echo site_url('admin/insert_new_client_data');?>" method="post" id="demo-form" data-parsley-validate="">
                                    <div class="x_content ">  
                                     <div class="col-md-6">
                                       <label for="first_name">First Name :</label>
                                        <input  id="first_name"  class="form-control" name="first_name"  required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                         <label for="last_name">Last Name :</label>
                                        <input  id="last_name"  class="form-control" name="last_name" required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        
                                         <label for="company_name">Company Name :</label>
                                        <input  id="company_name"  class="form-control" name="company_name"  required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        <label for="email">Email Address :</label>
                                        <input  id="email" onblur="email_check(this.value)" class="form-control" name="email" data-parsley-trigger="change"  required="" type="email">
                                        <p id="email_msg" style="color:red"></p><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                        <label for="address">Address :</label>
                                        <input  id="address"   class="form-control" name="address" required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                       
                                        <label for="address2">Address 2 :</label>
                                        <input  id="address2"   class="form-control" name="address2" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>

                                   
                                   
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <!-- start form for validation -->   
                                        <label for="city">City :</label>
                                        <input  id="city"  class="form-control" name="city" required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        <label for="state">State/Region :</label>
                                        <input  id="state"   class="form-control" name="state" data-parsley-trigger="change"  type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                       <label for="zip">Zip Code :</label>
                                        <input  id="zip"   class="form-control" name="zip" data-parsley-trigger="change"  type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>
                                        
                                        <label for="country">Country :</label>
                                        <input  id="country"   class="form-control" name="country" data-parsley-trigger="change" required type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                        <label for="phone">Phone No :</label>
                                        <input  id="phone"  class="form-control" name="phone" data-parsley-trigger="change" required type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                        <div class="clearfix"></div>
                                        
                               
                                    </div>
                                 </div>
                            <div class="x_content ">
                                    <div class="x_title">

                                        <h2><i class="fa fa-sign-in"></i> Login Information </h2>
                                       
                                        <div class="clearfix"></div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label for="uname">User Name :</label>
                                        <input  id="uname"  onblur="uname_check(this.value)" class="form-control" name="uname" required type="text">
                                         <p id="uname_msg" style="color:red"></p>
                                        <ul id="parsley-id-0979" class="parsley-errors-list"></ul>           
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label for="pass">Password :</label>
                                        <input  id="pass"  class="form-control" name="pass" required type="password">
                                       
                                        <ul id="parsley-id-0979" class="parsley-errors-list"></ul>           
                                    </div>
                                
                                <br>
                                <div class="x_content ">
                                 <div class="col-md-1 pull-right">
                                    <input disabled="true" type="submit" class="btn btn-primary" value="Sign UP" id="submit"/>
                                </div>
                                </div>
                            
                                
                            </div>
                        </form>
                               
            <!-- page content -->
           
                <!-- footer content -->
    <?php include 'template/footer.php';?>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>


    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
<!-- Footer Link-->
    <?php include 'template/footer_link.php';?>
<!-- Footer Link End-->
<script>
var check_submit=0;

    function email_check(email){
     $.ajax({
        url: "<?php echo site_url('admin/check_email_is_unique'); ?>",
        type: "post",
        data: {email:email},
        success: function(msg) {
           $('#email_msg').html(msg);
           if(msg!='')
           {
            $("#submit").attr("disabled",true);
            check_submit=1;
            }
            else
            {
               check_submit=0;
                submit_btn_check();
            
            }
           //alert(""+msg);
        }
    });
}
function uname_check(uname){
     $.ajax({
        url: "<?php echo site_url('admin/check_uname_is_unique'); ?>",
        type: "post",
        data: {uname:uname},
        success: function(msg) {
           $('#uname_msg').html(msg);
          if(msg!='')
           {
            check_submit=1;
            $("#submit").attr("disabled",true); 
            u_name_check=1;
            }
            else
            {
                check_submit=0;
              submit_btn_check();
            }

        }
    });
}

function submit_btn_check()
{
    if(check_submit==0)
    {  
        $("#submit").removeAttr("disabled"); 
    }
    
}

</script>

</body>

</html>