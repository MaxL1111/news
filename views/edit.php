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
<p>Здесь вы можете внести изменения в новость!</p>



<?php foreach ($items as $item): ?>

<form action="index.php?ctrl=News&act=Edit2&id=<?php echo $item->id ?>" method="post">
    <p>Заголовок статьи</p>  <input type="text" name="title" value="<?php  echo $item->title; ?>">
    <label><p>Описание статьи</p> <textarea name="description" cols="30" rows="4"><?php  echo $item->description; ?>
            </textarea></label>
    <label><p>Текст статьи</p> <textarea name="text" cols="30" rows="4" ><?php  echo $item->text; ?>
            </textarea></label>
    <?php endforeach;   ?><br>
    <input type="submit" value="Изменить">
</form>



</div>









</body>

</html>