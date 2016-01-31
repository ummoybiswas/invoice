<?php include 'template/head_link.php';?>

<body style="background:#F7F7F7 !important;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
											
                    <form action="<?php echo base_url();?>index.php/forget/check_email" method="post">
                        <h1>Reset Password</h1>
                        <div>
                            <input type="email" class="form-control" name="reset_email" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input style="float: left;" type="submit" class="btn btn-success submit" name="recovery_submit" value="Submit"/>
                            <a class="reset_pass" href="<?php echo base_url();?>index.php/welcome">Back To Login</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

             
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-slack" style="font-size: 26px;"></i> GNT</h1>

                                <p>©<?php echo date("Y");?> All Rights Reserved. Powered by <a href="">Geeksntechnology.com</a></p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
         
        </div>
    </div>

</body>

</html>