<?php $this->load->view('includes/head_login'); ?>
<form class="table" action="<?=base_url();?>admin/login/authenticate" method="post"><!-- Default forms (table layout) -->
					<div class="inner-form">
						<?php if(isset($msg)){ ?>
                        <div class="msg msg-info">
							<p><strong><?php  echo $msg;  ?></strong>.</p>
						</div>
                        <?php } ?>
						<table cellspacing="0">
							<tr>
								<th><label for="some1">Name:</label></th>
								<td><input class="txt" type="text" id="some1" name="username" /></td>
							</tr>
							<tr>
								<th><label for="some3">Password:</label></th>
								<td><input class="txt pwd" type="password" id="some3" name="passwd" /></td><!-- class error for wrong filled inputs -->
							</tr>
							<tr>
								<th></th>
								<td class="tr proceed">
									<input class="button" type="submit" value="Log in" />
								</td>
							</tr>
						</table>
					</div>
				</form>
                
<?php $this->load->view('includes/footer_login'); ?>