<div class="wrap">
	<h2>Stripe Information</h2>
	<p>Steps for setup</p>
	<ol>
		<li>Create Stripe account</li>
		<li>Go to "Account Settings"</li>
		<li>Select "API Keys" in the menu</li>
	</ol>
	<form method="post" action="options.php">
		<?php settings_fields( 'stripe-settings-group' ); ?>
		<?php do_settings_sections( 'stripe-settings-group' ); ?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Test Secret Key:</th>
				<td>
					<input type="text" name="test_secret_key" value="<?php echo esc_attr( get_option('test_secret_key') ); ?>" style="width: 300px;"/>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Test Publishable Key:</th>
				<td>
					<input type="text" name="test_publishable_key" value="<?php echo esc_attr( get_option('test_publishable_key') ); ?>"  style="width: 300px;"/>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Live Secret Key:</th>
				<td>
					<input type="text" name="live_secret_key" value="<?php echo esc_attr( get_option('live_secret_key') ); ?>"  style="width: 300px;"/>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Live Publishable Key:</th>
				<td>
					<input type="text" name="live_publishable_key" value="<?php echo esc_attr( get_option('live_publishable_key') ); ?>"  style="width: 300px;"/>
				</td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>