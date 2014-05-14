<?php
/*
Plugin Name: GA Link Tracker
Plugin URI: http://project107.net/GA-Link-Tracker
Description: A WP Plugin to automagically add code to href's to track as events in Google Analytics. That's it. v2 uses analyics.js NOT ga.js
Version: 2.1
Author: PROJECT107
Author URI: http://project107.net
License: GPL2

Copyright 2014  PROJECT107  (email : chris@project107.net)

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
add_filter( 'the_content', 'GA_Link_Tracker' );
// Main link tracker function
function GA_Link_Tracker($content){
    if (preg_match('/href="([^"]*)"/i', $content, $regs)){
        $result = $regs[1];
        $needle = "<a";
        $content = str_replace($needle, "<a onclick=\"ga('send', 'event', 'Links', 'click', '". $result ."');\"", $content);
    }
    return $content;
}
?>