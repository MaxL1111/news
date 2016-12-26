<?php

require __DIR__.'/models/news.php';


$data = $_GET['id'];

if(isset($data)){

    News :: News_deleteOne($data);

    $a = 'НОВОСТЬ УДАЛЕНА';
} else {
    $b = 'НОВОСТЬ НЕ УДАЛЕНА!!!';
}


include  __DIR__.'/views/delete.php';

?>