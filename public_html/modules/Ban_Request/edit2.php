<?php
/********************************************************/
/* Ban Request Addin                                    */
/* By: Chiefbutz (chiefbutz@hotmail.com)                */
/* http://chiefbutz.rules.it                            */
/* Copyright � 2000-2004 by Chiefbutz                   */
/************************************************************************/
/* Platinum Nuke Pro: Expect to be impressed                  COPYRIGHT */
/*                                                                      */
/* Copyright (c) 2004 - 2006 by http://www.techgfx.com                  */
/*     Techgfx - Graeme Allan                       (goose@techgfx.com) */
/*                                                                      */
/* Copyright (c) 2004 - 2006 by http://www.nukeplanet.com               */
/*     Loki / Teknerd - Scott Partee           (loki@nukeplanet.com)    */
/*                                                                      */
/* Copyright (c) 2007 - 2017 by http://www.platinumnukepro.com          */
/*                                                                      */
/* Refer to platinumnukepro.com for detailed information on this CMS    */
/*******************************************************************************/
/* This file is part of the PlatinumNukePro CMS - http://platinumnukepro.com   */
/*                                                                             */
/* This program is free software; you can redistribute it and/or               */
/* modify it under the terms of the GNU General Public License                 */
/* as published by the Free Software Foundation; either version 2              */
/* of the License, or any later version.                                       */
/*                                                                             */
/* This program is distributed in the hope that it will be useful,             */
/* but WITHOUT ANY WARRANTY; without even the implied warranty of              */
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the               */
/* GNU General Public License for more details.                                */
/*                                                                             */
/* You should have received a copy of the GNU General Public License           */
/* along with this program; if not, write to the Free Software                 */
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA. */
/*******************************************************************************/
/*                                                                      */
/* Multilanguage modifications by:                                      */
/*                                                                      */
/*     MrFluffy - Axel Conrads                 (axel@conrads-berlin.de) */
/*                                                                      */
/************************************************************************/

@require_once("mainfile.php");
$module_name = basename(dirname(__FILE__));
get_lang($module_name);
$index=1;
if(is_admin($admin)) {
    if(!is_array($admin)) {
        $adm = base64_decode($admin);
        $adm = explode(":", $adm);
        $aname = "$adm[0]";
    } else {
        $aname = "$admin[0]";
    }
}

$adm_info = $db->sql_fetchrow($db->sql_query("SELECT * FROM ".$prefix."_authors WHERE aid='$aname'"));
if ($adm_info['radminsuper']==1) {
// Header
@include_once("header.php");
// Show admin header
OpenTable();
echo "<p align='center'><strong><u><font size='5'>"._BR_ADMINTITLE."</font></u></strong></p>";
CloseTable();
// End Admin header

// Menu
OpenTable();
echo "<table width=\100%\">";
echo "  <tr align='left'>";
echo "		<td width='100%'><a href='modules.php?name=".$module_name."&amp;file=view'>"._BR_VIEWBANS."</a></td>";
echo "  </tr>";
echo "  <tr align='left'>";
echo "		<td width='100%'><a href='modules.php?name=".$module_name."&amp;file=appr'>"._BR_APPROVEREQ."</a></td>";
echo "  </tr>";
echo "  <tr align='left'>";
echo "		<td width='100%'><a href='modules.php?name=".$module_name."&amp;file=edit'>"._BR_EDITBANS."</a></td>";
echo "  </tr>";
echo "</table>";
CloseTable();
// End Menu
// Content
OpenTable();
echo "<table width=\100%\">";
echo "  <tr>";
echo "    <td width='100%'>";
$resultbans = $db->sql_query("SELECT user_name, active, reason, id FROM ".$prefix."_banreq Where id=".$id."");
list($user_name, $active, $reason, $id) = $db->sql_fetchrow($resultbans);
echo "<form method='POST' action='modules.php?name=".$module_name."&amp;file=edit-sub'>";
echo "  <p>"._BR_NAMEIP.": <input type='text' name='username' size='20' value='".$user_name."'><br />";
echo "  "._BR_REASON.":<br />";
echo "  <textarea rows='2' name='reason' cols='42'>".$reason."</textarea><br />";
echo "<select size='1' name='active'>";
If ($active == 'No') {
	echo "<option value=\"Yes\">"._YES."</option>";
	echo "<option value=\"No\" selected>"._NO."</option";
} Else {
	echo "<option value=\"Yes\" selected>"._YES."</option>";
	echo "<option value=\"No\">"._NO."</option";
}
echo "  </select><br />";
echo "  <input type='hidden' name='id' value='".$id."'>";
echo "  <input type='submit' value='"._BR_SUBMIT."'>  <a href='modules.php?name=".$module_name."&amp;file=del-sub&amp;id=".$id."'>"._BR_DELETE."</a></p>";
echo "</form>";
echo " </td></tr>";
echo "</table>";
CloseTable();
// Footer
@include_once('footer.php');
}

?>