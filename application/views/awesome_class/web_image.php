<?php

// Create a blank image and add some text
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 253, 195, 191);

imagestring($im, 200, 0, 0,  'WebP with PHP', $text_color);

// Save the image
imagewebp($im, 'php.webp');

// Free up memory
imagedestroy($im);
?>