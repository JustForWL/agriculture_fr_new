<?php
	$register_url = get_option( 'cl_register_url', '');
	$restore_url  = get_option( 'cl_restore_url', '');
?>
<div class="cleanlogin-container" id="cleanlogin">		

	<form class="cleanlogin-form" method="post" action="" name="cleanlogin">
			
		<fieldset>
			<div class="cleanlogin-field">
				<img src="images/picture29.png">&nbsp;&nbsp;<input class="cleanlogin-field-username" type="text" name="log" placeholder="<?php echo __( 'Username', 'cleanlogin' ); ?>">
			</div>
			
			<div class="cleanlogin-field">
				<img src="images/picture28.png" style="margin-left:5%;">&nbsp;&nbsp;<input class="cleanlogin-field-password" type="password" name="pwd" placeholder="<?php echo __( 'Password', 'cleanlogin' ); ?>">
			</div>
		</fieldset>
		
		<fieldset>
        <!--
			<input class="cleanlogin-field" type="submit" value="<?php echo __( 'Log in', 'cleanlogin' ); ?>" name="submit">
           -->
            <input type="image" src="images/picture30.png" onclick="document.cleanlogin.submit();" style="margin-left:30%;">
			<input type="hidden" name="action" value="login">
			
			<!--<div class="cleanlogin-field cleanlogin-field-remember">
				<input type="checkbox" name="rememberme" value="forever">
				<label><?php echo __( 'Remember?', 'cleanlogin' ); ?></label>
			</div>-->
		</fieldset>
		
		<div class="cleanlogin-form-bottom">
			
			<?php if ( $register_url != '' )
				echo "<a href='http://wordpress.local/register' class='cleanlogin-form-register-link'>". __( '免费注册', 'cleanlogin' ) ."</a>";
			?>
         
			<?php if ( $restore_url != '' )
				echo "<a href='http://wordpress.local/lostpassword' class='cleanlogin-form-pwd-link'>". __( '忘记密码', 'cleanlogin' ) ."</a>";
			?>
						
		</div>
		
	</form>

</div>
