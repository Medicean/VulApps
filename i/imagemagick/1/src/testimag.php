<?php
$im = new Imagick();
$im->newPseudoImage(100, 100, "magick:rose");
$im->setImageFormat("png");
$im->roundCorners(5,3);
$type=$im->getFormat();
header("Content-type: $type");
echo $im->getimageblob();
?>