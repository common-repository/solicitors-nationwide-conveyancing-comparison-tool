<?php

function sncct()
{
	require_once('classWebservice.php');
	require_once('functions.php');

	if( !isset ( $_POST['process'] ) )
	{
		if ( isset ( $_POST['endpoint'] ) )
		{
			require_once('getInput.php');

			$quoteInput = array(
				'purchase',
				'sale',
				'saleandpurchase',
				're-mortgage',
				'toe',
				'inhousehip'
			);

			if( in_array ( $_POST['endpoint'], $quoteInput ) )
			{
				require_once('views/results.php');

				$Url = getEndpoint($_POST['endpoint']);

				$Service = new Webservice($Url, "POST", "UTF-8");

				$Params = array_merge(getCommonOutput(), getQuoteOutput($_POST['endpoint']));

				flush();

				$Response = $Service->SendRequest($Params);

				$xmlString = $Response["Body"];

				$xmldata = simplexml_load_string($xmlString);

				echo '<form method="post">';
				echo '<div class="input">';

				echo '<div id="output">';

				quoteInput($_POST['endpoint']);

				echo '</div>';

				echo '<div><!--.input-->';
				echo '</form>';

				results($xmldata, $_POST['endpoint']);

				$Service = new Webservice(getEndpoint('record'), "POST", "UTF-8");

				$qn = array(
					"quotationnumber" => $xmldata->header->quotation_number
				);

				$recordParams = array_merge(getAffiliateOutput('quote'), $qn, $Params);

				flush();

				$Response = $Service->SendRequest($recordParams);
			}

			if( $_POST['endpoint'] == 'instruct' )
			{
				echo '<div id="output">';
				echo '<form method="post">';

				getInstructInput($_POST['quotationnumber'], $_POST['partnerid'], $_POST['comparison']);

				echo '<input type="hidden" name="process" value="instruct" />';
				echo '</form>';
				echo '</div>';
			}

			if( $_POST['endpoint'] == 'illustration' )
			{
				$Service = new Webservice(getEndpoint('record'), "POST", "UTF-8");

				$Params = array_merge(getCommonOutput(), getIllustrationOutput($_POST['quotationnumber'], $_POST['partnerid']));

				$recordParams = array_merge(getAffiliateOutput('illustration'), $Params);

				flush();

				$Response = $Service->SendRequest($recordParams);

				$xmlString = $Response["Body"];

				$xmldata = simplexml_load_string($xmlString);

				if ( $xmldata->status == 'completed' )
				{
					require_once('views/illustration.php');

					$Url = getEndpoint('illustration');

					$Service = new Webservice($Url, "POST", "UTF-8");

					flush();

					$Response = $Service->SendRequest($Params);

					$xmlString = $Response["Body"];

					$xmldata = simplexml_load_string($xmlString);

					if ( $xmldata == 'completed' )
					{
						$illxmldata = simplexml_load_file('http://wconveyltd.co.uk/xmlfeed/xmldata/'.str_replace(":","-",$_POST['quotationnumber']).'-'.$_POST['partnerid'].'.xml');
					}

					illustration($illxmldata);
				}
			}

		}
		elseif( !isset( $_GET['partnerId'] ) )	
		{
			echo '<div class="input">';
			echo '<form method="post">';
			echo '<select name="endpoint" onChange="getInput(\''.plugins_url().'\', this.value)">';

			$comparisons = array(
				'Select Conveyancing',
				'Purchase',
				'Sale',
				'Sale And Purchase',
				'Re-Mortgage'
			);

			foreach ( $comparisons as $comp )
			{
				echo '<option value="'.strtolower( str_replace( " ","",$comp ) ).'"';
				if( isset( $_POST['endpoint'] ) AND $_POST['endpoint'] != "" AND strtolower( str_replace( " ","",$comp ) ) == $_POST['endpoint'] )
				{
					echo ' selected';
				}
				echo '>'.$comp.'</option>';
			}

			echo '</select>';

			echo '<div id="output"></div>';
			echo '</form>';
			echo '<div><!--.input-->';
		}
		else
		{
			require_once('views/feedback.php');

			$xmldata = simplexml_load_file('http://wconveyltd.co.uk/xmlfeed/XMLdatastatic/feedback-'.$_GET["partnerId"].'.xml');

			feedback($xmldata);
		}
	}
	else
	{
		$Service = new Webservice(getEndpoint('record'), "POST", "UTF-8");

		$Params = array_merge(getCommonOutput(), getInstructOutput($_POST['endpoint']));

		$recordParams = array_merge(getAffiliateOutput('instruct'), $Params);

		flush();

		$Response = $Service->SendRequest($recordParams);

		$xmlString = $Response["Body"];

		$xmldata = simplexml_load_string($xmlString);

		if ( $xmldata->status == 'completed' )
		{
			require_once('views/instruct.php');

			$Url = getEndpoint($_POST['process']);

			$Service = new Webservice($Url, "POST", "UTF-8");

			flush();
			$Response = $Service->SendRequest($Params);

			$xmlString = $Response["Body"];

			$xmldata = simplexml_load_string($xmlString);

			instruct($xmldata);
		}
	}
}

/* Add stylesheet and javascript */
wp_enqueue_style( 'sn-conveyancing-tool', plugins_url( 'solicitors-nationwide-conveyancing-comparison-tool/css/style.css' ) );
wp_enqueue_script( 'sncct-js', plugins_url( 'solicitors-nationwide-conveyancing-comparison-tool/js/sncct.js' ) );

/* Create Shortcode */
add_shortcode('show_conveyancing', 'sncct');