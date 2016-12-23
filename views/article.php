<!DOCTYPE html>
<html>
<head>
    <META name="Content-Type" content="text/html; charset=utf-8">
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="views/style.css">
    <title>Новости</title>
</head>
<body>

<div id="header">
    <h2 align="center">Новостной сайт</h2>
</div>


<div id="content">

    <?php


    foreach ($items as $item): ?>
    <table class="tab">
        <tr>
            <th><?php  echo $item['title']; ?></th>
        </tr>

        <tr>
            <td><?php  echo $item['text']; ?> </td>
        </tr>
        <?php  endforeach;   ?>
    </table>

</div>



</body>

</html>