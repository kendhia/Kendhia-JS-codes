window.onload = FindPic;
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
}