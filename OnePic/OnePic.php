<?php

/*
Plugin Name: OnePic
Author: Kendhia 
Description: The plugin detects all pictures on the document(page) that have an ID and turn them all to one picture chosen by the user .
Version: Beta
Author URI : kendhiaa.tk
*/
echo '<script type="text/javascript">'
   , 'window.onload = FindPic;
window.onload = initAll;



function FindPic() {
    for (var i=0; i<document.images.length; i++) {
        Newimage(document.images[i]);
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