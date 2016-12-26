<?php

require __DIR__.'/models/news.php';

$items = News :: News_getAll();

include  __DIR__.'/views/index.php';

?>