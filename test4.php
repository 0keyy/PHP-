<?php
header("content-type:text/html;charset=utf-8");
//系统常量
echo PHP_VERSION,'<br>',PHP_OS,'<br>',PHP_INT_SIZE,'<br>',PHP_INT_MAX;

//魔术常量
echo '<hr>';
echo __DIR__,'<br>',__FILE__,'<br>',__LINE__,'<br>';
echo __LINE__;
echo "你好！";