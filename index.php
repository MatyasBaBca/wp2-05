<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php
     
     $computers[0]["CPU"] = "Intel Core i5";
     $computers[0]["RAM"] = "8 GB";
     $computers[0]["GPU"] = "nVidia 9999 GT";
     $computers[0]["keyboard"] = "HyperX Alloy FPS Red Mechanical Keyboard";
     $computers[0]["monitor"] = "43 Samsung 43CJ89";
     $computers[0]["mouse"] = "A4tech Bloody V7";
     $computers[0]["SSD"] = "Samsung 860 EVO 500GB";

     $computers[1]["CPU"] = "Intel Core i7";
     $computers[1]["RAM"] = "16 GB";
     $computers[1]["GPU"] = "nVidia 2080 TI";
     $computers[1]["keyboard"] = "HyperX Allien FPS";
     $computers[1]["monitor"] = "43 Samsung 43DG69";
     $computers[1]["mouse"] = "A5tech Bleedy V8";
     $computers[1]["SSD"] = "Samsung 850 EVA 250GB";

    for ($i=0; $i < count($computers); $i++)
    {
     echo "computers $i:<br>
    CPU: {$computers[$i]['CPU']}<br>
    GPU: {$computers[$i]['GPU']}<br>
    RAM: {$computers[$i]['RAM']}<br>
    Monitor: {$computers[$i]['keyboard']}<br>
    Keyboard: {$computers[$i]['monitor']} <br>
    Mouse: {$computers[$i]['mouse']} <br>
    SSD: {$computers[$i]['SSD']} <br> <br>";
}
    ?>
    


 </body>
 </html>