<?php
$i = 1;
$h = 1;
while ($i < 14)
{
    $i ++;
    $h ++;

    if ($h > 6) $h = 1;

    echo "<h$h>hola</h$h>";
}