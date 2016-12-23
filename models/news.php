<?php

require_once __DIR__.'/../functions/sql.php';

function News_getAll() {

    sql ();



    $sql = 'SELECT * FROM news ORDER BY id DESC';
    $res = mysql_query($sql);
    $ret = [];
        while (false !== ($row = mysql_fetch_array($res))){
            $ret[] = $row;
        }
    return $ret ;
}


function News_getOne($id) {
    sql ();


    $sql = 'SELECT text FROM news WHERE id="'.$id.'"';
    $res = mysql_query($sql);
    $ret = [];
while (false !== ($row = mysql_fetch_array($res))){
    $ret[] = $row;
   }
    return $ret ;

}
