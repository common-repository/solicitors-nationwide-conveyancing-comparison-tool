<?php require_once('functions.php'); ?>

<?php
function quoteInput($comparison)
{
	$tenure = array(
			array(
				'l',
				'Leasehold',
				''),
			array(
				'f',
				'Freehold',
				'selected')
		);

	$yn = array(
		array(
			'y',
			'Yes',
			''),
		array(
			'n',
			'No',
			'selected')
		);

	$lenders = array(
		array(
			'0',
			
'No Mortgage',
			
''),
		array(
			'1',
			
'Not Known',
			
''),
		array(
			'2',
			
'',
			
'selected'),
		array(
			'127',
			
'Accord',
			
''),
		array(
			'8',
			
'Ahli United Bank',
			
''),
		array(
			'124',
			
'Aldermore Mortgages',
			
''),
		array(
			'10',
			
'Amber',
			
''),
		array(
			'128',
			
'Bank Of China',
			
''),
		array(
			'11',
			
'Bank of Ireland',

			''),
		array(
			'12',
			
'Bank of Scotland',
			
''),
		array(
			'13',
			
'Barclays',
			
''),
		array(
			'14',
			
'Barnsley',
			
''),
		array(
			'126',
			
'Bath Building Society',

			''),
		array(
			'15',
			
'Bath Investment',
			
''),
		array(
			'16',
			
'Beverley',

			''),
		array(
			'17',
			
'Birmingham Midshires',

			''),
		array(
			'19',
			
'Bristol West',

			''),
		array(
			'20',
			
'Britannia',
			
''),
		array(
			'21',
			
'Buckinghamshire',

			''),
		array(
			'22',

			'Cambridge',
			
''),
		array(
			'24',
			
'Capital',

			''),
		array(
			'23',
			
'Catholic Building Society',

			''),
		array(
			'25',
			
'Chelsea',
			
''),
		array(
			'26',
			
'Cheltenham and Gloucester',

			''),
		array(
			'27',
			
'Chesham',

			''),
		array(
			'28',

			'Cheshire',

			''),
		array(
			'29',

			'Chorley District',
			
''),
		array(
			'30',
			
'CIS',
			
''),
		array(
			'31',
			
'Clydesdale',

			''),
		array(
			'32',
			
'Co-operative',

			''),
		array(
			'33',
			
'Coventry',

			''),
		array(
			'34',
			
'Cumberland',

			''),
		array(
			'35',
			
'Darlington',

			''),
		array(
			'36',
			
'Derbyshire',

			''),
		array(
			'37',
			
'Direct Line',

			''),
		array(
			'38',
			
'Dudley',
			
''),
		array(
			'39',
			
'Dunfermline',

			''),
		array(
			'40',

			'Earl Shilton',
			
''),
		array(
			'41',
			
'Ecology',

			''),
		array(
			'42',
			
'Egg',
			
''),
		array(
			'43',
			
'First Active',
			
''),
		array(
			'44',

			'First Direct',
			
''),
		array(
			'45',
			
'First National',
			
''),
		array(
			'46',
			
'First Trust Bank',

			''),
		array(
			'47',

			'Furness',
			
''),
		array(
			'48',
			
'Future Mortgages',

			''),
		array(
			'129',
			
'G E Money',

			''),
		array(
			'49',

			'Giraffe',
			''),
		array(
			'50',

			'GMAC RFC',

			''),
		array(
			'51',

			'Halifax',

			''),
		array(
			'52',
			
'Hanley Economic',
			
''),
		array(
			'53',

			'Harpenden Building Society',

			''),
		array(
			'54',

			'Heritable Bank',

			''),
		array(
			'55',
			
'Hinckley Rugby',

			''),
		array(
			'56',

			'Holmesdale',

			''),
		array(
			'57',
			
'HSBC',

			''),
		array(
			'58',
			
'iGroup',
			
''),
		array(
			'59',
			
'ING Direct',
			
''),
		array(
			'60',

			'Intelligent Finance',
			
''),
		array(
			'61',
			
'Ipswich',
			
''),
		array(
			'62',
			
'Irish Permanent',
			
''),
		array(
			'63',

			'Kensington Mortgages',

			''),
		array(
			'64',
			
'Kent Reliance',

			''),
		array(
			'65',
			
'Lambeth',
			
''),
		array(
			'66',
			
'Leeds Building Society',

			''),
		array(
			'67',

			'Leek United',

			''),
		array(
			'68',
			
'Legal and General',

			''),
		array(
			'69',
			
'Lloyds TSB',

			''),
		array(
			'70',
			
'London Mortgage Company',

			''),
		array(
			'71',
			
'Loughborough',

			''),
		array(
			'72',

			'Manchester Building Society',
			
''),
		array(
			'73',
			
'Mansfield',

			''),
		array(
			'74',
			
'Market Harborough',

			''),
		array(
			'75',
			
'Marsden',

			''),
		array(
			'76',

			'Melton Mowbray',

			''),
		array(
			'77',
			
'Mercantile',

			''),
		array(
			'78',
			
'Monmouthshire',
			
''),
		array(
			'79',
			
'Mortgage Express',

			''),
		array(
			'80',

			'Mortgage Lender',
			
''),
		array(
			'81',

			'Mortgage Trust',

			''),
		array(
			'82',

			'Mortgage Works',

			''),
		array(
			'83',

			'Mortgages PLC',

			''),
		array(
			'84',
			
'National Counties',

			''),
		array(
			'85',

			'Nationwide',

			''),
		array(
			'86',

			'Natwest',

			''),
		array(
			'87',

			'Newbury',
			
''),
		array(
			'88',
			
'Newcastle',

			''),
		array(
			'89',
			
'Northern Bank',

			''),
		array(
			'90',
			
'Northern Rock',

			''),
		array(
			'91',
			
'Norwich Peterborough',

			''),
		array(
			'92',
			
'Nottingham',

			''),
		array(
			'93',
			
'One Account',

			''),
		array(
			'94',

			'Paragon Mortgages',
			
''),
		array(
			'95',
			
'Penrith',

			''),
		array(
			'96',

			'Pink Home Loans',

			''),
		array(
			'125',
			
'Platform',

			''),
		array(
			'130',
			
'Precise Mortgages',

			''),
		array(
			'98',
			
'Principality',

			''),
		array(
			'99',
			
'Progressive',

			''),
		array(
			'100',
			
'Prudential',

			''),
		array(
			'101',
			
'Royal Bank of Scotland',

			''),
		array(
			'102',
			
'Saffron Walden',

			''),
		array(
			'103',
			
'Scarborough Building Society',

			''),
		array(
			'104',
			
'Scottish Building Society',

			''),
		array(
			'105',
			
'Scottish Widows',

			''),
		array(
			'106',

			'Shepshed Building Society',

			''),
		array(
			'107',
			
'Skipton',

			''),
		array(
			'108',
			
'Smile',

			''),
		array(
			'109',

			'Southern Pacific',

			''),
		array(
			'110',

			'Stafford Railway',

			''),
		array(
			'111',
			
'Standard Life',

			''),
		array(
			'112',
			
'Stroud Swindon',

			''),
		array(
			'113',
			
'Swansea',

			''),
		array(
			'114',
			
'Teachers',

			''),
		array(
			'115',

			'Tesco',

			''),
		array(
			'97',
			
'The Post Office',

			''),
		array(
			'116',
			
'Tipton and Coseley Building Society',
			
''),
		array(
			'117',

			'Ulster Bank',

			''),
		array(
			'118',

			'Universal Building Society',
			
''),
		array(
			'119',

			'Vernon Building Society',

			''),
		array(
			'131',
			
'Virgin Money',

			''),
		array(
			'120',
			
'West Bromwich',

			''),
		array(
			'121',
			
'Woolwich',

			''),
		array(
			'122',
			
'Yorkshire Bank',

			''),
		array(
			'123',

			'Yorkshire Building Society',
			
'')
		);


	if ($comparison == 'purchase')
	{
		$inputs = array(
			array(
				'Property Value',
				'property_value',
				'fnumber',
				array(
					'0',
					'100000000')
			),
			array(
				'Applicants',
				'applicants',
				'lnumber',
				array(
					'1',
					'4')
			),
			array(
				'Postcode',
				'postcode',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Purchase Tenure',
				'purchasetenure',
				'ltext',
				$tenure
			),
			array(
				'Islamic Conveyancing',
				'islamic_conveyancing',
				'ltext',
				$yn
			),
			array(
				'Shared Ownership',
				'shared_ownership',
				'ltext',
				$yn
			),
			array(
				'New Build Property',
				'new_build_conveyancing',
				'ltext',
				$yn
			),
			array(
				'Lender',
				'lender',
				'ltext',
				$lenders
			),
			array(
				'HIP',
				'hip',
				'hidden',
				'n'
			)
		);
	}
	elseif ( $comparison == 'sale' )
	{
		$inputs = array(
			array(
				'Property Value',
				'property_value',
				'fnumber',
				array(
					'0',
					'100000000')
			),
			array(
				'Applicants',
				'applicants',
				'lnumber',
				array(
					'1',
					'4')
			),
			array(
				'Postcode',
				'postcode',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Sale Tenure',
				'saletenure',
				'ltext',
				$tenure
			),
			array(
				'Islamic Conveyancing',
				'islamic_conveyancing',
				'ltext',
				$yn
			)
		);
	}
	elseif ( $comparison == 'saleandpurchase' )
	{
		$inputs = array(
			array(
				'Sale Property Value',
				'property_value1',
				'fnumber',
				array(
					'0',
					'100000000')
			),
			array(
				'Purchase Property Value',
				'property_value2',
				'fnumber',
				array(
					'0',
					'100000000')
			),
			array(
				'Sale Postcode',
				'postcode1',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Purchase Postcode',
				'postcode2',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Applicants',
				'applicants',
				'lnumber',
				array(
					'1',
					'4')
			),
			array(
				'Sale Tenure',
				'saletenure',
				'ltext',
				$tenure
			),
			array(
				'Purchase Tenure',
				'purchasetenure',
				'ltext',
				$tenure
			),
			array(
				'Islamic Conveyancing',
				'islamic_conveyancing',
				'ltext',
				$yn
			),
			array(
				'Shared Ownership',
				'shared_ownership',
				'ltext',
				$yn
			),
			array(
				'New Build Property',
				'new_build_conveyancing',
				'ltext',
				$yn
			),
			array(
				'Lender',
				'lender',
				'hidden',
				'1'
			),
			array(
				'HIP',
				'hip',
				'hidden',
				'n'
			)
		);
	}
	elseif ( $comparison == 're-mortgage' )
	{
		$inputs = array(
			array(
				'Property Value',
				'property_value',
				'fnumber',
				array(
					'0',
					'100000000')
			),
			array(
				'Applicants',
				'applicants',
				'lnumber',
				array(
					'1',
					'4')
			),
			array(
				'Postcode',
				'postcode',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Re-Mortgage Tenure',
				'remortgagetenure',
				'ltext',
				$tenure
			),
			array(
				'Transfer of Equity',
				'transfer_of_equity',
				'ltext',
				$yn
			),
			array(
				'Islamic Conveyancing',
				'islamic_conveyancing',
				'ltext',
				$yn
			),
			array(
				'Lender',
				'lender',
				'hidden',
				'1'
			)
		);
	}
	else
	{
		$inputs = array();
	}

	returnInput($inputs,$comparison);
}

function getInstructInput($quotationnumber, $partnerid, $comparison)
{
	$title = array(
			array(
				'Mr',
				'Mr',
				''
			),
			array(
				'Mrs',
				'Mrs',
				''
			),
			array(
				'Miss',
				'Miss',
				''
			),
			array(
				'Ms',
				'Ms',
				''
			),
			array(
				'Dr',
				'Dr',
				''
			)
		);

	$commonInputs = array(
		array(
			'First Applicant',
			'start',
			'fieldset',
			''
		),
		array(
			'Title',
			'title1',
			'ltext',
			$title
		),
		array(
			'First Name',
			'firstname1',
			'ftext',
			array(
				'',
				'')
		),
		array(
			'Last Name',
			'lastname1',
			'ftext',
			array(
				'',
				'')
		),
		array(
			'First Applicant',
			'end',
			'fieldset',
			''
		),
		array(
			'Second Applicant',
			'start',
			'fieldset',
			''
		),
		array(
			'Title',
			'title2',
			'ltext',
			$title
		),
		array(
			'First Name',
			'firstname2',
			'ftext',
			array(
				'',
				'')
		),
		array(
			'Last Name',
			'lastname2',
			'ftext',
			array(
				'',
				'')
		),
		array(
			'Second Applicant',
			'end',
			'fieldset',
			''
		),
		array(
			'Correspondence Details',
			'start',
			'fieldset',
			''
		),
		array(
			'Address Line 1',
			'add1',
			'ftext',
			array(
				'',
				'')
		),
		array(
			'Address Line 2',
			'add2',
			'ftext',
			array(
				'',
				'')
		),
		array(
			'Address Line 3',
			'add3',
			'ftext',
			array(
				'',
				'')
		),
		array(
			'Address Line 4',
			'add5',
			'ftext',
			array(
				'',
				'')
		),
		array(
			'Postcode',
			'postcode',
			'ftext',
			array(
				'',
				'')
		),
		array(
			'Home Telephone Number',
			'hometel',
			'fnumber',
			array(
				'',
				'')
		),
		array(
			'Mobile Telephone Number',
			'mobiletel',
			'fnumber',
			array(
				'',
				'')
		),
		array(
			'Email Address',
			'email',
			'email',
			array(
				'',
				'')
		),
		array(
			'Special Instructions/ Message to Solicitor',
			'freetext',
			'ftextarea',
			array(
				'',
				'')
		),
		array(
			'Correspondence Details',
			'end',
			'fieldset',
			''
		),
		array(
			'Instruct',
			'instruct',
			'hidden',
			'instruct'
		),
		array(
			'Quotation Number',
			'quotationnumber',
			'hidden',
			$quotationnumber
		),
		array(
			'Partner ID',
			'partnerid',
			'hidden',
			$partnerid
		)
	);

	if ($comparison == 'purchase')
	{
		$inputs = array(
			array(
				'Purchase Property Details',
				'start',
				'fieldset',
				''
			),
			array(
				'Address Line 1',
				'purchaseadd1',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Address Line 2',
				'purchaseadd2',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Town/City',
				'purchaseadd3',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'County',
				'purchaseadd4',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Postcode',
				'purchasepostcode',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Purchase Property Details',
				'end',
				'fieldset',
				''
			)
		);
	}
	elseif ( $comparison == 'sale' )
	{
		$inputs = array(
			array(
				'Sale Property Details',
				'start',
				'fieldset',
				''
			),
			array(
				'Address Line 1',
				'saleadd1',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Address Line 2',
				'saleadd2',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Town/City',
				'saleadd3',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'County',
				'saleadd4',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Postcode',
				'salepostcode',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Sale Property Details',
				'end',
				'fieldset',
				''
			)
		);
	}
	elseif ( $comparison == 'saleandpurchase' )
	{
		$inputs = array(
			array(
				'Purchase Property Details',
				'start',
				'fieldset',
				''
			),
			array(
				'Address Line 1',
				'purchaseadd1',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Address Line 2',
				'purchaseadd2',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Town/City',
				'purchaseadd3',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'County',
				'purchaseadd4',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Postcode',
				'purchasepostcode',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Purchase Property Details',
				'end',
				'fieldset',
				''
			),
			array(
				'Sale Property Details',
				'start',
				'fieldset',
				''
			),
			array(
				'Address Line 1',
				'saleadd1',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Address Line 2',
				'saleadd2',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Town/City',
				'saleadd3',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'County',
				'saleadd4',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Postcode',
				'salepostcode',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Sale Property Details',
				'end',
				'fieldset',
				''
			)
		);
	}
	elseif ( $comparison == 're-mortgage' )
	{
		$inputs = array(
			array(
				'Re-Mortgage Property Details',
				'start',
				'fieldset',
				''
			),
			array(
				'Address Line 1',
				'remortgageadd1',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Address Line 2',
				'remortgageadd2',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Town/City',
				'remortgageadd3',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'County',
				'remortgageadd4',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Postcode',
				'remortgagepostcode',
				'ftext',
				array(
					'',
					'')
			),
			array(
				'Re-mortgage Property Details',
				'end',
				'fieldset',
				''
			)
		);
	}
	else
	{
		$inputs = array();
	}

	$inputs = array_merge($commonInputs, $inputs);

	returnInput($inputs, $comparison);
}

// Select functions to run depending on AJAX call
if ( isset ( $_GET['function'] ) )
{
	if ( $_GET['function'] == 'quoteInput' )
	{
		quoteInput( $_GET['comparison'] );
	}
}
?>