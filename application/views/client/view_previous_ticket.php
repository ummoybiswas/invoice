<?php include 'template/head_link.php';?>
<style>

</style>
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


            <!-- page content -->
            <div class="right_col" role="main">

                <br />
                <div class="">
                   
                        <div class="x_panel">
                                <div class="x_title">

                                    <h2><i class="fa fa-support"></i> All Tickets List</h2>
                                    <ul class="nav navbar-right panel_toolbox ">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                 
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                            <form id="demo-form" data-parsley-validate="">
                                <div class="x_content ">
                                <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">#</th>
                                                <th style="width: 20%">Project Name</th>
                                                <th>Team Members</th>
                                                <th>Project Progress</th>
                                                <th>Status</th>
                                                <th style="width: 20%">#Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#</td>
                                                <td>
                                                    <a>Pesamakini Backend UI</a>
                                                    <br />
                                                    <small>Created 01.01.2015</small>
                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <li>
                                                            <img src="http://localhost/personal/njoroge/assets3/img.jpg" class="avatar" alt="Avatar">
                                                        </li>
                                                        <li>
                                                            <img src="http://localhost/personal/njoroge/assets3/img.jpg" class="avatar" alt="Avatar">
                                                        </li>
                                                        <li>
                                                            <img src="http://localhost/personal/njoroge/assets3/img.jpg" class="avatar" alt="Avatar">
                                                        </li>
                                                        <li>
                                                            <img src="http://localhost/personal/njoroge/assets3/img.jpg" class="avatar" alt="Avatar">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="project_progress">
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                                                    </div>
                                                    <small>57% Complete</small>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-xs">Success</button>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    
                                </div>
                            </form>
                            </div>
                       
                <!-- footer content -->
    <?php include 'template/footer.php';?>
                <!-- /footer content -->

            </div>
            <!-- /page content -->



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

    <!--  -->
    

</body>

</html>