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

                                    <h2><i class="fa fa-support"></i> Create New Ticket</h2>
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
                                {user_info}
                                    <div class="col-md-6">
                                    <!-- start form for validation -->
                                   
                                        <label for="name"> Name :</label>
                                        <input  id="name"  class="form-control" name="first_name" readonly value="{first_name} {last_name}" required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                       
                                         <label for="company_name">Company Name :</label>
                                        <input  id="company_name"  class="form-control" name="company_name" readonly value="{company_name}" required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        <label for="email">Email Address :</label>
                                        <input  id="email"  class="form-control" name="email" readonly data-parsley-trigger="change" value="{email}" required type="email"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>
                                        
                                        
                                    <!-- end form for validations -->
                                    </div>
                                     {/user_info}
                                    <div class="col-md-6">


                                    <label for="subject_name">Subject :</label>
                                        <input  id="subject_name"  class="form-control" name="subject_name" value="" required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                       
                                        <label for="dept">Department:</label>
                                        <select  id="dept" class="form-control" required>
                                            <option value="">Choose..</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Hosting">Hosting</option>
                                            <option value="Service">Service</option>
                                        </select><ul id="parsley-id-0375" class="parsley-errors-list"></ul>

                                        <label for="priority">Priority:</label>
                                        <select  id="priority" class="form-control" required>
                                            <option value="High">High</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>
                                        </select><ul id="parsley-id-0375" class="parsley-errors-list"></ul>
                                    <!-- start form for validation -->
                                        <label for="message"> Message :</label>
                                        <textarea  id="message"  class="form-control" name="message"  required ></textarea><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                       
                                         
                                        <label for="attachment">Attachment :</label>
                                          <div style="position:relative;">
                                            <a class='btn btn-primary' href='javascript:;'>
                                                Choose File...
                                                <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="user_file" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                                            </a>
                                            &nbsp;
                                            <span class='label label-info' id="upload-file-info"></span>
                                        </div>
                                        
                                       <input type="submit" class="btn btn-success pull-right" value="Submit Ticket">
                                    <!-- end form for validations -->
                                    </div>
                                    
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
    <script>
        $('document').ready(function () {
            $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
                type: 'bar',
                height: '125',
                barWidth: 13,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });

            $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
                type: 'bar',
                height: '40',
                barWidth: 8,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });

            $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
                type: 'line',
                height: '40',
                width: '200',
                lineColor: '#26B99A',
                fillColor: '#ffffff',
                lineWidth: 3,
                spotColor: '#34495E',
                minSpotColor: '#34495E'
            });

            var doughnutData = [
                {
                    value: 30,
                    color: "#455C73"
                },
                {
                    value: 30,
                    color: "#9B59B6"
                },
                {
                    value: 60,
                    color: "#BDC3C7"
                },
                {
                    value: 100,
                    color: "#26B99A"
                },
                {
                    value: 120,
                    color: "#3498DB"
                }
        ];
            var myDoughnut = new Chart(document.getElementById("canvas1i").getContext("2d")).Doughnut(doughnutData);
            var myDoughnut = new Chart(document.getElementById("canvas1i2").getContext("2d")).Doughnut(doughnutData);
            var myDoughnut = new Chart(document.getElementById("canvas1i3").getContext("2d")).Doughnut(doughnutData);
        });




    <!-- /datepicker -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript">
 
    $('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    
</script>

</body>

</html>