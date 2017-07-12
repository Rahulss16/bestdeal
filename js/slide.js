/**
 * Created by shekhawat on 29/6/17.
 */
var image1= new Image();
image1.src="images/1.jpg";
var image2= new Image();
image2.src="images/2.jpg";
var image3= new Image();
image3.src="images/3.jpg";
var image4= new Image();
image4.src="images/4.jpg";
var image5= new Image();
image5.src="images/5.jpg";

var step=1;
function slideit() {
    document.images.slide.src=eval("image"+step+".src")
    if (step<5)
        step++;
    else
        step=1;
    setTimeout("slideit()",3000)
}
slideit();
