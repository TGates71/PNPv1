<?php

/******************************************************/
/* ================================                   */
/* Enhanced Downloads Module - V3.0                   */
/* ================================                   */
/*                                                    */
/* Released: January, 8 2017                          */
/* Modified by w2ibc http://www.w2ibc.com             */
/* w2ibc@w2ibc.com                                    */
/*                                                    */
/* ================================                   */
/* Enhanced Downloads Module - V2.1                   */
/* ================================                   */
/*                                                    */
/* Released: January, 14 2003                         */
/* Copyright (c) 2003 by Shawn Archer                 */
/* shawn@nukestyles.com                               */
/* http://www.NukeStyles.com                          */
/*                                                    */
/******************************************************/
/*                                                    */
/* Copyright Notice:                                  */
/* =================                                  */
/*                                                    */
/* Francisco Burzi & the Nuke credits MUST            */
/* remain. Please be fair with everyone that helps    */
/* you with this great CMS Script.                    */
/*                                                    */
/******************************************************/


$result = $db->sql_query("select name from ".$prefix."_ns_downloads_theme where id='$id'");
list($name) = $db->sql_fetchrow($result);

echo "
<html>
<head>
<title>NukeStyles Admin Help</title>
<link rel=\"stylesheet\" href=\"themes/$name/style/style.css\" type=\"text/css\">
</head>
<body>
<center><a href=\"http://www.nukestyles.com\">NukeStyles Admin Help</a></center>
<strong>Setup</strong><br />
NukeStyles<br /><br />

<center><input type=\"button\" value=\"Close Window\" onclick=\"window.close()\"></center>

</body></html>";

?>