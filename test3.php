<?php
//php常量
//使用函数定义：define
define('PI',3.14);
echo PI;
echo '<br>';
//使用const关键字定义
const PII=3;
echo PII;
echo '<br>';
define('-_-',23);
//const -_-='smile';//错误
//echo -_-;//错误
echo constant('-_-');