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
    <h2 align="center">MEGAnews.by</h2>
</div>


<div id="content">
<?php foreach ($items as $item): ?>
<table class="tab">
    <tr>
        <th colspan="4"><a href="index.php?ctrl=News&act=One&id=<?php echo $item->id; ?>"><?php  echo $item->title; ?></a></th>
    </tr>

    <tr>
        <td width="90px"><?php  echo $item->data; ?> </td>
        <td><?php  echo $item->description; ?> </td>
        <td width="90px"><a href="index.php?ctrl=News&act=Delete&id=<?php echo $item->id; ?>">Удалить</a></td>
        <td width="90px"><a href="index.php?ctrl=News&act=Edit&id=<?php echo $item->id; ?>">Изменить</a></td>
        </tr>
    <?php  endforeach;   ?>
</table>
<hr>
    <a href="index.php?ctrl=News&act=Add" >Добавить новость</a>
    <hr>
</div>









</body>

</html>