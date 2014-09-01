<div class="cleanlogin-container" id="cleanlogin">
	<form class="cleanlogin-form" method="post" action="#" name="resetpass">

		<fieldset>
		
			<div class="cleanlogin-field">
				<img src="/images/picture37.png">&nbsp;&nbsp;<input class="cleanlogin-field-username" type="text" name="username" value="" placeholder="<?php echo __( 'Username', 'cleanlogin' ); ?>">
			</div>

			<div class="cleanlogin-field-website">
				<label for='website'>Website</label>
	    		<input type='text' name='website' value=" ">
	    	</div>
		
		</fieldset>
		
		<div>	
			<!--<input type="submit" value="<?php echo __( 'Restore password', 'cleanlogin' ); ?>" name="submit">-->
			<input type="image" src="/images/picture145.png" onclick="document.resetpass.submit();" style="margin-left:23%;">
			<input type="hidden" name="action" value="restore">		
		</div>

	</form>
</div>