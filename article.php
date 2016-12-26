<?php

require __DIR__.'/models/news.php';

$id = $_GET['id'];
$items = News :: News_getOne($id);

include  __DIR__.'/views/article.php';

?>