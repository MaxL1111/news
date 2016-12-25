<?php


require __DIR__.'/models/news.php';



if(!empty($_POST)){
    $data = [];
    if (!empty($_POST['title']&& $_POST['descr'] && $_POST['text'] )){
        $data['title'] = $_POST['title'];
        $data['descr'] = $_POST['descr'];
        $data['text'] = $_POST['text'];
    }

if (isset($data['title']) && isset($data['descr']) && isset($data['text'])){
    News_insertOne($data);
    header('Location: /2news/index.php');
    die;
}

}


include  __DIR__.'/views/add.php';



