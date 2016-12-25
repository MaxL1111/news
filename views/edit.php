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

<form action="edit.php?id=<?php echo $item['id'] ?>" method="post">
    <p>Заголовок статьи  <input type="text" name="title" value="<?php  echo $item['title']; ?>"></p>
    <label><p>Описание статьи <br> <textarea name="description" cols="30" rows="4"><p><?php  echo $item['description']; ?></p>
            </textarea></p></label>
    <label><p>Текст статьи <br> <textarea name="text" cols="30" rows="4" ><p><?php  echo $item['text']; ?></p>
            </textarea></p></label>
    <?php endforeach;   ?>
    <input type="submit" value="Изменить">
</form>



</div>









</body>

</html>