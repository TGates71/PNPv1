<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright � 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/
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

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
$pagetitle = _AB_NUKESENTINEL.": "._AB_TRACKEDUSERS;
include_once("header.php");
OpenTable();
OpenMenu(_AB_TRACKEDUSERS);
mastermenu();
CarryMenu();
trackedmenu();
CloseMenu();
CloseTable();
echo '<br />'."\n";
OpenTable();
$tbcol = 5;
$perpage = $ab_config['track_perpage'];
if($perpage == 0) { $perpage = 25; }
if(!isset($min)) $min=0;
if(!isset($max)) $max=$min+$perpage;
if(!isset($column) or !$column or $column=="") $column = "username";
if(!isset($direction) or !$direction or $direction=="") $direction = "asc";
$totalselected = $db->sql_numrows($db->sql_query("SELECT `username`, MAX(`date`), COUNT(*) FROM `".$prefix."_nsnst_tracked_ips` GROUP BY 1"));
if($totalselected > 0) {
  // Page Sorting
  $selcolumn1 = $selcolumn2 = $selcolumn3 = $seldirection1 = $seldirection2= "";
  if($column == "date") { $selcolumn1 = ' selected="selected"'; }
  if($column == 4) { $selcolumn3 = ' selected="selected"'; }
  if($column == "username") { $selcolumn2 = ' selected="selected"'; }
  if($direction == "desc") { $seldirection2 = ' selected="selected"'; }
  if($direction == "asc") { $seldirection1 = ' selected="selected"'; }
  echo '<table summary="" width="100%" cellpadding="2" cellspacing="2" border="0">'."\n";
  echo '<tr>'."\n";
  echo '<td align="right" nowrap="nowrap">'."\n";
  echo '<form action="'.$admin_file.'.php?op=ABTrackedUsersList" method="post" style="padding: 0px; margin: 0px;">'."\n";
  echo '<input type="hidden" name="min" value="'.$min.'" />'."\n";
  echo '<strong>'._AB_SORT.':</strong> <select name="column">'."\n";
  echo '<option value="date"'.$selcolumn1.'>'._AB_DATE.'</option>'."\n";
  echo '<option value="username"'.$selcolumn2.'>'._AB_USERNAME.'</option>'."\n";
  echo '<option value="4"'.$selcolumn3.'>'._AB_HITS.'</option>'."\n";
  echo '</select> <select name="direction">'."\n";
  echo '<option value="asc"'.$seldirection1.'>'._AB_ASC.'</option>'."\n";
  echo '<option value="desc"'.$seldirection2.'>'._AB_DESC.'</option>'."\n";
  echo '</select> <input type="submit" value="'._AB_SORT.'" />'."\n";
  echo '</form>'."\n";
  echo '</td>'."\n";
  echo '</tr>'."\n";
  echo '</table>'."\n";
  // Page Sorting
  echo '<table summary="" width="100%" cellpadding="2" cellspacing="2" bgcolor="'.$bgcolor2.'" border="0">'."\n";
  echo '<tr bgcolor="'.$bgcolor2.'">'."\n";
  echo '<td><strong>'._AB_USERNAME.'</strong></td>'."\n";
  echo '<td align="center"><strong>'._AB_IPSTRACKED.'</strong></td>'."\n";
  echo '<td align="center"><strong>'._AB_LASTVIEWED.'</strong></td>'."\n";
  echo '<td align="center"><strong>'._AB_HITS.'</strong></td>'."\n";
  echo '<td align="center"><strong>'._AB_FUNCTIONS.'</strong></td>'."\n";
  echo '</tr>'."\n";
  $result = $db->sql_query("SELECT `user_id`, `username`, MAX(`date`), COUNT(*) FROM `".$prefix."_nsnst_tracked_ips` GROUP BY 2 ORDER BY $column $direction LIMIT $min, $perpage");
  while(list($userid,$username,$lastview,$hits) = $db->sql_fetchrow($result)){
    echo '<tr onmouseover="this.style.backgroundColor=\''.$bgcolor2.'\'" onmouseout="this.style.backgroundColor=\''.$bgcolor1.'\'" bgcolor="'.$bgcolor1.'">'."\n";
    echo '<td>'."\n";
    if($userid != 1) {
      echo '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$username.'" target="_blank">'.$username.'</a>';
    } else {
      echo $anonymous;
    }
    echo '</td>'."\n";
    $trackedips = $db->sql_numrows($db->sql_query("SELECT DISTINCT(`ip_addr`) FROM `".$prefix."_nsnst_tracked_ips` WHERE `user_id`='$userid'"));
    echo '<td align="center"><a href="'.$admin_file.'.php?op=ABTrackedUsersIPs&amp;tid='.$userid.'" target="_blank">'.$trackedips.'</a></td>'."\n";
    echo '<td align="center">'.date("Y-m-d \@ H:i:s",$lastview).'</td>'."\n";
    echo '<td align="center">'.$hits.'</td>'."\n";
    echo '<td align="center" nowrap="nowrap">&nbsp;<a href="'.$admin_file.'.php?op=ABTrackedUsersPagesPrint&amp;tid='.$userid.'" target="_blank"><img src="images/nukesentinel/print.png" height="16" width="16" alt="'._AB_PRINT.'" title="'._AB_PRINT.'" border="0" /></a>'."\n";
    echo '<a href="'.$admin_file.'.php?op=ABTrackedUsersPages&amp;tid='.$userid.'" target="_blank"><img src="images/nukesentinel/view.png" height="16" width="16" alt="'._AB_VIEW.'" title="'._AB_VIEW.'" border="0" /></a>'."\n";
    echo '<a href="'.$admin_file.'.php?op=ABTrackedUsersDelete&amp;user_id='.$userid.'&amp;min='.$min.'&amp;column='.$column.'&amp;direction='.$direction.'&amp;xop='.$op.'"><img src="images/nukesentinel/delete.png" height="16" width="16" alt="'._AB_DELETE.'" title="'._AB_DELETE.'" border="0" /></a></td>'."\n";
    echo '</tr>'."\n";
  }
  echo '</table>'."\n";
  abadminpagenums($op, $totalselected, $perpage, $max, $column, $direction);
} else {
  echo '<center><strong>'._AB_NOIPS.'</strong></center>'."\n";
}
CloseTable();
include_once("footer.php");

?>