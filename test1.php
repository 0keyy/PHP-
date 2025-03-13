<?php
    //可变变量
    //定义两个变量
    $a='b';
    $b='bb';
    echo $a;//b
    echo '<br>';
    echo $$a;//bb 找到$a,解析成b,将前面的$符号与结果b绑定->$b,然后解析$b-->bb
    
    