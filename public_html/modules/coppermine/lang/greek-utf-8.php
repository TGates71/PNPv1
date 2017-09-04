<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.2   nuke - Language Pack 0.93                //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// New Port by CPG-nuke Dev Team                                                 //
// http://coppermine.findhere.org/                                          //
// Based on coppermine 1.1d by Surf  http://www.surf4all.net/               //
// ------------------------------------------------------------------------- //
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
define('PIC_VIEWS', 'Views');
define('PIC_VOTES', 'Votes');
define('PIC_COMMENTS', 'Comments');

// Greek language by lykman, ÅëëçíéêÞ ìåôÜöñáóç áðü Ëõêïýñãï Ì., ver. 1.0   //
// You can mail me for errors or suggestions about GReek, lykman@freemail.gr //
// Ãéá ôõ÷üí ëÜèç Þ ðñïôÜóåéò óôá ÅëëçíéêÜ, óôåßëôå mail, lykman@freemail.gr //
// ------------------------------------------------------------------------- //
// info about translators and translated language
$lang_translation_info = array(
    'lang_name_english' => 'Greek', // the name of your language in English, e.g. 'Greek' or 'Spanish'
    'lang_name_native' => '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;', // the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Español'
    'lang_country_code' => 'GR', // the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
    'trans_name' => 'lykman', // the name of the translator - can be a nickname
    'trans_email' => 'lykman@freemail.gr', // translator's email address (optional)
    'trans_website' => 'http://www.lykman.com', // translator's website (optional)
    'trans_date' => '03-10-2003', // the date the translation was created / last modified
    );

$lang_charset = 'iso-8859-7';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('Êõñ', 'Äåõ', 'Tñé', 'Ôåô', 'Ðåì', 'Ðáñ', 'Óáâ');
$lang_month = array('Éáí', 'Öåâ', 'Máñ', 'Aðñ', 'Máé', 'Éïõí', 'Éïõë', 'Aõã', 'Óåð', 'Ïêô', 'Noå', 'Äåê');
// Some common strings
$lang_yes = 'Íáé';
$lang_no = 'Ï÷é';
$lang_back = 'ÐÉÓÙ';
$lang_continue = 'ÓÕÍÅ×ÅÉÁ';
$lang_info = 'Ðëçñïöïñßåò';
$lang_error = 'ËÜèïò';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%B %d, %Y';
$lastcom_date_fmt = '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt = '%B %d, %Y at %I:%M %p';
// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array('random' => 'Ôõ÷áßåò öùôïãñáößåò',
    'lastup' => 'Ôåëåõôáßåò ðñïóèÞêåò',
    'lastupby' => 'My Last Additions', // new 1.2.2
    'lastalb' => 'Ðñüóöáôá åíçìåñùìÝíá Üëìðïõì',
    'lastcom' => 'Ôåëåõôáßá ó÷üëéá',
    'lastcomby' => 'My Last comments', // new 1.2.2
    'topn' => 'Ðåñéóóüôåñåò åìöáíßóåéò',
    'toprated' => 'Õøçëüôåñç âáèìïëïãßá',
    'lasthits' => 'Ôåëåõôáßåò åìöáíßóåéò',
    'search' => 'ÁðïôåëÝóìáôá áíáæÞôçóçò',
    'favpics' => 'ÁãáðçìÝíåò öùôïãñáößåò'
    );

$lang_errors = array('access_denied' => 'Äåí åðéôñÝðåôå ç ðñüóâáóç óå áõôÞí ôçí óåëßäá.',
    'perm_denied' => 'Äåí åðéôñÝðåôå íá åêôåëÝóåôå áõôÞí ôçí ëåéôïõñãßá.',
    'param_missing' => 'Åëåéðåßò ðáñÜìåôñïé ãéá ôçí åêôÝëåóç.',
    'non_exist_ap' => 'Ôï åðéëåãìÝíï Üëìðïõì/öùôïãñáößá äåí õðÜñ÷åé!',
    'quota_exceeded' => 'Ï ÷þñïò óáò ãÝìéóå<br /><br />Óáò áíáëïãåß ÷þñïò [quota]K, ïé öùôïãñáößåò óáò áõôÞ ôçí óôéãìÞ ÷ñçóéìïðïéïýí [space]K, ðñïóèÝôïíôáò áõôÞí ôçí öùôïãñáößá èá õðåñâåßôå ôï üñéï.',
    'gd_file_type_err' => '×ñçóéìïðïéþíôáò ôï GD image library, åðéôñåðüìåíá öïñìÜ åßíáé ìüíï ôá JPEG êáé PNG.',
    'invalid_image' => 'Ç öùôïãñáößá ðïõ áíåâÜóáôå åßíáé ðñïâëçìáôéêÞ Þ åëåéðÞò.',
    'resize_failed' => 'Äåí Þôáí äõíáôüí íá äçìéïõñãçèåß thumbnail Þ åéêüíá ìåéùìÝíïõ ìåãÝèïõò.',
    'no_img_to_display' => 'Êáììßá åéêüíá ðñïò åìöÜíéóç',
    'non_exist_cat' => 'Ç åðéëåãìÝíç êáôçãïñßá äåí õðÜñ÷åé',
    'orphan_cat' => 'Ç êáôçãïñßá äåí Ý÷åé äçìéïõñãü, åêôåëåß ôïí category manager ãéá íá äéïñèþóåé ôï ðñüâëçìá.',
    'directory_ro' => 'Ï êáôÜëïãïò \'%s\' äåí åßíáé äéáèÝóéìïò ãéá ôñïðïðïßçóç, ïé öùôïãñáößåò äåí ìðïñïýí íá äéáãñáöïýí',
    'non_exist_comment' => 'Ôï åðéëåãìÝíï ó÷üëéï äåí õðÜñ÷åé.',
    'pic_in_invalid_album' => 'Ç öùôïãñáößá åßíáé óå áíýðáñêôï Üëìðïõì (%s)!?',
    'banned' => 'Å÷åôå áðïêëåéóôåß áðü áõôü ôï site.',
    'not_with_udb' => 'ÁõôÞ ç ëåéôïõñãßá åßíáé áðåíåñãïðïéçìÝíç óôï Coppermine ãéáôß åßíáé áëëçëåðéäñáóôéêÞ ìå ôï software ôïõ öüñïõì. Ç áõôü ðïõ ðñïóðáèåßôå íá êÜíåôå äåí õðïóôçñßæåôáé óôçí ðáñïýóá äéáìüñöùóç, Þ ôçí ëåéôïõñãßá èá ðñÝðåé íá ôçí ÷åéñßæåôáé ôï ßäéï ôï öüñïõì.',
    'members_only' => 'This function is for members only, please join.', // changed in cpg1.2.0nuke
    'mustbe_god' => 'This function is only for the site admin. You must be logged in as superadmin, god account to access this function'
    ); 
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu = array('alb_list_title' => 'Ìåôáêßíçóç óôçí ëßóôá ôùí Üëìðïõì',
    'alb_list_lnk' => 'Ëßóôá ôùí Üëìðïõì',
    'my_gal_title' => 'Ìåôáêßíçóç óôo ðñïóùðéêü öþôï Üëìðïõì',
    'my_gal_lnk' => 'Ôï öþôï Üëìðïõì ìïõ',
    'my_prof_lnk' => 'Ôï ðñïößë ìïõ',
    'adm_mode_title' => 'Ëåéôïõñãßåò äéá÷åßñçóçò',
    'adm_mode_lnk' => 'ÊáôÜóôáóç äéá÷åßñçóçò',
    'usr_mode_title' => 'Ëåéôïõñãßåò ÷ñÞóôç',
    'usr_mode_lnk' => 'ÊáôÜóôáóç ÷ñÞóôç',
    'upload_pic_title' => 'ÐñïóèÞêç öùôïãñáößáò óå Üëìðïõì',
    'upload_pic_lnk' => 'ÐñïóèÞêç öùôïãñáößáò',
    'register_title' => 'Äçìéïõñãßá ëïãáñéáóìïý',
    'register_lnk' => 'ÅããñáöÞ',
    'login_lnk' => 'Åßóïäïò',
    'logout_lnk' => 'Åîïäïò',
    'lastup_lnk' => 'Ôåëåõôáßåò ðñïóèÞêåò',
    'lastcom_lnk' => 'Ôåëåõôáßá ó÷üëéá',
    'topn_lnk' => 'Ðåñéóóüôåñåò åìöáíßóåéò',
    'toprated_lnk' => 'Õøçëüôåñç âáèìïëïãßá',
    'search_lnk' => 'ÁíáæÞôçóç',
    'fav_lnk' => 'Ôá áãáðçìÝíá ìïõ',
    );

$lang_gallery_admin_menu = array('upl_app_lnk' => 'Åãêñéóç ðñïóèÞêçò',
    'config_lnk' => 'Ñõèìßóåéò',
    'albums_lnk' => 'Áëìðïõì',
    'categories_lnk' => 'Êáôçãïñßåò',
    'users_lnk' => '×ñÞóôåò',
    'groups_lnk' => 'ÏìÜäåò',
    'comments_lnk' => 'Ó÷üëéá',
    'searchnew_lnk' => 'ÐñïóèÞêç ðëÞèïõò öùôïãñáöéþí',
    'util_lnk' => 'ÁëëáãÞ ìåãÝèïõò öùôïãñáöéþí',
    'ban_lnk' => 'Áðïêëåéóìüò ÷ñçóôþí',
    );

$lang_user_admin_menu = array('albmgr_lnk' => 'Äçìéïõñãßá / ôáîéíüìçóç Üëìðïõì',
    'modifyalb_lnk' => 'Ôñïðïðïßçóç ôùí Üëìðïõì',
    'my_prof_lnk' => 'Ôï ðñïößë ìïõ',
    );

$lang_cat_list = array('category' => 'Êáôçãïñßá',
    'albums' => 'Aëìðïõì',
    'pictures' => 'Öùôïãñáößåò',
    );

$lang_album_list = array('album_on_page' => '%d Üëìðïõì óå %d óåëßäá(åò)'
    );

$lang_thumb_view = array('date' => 'ÇÌ/ÍÉÁ',
    'name' => 'ÏÍÏÌÁ ÁÑ×ÅÉÏÕ',
    'title' => 'ÔÉÔËÏÓ',
    'sort_da' => 'Óôïß÷éóç áðü ðáëáéüôåñç ðñïò íåüôåñç çìåñïìçíßá',
    'sort_dd' => 'Óôïß÷éóç áðü íåüôåñç ðñïò ðáëáéüôåñç çìåñïìçíßá',
    'sort_na' => 'Óôïß÷éóç áëöáâçôéêÜ áýîïõóá',
    'sort_nd' => 'Óôïß÷éóç áëöáâçôéêÜ öèßíïõóá',
    'sort_ta' => 'Óôïß÷éóç ìå ôßôëï áýîïõóá',
    'sort_td' => 'Óôïß÷éóç ìå ôßôëï öèßíïõóá',
    'pic_on_page' => '%d öùôïãñáößá(åò) óå %d óåëßäá(åò)',
    'user_on_page' => '%d ÷ñÞóôçò(åò) óå %d óåëßäá(åò)',
    'sort_ra' => 'Sort by rating ascending', // new in cpg1.2.0nuke
    'sort_rd' => 'Sort by rating descending', // new in cpg1.2.0nuke
    'rating' => 'RATING', // new in cpg1.2.0nuke
    'sort_title' => 'Sort pictures by:', // new in cpg1.2.0nuke
    );

$lang_img_nav_bar = array('thumb_title' => 'ÅðéóôñïöÞ óôçí óåëßäá ìå ôá thumbnail',
    'pic_info_title' => 'ÅìöÜíéóç/áðüêñõøç ðëçñïöïñéþí öùôïãñáößáò',
    'slideshow_title' => 'Slideshow',
    'slideshow_disabled' => 'e-cards are disabled', // new in cpg1.2.0nuke
    'slideshow_disabled_msg' => $lang_errors['members_only'], // new in cpg1.2.0nuke
    'ecard_title' => 'ÁðïóôïëÞ áõôÞò ôçò åéêüíáò óáí çëåêôñïíéêÞ êÜñôá',
    'ecard_disabled' => 'Ïé çëåêôñïíéêÝò êÜñôåò Ý÷ïõí áðåíåñãïðïéçèåß',
    'ecard_disabled_msg' => 'Äåí óáò åðéôñÝðåôå íá óôåßëåôå çëåêôñïíéêÝò êÜñôåò',
    'prev_title' => 'ÅìöÜíéóç ðñïçãïýìåíçò öùôïãñáößáò',
    'next_title' => 'ÅìöÜíéóç åðüìåíçò öùôïãñáößáò',
    'pic_pos' => 'ÖÙÔÏÃÑÁÖÉÁ %s/%s',
    'no_more_images' => 'There are no more images in this galley', // new in cpg1.2.0nuke
    'no_less_images' => 'This is the first image in the gallery', // new in cpg1.2.0nuke
    );

$lang_rate_pic = array('rate_this_pic' => 'ÂáèìïëïãÞóôå áõôÞí ôçí öùôïãñáößá ',
    'no_votes' => '(×ùñßò øÞöï áêüìá)',
    'rating' => '(ôùñéíÞ âáèìïëïãßá : %s / 5 ìå %s øÞöïõò)',
    'rubbish' => '×Üëéá',
    'poor' => 'ÊáêÞ',
    'fair' => 'ÌÝôñéá',
    'good' => 'ÊáëÞ',
    'excellent' => 'Áøïãç',
    'great' => 'ÊáôáðëçêôéêÞ',
    );
// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //
$lang_cpg_die = array(
    INFORMATION => $lang_info,
    ERROR => $lang_error,
    CRITICAL_ERROR => 'Critical error',
    'file' => 'Áñ÷åßï: ',
    'line' => 'ÃñáììÞ: ',
    );

$lang_display_thumbnails = array('filename' => 'Ïíïìá áñ÷åßïõ : ',
    'filesize' => 'ÌÝãåèïò áñ÷åßïõ : ',
    'dimensions' => 'ÄéáóôÜóåéò : ',
    'date_added' => 'Çìåñïìçíßá ðñïóèÞêçò : '
    );

$lang_get_pic_data = array('n_comments' => '%s ó÷üëéá',
    'n_views' => '%s åìöáíßóåéò',
    'n_votes' => '(%s øÞöïé)'
    );
// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array('Exclamation' => 'ÅðåîÞãçóç',
        'Question' => 'Åñþôçóç',
        'Very Happy' => 'Ðïëý ÷áñïýìåíïò',
        'Smile' => '×áìüãåëï',
        'Sad' => 'ËõðçìÝíïò',
        'Surprised' => 'Åêðëçêôïò',
        'Shocked' => 'ÓïêáñéóìÝíïò',
        'Confused' => 'ÌðåñäåìÝíïò',
        'Cool' => 'Cool',
        'Laughing' => 'Ãåëáóôüò',
        'Mad' => 'Ôñåëüò',
        'Razz' => 'Razz',
        'Embarassed' => 'ÍôñïðéáóìÝíïò',
        'Crying or Very sad' => 'ÊëáìÝíïò',
        'Evil or Very Mad' => 'Äéáâïëéêüò',
        'Twisted Evil' => 'ÄéáâïëåìÝíïò',
        'Rolling Eyes' => 'ÃõñéóôÜ ìÜôéá',
        'Wink' => 'Wink',
        'Idea' => 'IäÝá',
        'Arrow' => 'ÂÝëïò',
        'Neutral' => 'ÏõäÝôåñïò',
        'Mr. Green' => 'Mr. ÐñÜóéíïò',
        );
// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //
// void
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) $lang_admin_php = array(0 => 'Åãêáôáëåßðïíôáò ôéò ëåéôïõñãßåò äéá÷åßñçóçò...',
        1 => 'Åéóïäïò óôéò ëåéôïõñãßåò äéá÷åßñçóçò...',
        );
// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array('alb_need_name' => 'Ôá Üëìðïõì ðñÝðåé íá Ý÷ïõí üíïìá !',
        'confirm_modifs' => 'Åéóôå óßãïõñïò ðùò èÝëåôå íá êÜíåôå áõôÝò ôéò áëëáãÝò ?',
        'no_change' => 'Äåí êÜíáôå êáìßá áëëáãÞ !',
        'new_album' => 'NÝï Üëìðïõì',
        'confirm_delete1' => 'Åéóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôü ôï Üëìðïõì ?',
        'confirm_delete2' => '\nÏëåò ïé öùôïãñáößåò êáé ôá ó÷üëéá ðïõ ðåñéÝ÷ïíôáé èá ÷áèïýí !',
        'select_first' => 'ÅðéëÝîôå Ýíá áëìðïõì ðñþôá',
        'alb_mrg' => 'Äéá÷åßñçóç Aëìðïõì',
        'my_gallery' => '* Ôï öþôï Üëìðïõì ìïõ *',
        'no_category' => '* ×ùñßò êáôçãïñßá *',
        'delete' => 'ÄéáãñáöÞ',
        'new' => 'NÝï',
        'apply_modifs' => 'ÅöáñìïãÞ áëëáãþí',
        'select_category' => 'Select category',
        );
// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array('miss_param' => 'Ïé ðáñÜìåôñïé ðïõ áðáéôïýíôáé ãéá \'%s\'ëåéôïõñãßá äåí äüèçêáí !',
        'unknown_cat' => 'Ç åðéëåãìÝíç êáôçãïñßá äåí õðÜñ÷åé óôçí database',
        'usergal_cat_ro' => 'Ôá öþôï Üëìðïõì ôùí ÷ñçóôþí äåí ìðïñïýí íá äéáãñáöïýí !',
        'manage_cat' => 'Äéá÷åßñçóç êáôçãïñéþí',
        'confirm_delete' => 'Åßóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôÞí ôçí êáôçãïñßá',
        'category' => 'Êáôçãïñßá',
        'operations' => 'Ëåéôïõñãßåò',
        'move_into' => 'Måôáêßíçóç óå',
        'update_create' => 'ÁíáíÝùóç/Äçìéïõñãßá êáôçãïñßáò',
        'parent_cat' => 'Äçìéïõñãüò êáôçãïñßáò',
        'cat_title' => 'Ôßôëïò êáôçãïñßáò',
        'cat_desc' => 'ÐåñéãñáöÞ êáôçãïñßáò'
        );
// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //
if (defined('CONFIG_PHP')) $lang_config_php = array('title' => 'Ñõèìßóåéò',
        'restore_cfg' => 'ÅðáíáöïñÜ áñ÷éêþí ñõèìßóåùí',
        'save_cfg' => 'ÁðïèÞêåõóç íÝùí ñõèìßóåùí',
        'notes' => 'Óçìåéþóåéò',
        'info' => 'Ðëçñïöïñßåò',
        'upd_success' => 'Ïé ñõèìßóåéò ôïõ Coppermine áíáíåþèçêáí',
        'restore_success' => 'Ïé ðñïåãêáôåóôçìÝíåò ñõèìßóåéò ôïõ Coppermine åðáíáöÝñèçêáí',
        'name_a' => 'Áõîùí üíïìá',
        'name_d' => 'Öèßíùí üíïìá',
        'title_a' => 'Áýîùí ôßôëïò',
        'title_d' => 'Öèßíùí ôßôëïò',
        'date_a' => 'Áõîïõóá çìåñïìçíßá',
        'date_d' => 'Öèßíïõóá çìåñïìçíßá',
        'rating_a' => 'Rating ascending', // new in cpg1.2.0nuke
        'rating_d' => 'Rating descending', // new in cpg1.2.0nuke
        'th_any' => 'Max Aspect',
        'th_ht' => 'Height',
        'th_wd' => 'Width',
        );
// start left side interpretation
if (defined('CONFIG_PHP')) $lang_config_data = array(
        // General settings
        'ÃåíéêÝò åðéëïãÝò',
        array(
            'Ïíïìá ãêÜëåñé', 'gallery_name', 0),
        array(
            'ÐåñéãñáöÞ öþôï Üëìðïõì', 'gallery_description', 0),
        array(
            'Å-mail äéá÷åéñéóôÞ ôïõ öþôï Üëìðïõì', 'gallery_admin_email', 0),
        array(
            'Äéåýèõíóç ðáñáëÞðôç ãéá \'Äåßôå ðåñéóóüôåñåò öùôïãñáößåò\' äéáóýíäåóç óôéò çëåêôñïíéêÝò êÜñôåò', 'ecards_more_pic_target', 0),
        array(
            'Ãëþóóá', 'lang', 5),
// for postnuke change
        array('ÈÝìá', 'cpgtheme', 6),
        array(
            'Page Specific Titles instead of >Coppermine', 'nice_titles', 1), 
        array('Show blocks on the right', 'right_blocks', 1), // new 1.2.2
        // 'Album list view',
        'ÅìöÜíéóç Ëßóôáò Áëìðïõì',
        array(
            'ÐëÜôïò êõñßùò ðßíáêá (ðßîåë Þ %)', 'main_table_width', 0),
        array(
            'ÐëÞèïò õðïêáôçãïñéþí ðñïò åìöÜíéóç', 'subcat_level', 0),
        array(
            'ÐëÞèïò Üëìðïõì ðñïò åìöÜíéóç', 'albums_per_page', 0),
        array(
            'ÐëÞèïò óôçëþí ãéá ôçí ëßóôá ôùí Üëìðïõì', 'album_list_cols', 0),
        array(
            'ÌÝãåèïò ôùí thumbnails óå ðßîåë', 'alb_list_thumb_size', 0),
        array(
            'Ðåñéå÷üìåíï ôçò êåíôñéêÞò óåëßäáò', 'main_page_layout', 0),
        array(
            'ÅìöÜíéóç ðñþôïõ åðéðÝäïõ thumbnails ôïõ Üëìðïõì óôéò êáôçãïñßåò', 'first_level', 1), 
        // 'Thumbnail view',
        'ÅìöÜíéóç Thumbnail',
        array(
            'ÐëÞèïò óôçëþí óôçí óåëßäá ôùí thumbnail', 'thumbcols', 0),
        array(
            'ÐëÞèïò ãñáììþí óôçí óåëßäá ôùí thumbnail', 'thumbrows', 0),
        array(
            'ÌÝãéóôï ðëÞèïò tabs ãéá åìöÜíéóç', 'max_tabs', 0),
        array(
            'ÅìöÜíéóç åíóùìáôùìÝíïõ ó÷üëéïõ (åðéðñüóèåôá ôïõ ôßôëïõ) êÜôù áðü ôï thumbnail', 'caption_in_thumbview', 1),
        array(
            'ÅìöÜíéóç ðëÞèïõò ó÷üëéùí êÜôù áðü ôï thumbnail', 'display_comment_count', 1),
        array(
            'ÐñïåðéëïãÞ ñýèìéóçò óôïß÷çóçò ãéá ôéò öùôïãñáößåò', 'default_sort_order', 3),
        array(
            'ÅëÜ÷éóôï ðëÞèïò øÞöùí ãéá ìéá öùôïãñáößá ãéá íá åìöáíéóôåß áõôÞ óôçí ëßóôá ìå ôçí \'top-rated\' .', 'min_votes_for_rating', 0),
        array(
            'Alts and title tags of thumbnail show title and keyword instead of picinfo', 'seo_alts', 1), // new in cpg1.2.0nuke
        // 'Image view &amp; Comment settings',
        'ÅìöÜíéóç åéêüíùí &amp; Ñõèìßóåéò ó÷üëéùí',
        array(
            'ÐëÜôïò ðßíáêá ãéá åìöÜíéóç öùôïãñáöéþí (ðßîåë Þ %)', 'picture_table_width', 0),
        array(
            'Íá åìöáíßæïíôáé ïé ðëçñïöïñßåò ôùí öùôïãñáöéþí ðÜíôá?', 'display_pic_info', 1),
        array(
            'ÖéëôñÜñéóìá áðáãïñåõìÝíùí ëÝîåùí óôá ó÷üëéá', 'filter_bad_words', 1),
        array(
            'Íá åðéôñáðïýí ïé öáôóïýëåò óôá ó÷üëéá', 'enable_smilies', 1),
        array(
            'Allow several consecutive comments on one pic from the same user', 'disable_flood_protection', 1), // new in cpg1.2.0nuke
        array(
            'Email site admin upon comment submission' , 'comment_email_notification', 1), // new in cpg1.2.0nuke
        array(
            'MÝãéóôï ìÞêïò ãéá ôçí ðåñéãñáöÞ ìéáò öùôïãñáößáò', 'max_img_desc_length', 0),

        array(
            'MÝãéóôï ðëÞèïò ÷áñáêôÞñùí áíÜ ëÝîç', 'max_com_wlength', 0),
        array(
            'MÝãéóôïò áñéèìüò ãñáììþí áíÜ ó÷üëéï', 'max_com_lines', 0),
        array(
            'MÝãéóôï ìÞêïò ó÷ïëßïõ', 'max_com_size', 0),
        array(
            'ÅìöÜíéóç film strip', 'display_film_strip', 1),
        array(
            'Áñéèìüò áíôéêåéìÝíùí ìÝóá óôï film strip', 'max_film_strip_items', 0),
        array(
            'Allow viewing of full size pic by anonymous', 'allow_anon_fullsize', 1), // new in cpg1.2.0nuke
        array('Number of days between being able to vote on the same image','keep_votes_time',0), // new in cpg1.2.2c nuke
//'Pictures and thumbnails settings',
        'Põèìßóåéò öùôïãñáöéþí êáé thumbnails',
        array(
            'Ðïéüôçôá ôùí JPEG áñ÷åßùí', 'jpeg_qual', 0),
        array(
            'ÌÝãéóôç äéÜóôáóç ôïõ thumbnail <strong>*</strong>', 'thumb_width', 0),
        array(
            '×ñÞóç äéÜóôáóçò ( ðëÜôïò Þ ýøïò Þ ÌÝãéóôç áíáëïãßá ãéá ôï thumbnail )<strong>*</strong>', 'thumb_use', 7),
        array(
            'Äçìéïõñãßá åíäéÜìåóùí öùôïãñáöéþí', 'make_intermediate', 1),
        array(
            'MÝãéóôï ðëÜôïò Þ ýøïò åíäéÜìåóçò öùôïãñáößáò <strong>*</strong>', 'picture_width', 0),
        array(
            'MÝãéóôï ìÝãåèïò ãéá ôéò öùôïãñáößåò ãéá ðñïóèÞêç (KB)', 'max_upl_size', 0),
        array(
            'MÝãéóôï ðëÜôïò Þ ýøïò ãéá ôéò öùôïãñáößåò ãéá ðñïóèÞêç (ðßîåë)', 'max_upl_width_height', 0), 
        // 'User settings',
        'Ñõèìßóåéò ÷ñçóôþí',
        array(
            'ÅðéôñÝðåôå ç åããñáöÞ íÝïõ ÷ñÞóôç', 'allow_user_registration', 1),
        array(
            'Ç åããñáöÞ íÝïõ ÷ñÞóôç íá áðáéôåß åðáëÞèåõóç email', 'reg_requires_valid_email', 1),
        array(
            'ÅðéôñÝðåôå äýï ÷ñÞóôåò íá Ý÷ïõí êïéíÞ äéåýèõíóç email', 'allow_duplicate_emails_addr', 1),
        array(
            'Ïé ÷ñÞóôåò ìðïñïýí íá Ý÷ïõí ðñïóùðéêÜ Üëìðïõì', 'allow_private_albums', 1), 
        array('Show Users avatar instead of private album picture', 'avatar_private_album', 1),
//'Custom fields for image description (leave blank if unused)',
        'Custom ðåäßá ãéá ðåñéãñáöÞ ôùí öùôïãñáöéþí (áöÞóôå êåíü åáí äåí èá ôï ÷ñçóéìïðïéÞóåôå)',
        array(
            'Ïíïìá 1ïõ ðåäßïõ', 'user_field1_name', 0),
        array(
            'Ïíïìá 2ïõ ðåäßïõ', 'user_field2_name', 0),
        array(
            'Ïíïìá 3ïõ ðåäßïõ', 'user_field3_name', 0),
        array(
            'Ïíïìá 4ïõ ðåäßïõ', 'user_field4_name', 0), 
        // 'Pictures and thumbnails advanced settings',
        'ÅîéäåéêåõìÝíåò ñõèìßóåéò öùôïãñáöéþí êáé thumbnails',
        array(
            'ÅìöÜíéóç åéêïíéäßïõ éäéùôéêïý Üëìïõì óôïí åðéóêÝðôç', 'show_private', 1),
        array(
            'ÁðáãïñåõìÝíïé ÷áñáêôÞñåò óå üíïìá áñ÷åßïõ', 'forbiden_fname_char', 0),
        array(
            'ÄåêôÝò åðåêôÜóåéò áñ÷åßùí ãéá ôéò ðñïóôéèÝìåíåò öùôïãñáößåò', 'allowed_file_extensions', 0),
        array(
            'MÝèïäïò ãéá áëëáãÞ ìåãÝèïõò öùôïãñáößáò', 'thumb_method', 2),
        array(
            'ÄéáäñïìÞ ãéá ôçí åöáñìïãÞ ImageMagick / netpbm \'convert\' (ðáñÜäåéãìá /usr/bin/X11/)', 'impath', 0),
        array(
            'Äåêôïß ôýðïé áñ÷åßùí (ìüíï ãéá ôï ImageMagick)', 'allowed_img_types', 0),
        array(
            'ÅðéëïãÝò åíôïëþí ãñáììÞò ãéá ôï ImageMagick', 'im_options', 0),
        array(
            'ÁíÜãíùóç ðëçñïöïñéþí EXIF óôá JPEG áñ÷åßá', 'read_exif_data', 1),
        array(
            'ÊáôÜëïãïò Üëìðïõì <strong>*</strong>', 'fullpath', 0),
        array(
            'Ï êáôÜëïãïò ãéá ôéò öùôïãñáößåò ôùí ÷ñçóôþí <strong>*</strong>', 'userpics', 0),
        array(
            'Ðñüèåìá ôùí åíäéÜìåóùí öùôïãñáöéþí <strong>*</strong>', 'normal_pfx', 0),
        array(
            'Ðñüèåìá ôùí thumbnails <strong>*</strong>', 'thumb_pfx', 0),
        array(
            'ÐñïåãêáôáóôçìÝíåò ñõèìßóåéò ãéá êáôáëüãïõò', 'default_dir_mode', 0),
        array(
            'ÐñïåãêáôáóôçìÝíåò ñõèìßóåéò ãéá öùôïãñáößåò', 'default_file_mode', 0),
        array(
            'Picinfo display filename', 'picinfo_display_filename', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display album name', 'picinfo_display_album_name', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_file_size', 'picinfo_display_file_size', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_dimensions', 'picinfo_display_dimensions', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_count_displayed', 'picinfo_display_count_displayed', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display_URL', 'picinfo_display_URL', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display URL as bookmark link', 'picinfo_display_URL_bookmark', '1'), // new in cpg1.2.0nuke
        array(
            'Picinfo display fav album link', 'picinfo_display_favorites', '1'), // new in cpg1.2.0nuke
        // 'Cookies &amp; Charset settings',
        'Ñõèìßóåéò ãéá ôá Cookies &amp; êáé ôéò êùäéêïðïéÞóåéò ÷áñáêôÞñùí',
        array(
            'Ïíïìá ôïõ cookie ðïõ ÷ñçóéìïðïéåß ôï ðñüãñáììá', 'cookie_name', 0),
        array(
            'ÄéáäñïìÞ ãéá ôï cookie ðïõ ÷ñçóéìïðïéåß ôï ðñüãñáììá', 'cookie_path', 0),
        array(
            'Êùäéêïðïßçóç ÷áñáêôÞñùí', 'charset', 4), 
        // 'Miscellaneous settings',
        'ËïéðÝò ñõèìßóåéò',
        array(
            'Eíåñãïðïßçóç ëåéôïõñãßáò åíôïðéóìïý ëáèþí', 'debug_mode', 1),
        array(
'Enable advanced debug mode', 'advanced_debug_mode', 1), // new in cpg1.2.0nuke
array(
'Show Coppermine Update Alert to Admin', 'showupdate', 1), // new 1.2.2
        '<br /><div align="center">(*) Ôá ðåäßá ìå * äåí ðñÝðåé íá áëëá÷ôïýí åáí Ý÷åôå Þäç öùôïãñáößåò óôá áëìðïõì óáò.</div><br />'
        );
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) $lang_db_input_php = array('empty_name_or_com' => 'ÐñÝðåé íá ãñÜøåôå ôï üíïìá óáò êáé êÜðïéï ó÷üëéï',
        'com_added' => 'Ôï ó÷üëéï óáò ðñïóôÝèçêå',
        'alb_need_title' => 'ÐñÝðåé íá äþóåôå êÜðïéï ôßôëï ãéá ôï Üëìðïõì !',
        'no_udp_needed' => 'Äåí ÷ñåéÜæåôáé åíçìÝñùóç.',
        'alb_updated' => 'Tï Üëìðïõì åíçìåñþèçêå',
        'unknown_album' => 'Ôï åðéëåãìÝíï Üëìðïõì äåí õðÜñ÷åé, Þ äåí óáò åðéôñÝðåôå íá ðñïóèÝóåôå öùôïãñáößåò óå áõôü',
        'no_pic_uploaded' => 'Äåí ðñïóôÝèçêå öùôïãñáößá !<br /><br />Åáí åß÷áôå åðéëÝîåé êÜðïéá íá ðñïóèÝóåôå, åëÝíîôå áí ï äéáêïìéóôÞò åðéôñÝðåé ðñïóèÞêåò...',
        'err_mkdir' => 'Áðïôõ÷ßá íá äçìéïõñãÞóåé ôïí êáôÜëïãï %s !',
        'dest_dir_ro' => 'Ï êáôÜëïãïò %s óôïí ïðïßï ðñïóðáèÞôå íá ãñÜøåôå, äåí ìðïñåß íá áëëá÷ôåß áðü ôï ðñüãñáììá !',
        'err_move' => 'Äåí óôÜèçêå äõíáôÞ ç ìåôáêßíçóç áðü ôïí %s óôïí %s !',
        'err_fsize_too_large' => 'Tï ìÝãåèïò ôçò öùôïãñáößáò ðïõ áíåâÜæåôå åßíáé ðïëý ìåãÜëï (ìÝãéóôï åðéôñåðüìåíï åßíáé %s x %s) !',
        'err_imgsize_too_large' => 'Tï ìÝãåèïò ôïõ áñ÷åßïõ ðïõ áíåâÜæåôå åßíáé ðïëý ìåãÜëï (ìÝãéóôï åðéôñåðüìåíï åßíáé %s KB) !',
        'err_invalid_img' => 'Tï áñ÷åßï ðïõ áíåâÜæåôå, äåí åßíáé åãêõñï óáí öùôïãñáößá!',
        'allowed_img_types' => 'Ìðïñåßôå íá áíåâÜóåôå ìüíï %s öùôïãñáößåò.',
        'err_insert_pic' => 'Ç öùôïãñáößá \'%s\' äåí ìðïñåß íá ðñïóôåèåß óôï Üëìðïõì ',
        'upload_success' => 'Ç öùôïãñáößá óáò ðñïóôÝèçêå åðéôõ÷þò<br /><br />Èá åßíáé äéáèÝóéìç ìåôÜ ôçí Ýãêñéóç ôïõ äéá÷åéñéóôÞ.',
        'info' => 'Ðëçñïöïñßåò',
        'com_added' => 'Ôï ó÷üëéï ðñïóôÝèçêå',
        'alb_updated' => 'Ôï Üëìðïõì áíáíåþèçêå',
        'err_comment_empty' => 'Ôï ó÷üëéï óáò äåí Ý÷åé ðåñéå÷üìåíï !',
        'err_invalid_fext' => 'Ìüíï ôá áñ÷åßá ìå ôéò áêüëïõèåò åðåêôÜóåéò åðéôñÝðïíôáé : <br /><br />%s.',
        'no_flood' => 'Óõãíþìç áëëÜ åßóôå áõôüò ðïõ Ýãñáøå ôï ôåëåõôáßï ó÷üëéï ãéá áõôÞí ôçí öùôïãñáößá<br /><br />ÔñïðïðïéÞóôå ôï ó÷üëéï ðïõ äçìïóéåýóáôå åáí èÝëåôå íá ôï áëëÜîåôå',
        'redirect_msg' => 'Ìåôáöåñüóáóôå...<br /><br /><br />ÐáôÞóôå \'CONTINUE\' åÜí ç óåëßäá äåí áíáíåùèåß áõôüìáôá',
        'upl_success' => 'Ç öùôïãñáößá óáò ðñïóôÝèçêå åðéôõ÷þò',
        );
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array('caption' => 'ËåæÜíôá',
        'fs_pic' => 'åéêüíá ðëÞñïõò ìåãÝèïõò',
        'del_success' => 'äéáãñÜöç åðéôõ÷þò',
        'ns_pic' => 'öùôïãñáößá êáíïíéêïý ìåãÝèïõò',
        'err_del' => 'äåí ìðïñåß íá äéáãñáöåß',
        'thumb_pic' => 'thumbnail',
        'comment' => 'ó÷üëéï',
        'im_in_alb' => 'öùôïãñáößá óå Üëìðïõì',
        'alb_del_success' => 'Aëìðïõì \'%s\' äéåãñÜöåé',
        'alb_mgr' => 'Äéá÷åßñçóç Aëìðïõì',
        'err_invalid_data' => 'Ìç Ýãêõñá äåäïìÝíá ðáñåëÞöèçóáí óôï \'%s\'',
        'create_alb' => 'Äçìéïõñãßá Üëìðïõì \'%s\'',
        'update_alb' => 'ÁíáíÝùóç Üëìðïõì \'%s\' ìå ôßôëï \'%s\' êáé åõñåôÞñéï \'%s\'',
        'del_pic' => 'ÄéáãñáöÞ öùôïãñáößáò',
        'del_alb' => 'ÄéáãñáöÞ Üëìðïõì',
        'del_user' => 'ÄéáãñáöÞ ÷ñÞóôç',
        'err_unknown_user' => 'Ï åðéëåãìÝíïò ÷ñÞóôçò äåí õðÜñ÷åé !',
        'comment_deleted' => 'Ôï ó÷üëéï äéåãñÜöåé åðéôõ÷þò',
        );
// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')) {
    $lang_display_image_php = array('confirm_del' => 'Åßóôå óßãïõñïò ðùò èÝëåôå íá ÄÉÁÃÑÁØÅÔÅ áõôÞ ôçí öùôïãñáößá ? \\nÔá Ó÷üëéá åðßóçò èá äéáãñáöïýí.',
        'del_pic' => 'ÄÉÁÃÑÁÖÇ ÖÙÔÏÃÑÁÖÉÁÓ',
        'size' => '%s x %s ðßîåë',
        'views' => '%s öïñÝò',
        'slideshow' => 'Slideshow',
        'stop_slideshow' => 'ÔÅËÏÓ SLIDESHOW',
        'view_fs' => 'Click to view full size image',
        );

    $lang_picinfo = array('title' => 'Ðëçñïöïñßåò öùôïãñáößáò',
        'Filename' => 'Ïíïìá áñ÷åßïõ',
        'Album name' => 'Ïíïìá Üëìðïõì',
        'Rating' => 'Âáèìïëïãßá (%s øÞöïé)',
        'Keywords' => 'ËÝîåéò ÊëåéäéÜ',
        'File Size' => 'ÌÝãåèïò áñ÷åßïõ',
        'Dimensions' => 'ÄéáóôÜóåéò',
        'Displayed' => 'Åìöáíßóåéò',
        'Camera' => 'ÖùôïãñáöéêÞ Ìç÷áíÞ',
        'Date taken' => 'Çìåñïìçíßá ëÞøçò',
        'Aperture' => 'ÄéÜöñáãìá',
        'Exposure time' => '×ñüíïò Ýêèåóçò',
        'Focal length' => 'ÅóôéáêÞ áðüóôáóç',
        'Comment' => 'Ó÷üëéï',
        'addFav' => 'ÐñïóèÞêç óôá ÁãáðçìÝíá',
        'addFavPhrase' => 'ÁãáðçìÝíá',
        'remFav' => 'Áöáßñåóç áðü ôá ÁãáðçìÝíá',
        'Flash' => 'Öëáò',
        'ISOSpeedRatings' => 'ISO',
        'ExposureProgram' => 'Ðñüãñáììá Ýêèåóçò',
        'iptcTitle' => 'IPTC Title', // new in cpg1.2.0nuke
        'iptcCopyright' => 'IPTC Copyright', // new in cpg1.2.0nuke
        'iptcKeywords' => 'IPTC Keywords', // new in cpg1.2.0nuke
        'iptcCategory' => 'IPTC Category', // new in cpg1.2.0nuke
        'iptcSubCategories' => 'IPTC Sub Categories', // new in cpg1.2.0nuke
        'bookmark_page' => 'Bookmark Image', // new in cpg1.2.0nuke
        );

    $lang_display_comments = array('OK' => 'OK',
        'edit_title' => 'ÌåôáôñïðÞ ó÷üëéïõ',
        'confirm_delete' => 'Åßóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôü ôï ó÷üëéï ?',
        'add_your_comment' => 'ÐñïóèÞêç ó÷üëéïõ',
        'name' => 'Ïíïìá',
        'comment' => 'Ó÷üëéï',
        'your_name' => 'Áíþíõìïò',
        );

    $lang_fullsize_popup = array('click_to_close' => 'ÐáôÞóôå óôçí åéêüíá ãéá íá êëåßóåôå áõôü ôï ðáñÜèõñï',
        );
} 
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php = array('title' => 'Óôåßëôå ìéá çëåêôñïíéêÞ êÜñôá',
        'invalid_email' => '<strong>Ðñïåéäïðïßçóç</strong> : ç äéåýèõíóç e-mail äåí åßíáé åãêõñç !',
        'ecard_title' => 'Ìéá çëåêôñïíéêÞ êÜñôá áðü ôïí %s ãéá åóÜò',
        'view_ecard' => 'Åáí ç çëåêôñïíéêÞ êÜñôá äåí åìöáíéóôåß óùóôÜ, ðáôÞóáôå áõôÞí ôçí äéáóýíäåóç',
        'view_more_pics' => 'ÐáôÞóáôå áõôÞ ôçí äéáóýíäåóç ãéá íá äåßôå ðåñéóóüôåñåò öùôïãñáößåò !',
        'send_success' => 'Ç çëåêôñïíéêÞ óáò êÜñôá áðïóôÜëåé',
        'send_failed' => 'Óõãíþìç, áëëÜ ï äéáêïìéóôÞò äåí ìðïñåß íá óôåßëåé ôçí çëåêôñïíéêÞ óáò êÜñôá...',
        'from' => 'Áðü',
        'your_name' => 'ÔÏ üíïìá óáò',
        'your_email' => 'Ç äéåýèõíóç email óáò',
        'to' => 'Ðñïò',
        'rcpt_name' => 'Ïíïìá ðáñáëÞðôç',
        'rcpt_email' => 'Äéåýèõíóç email ðáñáëÞðôç',
        'greetings' => 'Ìå öéëéêïýò ÷áéñåôéóìïýò',
        'message' => 'ÌÞíõìá',
        );
// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array('pic_info' => 'Ðëçñïöïñßåò&nbsp;öùôïãñáößáò',
        'album' => 'Aëìðïõì',
        'title' => 'Tßôëïò',
        'desc' => 'ÐåñéãñáöÞ',
        'keywords' => 'ËÝîåéò êëåéäéÜ',
        'pic_info_str' => '%sx%s - %sKB - %s åìöáíßóåéò - %s øÞöïé',
        'approve' => 'Åãêñéóç öùôïãñáößáò',
        'postpone_app' => 'Áñíçóç Ýãêñéóçò',
        'del_pic' => 'ÄéáãñáöÞ öùôïãñáößáò',
        'reset_view_count' => 'Ìçäåíéóìüò ìåôñçôÞ åìöáíßóåùí',
        'reset_votes' => 'Ìçäåíéóìüò øÞöùí',
        'del_comm' => 'ÄéáãñáöÞ ó÷üëéùí',
        'upl_approval' => 'Åãêñéóç ðñïóèÞêçò',
        'edit_pics' => 'ÌåôáôñïðÞ öùôïãñáößáò',
        'see_next' => 'ÅìöÜíéóç åðüìåíçò öùôïãñáößáò',
        'see_prev' => 'ÅìöÜíéóç ðñïçãïýìåíçò öùôïãñáößáò',
        'n_pic' => '%s öùôïãñáößåò',
        'n_of_pic_to_disp' => 'Áñéèìüò öùôïãñáöéþí ðñïò åìöÜíéóç',
        'apply' => 'ÅöáñìïãÞ ôñïðïðïéÞóåùí'
        );
// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array('group_name' => 'Ïíïìá ïìÜäáò',
        'disk_quota' => 'ÄéáèÝóéìïò ÷þñïò',
        'can_rate' => 'Ìðïñïýí íá âáèìïëïãÞóïõí öùôïãñáößåò',
        'can_send_ecards' => 'Ìðïñïýí íá óôåßëïõí çëåêôñïíéêÝò êÜñôåò',
        'can_post_com' => 'Ìðïñïýí íá äçìïóéåýóïõí ó÷üëéá',
        'can_upload' => 'Ìðïñïýí íá ðñïóèÝóïõí öùôïãñáößåò',
        'can_have_gallery' => 'Ìðïñïýí íá Ý÷ïõí ðñïóùðéêü öþôï Üëìðïõì',
        'apply' => 'ÅöáñìïãÞ ôñïðïðïéÞóåùí',
        'create_new_group' => 'Äçìéïõñãßá íÝáò ïìÜäáò',
        'del_groups' => 'ÄéáãñáöÞ åðéëåãìÝíçò ïìÜäáò',
        'confirm_del' => 'Ðñïóï÷Þ, üôáí äéáãñÜöåôå ìéá ïìÜäá, ïé ÷ñÞóôåò ðïõ áíÞêïõí óå áõôÞí ôçí ïìÜäá èá ìåôáöåñèïõí óôçí ïìÜäá ôùí \'ÅããåãñáìÝíùí\' !\n\nÈÝëåôå íá óõíå÷ßóåôå ?',
        'title' => 'Äéá÷åßñçóç ïìÜäùí ÷ñçóôþí',
        'approval_1' => 'Äçìïó. Ðñïóè. äåêôÞ (1)',
        'approval_2' => 'Ðñïóùð. Ðñïóè. äåêôÞ (2)',
        'note1' => '<strong>(1)</strong> ÐñïóèÞêåò óå Ýíá äçìüóéï Üëìðïõì áðáéôåß ôçí Ýãêñéóç ôïõ äéá÷åéñéóôÞ',
        'note2' => '<strong>(2)</strong> ÐñïóèÞêåò óå Ýíá ðñïóùðéêü Üëìðïõì áðáéôåß ôçí Ýãêñéóç ôïõ äéá÷åéñéóôÞ',
        'notes' => 'Óçìåéþóåéò'
        );
// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')) {
    $lang_index_php = array('welcome' => 'ÊáëùóÞñèáôå !'
        );

    $lang_album_admin_menu = array('confirm_delete' => 'Åéóôå óßãïõñïò ðùò èÝëåôå íá äéáãñÜøåôå áõôï ôï Üëìðïõì ? \\nÏëåò ïé öùôïãñáößåò êáé ôá ó÷üëéá èá ÷áèïýí.',
        'delete' => 'ÄÉÁÃÑÁÖÇ',
        'modify' => 'ÔÑÏÐÏÐÏÉÇÓÇ',
        'edit_pics' => 'ÅÐÅÎÅÑÃÁÓÉÁ ÖÙÔÏÃÑÁÖÉÙÍ',
        );

    $lang_list_categories = array('home' => 'Áñ÷éêÞ',
        'stat1' => '<strong>[pictures]</strong> öùôïãñáößåò óå <strong>[albums]</strong> Üëìðïõì êáé <strong>[cat]</strong> êáôçãïñßåò ìå <strong>[comments]</strong> ó÷üëéá, ïé ïðïßåò Ý÷ïõí åìöáíéóôåß <strong>[views]</strong> öïñÝò',
        'stat2' => '<strong>[pictures]</strong> öùôïãñáößåò óå <strong>[albums]</strong> áëìðïõì, ïé ïðïßåò Ý÷ïõí åìöáíéóôåß <strong>[views]</strong> öïñÝò',
        'xx_s_gallery' => '%s\'s Öþôï Üëìðïõì',
        'stat3' => '<strong>[pictures]</strong> öùôïãñáößåò óå <strong>[albums]</strong> Üëìðïõì ìå <strong>[comments]</strong> ó÷üëéá, ïé ïðïßåò Ý÷ïõí åìöáíéóôåß <strong>[views]</strong> öïñÝò'
        );

    $lang_list_users = array('user_list' => 'ÊáôÜëïãïò ×ñçóôþí',
        'no_user_gal' => 'Äåí õðÜñ÷ïõí ÷ñÞóôåò ðïõ íá ôïõò åðéôñÝðåôå íá Ý÷ïõí Üëìðïõì',
        'n_albums' => '%s Üëìðïõì',
        'n_pics' => '%s öùôïãñáößá(åò)'
        );

    $lang_list_albums = array('n_pictures' => '%s öùôïãñáößåò',
        'last_added' => ', ç ôåëåõôáßá ðñïóôÝèçêå óôéò %s'
        );
} 
// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
// NULL
// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //
// NULL
// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array('upd_alb_n' => 'ÅíçìÝñùóç Üëìðïõì %s',
        'general_settings' => 'ÃåíéêÝò ñõèìßóåéò',
        'alb_title' => 'Ôßôëïò Üëìðïõì',
        'alb_cat' => 'Êáôçãïñßá Üëìðïõì',
        'alb_desc' => 'ÐåñéãñáöÞ Üëìðïõì',
        'alb_thumb' => 'Aëìðïõì thumbnail',
        'alb_perm' => 'Äéáêáéþìáôá ãéá áõôü ôï Üëìðïõì',
        'can_view' => 'Ôï Üëìðïõì ìðïñåß íá åìöáíéóôåß óôïõò',
        'can_upload' => 'Ïé åðéóêÝðôåò ìðïñïýí íá ðñïóèÝóïõí öùôïãñáößåò',
        'can_post_comments' => 'Ïé åðéóêÝðôåò ìðïñïýí íá äçìïóéåýóïõí ó÷üëéá',
        'can_rate' => 'Ïé åðéóêÝðôåò ìðïñïýí íá âáèìïëïãÞóïõí ôéò öùôïãñáößåò',
        'user_gal' => 'Öþôï Üëìðïõì ÷ñçóôþí',
        'no_cat' => '* Ìç êáôçãïñéïðïéçìÝíï *',
        'alb_empty' => 'Ôï Üëìðïõì åßíáé Üäåéï',
        'last_uploaded' => 'Ôåëåõôáßá ðñïóèÞêç',
        'public_alb' => 'Ïëïé (äçìüóéï Üëìðïõì)',
        'me_only' => 'Müíï åãþ',
        'owner_only' => 'Ï (%s) , éäéïêôÞôçò ôïõ Üëìðïõì',
        'groupp_only' => 'Ôá ìÝëç ôçò ïìÜäáò \'%s\' ',
        'err_no_alb_to_modify' => 'ÊáíÝíá Üëìðïõì ãéá ôñïðïðïßçóç óôçí âÜóç äåäïìÝíùí.',
        'update' => 'ÅíçìÝñùóç Üëìðïõì'
        );
// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array('already_rated' => 'Óõãíþìç áëëÜ Ý÷åôå Þäç âáèìïëïãÞóåé áõôÞ ôçí öùôïãñáößá',
        'rate_ok' => 'Ç øÞöïò óáò Ýãéíå äåêôÞ',
        );
// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
    $lang_register_disclamer = <<<EOT
Ðáñüëï ðïõ ïé äéá÷åéñéóôÝò ôïõ {SITE_NAME} èá ðñïóðáèÞóïõí íá áöáéñÝóïõí Þ íá ôñïðïðïéÞóïõí êÜèå ðñïóðÜèåéá ðñïóâïëÞò ôï óõíôïìüôåñï äõíáôü, åßíáé áäýíáôï íá åðéâëÝðïõí êÜèå äçìïóéåõìÝíï ó÷üëéï. Ãéá áõôü áðïäÝ÷åóôå üôé êÜèå ó÷üëéï ðïõ äçìïóéåýåôáé óå áõôü ôï site åêöñÜæåé ìüíï ôçí Üðïøç êáé ôçí ãíþìç ôïõ óõíôÜêôç ôïõ êáé êáíåíüò Üëëïõ.<br />
<br />
Ìå ôï ðáñüí, óõìöùíåßôå íá ìçí äçìïóéåýóåôå åéñùíéêÜ, ìåéùôéêÜ, õâñéóôéêÜ, êáêïÞèç, óåîïõáëéêÜ Þ Üëëïõ åßäïõò ðñïóâëçôéêÜ ó÷üëéá ðïõ åíáíôéþíïíôáé óôïõò ôñÝ÷ïíôåò íüìïõò êáé Þèç. ÁðïäÝ÷åóôå üôé ïé äéá÷åéñéóôÝò ôïõ {SITE_NAME} Ý÷ïõí ôï äéêáßùìá íá áöáéñÝóïõí Þ íá ôñïðïðïéÞóïõí êÜèå ôé êáôÜ ôçí êñßóç ôïõò. Óáí ÷ñÞóôçò áðïäÝ÷åóôå üôé êÜèå ðëçñïöïñßá ðïõ Ý÷åôå åéóÜãåé èá êáôá÷ùñçèåß óôçí âÜóç äåäïìÝíùí. Ðáñüëï ðïõ êÜèå ðëçñïöïñßá óáò èåùñåßôå åìðéóôåõôéêÞ, êáé äåí èá äïèåß ðïõèåíÜ ÷ùñßò ôçí Üäåéá óáò ïé äéá÷åéñéóôÝò äåí ìðïñïýí íá óáò äéáóöáëßóïõí óå ðåñßðôùóç ðñïóðÜèåéáò hacking ðïõ ìðïñåß íá ïäçãÞóåé óå êëïðÞ ðëçñïöïñéþí.<br />
<br />
Áõôü ôï site ÷ñçóéìïðïéåß cookies ãéá íá áðïèçêåýóåé ðëçñïöïñßåò ôïðéêÜ óôïí õðïëïãéóôÞ óáò. ÁõôÜ ôá cookies åîõðçñåôïýí ìüíï ôçí äéêéÜ óáò éêáíïðïßçóç êáôÜ ôçí ðåñéÞãçóç óôéò óåëßäåò. Ç äéåýèõíóç email ðïõ óáò æçôåßôå åßíáé ìüíï ãéá íá ðéóôïðïéÞóåé ãéá ôçí åããñáöÞ óáò ôéò ðëçñïöïñßåò êáé ôïí Êùäéêü óáò.<br />
<br />
ÅðéëÝãïíôáò 'Óõìöùíþ' ðáñáêÜôù, áðïäÝ÷åóôå áõôïýò ôïõò üñïõò.
EOT;

    $lang_register_php = array('page_title' => 'ÅããñáöÞ ÷ñÞóôç',
        'term_cond' => 'Ïñïé ÷ñÞóçò',
        'i_agree' => 'Óõìöùíþ',
        'submit' => 'ÁðïóôïëÞ åããñáöÞò',
        'err_user_exists' => 'Ôï Ïíïìá ×ñÞóôç ðïõ åéóÜãáôå õðÜñ÷åé Þäç, ðáñáêáëþ äéáëÝîôå êÜðïéï Üëëï',
        'err_password_mismatch' => 'Ïé äýï Êùäéêïß äåí åßíáé ßäéïé, ðáñáêáëþ åéóÜãåôÝ ôïõò îáíÜ',
        'err_uname_short' => 'Ôï Ïíïìá ×ñÞóôç ðñÝðåé íá åßíáé ôïõëÜ÷éóôïí 2 ÷áñáêôÞñåò',
        'err_password_short' => 'Ï Êùäéêüò ðñÝðåé íá åßíáé ôïõëÜ÷éóôï 2 ÷áñáêôÞñåò',
        'err_uname_pass_diff' => 'Ôï Ïíïìá ×ñÞóôç êáé ï Êùäéêüò ðñÝðåé íá åßíáé äéáöïñåôéêÜ',
        'err_invalid_email' => 'Ç äéåýèõíóç email äåí åßíáé Ýãêõñç',
        'err_duplicate_email' => 'ÊÜðïéïò Üëëïò ÷ñÞóôçò Ý÷åé Þäç åããñáöåß ìå ôçí äéåýèõíóç email ðïõ äþóáôå',
        'enter_info' => 'Êáôá÷þñçóç ðëçñïöïñéþí åããñáöÞò',
        'required_info' => 'Õðï÷ñåùôéêÝò ðëçñïöïñßåò',
        'optional_info' => 'ÐñïáéñåôéêÝò ðëçñïöïñßåò',
        'username' => 'Ïíïìá ×ñÞóôç',
        'password' => 'Êùäéêüò',
        'password_again' => 'Îáíáäþóôå ôïí Êùäéêü',
        'email' => 'Email',
        'location' => 'Ôïðïèåóßá',
        'interests' => 'ÅíäéáöÝñïíôá',
        'website' => 'ÐñïóùðéêÞ óåëßäá',
        'occupation' => 'ÅðÜããåëìá',
        'error' => 'ËÁÈÏÓ',
        'confirm_email_subject' => '%s - Ðéóôïðïéçóç åããñáöÞò',
        'information' => 'Ðëçñïöïñßåò',
        'failed_sending_email' => 'Ôï email ãéá ôçí ðéóôïðïßçóç åããñáöÞò äåí ìðïñåß íá áðïóôáëåß !',
        'thank_you' => 'Åõ÷áñéóôïýìå ãéá ôçí åããñáöÞ óáò.<br /><br />Åíá email ìå ðëçñïöïñßåò ãéá ôï ðùò èá åíåñãïðïéÞóåôå ôïí ëïãáñéáóìü óáò áðåóôÜëåé óôçí äéåýèõíóç email ðïõ äþóáôå.',
        'acct_created' => 'Ï ëïãáñéáóìüò óáò ðëÝïí õðÜñ÷åé êáé ìðïñåßôå íá åéóÝñèåôå ÷ñçóéìïðïéþíôáò ôï Ïíïìá ×ñÞóôç êáé ôïí Êùäéêü óáò',
        'acct_active' => 'Ï ëïãáñéáóìüò óáò åßíáé ðëÝïí åíåñãüò êáé ìðïñåßôå íá åéóÝñèåôå ìå ôï Ïíïìá ×ñÞóôç êáé ôïí Êùäéêü óáò',
        'acct_already_act' => 'Ï ëïãáñéáóìüò óáò åßíáé Þäç åíåñãüò !',
        'acct_act_failed' => 'Áõôüò ï ëïãáñéáóìüò äåí ìðïñåß íá åíåñãïðïéçèåß !',
        'err_unk_user' => 'Ï åðéëåãìÝíïò ÷ñÞóôçò äåí õðÜñ÷åé !',
        'x_s_profile' => 'Ôï ðñïößë ôïõ %s',
        'group' => 'ÏìÜäá',
        'reg_date' => 'ÐñïóÞëèå',
        'disk_usage' => '×ñÞóç ÷þñïõ',
        'change_pass' => 'ÁëëáãÞ Êùäéêïý',
        'current_pass' => 'Ðáñþí Êùäéêüò',
        'new_pass' => 'NÝïò Êùäéêüò',
        'new_pass_again' => 'Äþóôå ðÜëé ôïí ÍÝï Êùäéêü',
        'err_curr_pass' => 'Ï ðáñþí Êùäéêüò åßíáé ëáèáóìÝíïò',
        'apply_modif' => 'ÅöáñìïãÞ ôñïðïðïéÞóåùí',
        'change_pass' => 'ÁëáãÞ ôïõ Êùäéêïý ìïõ',
        'update_success' => 'Ôï ðñïößë áíáíåþèçêå',
        'pass_chg_success' => 'Ï Êùäéêüò óáò Üëëáîå',
        'pass_chg_error' => 'Ï Êùäéêüò óáò äåí Üëëáîå',
        );

    $lang_register_confirm_email = <<<EOT
Åõ÷áñéóôïýìå ðïõ åããñáöÞêáôå óôï {SITE_NAME}

Ôï Ïíïìá ×ñÞóôç óáò åßíáé : "{USER_NAME}"
Ï Êùäéêüò óáò åßíáé : "{PASSWORD}"

Ãéá íá åíåñãïðïéÞóåôå ôïí ëïãáñéáóìü óáò, ðñÝðåé íá ðáôÞóåôå ôçí ðáñáêÜôù äéáóýíäåóç
Þ íá ôçí áíôéãñÜøåôå óôïí web browser óáò.

{ACT_LINK}

Ìå öéëéêïýò ÷áéñåôéóìïýò,

Ïé äéá÷åéñéóôÝò ôïõ {SITE_NAME}

EOT;
} 
// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array('title' => 'Åðéóêüðçóç ó÷ïëéùí',
        'no_comment' => 'Äåí õðÜñ÷ïõí ó÷üëéá ãéá åðéóêüðçóç',
        'n_comm_del' => '%s ó÷üëéï(á) äéáãñÜöçêå(áí)',
        'n_comm_disp' => 'Áñéèìüò ó÷üëéùí ðñïò åìöÜíéóç',
        'see_prev' => 'ÅìöÜíéóç ðñïçãïýìåíïõ',
        'see_next' => 'ÅìöÜíéóç åðüìåíïõ',
        'del_comm' => 'ÄéáãñáöÞ åðéëåãìÝíùí ó÷ïëéùí',
        );
// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
// if (defined('SEARCH_PHP'))
    $lang_search_php = array(0 => 'ÁíáæÞôçóç óôçí óõëëïãÞ öùôïãñáöéþí',
        );
// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array('page_title' => 'ÁíáæÞôçóç íÝùí öùôïãñáöéþí',
        'select_dir' => 'ÅðéëïãÞ êáôáëüãïõ',
        'select_dir_msg' => 'ÁõôÞ ç ëåéôïõñãßá óáò åðéôñÝðåé íá ðñïóèÝóåôå ðëÞèïò öùôïãñáöéþí ðïõ Ý÷åôå áíåâÜóåé óôïí äéáêïìéóôÞ óáò ìÝóù FTP.<br /><br />ÅðéëÝîôå ôïí êáôÜëïãï ïðïõ áíåâÜóáôå ôéò öùôïãñáößåò óáò',
        'no_pic_to_add' => 'Äåí õðÜñ÷åé öùôïãñáößá ãéá ðñïóèÞêç',
        'need_one_album' => '×ñåéÜæåóôå ôïõëÜ÷éóôï Ýíá Üëìðïõì ãéá íá ÷ñçóéìïðïéÞóåôå áõôÞ ôçí ëåéôïõñãßá',
        'warning' => 'Ðñïåéäïðïßçóç',
        'change_perm' => 'ôï ðñüãñáììá äåí ìðïñåß íá ãñÜøåé óå áõôü ôïí êáôÜëïãï, ðñÝðåé íá áëëÜîåôå ôçí êáôÜóôáóç ôïõ êáôáëüãïõ (CHMOD) óå 755 Þ 777 ðñéí ðñïóðáèÞóåôå íá ðñïóèÝóåôå öùôïãñáößåò !',
        'target_album' => '<strong>ÅéóáãùãÞ öùôïãñáöéþí &quot;</strong>%s<strong>&quot; óôï </strong>%s',
        'folder' => 'ÊáôÜëïãïò',
        'image' => 'Åéêüíá',
        'album' => 'Aëìðïõì',
        'result' => 'ÁðïôÝëåóìá',
        'dir_ro' => 'Äåí ìðïñåß íá åããñáöåß. ',
        'dir_cant_read' => 'Äåí ìðïñåß íá äéáâáóôåß. ',
        'insert' => 'ÐñïóèÝôïíôáò íÝåò öùôïãñáößåò óôï öþôï Üëìðïõì',
        'list_new_pic' => 'Ëßóôá öùôïãñáöéþí',
        'insert_selected' => 'ÅéóáãùãÞ åðéëåãìÝíùí öùôïãñáöéþí',
        'no_pic_found' => 'Äåí âñÝèçêáí íÝåò öùôïãñáößåò',
        'be_patient' => 'Ðáñáêáëþ íá åßóôå õðïìïíåôéêïß, ôï ðñüãñáììá ÷ñåéÜæåôå ëßãç þñá ãéá íá ðñïóèÝóåé ôéò öùôïãñáößåò...',
        'notes' => '<ul>' . '<li><strong>OK</strong> : óçìáßíåé ðùò ç öùôïãñáößá åéóÞ÷èåé åðéôõ÷þò' . '<li><strong>DP</strong> : óçìáßíåé ðùò ç öùôïãñáößá õðÜñ÷åé Þäç óôçí âÜóç äåäïìÝíùí' . '<li><strong>PB</strong> : óçìáßíåé ðùò ç öùôïãñáößá äåí ìðïñåß íá ðñïóôåèåß, åëÝíîôå ôéò ñõèìßóåéò óáò êáé áí Ý÷åôå Üäåéá íá ÷ñçóéìïðïéÞóåôå ôïõò êáôáëüãïõò ðïõ âñßóêïíôáé ïé öùôïãñáößåò' . '<li>Åáí ôá OK, DP, PB \'signs\' äåí åìöáíßæïíôáé, åðéëÝîôå ðÜíù óôçí ìç åìöáíéèåßóá åéêüíá ôïõò íá äåßôå ôé ðñüâëçìá ðáñïõóéÜóôçêå áðü ôçí ãëþóóá PHP' . '<li>Åáí åìöáíßóåé ï browser óáò timeout, îáíáöïñôþóôå ôçí óåëßäá ìå reload' . '</ul>',
        );
// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //
// Void
// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
if (defined('UPLOAD_PHP')) $lang_upload_php = array('title' => 'ÐñïóèÞêç öùôïãñáößáò',
        'max_fsize' => 'Ôï ìÝãéóôï åðéôñåðüìåíï ìÝãåèïò áñ÷åßïõ åßíáé %s KB',
        'album' => 'Aëìðïõì',
        'picture' => 'Öùôïãñáößá',
        'pic_title' => 'Ôßôëïò öùôïãñáößáò',
        'description' => 'ÐåñéãñáöÞ öùôïãñáößáò',
        'keywords' => 'ËÝîåéò ÊëåéäéÜ (äéá÷ùñéóìÝíåò ìå êåíÜ)',
        'err_no_alb_uploadables' => 'Óõãíþìç, äåí õðÜñ÷åé Üëìðïõì ðïõ íá óáò åðéôñÝðåôå ç ðñïóèÞêç öùôïãñáöéþí',
        );
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) $lang_usermgr_php = array('title' => 'Äéá÷åßñçóç ÷ñçóôþí',
        'name_a' => 'üíïìá, áýîïõóá óåéñÜ',
        'name_d' => 'üíïìá, öèßíïõóá óåéñÜ',
        'group_a' => 'ïìÜäá, áýîïõóá óåéñÜ',
        'group_d' => 'ïìÜäá, öèßíïõóá óåéñÜ',
        'reg_a' => 'çìåñïìçíßá åããñáöÞò, áýîïõóá óåéñÜ',
        'reg_d' => 'çìåñïìçíßá åããñáöÞò, öèßíïõóá óåéñÜ',
        'pic_a' => 'áñßèìçóç öùôïãñáöéþí, Üõîïõóá óåéñÜ',
        'pic_d' => 'áñßèìçóç öùôïãñáöéþí, öèßíïõóá óåéñÜ',
        'disku_a' => '÷ñÞóç ÷þñïõ, áýîïõóá óåéñÜ',
        'disku_d' => '÷ñÞóç ÷þñïõ, öèßíïõóá óåéñÜ',
        'sort_by' => 'Óôïß÷çóç ÷ñçóôþí óýìöùíá ìå',
        'err_no_users' => 'Ï ðßíáêáò ÷ñçóôþí åßíáé Üäåéïò !',
        'err_edit_self' => 'Äåí ìðïñåßôå íá ôñïðïðïéÞóåôå ôï ðñïößë óáò, ÷ñçóéìïðïéÞóôå ôçí äéáóýíäåóç \'My profile\' ãéá áõôü',
        'edit' => 'ÔÑÏÐÏÐÏÉÇÓÇ',
        'delete' => 'ÄÉÁÃÑÁÖÇ',
        'name' => 'Ïíïìá ×ñÞóôç',
        'group' => 'ÏìÜäá',
        'inactive' => 'Áíåíåñãüò',
        'operations' => 'Ëåéôïõñãßåò',
        'pictures' => 'Öùôïãñáößåò',
        'disk_space' => '×þñïò óå ÷ñÞóç / ÄéáèÝóéìïò',
        'registered_on' => 'ÅããñÜöçêå óôéò',
        'u_user_on_p_pages' => '%d ÷ñÞóôåò óå %d óåëßäá(åò)',
        'confirm_del' => 'Åßóôå óßãïõñïò ðùò èÝëåôå íá ÄÉÁÃÑÁØÅÔÅ áõôüí ôïí ÷ñÞóôç ? \\nÏëåò ïé öùôïãñáößåò êáé ôá Üëìðïõì ôïõ èá äéáãñáöïýí åðßóçò.',
        'mail' => 'MAIL',
        'err_unknown_user' => 'Ï åðéëåãìÝíïò ÷ñÞóôçò äåí õðÜñ÷åé !',
        'modify_user' => 'Ôñïðïðïßçóç ÷ñÞóôç',
        'notes' => 'Óçìåéþóåéò',
        'note_list' => '<li>Åáí äåí èÝëåôå íá áëëÜîåôå ôï ðáñþí Êùäéêü óáò, áöÞóôå ôï ðåäßï "Êùäéêüò" êåíü',
        'password' => 'Êùäéêüò',
        'user_active' => 'Ï ÷ñÞóôçò åßíáé åíåñãüò',
        'user_group' => 'ÏìÜäá ÷ñçóôþí',
        'user_email' => 'Åmail ÷ñÞóôç',
        'user_web_site' => 'ÐñïóùðéêÞ óåëßäá ÷ñÞóôç',
        'create_new_user' => 'Äçìéïõñãßá íÝïõ ÷ñÞóôç',
        'user_location' => 'Ôïðïèåóßá ÷ñÞóôç',
        'user_interests' => 'ÅíäéáöÝñïíôá ÷ñÞóôç',
        'user_occupation' => 'ÅðÜããåëìá ÷ñÞóôç',
        );
// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) $lang_util_php = array('title' => 'ÁëëáãÞ ìåãÝèïõò öùôïãñáöéþí',
        'what_it_does' => 'Ôé êÜíåé...',
        'what_update_titles' => 'Åíçìåñþíåé ôßôëïõò áðü üíïìá áñ÷åßïõ',
        'what_delete_title' => 'ÄéáãñÜöåé ôßôëïõò',
        'what_rebuild' => 'ÎáíáöôéÜ÷íåé ôá thumbnails êáé ôéò öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò',
        'what_delete_originals' => 'ÄéáãñÜöåé ôéò öùôïãñáößåò ìå ôï áñ÷éêü ìÝãåèïò, áíôéêáèéóôþíôáò ôéò ìå ôéò Üëëåò áëëáãìÝíïõ ìåãÝèïõò',
        'file' => 'Áñ÷åßï',
        'title_set_to' => 'ï ôßôëïò íá ãßíåé',
        'submit_form' => 'õðïâïëÞ',
        'updated_succesfully' => 'åíçìåñþèçêå åðéôõ÷þò',
        'error_create' => 'ËÁÈÏ¡êáôá ôçí äçìéïõñãßá',
        'continue' => 'ÓõíÝ÷åéá ìå åðüìåíåò öùôü',
        'main_success' => 'Ôï áñ÷åßï %s ÷ñçóéìïðïéÞèçêå åðéôõ÷þò óáí ç êõñßùò öùôïãñáößá',
        'error_rename' => 'ËÜèïò êáôÜ ôçí ìåôïíïìáóßá áðü %s óå %s',
        'error_not_found' => 'Ôï áñ÷åßï %s äåí âñÝèçêå',
        'back' => 'ðßóù óôçí êåíôñéêÞ',
        'thumbs_wait' => 'ÅíçìÝñùóç ôùí thumbnails Þ/êáé ôùí öùôïãñáöéþí áëëáãìÝíïõ ìåãÝèïõò, ðáñáêáëþ ðåñéìÝíåôå...',
        'thumbs_continue_wait' => 'ÓõíÝ÷åéá ìå ôçí åíçìÝñùóç ôùí thumbnails Þ/êáé ôùí öùôïãñáöéþí áëëáãìÝíïõ ìåãÝèïõò...',
        'titles_wait' => 'ÅíçìÝñùóç ôßôëùí, ðáñáêáëþ ðåñéìÝíåôå...',
        'delete_wait' => 'ÄéáãñáöÞ ôéôëùí, ðáñáêáëþ ðåñéìÝíåôå...',
        'replace_wait' => 'ÄéáãñáöÞ ðñïôïôýðùí êáé áíôéêáôÜóôáóç ìå ôéò öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò, ðáñáêáëþ ðåñéìÝíåôå...',
        'instruction' => 'ÃñÞãïñåò ïäçãßåò',
        'instruction_action' => 'ÅðéëïãÞ ëåéôïõñãßáò',
        'instruction_parameter' => 'ÅðéëïãÞ ðáñáìÝôñùí',
        'instruction_album' => 'ÅðéëïãÞ áëìðïõì',
        'instruction_press' => 'ÐáôÞóôå %s',
        'update' => 'ÅíçìÝñùóç thumbs Þ/êáé öùôïãñáöéþí áëëáãìÝíïõ ìåãÝèïõò',
        'update_what' => 'Ôé èá ðñÝðåé íá åíçìåñùèåß',
        'update_thumb' => 'Ìüíï ôá thumbnails',
        'update_pic' => 'Ìüíï ïé öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò',
        'update_both' => 'Êáé ôá thumbnails êáé ïé öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò',
        'update_number' => 'ÐëÞèïò öùôïãñáöéþí ðïõ åðåîåñãÜóôçêáí áíÜ êëéê',
        'update_option' => '(Äçëþóôå áõôÞí ôçí åðéëïãÞ ìå áñéèìü ÷áìçëüôåñï áí óáò åìöáíßæåé timeout )',
        'filename_title' => 'Ïíïìá áñ÷åßïõ ? Ôßôëïò Öùôïãñáößáò',
        'filename_how' => 'Ðùò èá ðñåðåé íá ìåôáâëçèåß ï ôßôëïò ôïõ áñ÷åßïõ',
        'filename_remove' => 'Áöáßñåóç ôçò åðÝêôáóçò .jpg êáé áíôéêáôÜóôáóç ìå _ (êÜôù ðáýëá) êáé êåíÜ',
        'filename_euro' => 'ÁëëáãÞ 2003_11_23_13_20_20.jpg óå 23/11/2003 13:20',
        'filename_us' => 'ÁëëáãÞ 2003_11_23_13_20_20.jpg óå 11/23/2003 13:20',
        'filename_time' => 'ÁëëáãÞ 2003_11_23_13_20_20.jpg óå 13:20',
        'delete' => 'ÄéáãñáöÞ ôßôëùí öùôïãñáöéþí Þ öùôïãñáöéþí áñ÷éêïý ìåãÝèïõò',
        'delete_title' => 'ÄéáãñáöÞ ôßôëùí öùôïãñáöéþí',
        'delete_original' => 'ÄéáãñáöÞ öùôïãñáöéþí áñ÷éêïý ìåãÝèïõò',
        'delete_replace' => 'ÄéáãñáöÞ ðñùôüôõðùí öùôïãñáöéþí ìå áíôéêáôÜóôáóç ôïõò áðü ôéò öùôïãñáößåò áëëáãìÝíïõ ìåãÝèïõò',
        'select_album' => 'ÅðéëïãÞ Üëìðïõì',
        ); 
// ------------------------------------------------------------------------- //
// File pagetitle.inc.php
// ------------------------------------------------------------------------- //
$lang_pagetitle_php = array(
'divider' => '>',
    'viewing' => 'Viewing Photo',
    'usr' => "'s Photo Gallery",
    'photogallery' => 'Photo Gallery',
    );

?>