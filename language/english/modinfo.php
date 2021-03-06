<?php
/**
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * SmallWorld
 *
 * @copyright    The XOOPS Project (https://xoops.org)
 * @copyright    2011 Culex
 * @license      GNU GPL (http://www.gnu.org/licenses/gpl-2.0.html/)
 * @package      SmallWorld
 * @since        1.0
 * @author       Michael Albertsen (http://culex.dk) <culex@culex.dk>
 */

define('_MI_SMALLWORLD_MODULE_NAME', 'Smallworld');
define('_MI_SMALLWORLD_MODULE_DESC', 'A social network module in the small. With wall and profiling');
define('_MI_SMALLWORLD_ADMENU', 'Administration');
define('_MI_SMALLWORLDMENU_INDEX', 'Home');
define('_MI_SMALLWORLDMENU_STATS', 'Statistics');
define('_MI_SMALLWORLDMENU_USERADMIN', 'User Admin');
define('_MI_SMALLWORLDMENU_HELP', 'Help');
define('_MI_SMALLWORLDMENU_ABOUT', 'About');

/* -------- Configs ---------- */

// Map apis
define('_MI_SMALLWORLD_USEGOOGLEMAPS', 'Use google maps geolocation Api ?');
define('_MI_SMALLWORLD_USEGOOGLEMAPS_DESC', 'Default yes');

// Messages per page
define('_MI_SMALLWORLD_MSGTOSHOW', 'Messages to show ?');
define('_MI_SMALLWORLD_MSGTOSHOW_DESC', 'How many messages (updates) to show from the beginning on profile and index page.');

// Use validation
define('_MI_SMALLWORLD_VALIDATIONSTRENGHT', 'Validation of steps');
define('_MI_SMALLWORLD_VALIDATIONSTRENGHT_DESC', 'Use validation on register and edit profile.<br><br>Options are:<br><br>No: No validation<br>Yes: Most *important* fields must be validated ');

// Smallworld take-over user name links ?
define('_MI_SMALLWORLD_TAKEOVERLINKS', 'Convert username links to smallworld');
define('_MI_SMALLWORLD_TAKEOVERLINKS_DESC', "Smallworld will use a small javascript to change links on load to point to userprofile<br>instead of userinfo.php<br><br>Default is 'no'");

define('_MI_SMALLWORLD_USERSOWNMSGCOUNTS', 'Users own posts count in check ? ');
define('_MI_SMALLWORLD_USERSOWNMSGCOUNTS_DESC', 'Every 10 seconds the posts of your followers are counted and a refresh button will show, <br>if result is not 0. If you choose yes to this, this button will also react when you post/delete posts.');

define('_MI_SMALLWORLD_BOOKMARSAVATARS', 'Use Smallworld Logo when bookmarking ? ');
define('_MI_SMALLWORLD_BOOKMARKSAVATARS_DESC', "When posts are public and you want to share on social networks. You can here decide whether to use<br>smallworld logo as shared image or 'no' = the posting users avatar.<br><br>Default is 'yes' = smallworld logo.");

define('_MI_SMALLWORLD_USEMAILNOTIFICATION', 'Use mail notifications ? ');
define('_MI_SMALLWORLD_USEMAILNOTIFICATION_DESC', "When new user register a mail is sent to admin, or when a comment is added to a post where user is part a mail is sent to user.<br><br>Default is 'yes'");

// Select fields & Mandetory fields
define('_MI_SMALLWORLD_VIEWFIELDS', 'Use fields in registration and profile');
define('_MI_SMALLWORLD_VIEWFIELDS_DESC', 'Select fields to use in registration form and in profile viewing<br>Use control + mouse to multiselect');
define('_MI_SMALLWORLD_VERIFYFIELDS', 'Use verification on fields in registration');
define('_MI_SMALLWORLD_VERIFYFIELDS_DESC', 'Select (*) mandatory fields in registration form<br>Use control + mouse to multiselect');

define('_MI_SMALLWORLD_REALNAME', 'Real name');
define('_MI_SMALLWORLD_GENDER', 'Gender');
define('_MI_SMALLWORLD_INTERESTEDIN', 'Interested in');
define('_MI_SMALLWORLD_RELATIONSHIPSTATUS', 'relationship status');
define('_MI_SMALLWORLD_PARTNER', 'Partner');
define('_MI_SMALLWORLD_LOOKINGFOR', 'Looking for');
define('_MI_SMALLWORLD_BIRTHDAY', 'Birthday');
define('_MI_SMALLWORLD_BIRTHPLACE', 'Birth place');
define('_MI_SMALLWORLD_POLITICALVIEWS', 'Political views');
define('_MI_SMALLWORLD_RELIGIOUSVIEWS', 'Religious view');
define('_MI_SMALLWORLD_EMAILS', 'Emails');
define('_MI_SMALLWORLD_SCREENNAMES', 'screennames');
define('_MI_SMALLWORLD_MOBILE', 'mobile');
define('_MI_SMALLWORLD_LANDPHONE', 'landphone');
define('_MI_SMALLWORLD_STREETADRESS', 'street adress');
define('_MI_SMALLWORLD_PRESENTCITY', 'present city');
define('_MI_SMALLWORLD_COUNTRY', 'country');
define('_MI_SMALLWORLD_WEBSITE', 'website');
define('_MI_SMALLWORLD_INTERESTS', 'Interests');
define('_MI_SMALLWORLD_FAVOURITEMUSIC', 'Favourite music');
define('_MI_SMALLWORLD_FAVOURITETVSHOWS', 'Favourite tvshows');
define('_MI_SMALLWORLD_FAVOURITEMOVIES', 'Favourite movie');
define('_MI_SMALLWORLD_FAVOURITEBOOKS', 'Favourite books');
define('_MI_SMALLWORLD_ABOUTME', 'About me');
define('_MI_SMALLWORLD_EDUCATION', 'Education');
define('_MI_SMALLWORLD_EMPLOYMENT', 'Employment');

//Private or public module
define('_MI_SMALLWORLD_PRIVATEMODULE', 'Show public posts ?');
define('_MI_SMALLWORLD_PRIVATEMODULE_DESC', 'If "yes" then all visiters can read posts marked "public" by authorized author. Commenting/posting/editing etc are all still inactive until logged in.');

// Limit users access to public posting

define('_MI_SHOWPUBLICPAGE', 'Limit the posting to public to these users.');
define('_MI_SHOWPUBLICPAGE_DESC', 'Default is "All users" wich means that all users will have their "public" posts shown on publicindex.php.<br>
    If you use a limiter and not newer users are shown here, do a smallworld module update in administration to <br>
    show the latest users.
        ');
define('_MI_SMALLWORLD_ALL', 'All users');

//1.16
//Help
define('_MI_SMALLWORLD_DIRNAME', basename(dirname(dirname(__DIR__))));
define('_MI_SMALLWORLD_HELP_HEADER', __DIR__.'/help/helpheader.tpl');
define('_MI_SMALLWORLD_BACK_2_ADMIN', 'Back to Administration of ');
define('_MI_SMALLWORLD_OVERVIEW', 'Overview');

//define('_MI_SMALLWORLD_HELP_DIR', __DIR__);

//help multi-page
define('_MI_SMALLWORLD_DISCLAIMER', 'Disclaimer');
define('_MI_SMALLWORLD_LICENSE', 'License');
define('_MI_SMALLWORLD_SUPPORT', 'Support');
