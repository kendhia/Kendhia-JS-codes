<?php

/*
Plugin Name: OnePic
Author: Kendhia 
Description: The plugin detects all pictures on the document(page) that have an ID and turn them all to one picture chosen by the user .
Version: Beta
Author URI : kendhiaa.tk
*/
echo '<script type="text/javascript">'
   , 'window.onload = initAll;

function initAll() {
    for (var i=0; i<document.images.length; i++) {
        Newimage(document.images[i])
    }
}


function Newimage(thisimg) {
    thisimg.outimage = new Image();
    thisimg.outimage.src = thisimg.src;
    thisimg.onmouseout = Changeout;
    
    thisimg.overImage = new Image();
    thisimg.overImage.src = "Images/2.jpg";
    thisimg.onmouseover = ChangeOver;
}

function ChangeOver() {
    this.src = this.overImage.src;
}

function Changeout() {
    this.src = this.outimage.src;
}'
   , '</script>';

?>

<?php
add_action('admin_menu', 'OnePic_menu');

function OnePic_menu() {
   add_options_page('OnePic options', 'OnePic', 'manage_options', 'my-unique-identifier', 'OnePic_options');
}

function OnePic_options() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<div class="wrap">';
	echo '<p><a>URL of the picture: </a> <input id="URL"></p>
    <p><a>In wich part do you want to use this plugin? </a> All pic in the page<input type="checkbox" onClick="justOne1()" id="alls" >
    Header <input type="checkbox" id="Header" onClick="justOne1()"> Body <input type="checkbox" id="body" onClick="justOne1()"> </a> </p>
    <p>Event: dbl click<input type="checkbox" id="dblclick" onClick="justOne2()"> click<input type="checkbox" id="click" onClick="justOne2()"> on mouse over<input type="checkbox" id="onmouseover" onClick="justOne2()"></p>
    <button id="clickbtm" onClick="Checkall()"> Save</button>';

}
?>