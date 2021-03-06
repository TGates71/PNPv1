<?php
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
if (!preg_match("/modules.php/i", $_SERVER['SCRIPT_NAME'])) {
	die ("You can't access this file directly...");
}
// Modify URL For use in this plugin
$url = $row['url'];
$url = stristr($url, 'watch?v=');
$url = explode('=', $url);
$url = explode('&', $url[1]);
$url = $url[0];
// YouTube Plugin
$embedcode = "<object width=\"".$row['width']."\" height=\"".$row['height']."\">\n";
$embedcode .= "<param name=\"movie\" value=\"http://www.youtube.com/v/".$url."\"></param>\n";
$embedcode .= "<param name=\"wmode\" value=\"transparent\"></param>\n";
$embedcode .= "<embed src=\"http://www.youtube.com/v/".$url."\" type=\"application/x-shockwave-flash\" wmode=\"transparent\" width=\"".$row['width']."\" height=\"".$row['height']."\"></embed>\n";
$embedcode .= "</object>\n";
$url = "http://www.youtube.com/v/".$url;
?>