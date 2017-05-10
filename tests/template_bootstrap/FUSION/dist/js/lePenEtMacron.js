/**
 * Created by dulexsa on 08.05.2017.
 */
/**
 * Created by dulexsa on 03.05.2017.
 */
function pageScrollDown() {
    //window.scrollBy(0,200); // horizontal and vertical scroll increments
    var elements = document.getElementsByTagName("body");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.cursor="url('../pages/macron2.png')42 10, auto";
    }
    var elements = document.getElementsByTagName("a");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.cursor="url('../pages/macron2.png')42 10, auto";
    }
    var elements = document.getElementsByTagName("input");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.cursor="url('../pages/macron2.png')42 10, auto";
    }
    var elements = document.getElementsByTagName("label");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.cursor="url('../pages/macron2.png')42 10, auto";
    }
    scrolldelay = setTimeout('pageScrollUp()',100); // scrolls every 100 milliseconds

}
function pageScrollUp(){
    //window.scrollBy(0,200); // horizontal and vertical scroll increments
    var elements = document.getElementsByTagName("body");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.cursor="url('../pages/lepen.png')42 10, auto";
    }
    var elements = document.getElementsByTagName("a");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.cursor="url('../pages/lepen.png')42 10, auto";
    }
    var elements = document.getElementsByTagName("input");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.cursor="url('../pages/lepen.png')42 10, auto";
    }
    var elements = document.getElementsByTagName("label");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.cursor="url('../pages/lepen.png')42 10, auto";
    }
    scrolldelay = setTimeout('pageScrollDown()',100); // scrolls every 100 milliseconds
}
