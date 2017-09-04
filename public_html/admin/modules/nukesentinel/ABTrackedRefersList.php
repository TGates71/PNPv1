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
$pagetitle = _AB_NUKESENTINEL.": "._AB_TRACKEDREFERS;
include_once("header.php");
OpenTable();
OpenMenu(_AB_TRACKEDREFERS);
mastermenu();
CarryMenu();
trackedmenu();
CloseMenu();
CloseTable();
echo '<br />'."\n";
OpenTable();
$perpage = $ab_config['track_perpage'];
if($perpage == 0) { $perpage = 25; }
if(!isset($min)) $min=0;
if(!isset($max)) $max=$min+$perpage;
if(!isset($column) or !$column or $column=="") $column = "refered_from";
if(!isset($direction) or !$direction or $direction=="") $direction = "asc";
$totalselected = $db->sql_numrows($db->sql_query("SELECT DISTINCT(`refered_from`) FROM `".$prefix."_nsnst_tracked_ips` GROUP BY 1"));
if($totalselected > 0) {
  // Page Sorting
  $selcolumn1 = $selcolumn2 = $selcolumn3 = $seldirection1 = $seldirection2 = "";
  if($column == "date") { $selcolumn1 = ' selected="selected"'; }
  elseif($column == 4) { $selcolumn3 = ' selected="selected"'; }
  else { $selcolumn2 = ' selected="selected"'; }
  if($direction == "desc") { $seldirection2 = ' selected="selected"'; }
  else { $seldirection1 = ' selected="selected"'; }
  echo '<table summary="" width="100%" cellpadding="2" cellspacing="2" border="0">'."\n";
  echo '<tr>'."\n";
  echo '<td align="right" nowrap="nowrap">'."\n";
  echo '<form action="'.$admin_file.'.php?op=ABTrackedRefersList" method="post" style="padding: 0px; margin: 0px;">'."\n";
  echo '<input type="hidden" name="min" value="'.$min.'" />'."\n";
  echo '<strong>'._AB_SORT.':</strong> <select name="column">'."\n";
  echo '<option value="date"'.$selcolumn1.'>'._AB_DATE.'</option>'."\n";
  echo '<option value="refered_from"'.$selcolumn2.'>'._AB_USERREFER.'</option>'."\n";
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
  echo '<td><strong>'._AB_USERREFER.'</strong></td>'."\n";
  echo '<td align="center"><strong>'._AB_IPSTRACKED.'</strong></td>'."\n";
  echo '<td align="center"><strong>'._AB_LASTVIEWED.'</strong></td>'."\n";
  echo '<td align="center"><strong>'._AB_HITS.'</strong></td>'."\n";
  echo '<td align="center"><strong>'._AB_FUNCTIONS.'</strong></td>'."\n";
  echo '</tr>'."\n";
  $result = $db->sql_query("SELECT DISTINCT(`refered_from`), tid, MAX(`date`), COUNT(*) FROM `".$prefix."_nsnst_tracked_ips` GROUP BY 1 ORDER BY $column $direction LIMIT $min, $perpage");
  while(list($refered_from, $tid, $lastview, $hits) = $db->sql_fetchrow($result)){
    if(strlen($refered_from) > 50) {
      $rfrom = substr($refered_from, 0, 50)."...";
    } else {
      $rfrom = $refered_from;
    }
    if($rfrom != "on site" AND $rfrom != "none" AND $rfrom !="local") {
      $rfrom = '<a href="includes/nsbypass.php?tid='.$tid.'" target="_blank" title="'.$refered_from.'">'.html_entity_decode($rfrom, ENT_QUOTES).'</a>';
    } else {
      $rfrom = $rfrom;
    }
    $trackedips = $db->sql_numrows($db->sql_query("SELECT DISTINCT(`ip_addr`) FROM `".$prefix."_nsnst_tracked_ips` WHERE `refered_from`='$refered_from'"));
    echo '<tr onmouseover="this.style.backgroundColor=\''.$bgcolor2.'\'" onmouseout="this.style.backgroundColor=\''.$bgcolor1.'\'" bgcolor="'.$bgcolor1.'">'."\n";
    echo '<td>'.$rfrom.'</td>'."\n";
    echo '<td align="center"><a href="'.$admin_file.'.php?op=ABTrackedRefersIPs&amp;tid='.$tid.'" target="_blank">'.$trackedips.'</a></td>'."\n";
    echo '<td align="center">'.date("Y-m-d \@ H:i:s",$lastview).'</td>'."\n";
    echo '<td align="center">'.$hits.'</td>'."\n";
    echo '<td align="center" nowrap="nowrap"><a href="'.$admin_file.'.php?op=ABTrackedRefersPagesPrint&amp;tid='.$tid.'" target="_blank"><img src="images/nukesentinel/print.png" height="16" width="16" alt="'._AB_PRINT.'" title="'._AB_PRINT.'" border="0" /></a>'."\n";
    echo '<a href="'.$admin_file.'.php?op=ABTrackedRefersPages&amp;tid='.$tid.'" target="_blank"><img src="images/nukesentinel/view.png" height="16" width="16" alt="'._AB_VIEW.'" title="'._AB_VIEW.'" border="0" /></a>'."\n";
    echo '<a href="'.$admin_file.'.php?op=ABTrackedRefersListAdd&amp;tid='.$tid.'&amp;min='.$min.'&amp;column='.$column.'&amp;direction='.$direction.'"><img src="images/nukesentinel/block.png" height="16" width="16" alt="'._AB_BLOCK.'" title="'._AB_BLOCK.'" border="0" /></a>'."\n";
    echo '<a href="'.$admin_file.'.php?op=ABTrackedRefersDelete&amp;tid='.$tid.'&amp;min='.$min.'&amp;column='.$column.'&amp;direction='.$direction.'"><img src="images/nukesentinel/delete.png" height="16" width="16" alt="'._AB_DELETE.'" title="'._AB_DELETE.'" border="0" /></a></td>'."\n";
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