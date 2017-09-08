<?php
$str='http://cms.linran136.com/www.baidu.com';
$s=ltrim(strrchr($str,'/'),'/');
echo $s;
