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
        <th colspan="2"><a href="article.php?id=<?php echo $item['id'] ?>"><?php  echo $item['title']; ?></a></th>
    </tr>

    <tr>
        <td width="90px"><?php  echo $item['data']; ?> </td>
        <td><?php  echo $item['description']; ?> </td>
        </tr>
    <?php  endforeach;   ?>
</table>
</div>

<a href="add.php">Добавить новость</a>








</body>

</html>