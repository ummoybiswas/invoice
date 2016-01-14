                 
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?php echo site_url('client/dashboard');?>" class="site_title"><i class="fa fa-slack"></i> 
                        <span>GNT Panel</span></a>
                    </div>
                    <div class="clearfix"></div>
				 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            
                            <ul class="nav side-menu">
                                <li><a href="<?php echo site_url('client/dashboard');?>"><i class="fa fa-home"></i> Dashboard</a></li>
                                <li><a><i class="fa fa-briefcase"></i> My Order</a> </li>
                                <li><a><i class="fa fa-user"></i> My Account <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url('client/account_info');?>">My Details</a></li>
                                        <li><a href="" data-toggle="modal" data-target="#myModal">Change Password</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-globe"></i> Domains</a></li>
                                <li><a><i class="fa fa-puzzle-piece"></i> Services</a> </li>
								<li><a><i class="fa fa-send"></i> My Invoices</a> </li>
								<li><a><i class="fa fa-support"></i> Support <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="general_elements.html">New Ticket</a></li>
                                        <li><a href="media_gallery.html">Support Tickets</a></li>
										<li><a href="media_gallery.html">Unblock IP</a></li>
										<li><a href="media_gallery.html">Server Status</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        

                    </div>
					
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">
           <form action="<?php echo site_url('client/change_password')?>" method="post" style="padding:20px;">
            <div class="form-group">
              <label for="pwd">New Password:</label>
              <input type="password" class="form-control" name="pas_wrd" id="pwd" required>
            </div>
            <div class="form-group">
              <label for="con_pwd">Confirm Password:</label>
              <input type="password" class="form-control" name="con_pas_wrd" id="con_pwd" required>
            </div>
            <input type="submit" name="update" class="btn btn-success"value="Update">
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>