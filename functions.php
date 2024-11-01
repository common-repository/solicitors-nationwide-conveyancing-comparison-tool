<?php

function getEndpoint($comparison)
{
	$endpoint = 'http://www.wconveyltd.co.uk/xmlfeed/';

	if ( $comparison == 'purchase' )
	{
		$endpoint .= 'purchase-xml.asp';
	}
	elseif ( $comparison == 'sale' )
	{
		$endpoint .= 'sale-xml.asp';
	}
	elseif ( $comparison == 're-mortgage' )
	{
		$endpoint .= 'remortgage-xml.asp';
	}
	elseif ( $comparison == 'saleandpurchase' )
	{
		$endpoint .= 'saleandpurchase-xml.asp';
	}
	elseif ( $comparison == 'toe' )
	{
		$endpoint .= 'toe-xml.asp';
	}
	elseif ( $comparison == 'inhousehip' )
	{
		$endpoint .= 'inhouse-hip-xml.asp';
	}
	elseif ( $comparison == 'illustration' )
	{
		$endpoint .= 'illustration-xml.asp';
	}
	elseif ( $comparison == 'instruct' )
	{
		$endpoint .= 'instruct.asp';
	}
	elseif ( $comparison == '' )
	{
		$endpoint .= '';
	}
	elseif ( $comparison == 'record' )
	{
		$endpoint = 'http://www.solicitorsnationwide.co.uk/wp-content/uploads/conveyancing-options/';
	}
	else
	{
		die("Invalid Comparison: $comparison");
	}

	return $endpoint;
}

function getCommonOutput()
{
	$commonOutputs = array(
		"uid" => "BE1575B7-0C6B-4E82-9966-25EA571379B57725A408-98B5-4F88-AB75-DCEF2616E61D",
		"ipaddress" => $_SERVER["REMOTE_ADDR"]
	);

	return $commonOutputs;
}

function getAffiliateOutput($recordType)
{
	$affiliateOutputs = array(
		"aff_email" => get_option('sncct_email'),
		"key" => get_option('sncct_key'),
		"recordType" => $recordType
	);

	return $affiliateOutputs;
}

function getQuoteOutput($comparison)
{
	$quoteOutputs = array(
		"affiliate" => "22197",
		"filename" => "test",
		"return_xml" => "y",
		"return_count" => "50",
		"islamic_conveyancing" => $_POST['islamic_conveyancing'],
		"reference" => get_option('sncct_key')
	);

	if( $comparison == 'purchase' )
	{
		$variableOutputs = array(
			"commission" => getCommission($comparison, $_POST['property_value']),
			"property_value" => $_POST['property_value'],
			"applicants" => $_POST['applicants'],
			"postcode" => $_POST['postcode'],
			"purchasetenure" => $_POST['purchasetenure'],
			"hip" => $_POST['hip'],
			"shared_ownership" => $_POST['shared_ownership'],
			"new_build_conveyancing" => $_POST['new_build_conveyancing'],
			"lender" => "1"
		);

		$quoteOutputs = array_merge($quoteOutputs, $variableOutputs);
	}
	elseif( $comparison == 'sale' )
	{
		$variableOutputs = array(
			"commission" => getCommission($comparison, $_POST['property_value']),
			"property_value" => $_POST['property_value'],
			"applicants" => $_POST['applicants'],
			"postcode" => $_POST['postcode'],
			"saletenure" => $_POST['saletenure']
		);

		$quoteOutputs = array_merge($quoteOutputs, $variableOutputs);
	}
	elseif( $comparison == 'saleandpurchase' )
	{
		$variableOutputs = array(
			"commission" => getCommission($comparison, $_POST['property_value1']) + getCommission($comparison, $_POST['property_value2']),
			"property_value1" => $_POST['property_value1'],
			"property_value2" => $_POST['property_value2'],
			"applicants" => $_POST['applicants'],
			"postcode1" => $_POST['postcode1'],
			"postcode2" => $_POST['postcode2'],
			"purchasetenure" => $_POST['purchasetenure'],
			"saletenure" => $_POST['saletenure'],
			"hip" => $_POST['hip'],
			"shared_ownership" => $_POST['shared_ownership'],
			"new_build_conveyancing" => $_POST['new_build_conveyancing'],
			"lender" => "0"
		);

		$quoteOutputs = array_merge($quoteOutputs, $variableOutputs);
	}
	elseif( $comparison == 're-mortgage' )
	{
		$variableOutputs = array(
			"commission" => getCommission($comparison, $_POST['property_value']),
			"property_value" => $_POST['property_value'],
			"applicants" => $_POST['applicants'],
			"postcode" => $_POST['postcode'],
			"remortgagetenure" => $_POST['remortgagetenure'],
			"lender" => "0"
		);

		$quoteOutputs = array_merge($quoteOutputs, $variableOutputs);
	}

	return $quoteOutputs;
}

function getIllustrationOutput($quotationnumber, $partnerid)
{
	$IllustrationInputs = array(
			"quotationnumber" => $quotationnumber,
			"partnerid" => $partnerid,
			"filename" => str_replace(":","-",$quotationnumber)."-".$partnerid.".xml"
	);

	return $IllustrationInputs;
}

function getInstructOutput($comparison)
{
	$instructOutputs = array(
		"instruct" => "instruct",
		"instructiontime" => gettimeofday(true),
		"instruction_form" => "w",
		"quote_page" => get_option('sncct_quote_page'),
		"send_email" => "y",
		"sub_affiliate" => get_option('sncct_key'),
		"personal_reference" => get_option('sncct_key'),
		"quotationnumber" => $_POST['quotationnumber'],
		"partnerid" => $_POST['partnerid'],
		"title1" => $_POST['title1'],
		"title2" => $_POST['title2'],
		"firstname1" => $_POST['firstname1'],
		"firstname2" => $_POST['firstname2'],
		"lastname1" => $_POST['lastname1'],
		"lastname2" => $_POST['lastname2'],
		"add1" => $_POST['add1'],
		"add2" => $_POST['add2'],
		"add3" => $_POST['add3'],
		"add4" => $_POST['add4'],
		"postcode" => $_POST['postcode'],
		"hometel" => $_POST['hometel'],
		"mobiletel" => $_POST['mobiletel'],
		"email" => $_POST['email'],
		"freetext" => $_POST['freetext']
	);

	if( $comparison == 'purchase' )
	{
		$variableOutputs = array(
			"purchaseadd1" => $_POST['purchaseadd1'],
			"purchaseadd2" => $_POST['purchaseadd2'],
			"purchaseadd3" => $_POST['purchaseadd3'],
			"purchaseadd4" => $_POST['purchaseadd4'],
			"purchasepostcode" => $_POST['purchasepostcode']
		);

		$instructOutputs = array_merge($instructOutputs, $variableOutputs);
	}
	elseif( $comparison == 'sale' )
	{
		$variableOutputs = array(
			"saleadd1" => $_POST['saleadd1'],
			"saleadd2" => $_POST['saleadd2'],
			"saleadd3" => $_POST['saleadd3'],
			"saleadd4" => $_POST['saleadd4'],
			"salepostcode" => $_POST['salepostcode']
		);

		$instructOutputs = array_merge($instructOutputs, $variableOutputs);
	}
	elseif( $comparison == 'saleandpurchase' )
	{
		$variableOutputs = array(
			"purchaseadd1" => $_POST['purchaseadd1'],
			"purchaseadd2" => $_POST['purchaseadd2'],
			"purchaseadd3" => $_POST['purchaseadd3'],
			"purchaseadd4" => $_POST['purchaseadd4'],
			"purchasepostcode" => $_POST['purchasepostcode'],
			"saleadd1" => $_POST['saleadd1'],
			"saleadd2" => $_POST['saleadd2'],
			"saleadd3" => $_POST['saleadd3'],
			"saleadd4" => $_POST['saleadd4'],
			"salepostcode" => $_POST['salepostcode']
		);

		$instructOutputs = array_merge($instructOutputs, $variableOutputs);
	}
	elseif( $comparison == 're-mortgage' )
	{
		$variableOutputs = array(
			"remortgageadd1" => $_POST['remortgageadd1'],
			"remortgageadd2" => $_POST['remortgageadd2'],
			"remortgageadd3" => $_POST['remortgageadd3'],
			"remortgageadd4" => $_POST['remortgageadd4'],
			"remortgagepostcode" => $_POST['remortgagepostcode']
		);

		$instructOutputs = array_merge($instructOutputs, $variableOutputs);
	}

	return $instructOutputs;
}

function getCommission($comparison, $propertyValue)
{
	if ( $comparison == 'purchase' )
	{
		$a1 = array (1, 5, 9, 13);
	}
	else if ( $comparison == 'sale' )
	{
		$a1 = array (2, 6, 10, 14);
	}
	else if ( $comparison == 'saleandpurchase' )
	{
		$a1 = array (3, 7, 11, 15);
	}
	else
	{
		$a1 = array (4, 8, 12, 16);
	}

	if ( $propertyValue <= 125000 )
	{
		$a2 = array(1, 2, 3, 4);
	}
	else if ( $propertyValue > 125000 AND $propertyValue <= 250000 )
	{
		$a2 = array(5, 6, 7, 8);
	}
	else if ( $propertyValue > 250000 AND $propertyValue <= 500000 )
	{
		$a2 = array(9, 10, 11, 12);
	}
	else
	{
		$a2 = array(13, 14, 15, 16);
	}

	$cKey = array_intersect($a1, $a2);

	foreach ( $cKey as $k => $v )
	{
		$cKey = $v;
	}

	if ( get_option('sncct_commission_'.$cKey) == 0 )
	{
		$commission = $cKey;
	}
	else
	{
		$commission = get_option('sncct_commission_'.$cKey)*2;
	}

	return $commission;

}

function returnInput($inputs, $comparison)
{
	foreach ( $inputs as $input )
	{
		if ( $input[2] != 'hidden' AND $input[2] != 'fieldset' )
		{
			echo '<div class="bundle">';
			echo '<label>'.$input[0].'</label>';
		}

		if ( $input[2] == 'fnumber' OR $input[2] == 'ftext' OR $input[2] == 'email' )
		{
			echo '<input type="text" name="'.$input[1].'" ';
			if ( isset ( $_POST[$input[1]] ) )
			{
				echo 'value="'.$_POST[$input[1]].'" ';
			}
			echo '/>';
			echo '</div>';
		}
		elseif ( $input[2] == 'lnumber' OR $input[2] == 'ltext' )
		{
			echo '<select name="'.$input[1].'">';

			if ( $input[2] == 'lnumber' )
			{
				$i = $input[3][0];

				while ( $i <= $input[3][1] )
				{
					echo '<option value="'.$i.'"';
					if ( isset ( $_POST[$input[1]] ) AND $_POST[$input[1]] == $i )
					{
						echo ' selected';
					}
					echo '>'.$i.'</option>';
					$i++;
				}
			}
			else
			{
				foreach ( $input[3] as $value )
				{
					echo '<option value="'.$value[0].'" ';
					if ( isset ( $_POST[$input[1]] ) )
					{
						if ( $_POST[$input[1]] == $value[0] )
						{
							echo 'selected';
						}
					}
					else
					{
						echo $value[2];
					}
					echo '>'.$value[1].'</option>';
				}
			}

			echo '</select>';
			echo '</div>';
		}
		elseif ( $input[2] == 'xml' )
		{
			echo '<input type="hidden" name="'.$input[1].'" value="'.$input[3].'">';
			echo '</div>';
		}
		elseif ( $input[2] == 'ftextarea' )
		{
			echo '<textarea name="'.$input[1].'">';

			if ( isset ( $_POST[$input[1]] ) )
			{
				echo $_POST[$input[1]];
			}
			echo '</textarea>';
			echo '</div>';
		}
		elseif ( $input[2] == 'fieldset' )
		{
			if ( $input[1] == 'start' )
			{
				echo '<fieldset>';
				echo '<legend>' . $input[0] . '</legend>';
			}
			else
			{
				echo '</fieldset>';
			}
		}
		else
		{
			echo '<input type="hidden" name="'.$input[1].'" value="'.$input[3].'">';
		}
	}

	if ( count($inputs) != 0 )
	{
		echo '<input type="hidden" name="endpoint" value="'.$comparison.'" />';
		echo '<input type="submit" class="" value="';
		if ( isset ( $_POST['endpoint'] ) AND $_POST['endpoint'] == 'instruct' )
		{
			echo 'Instruct';
		}
		else
		{
			echo 'Get Quotes';
		}
		echo '" />';
	}
}
?>