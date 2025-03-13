<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin:300px auto;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0">
        <tr>
            <th colspan="2">
                <b>
                    服务器信息展示
                    <b>
                </th>
        </tr>
        <tr>
            <td>
                当前PHP版本号:
            </td>
            <td>
                <?php
                   echo PHP_VERSION;
                   ?>;
            </td>
        </tr>
        <tr>
            <td>
                操作系统的类型：
            </td>
            <td>
                <?php
                    echo PHP_OS
                    ?>;
            </td>
        </tr>
    </table>
</body>
</html>