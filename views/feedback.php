<?php
function feedback($xmldata)
{
	echo '<h1>'.$xmldata->header->practice_name.'</h1>';

	echo '<ol id="results-rows">';

	foreach($xmldata->individual as $feedback)
	{
		echo '<li class="feedback">';
		echo '<ul class="results-table">';
		echo '<li class="fb_score">'.$feedback->feedback_score.'</li>';
		echo '<li class="fb_comment">'.$feedback->feedback_comments.'</li>';
		echo '</ul>';
		echo '<div class="fb_details">';
		echo '<p>';
		echo 'Feedback left by '.$feedback->feedback_status.' on '.$feedback->feedback_date;
		echo '</p>';
		echo '</div>';
		echo '</li>';
	}

	echo '</ol>';
}
?>