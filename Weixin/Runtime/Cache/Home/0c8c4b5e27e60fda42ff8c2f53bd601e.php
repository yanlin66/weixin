<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增图片</title>
</head>
<body>
    <form action="/home/index/add" method="post">
        <table>
            <tr>
                <td>
                    <input type="file" name="uploadfile" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>