        <div class="modal-dialog">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Modal Header</h4>
							  </div>
							  <div class="modal-body">
								 
								   <form id="demo-form" data-parsley-validate="">
										   <div class="x_content">

												<div class="col-md-12 col-lg-12 col-sm-7">
													<!-- blockquote -->
													<blockquote>
													<?php foreach($ticket_details as $r) 
													{?>
													   <h5 style="font-weight:bold"><?=$r['user_email'];?></h5>
													   <h5>Subject :  <?=$r['subject'];?></h5>
													   <p>Date Time : <?=$r['date_time'];?></p>
													   <p>Message: <?=$r['message'];?></p>
													   <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
														<footer>Someone famous in <cite title="Source Title">Source Title</cite>
														</footer>-->
														
													<?php } ?>
													</blockquote>

													<blockquote class="blockquote-reverse">
														<h3>Admin : </h3>
														<?php foreach($ticket_answer as $ro) 
													{?>
													   
													   <p>Answer : <?=$ro['ans_message'];?></p>
													   <p>Date Time : <?=$ro['date_time'];?></p>
													 <?php } ?>
														<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
														<footer>Someone famous in <cite title="Source Title">Source Title</cite>
														</footer>-->
													</blockquote>
												</div>
												
											</div>

                                   </form>
								    </div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						