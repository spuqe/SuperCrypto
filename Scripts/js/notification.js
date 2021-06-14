/*===================================
File Name    : notification.js
Description  : Notifications JS.
Author       : Bestwebcreator.
Template Name: Cryptocash – ICO, Cryptocurrency Website & ICO Landing Page HTML + Dashboard Template
Version      : 1.6
===================================*/

var times = [3120, 4442, 5224];
var countries = ['eng','us','fn'];
var themeInterval = setInterval('notification()', time());

function time() {
    return   times[parseInt(Math.random()*7)] + 8000;
}
function notification() {
    spop({
        template: '<div class="sale_notification d-flex align-items-center"><img src="Content/images/about_icon.png" alt="" /> <div class="notification_inner"> <h3>'+Math.floor(Math.random()*60000 + 3000)+' ICC</h3><p>Sold in <img src="Content/images/'+countries[Math.floor(Math.random()*3)]+'.png" alt="" /></p></div></div>',
        group: 'submit-satus',
		style     : 'nav-fixed',// error or success
        position  : 'bottom-left',
        autoclose: 5000,
        icon: false
    });
    clearInterval(themeInterval);
    themeInterval = setInterval('notification()', time());
}