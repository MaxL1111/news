<?php

require __DIR__.'/models/news.php';



//if (!empty($_GET)){

  //      $id = $_GET['id'];
 //       $items = News_getOne($id);

  //  }

$data = $_GET['id'];

//var_dump($_POST['del']);
if(isset($data)){

    News_deleteOne($data);
   // header('Location: /2news/index.php');
    $a = 'НОВОСТЬ УДАЛЕНА';

} else {
    $b = 'НОВОСТЬ НЕ УДАЛЕНА!!!';
}




include  __DIR__.'/views/delete.php';



?>