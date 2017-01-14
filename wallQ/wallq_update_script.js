$(document).ready(function(){
        var $herlaad_module1 =$(".module1");
        setInterval(function () {
           $herlaad_module1.load("module1.php");
}, 10000);
});

$(document).ready(function(){
        var $herlaad_module2 =$(".module2");
        setInterval(function () {
           $herlaad_module2.load("module2.php");
}, 120000);
});

$(document).ready(function(){
        var $herlaad_led =$(".led");
        setInterval(function () {
           $herlaad_led.load("led.php");
}, 10000);
});

$(document).ready(function(){
        var $herlaad_naam1 =$(".naam1");
        setInterval(function () {
           $herlaad_naam1.load("naam1.php");
}, 10000);
});

$(document).ready(function(){
        var $herlaad_ti =$("title");
        setInterval(function () {
           $herlaad_ti.load("ti.php");
}, 10000);
});

$(document).ready(function(){
        var $herlaad_linken =$(".foooter");
        setInterval(function () {
           $herlaad_linken.load("foooter.php");
}, 60000);
});

$(document).ready(function(){
        var $herlaad_subs =$(".onder");
        setInterval(function () {
           $herlaad_subs.load("subs.php");
}, 10000);
});