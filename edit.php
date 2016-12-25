<?php

require __DIR__.'/models/news.php';


$id = $_GET['id'];
$items = News_getOneall($id);





if(!empty($_POST && $_GET)){
    $data = [];
    $id = $_GET['id'];
    if (!empty($_POST['title']&& $_POST['description'] && $_POST['text'] )){
        $data['title'] = $_POST['title'];
        $data['description'] = $_POST['description'];
        $data['text'] = $_POST['text'];
    }

    if (isset($data['title']) && isset($data['description']) && isset($data['text']) && isset($id)){

        News_updateOne($data,$id);
        header('Location: /2news/index.php');
        die;
    }

}







include  __DIR__.'/views/edit.php';

?>