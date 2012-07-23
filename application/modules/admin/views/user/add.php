<?php $this->load->view('includes/header'); ?>
	<div class="box box-50 altbox">
					<div class="boxin">
						<div class="header">
							<h3>Add New User</h3>
						</div>
						<form class="fields" action="<?=base_url();?>admin/save-user" method="post" enctype="multipart/form-data"><!-- Forms (plain layout, cleaner) -->
                        	<?php if($formError!=''){?>
                            <div class="msg msg-error"><p>Please Correct The Error(s) Below</p></div>
							<?php }?>
							<fieldset>
								<legend><strong>Login Information</strong></legend>
								<!--<div class="msg msg-ok">
									<p>I'm a <strong>success</strong> message and I'm proud of it!</p>
								</div>-->
								<label for="some21">Username:</label>
								<input <?=($formError!='' ? 'class="txt error"':'class="txt"');?> type="text" id="some21" name="username" size="50" />
								 <small><?php if($formError !=''){ echo $formError['username'];} ?></small>
								<label for="some23">Password:</label>
								<input <?=($formError!='' ? 'class="txt error"':'class="txt"');?> type="password" id="some23" name="password" size="50"/>
                                 <small><?php if($formError !=''){ echo $formError['password'];} ?></small>
                                 <label for="some21">Email Address:</label>
								<input <?=($formError!='' ? 'class="txt error"':'class="txt"');?> type="text" id="some21" name="email" size="50" />
								 <small><?php if($formError !=''){ echo $formError['email'];} ?></small>
								
								<!--<label for="some22">Textarea:</label>
								<textarea name="some22" id="some22" cols="40" rows="5"></textarea>
								-->
								<!--<label for="some24">File input:</label>
								<input class="file" type="file" id="some24" name="some24" /> <span class="loading">uploading…</span>-->
                                <!-- OR <img src="css/img/upload.gif" alt="" /> -->
									
								<!--<label for="some210">Select box:</label>
								<select id="some210" name="some210">
									<option value="val1">select …</option>
									<option value="val1">… something</option>
								</select>-->
							
							</fieldset>
                            
                            <fieldset>
                            	<?php 
									
										//echo $formError['username'];
										
								 
								?>
                            	<legend><strong>Personal Information</strong></legend>
                                <label for="some21">First Name:</label>
                                
								<input <?=($formError!='' ? 'class="txt error"':'class="txt"');?> type="text" id="some21" name="fname" size="50" />
                                <small><?php if($formError !=''){ echo $formError['fname'];} ?></small>
                                <label for="some21">Last Name:</label>
								<input <?=($formError!='' ? 'class="txt error"':'class="txt"');?> type="text" id="some21" name="lname" size="50" />
                                <small><?php if($formError !=''){ echo $formError['lname'];} ?></small>
                                
                                <label for="some21">Image:</label>
                                <input class="file" type="file" id="some4" name="user_image" />
                                 <label for="some21">Gender:</label>
								<select style="padding:5px" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                               
                            </fieldset>
                            
                            
                            
                            <div class="sep">
                            		<input class="button altbutton" type="submit" value="Add User" />
									&nbsp;<span><a href="<?=base_url();?>/admin/users">Cancel</a></span>
									
								</div>
						</form>
					</div>
				</div>
    
<?php $this->load->view('includes/footer'); ?>