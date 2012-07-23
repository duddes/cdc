<?php $this->load->view('includes/header'); ?>
	<div class="box box-100">
					<div class="boxin">
						<div class="header">
							<h3>System User List</h3>
							<a class="button" href="<?=base_url();?>admin/input-new-user">Add New User&nbsp;»</a>
							<ul>
								<!--<li><a href="#">list view</a></li>
								<li><a href="#" class="active">grid view</a></li>-->
							</ul>
						</div>
						<div class="content">
							<form class="plain" action="" method="post" enctype="multipart/form-data">
								<fieldset>
									<div class="grid"><!-- grid view -->
										<div class="line">
											
                                             <?php foreach($users as $user): ?>  
                                                <div class="item">
                                                    <div class="inner">
                                                    	<?php if(empty($user->filename)){ ?>
															<?php if($user->sex=='male'){ ?>
                                                            <a class="thumb" href="#"><img src="<?=base_url();?>assets/images/users/male.jpg" alt="" /></a>
                                                            <?php }else{?>
                                                            <a class="thumb" href="#"><img src="<?=base_url();?>assets/images/users/female.jpg" alt="" /></a>
                                                            <?php } ?>
                                                        <?php }else{ ?>
                                                        	<a class="thumb" href="#"><img style="width:100px; height:100px;" src="<?=base_url();?>assets/images/users/<?=$user->filename;?>" alt="" /></a>
                                                        <?php } ?>
                                                        <div class="data">
                                                            <h4><?=ucfirst($user->fname).' '.ucfirst($user->lname);?></h4>
                                                            <p><span style="font-weight:bold; color:#FF0000">Email Address</span>&nbsp;<?=$user->email;?></p>
                                                            <p><span style="font-weight:bold; color:#FF0000">Username</span>&nbsp;<?=$user->username;?></p>
                                                             <p><span style="font-weight:bold; color:#FF0000">Password</span>&nbsp;<?=$this->encrypt->encode($user->password);?></p>
                                                            <!--<div class="meta">715&nbsp;KB, 1920&times;1200</div>-->
                                                            <ul class="actions">
                                                                <li>
                                                                     <a class="ico" href="#" title="edit"><img src="<?=base_url();?>
                                                                        assets/css/img/led-ico/pencil.png" alt="edit" />
                                                                     </a>
                                                           		</li>
                                                                <li>
                                                                	<a class="ico" href="<?=base_url();?>admin/delete-user/<?=$user->id;?>" title="delete">
                                                                		<img src="<?=base_url();?>assets/css/img/led-ico/delete.png" alt="delete" />
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                               <?php endforeach; ?>
											</div>
										</div>		
									
								</fieldset>
							</form>
							<div class="pagination">
								<ul>
									<li><a href="#">previous</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><strong>3</strong></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
<?php $this->load->view('includes/footer'); ?>