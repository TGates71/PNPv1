<?php
/************************************************************************/
/* Additional code clean-up, performance enhancements, and W3C and      */
/* XHTML compliance fixes by Raven and Montego.                         */
/************************************************************************/
//ERROR Page Controller
if (!defined('MODULE_FILE')) {
	die('You can\'t access this file directly...');
}

// BEGIN: Added in v2.40.00 - Mantis Issue 0001043
$index = 0;
if (!defined('INDEX_FILE')) define('INDEX_FILE', true); // Set to FALSE to hide right blocks
if (defined('INDEX_FILE') AND INDEX_FILE===true) {
// auto set right blocks for pre patch 3.1 compatibility
	$index = 1;
}
// END: Added in v2.40.00 - Mantis Issue 0001043

$allowedStatus = array(400,401,403,404,406,500);
if (isset($_SERVER['REDIRECT_STATUS']) AND in_array(htmlentities($_SERVER['REDIRECT_STATUS']),$allowedStatus)) {
	include_once((int) $_SERVER['REDIRECT_STATUS'].'.php');
	die();
}

/*
 * IMPLIED ELSE
 * Display a default error message
 */
require_once('mainfile.php');
$module_name = basename(dirname(__FILE__));
get_lang($module_name);
$pagetitle = '- ' . $module_name;
include_once('header.php');
/* Uncomment the following code for determining what $_SERVER array setiings are available for reporting */
/*
foreach ($_SERVER as $key => $value) {
	echo $key.' = '.$value.'<br />';
}
*/

$http_referer = isset($_SERVER['HTTP_REFERER']) ? '<br />'._ED_REFEREDFROM_UNKNOWN . htmlentities($_SERVER['HTTP_REFERER']) : '<br />'._ED_REFEREDFROM_UNKNOWN._ED_UNKNOWN;
$remote_addr = isset($_SERVER['REMOTE_ADDR']) ? '<br />'._ED_YOURIP_UNKNOWN . htmlentities($_SERVER['REMOTE_ADDR']) : '<br />'._ED_YOURIP_UNKNOWN._ED_UNKNOWN;
$request_uri = isset($_SERVER['REQUEST_URI']) ? '<br />'._ED_PAGEREQUESTED_UNKNOWN . htmlentities($_SERVER['REQUEST_URI']) : '<br />'._ED_PAGEREQUESTED_UNKNOWN._ED_UNKNOWN;
$http_user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? '<br />'._ED_AGENT_UNKNOWN . htmlentities($_SERVER['HTTP_USER_AGENT']) : '<br />'._ED_AGENT_UNKNOWN._ED_UNKNOWN;
$redirect_status = isset($_SERVER['REDIRECT_STATUS']) ? '<br />'._ED_REDIRECTSTATUS_UNKNOWN . htmlentities($_SERVER['REDIRECT_STATUS']) : '<br />'._ED_REDIRECTSTATUS_UNKNOWN._ED_UNKNOWN;
$edBoxTitle = _ED_BOXTITLE_UNKNOWN;
$edBoxShortDesc = _ED_BOXSHORTDESC_UNKNOWN;
$edHint = _ED_HINT;
$edHintText = _ED_HINTTEXT_UNKNOWN;

echo <<< ERRORPAGE
<br /><br />
      <table width="500" border="0" cellspacing="0" cellpadding="0"
      align="center">

         <tr bgcolor="#0000ff">
            <td>
               <table width="500" border="0" cellspacing="1"
               cellpadding="5" align="center">
                  <tr bgcolor="#6300ff">
                     <td colspan="2">
                        <div class="text-center thick" style="color: #FFFFFF;">$edBoxTitle</div>
                     </td>
                  </tr>

                  <tr>
                     <td bgcolor="#FFFFFF" colspan="2" valign=
                     "middle">
                        <table width="100%">
                           <tr>
                              <td width="40">
                                 <img src="http://{$_SERVER['HTTP_HOST']}/modules/$module_name/images/warning.gif"
                                 width="40" height="40" align=
                                 "middle" alt="" />
                              </td>
                              <td>
                                 <div class="text-center">
												<span class='thick'>$edBoxShortDesc</span>
												<br />
												<em>$edHint $edHintText</em>
												<br />
											   $http_referer
											   $remote_addr
											   $request_uri
												$http_user_agent
											   $redirect_status
												<br />
											</div>
                              </td>
                           </tr>
                        </table>
                     </td>

                  </tr>
               </table>
            </td>
         </tr>
      </table>
ERRORPAGE;
include_once('footer.php');
die();
?>
