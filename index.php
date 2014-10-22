<?php
/**
 * Created by PhpStorm.
 * User: axel
 * Date: 21/10/2014
 * Time: 17:45
 */
require __DIR__.'/vendor/autoload.php';
$name = 'qsjbdfdsk:fbshfbdhgdhgdhvsqdhfbzUFEGZIMEO34567U43é"&&&&  âêî  ééé""é&"';

$slugify = new \Cocur\Slugify\Slugify();

echo $slugify->slugify($name);