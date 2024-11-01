<?php
/**
 * Plugin Name: Solicitors Nationwide Conveyancing Comparison Tool
 * Plugin URI: http://solicitorsnationwide.co.uk/sncct
 * Description: Compare conveyancing costs for UK property transactions
 * Version: 1.0.5
 * Author: Carl Maher
 * Author URI: http://www.cmonlineservices.co.uk
 * License: GPL2
 */

/*  Copyright 2013  Carl Maher  (email : plugin@cmonlineservices.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'sncct_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'sncct_remove' );

/* Creates new database fields*/
function sncct_install()
{
	add_option('sncct_key', '', '', 'yes');
	add_option('sncct_email', '', '', 'yes');
	add_option('sncct_commission_1', '25', '', 'yes');
	add_option('sncct_commission_2', '25', '', 'yes');
	add_option('sncct_commission_3', '25', '', 'yes');
	add_option('sncct_commission_4', '25', '', 'yes');
	add_option('sncct_commission_5', '25', '', 'yes');
	add_option('sncct_commission_6', '25', '', 'yes');
	add_option('sncct_commission_7', '25', '', 'yes');
	add_option('sncct_commission_8', '25', '', 'yes');
	add_option('sncct_commission_9', '25', '', 'yes');
	add_option('sncct_commission_10', '25', '', 'yes');
	add_option('sncct_commission_11', '25', '', 'yes');
	add_option('sncct_commission_12', '25', '', 'yes');
	add_option('sncct_commission_13', '25', '', 'yes');
	add_option('sncct_commission_14', '25', '', 'yes');
	add_option('sncct_commission_15', '25', '', 'yes');
	add_option('sncct_commission_16', '25', '', 'yes');
	add_option('sncct_quote_page', '', '', 'yes');
}

/* Deletes the database fields */
function sncct_remove()
{
	delete_option('sncct_key');
	delete_option('sncct_email');
	delete_option('sncct_commission_1');
	delete_option('sncct_commission_2');
	delete_option('sncct_commission_3');
	delete_option('sncct_commission_4');
	delete_option('sncct_commission_5');
	delete_option('sncct_commission_6');
	delete_option('sncct_commission_7');
	delete_option('sncct_commission_8');
	delete_option('sncct_commission_9');
	delete_option('sncct_commission_10');
	delete_option('sncct_commission_11');
	delete_option('sncct_commission_12');
	delete_option('sncct_commission_13');
	delete_option('sncct_commission_14');
	delete_option('sncct_commission_15');
	delete_option('sncct_commission_16');
	delete_option('sncct_quote_page');
}

/* links additional plugin scripts */
include_once('sncct-backend.php');
include_once('sncct.php');
?>