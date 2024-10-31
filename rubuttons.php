<?php
/*
Plugin Name: rusocialbuttons
Plugin URI: http://wordpress.org/extend/plugins/ru-social-buttons/
Description: buttons of ru social networks.
Version: 1.1.0.9
Author: Alexander Kriventsev aka seomaverick
Author URI: http://seomaverick.ru
*/

/*  Copyright 2010  Alexander Kriventsev aka Seomaverick  (email: seomaverick@seomaverick.ru)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
/**
 * Includes
 */
/**
 * Classes
 */
/**
 * constants
 */
/**
 * Initialization
 */

add_filter('the_content', 'add_buttons' );
add_action('wp_head','add_head');
add_action('activate_plugin','add_head');
/**
 * functions
 */
function add_head(){
    echo '<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>';
    echo '<script type="text/javascript" src="http://vkontakte.ru/js/api/share.js?9" charset="windows-1251"></script>';
    echo '<link rel="stylesheet" href="'.get_bloginfo('wpurl').'/wp-content/plugins/ru-social-buttons/rubuttons.css" type="text/css" media="screen" />';
    echo '<script src="http://connect.mail.ru/js/api/share.js" type="text/javascript"></script>';
    echo '<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>';
}


function add_buttons($content){
    $facebook='<div class="cb_item"><a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php">Facebook</a></div>';
    $mailru='<div class="cb_item"><a class="mrc__share" href="http://connect.mail.ru/share">Поделиться</a></div>';
    $vk='<div class="cb_itemtop"><script type="text/javascript"><!--
document.write(VK.Share.button(false,{type: "round", text: "Сохранить"}));
--></script></div>';
    $tw='<div class="cb_itemright"><a href="http://twitter.com/share" class="twitter-share-button">Tweet</a></div>';
    $backlink='<div class="backlink"><a href="http://propera.ru/?p=6">Кнопки социальных сетей</a></div>';
    return $content.'<div class="cb_lcol"><div class="intext">Понравилось? Поделись с друзьями!</div><div class="cb_services"><div class="cb_services-all">'.$tw.$facebook.$vk.$mailru.'</div></div><br/>'.$backlink.'</div><br/>';
}

function activate(){

}