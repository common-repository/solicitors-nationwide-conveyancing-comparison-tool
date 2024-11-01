<?php
function illustration($illxmldata)
{
	echo '<br/><br/>';
	echo '<h2>Your Conveyancing Quote</h2>';
	echo '<div class="illustration">';

	echo '<div class="headline">';
	echo '<div class="solicitor">';
	echo '<img src="'.$illxmldata->header->image_link.'" alt="'.$illxmldata->header->partner_name.' logo">';
	echo '<h2>'.$illxmldata->header->partner_name.'</h2>';
	echo '</div><!--.solicitor-->';

	echo '<div class="actions">';
	echo '<p class="desktop-tel">';
	echo '<form method="post"><input type="hidden" name="endpoint" value="instruct" /><input type="hidden" name="comparison" value="' . str_replace(" ", "",strtolower($illxmldata->illustration_summary->summary->summary_value)) . '" /><input type="hidden" name="quotationnumber" value="' . $_POST['quotationnumber'] . '" /><input type="hidden" name="partnerid" value="' . $_POST['partnerid'] . '" /><input type="submit" class="button instruct-button" value="Instruct" /></form>';
	echo '</p>';
	echo '</div><!--.actions-->';
	echo '</div><!--.headline-->';

	echo '<div class="summary">';
	echo '<h3>Quote Details</h3>';

	foreach ( $illxmldata->illustration_summary->summary as $summary )
	{
		echo '<ul>';
		echo '<li class="ill_desc">'.$summary->summary_description.'</li>';
		echo '<li class="ill_value">'.$summary->summary_value.'</li>';
		echo '</ul>';
	}

	echo '</div><!--.summary-->';

	echo '<div class="breakdown">';
	echo '<h3>Cost Breakdown</h3>';

	foreach ( $illxmldata->illustration_breakdown->breakdown as $breakdown )
	{
		echo '<ul>';
		echo '<li class="ill_desc">'.$breakdown->illustration_breakdown_description.'</li>';
		echo '<li class="ill_value">'.$breakdown->illustration_breakdown_value . '</li>';
		echo '</ul>';
	}

	echo '</div><!--.breakdown-->';

	echo '<div class="conditions">';
	echo '<h3>Conditions</h3>';
	echo $illxmldata->illustration_conditions->conditions;
	echo '</div><!--conditions-->';

	echo '</div><!--.illustration-->';
}
?>