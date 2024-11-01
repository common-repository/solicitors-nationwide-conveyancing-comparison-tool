<?php
function results($xmldata, $comparison)
{
	echo '<h2 class="result-count">'.count($xmldata->quote).' Quotes Retrieved</h2>';

	echo '<ol id="results-rows">';
	echo '<li class="header-holder">';
	echo '<ul class="results-header">';
	echo '<li class="sol-name">Solicitor Firm</li>';
	echo '<li>Feedback</li>';
	echo '<li>Total Cost</li>';
	echo '<li>Solicitors Cost</li>';
	echo '<li>Disbursments Cost</li>';
	echo '<li></li>';
	echo '</ul>';
	echo '</li>';
	foreach($xmldata->quote as $quote)
	{
		if ( $quote->feedback_total_count != 0 )
		{
			$fb_score = $quote->feedback_total_positive_count / $quote->feedback_total_count;
		}
		else
		{
			$fb_score = 0;
		}

		echo '<li class="conveyancing">';
		echo '<ul class="results-table">';
		echo '<li class="sol-name">';
		echo '<dfn>Solicitor Firm</dfn>';
		echo '<h3>' . $quote->solicitor_firm . '</h3>';
		echo '<p>within ' . $quote->distance . ' miles</p>';
		echo '</li>';
		echo '<li class="key">';
		echo '<dfn>Feedback</dfn>';
		echo '<h3>' . round($fb_score * 100) . '%<br/>Positive</h3>';
		echo '<form><input type="button" class="" onclick="open_win(' . $quote->partnerid . ')" value="Comments"></form>';
		echo '</li>';
		echo '<li class="headline">';
		echo '<dfn>Total Cost</dfn>';
		echo '<h2>' . $quote->total_costs . '</h2>';
		echo '</li>';
		echo '<li class="key">';
		echo '<dfn>Solicitors cost</dfn>';
		echo $quote->conveyancing_costs;
		echo '</li>';
		echo '<li class="key">';
		echo '<dfn>Disbursement Cost</dfn>';
		echo $quote->disbursment_costs;
		echo '</li>';
		echo '<li class="actions">';
		echo '<p>';
		echo '<form method="post"><input type="hidden" name="endpoint" value="illustration" /><input type="hidden" name="quotationnumber" value="' . $quote->quotationnumber . '" /><input type="hidden" name="partnerid" value="' . $quote->partnerid . '" /><input type="submit" class="" value="Illustration" /></form>';
		echo '</p>';
		echo '<p class="desktop-tel">';
		echo '<form method="post"><input type="hidden" name="endpoint" value="instruct" /><input type="hidden" name="comparison" value="' . $comparison . '" /><input type="hidden" name="quotationnumber" value="' . $quote->quotationnumber . '" /><input type="hidden" name="partnerid" value="' . $quote->partnerid . '" /><input type="submit" class="" value="Instruct" /></form>';
		echo '</p>';
		echo '</li>';
		echo '</ul>';
		echo '<div class="slider-outer">';
		echo '<div class="more-details"></div>';
		echo '</div>';
		echo '<div class="additional-text">';
		echo '</div>';
		echo '</li>';
	}
	echo '</ol>';
}
?>