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
    <p>Здесь вы можете добавить свою новость!</p>

    <form action="add.php" method="post">
    <p>Заголовок статьи  <input type="text" name="title" value="Ну что бля"></p>
    <label><p>Описание статьи <br> <textarea name="descr" cols="30" rows="4">Типовой договор
            </textarea></p></label>
    <label><p>Текст статьи <br> <textarea name="text" cols="30" rows="4" >Типовой договор.Отдаю свою душу, а взамен получаю здоровье и бессмертие.
            </textarea></p></label>
    <input type="submit" value="Опубликовать">
    </form>



</div>


</body>

</html>