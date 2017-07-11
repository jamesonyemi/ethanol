<?php
$im = imagegrabscreen();
 $ims = imagepng($im, "myscreenshot.png");
imagedestroy($im);
?>