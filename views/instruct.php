<?php
function instruct($xmldata)
{
	if ( $xmldata == 'completed' )
	{
		echo '<h2>Your instruction has been placed</h2>';

		echo '<p>You will shortly receive an email from your solicitor explaining the next steps and how to get in touch with them.</p>';

		echo '<p>Thank you for using '.get_bloginfo().' for your conveyancing needs.</p>';
	}
	else
	{
		echo '<h2>Instruction Unsuccessful</h2>';

		echo '<p>There was a problem submitting your instruction.  Please try again or contact us with details of your problem.</p>';
	}
}
?>