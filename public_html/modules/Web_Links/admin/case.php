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

if ( !defined('ADMIN_FILE') )
{
	die ('Access Denied');
}
$module_name = 'Web_Links';
include_once('modules/'.$module_name.'/admin/language/lang-'.$currentlang.'.php');

switch($op) {

    case 'Links':
    case 'LinksDelNew':
    case 'LinksAddCat':
    case 'LinksAddSubCat':
    case 'LinksAddLink':
    case 'LinksAddEditorial':
    case 'LinksModEditorial':
    case 'LinksLinkCheck':
    case 'LinksValidate':
    case 'LinksDelEditorial':
    case 'LinksCleanVotes':
    case 'LinksListBrokenLinks':
    case 'LinksEditBrokenLinks':
    case 'LinksDelBrokenLinks':
    case 'LinksIgnoreBrokenLinks':
    case 'LinksListModRequests':
    case 'LinksChangeModRequests':
    case 'LinksChangeIgnoreRequests':
    case 'LinksDelCat':
    case 'LinksModCat':
    case 'LinksModCatS':
    case 'LinksModLink':
    case 'LinksModLinkS':
    case 'LinksDelLink':
    case 'LinksDelVote':
    case 'LinksDelComment':
    case 'LinksTransfer':
    include_once('modules/'.$module_name.'/admin/index.php');
    break;

}

?>
