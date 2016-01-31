<?php include 'template/head_link.php';?>

<body style="background:#F7F7F7 !important;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
											<?php if($this->session->userdata('error') !="" || $this->session->userdata('error') !=NULL) {?>
							 <div class="alert alert-danger">
                               <?php echo $this->session->userdata('error');?>
                            </div>
							<?php $this->session->unset_userdata('error'); } ?>
                    <form action="<?php echo base_url();?>index.php/login" method="post">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" name="uname" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="pass" placeholder="Password" required="" />
                        </div>
                        <div>
                            <input style="float: left;" type="submit" class="btn btn-success submit" name="log_in" value="Login"/>
                            <a class="reset_pass" href="<?php echo base_url();?>index.php/forget">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">New to site?
                                <a href="#toregister" class="to_register"> Create Account </a>
                            </p>
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
            <div id="register" class="animate form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-slack" style="font-size: 26px;"></i>GNT</h1>

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