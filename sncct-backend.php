<?php

if ( is_admin() )
{
	add_action('admin_menu', 'sncct_admin_menu');

	function sncct_admin_menu()
	{
		add_menu_page('Solicitors Nationwide', 'Solicitors Nationwide', 'administrator', 'Solicitors-Nationwide', 'solicitors_nationwide_html');
	}

	function sncct_commission($i)
	{
		$commission = '<select name="sncct_commission_'.$i.'" id="sncct_commission_'.$i.'">';

		$ci = 0;
		$limited_options = array(3, 7, 11, 15);

		if ( in_array ( $i, $limited_options ) )
		{
			$limit = 50;
		}
		else
		{
			$limit = 100;
		}

		while ($ci <= $limit)
		{
			if ( get_option('sncct_commission_'.$i) == $ci )
			{
				$commission .= '<option value="'.$ci.'" selected>&pound;'.$ci.'</option>';
			}
			else
			{
				$commission .= '<option value="'.$ci.'">&pound;'.$ci.'</option>';
			}

			$ci = $ci + 25;
		}

		$commission .= '</select>';

		return $commission;
	}

	function solicitors_nationwide_html()
	{
?>

<div class="wrap">
	<?php screen_icon();?>
	<h2>Solicitors Nationwide Conveyancing Comparison Tool</h2>

	<form method="post" action="options.php">

	<?php wp_nonce_field('update-options');?>

	<table>
		<tr>
			<th>Affiliate Email</th>
			<td><input name="sncct_email" type="text" id="sncct_email" value="<?php echo get_option('sncct_email');?>" /></td>
		</tr>
		<tr>
			<th>Affiliate Key</th>
			<td><input name="sncct_key" type="text" id="sncct_key" value="<?php echo get_option('sncct_key');?>" /></td>
		</tr>
		<tr>
			<th>Commission</th>
			<td>
				<table>
					<tr>
						<th>Property Value</th>
						<th>Purchase</th>
						<th>Sale</th>
						<th>Sale And Purchase</th>
						<th>Re-Mortgage</th>
					</tr>
					<tr>
						<td>&pound;0 - &pound;125,000</td>
						<td><?php echo sncct_commission(1)?></td>
						<td><?php echo sncct_commission(2)?></td>
						<td><?php echo sncct_commission(3)?></td>
						<td><?php echo sncct_commission(4)?></td>
					</tr>
					<tr>
						<td>&pound;125,001 - &pound;250,000</td>
						<td><?php echo sncct_commission(5)?></td>
						<td><?php echo sncct_commission(6)?></td>
						<td><?php echo sncct_commission(7)?></td>
						<td><?php echo sncct_commission(8)?></td>
					</tr>
					<tr>
						<td>&pound;250,001 - &pound;500,000</td>
						<td><?php echo sncct_commission(9)?></td>
						<td><?php echo sncct_commission(10)?></td>
						<td><?php echo sncct_commission(11)?></td>
						<td><?php echo sncct_commission(12)?></td>
					</tr>
					<tr>
						<td>&pound;500,001+</td>
						<td><?php echo sncct_commission(13)?></td>
						<td><?php echo sncct_commission(14)?></td>
						<td><?php echo sncct_commission(15)?></td>
						<td><?php echo sncct_commission(16)?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<th>Plugin Url</th>
			<td><input name="sncct_quote_page" type="text" id="sncct_quote_page" value="<?php echo get_option('sncct_quote_page');?>" /></td>
		</tr>
	</table>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="sncct_email,sncct_key,sncct_commission_1,sncct_commission_2,sncct_commission_3,sncct_commission_4,sncct_commission_5,sncct_commission_6,sncct_commission_7,sncct_commission_8,sncct_commission_9,sncct_commission_10,sncct_commission_11,sncct_commission_12,sncct_commission_13,sncct_commission_14,sncct_commission_15,sncct_commission_16,sncct_quote_page,sncct_conf_email," />

	<input type="submit" value="<?php _e('Save Changes')?>" />

	</form>
</div>

<div class="instructions">
	<h2>Instructions</h2>

	<ol>
		<li class="show">Signup for your Affiliate Key at <a href="http://www.solicitorsnationwide.co.uk/wp-login.php?action=register">Solicitors Nationwide</a></li>
		<li class="show">Once you have signed up, copy your Affiliate Key into the corresponding field above together with the email address you registered</li>
		<li class="show">Set the commission levels you wish to achieve for each scenario</li>
		<li class="show">Set the url where the plugin will operate from</li>
		<li class="show">Place the shortcode [show_conveyancing] on the page you created for this plugin</li>
	</ol>
</div>

<?php

	}
}


?>