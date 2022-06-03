<?php
model:
$length = (int)readline('Input Length : ');
$width = (int)readline('Input Width : ');
if ($length <=0 | $width <= 0)
{
    goto model;
}
$color = readline('Input Color : ');
$opacity = (float)readline('Input Opacity : ');
echo 'Our model has color : '.$color.' and opacity : '.$opacity.PHP_EOL;

$color = readline('Input Cornor : ');
$opacity = (int)readline('Input softness : ');
echo 'Our model has color : '.$color.' and opacity : '.$opacity;

$color = readline('Input border : ');
$opacity = (int)readline('Input border type : ');
echo 'Our model has color : '.$color.' and opacity : '.$opacity;

echo 'all variable';
?>
