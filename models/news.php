<?php

require_once __DIR__.'/../classes/DB.php';

class News
{
    public $id;
    public $title;
    public $data;
    public $description;
    public $text;

    public static function News_getAll()
    {
        $db = new DB();
        return $db->query('SELECT * FROM news ORDER BY id DESC', 'News');
    }

    public static function News_getOne($id)
    {
        $db = new DB();
        return $db->query('SELECT text, title FROM news WHERE id="' . $id . '"', 'News');
    }

    public static function News_insertOne($data)
    {
        $db = new DB();
        $db->queryinsert("INSERT INTO news (title, description, text) VALUES ('" . $data['title'] . "',
        '" . $data['descr'] . "','" . $data['text'] . "')");
    }

    public static function News_deleteOne($data)
    {
        $db = new DB();
        $db->queryinsert("DELETE FROM news WHERE id='" . $data . "'");
    }

    public static function News_getOneall($id)
    {
        $db = new DB();
        return $db->query('SELECT id, title, description, text  FROM news WHERE id="' . $id . '"', 'News');
    }

    public static function News_updateOne($data, $id)
    {
        $db = new DB();
        $db->queryinsert("UPDATE news SET title = '" . $data['title'] . "', description = '" . $data['description'] . "', text = '" . $data['text'] . "' WHERE id = '" . $id . "' ");
    }
}


/*
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
    $sql = 'SELECT text, title FROM news WHERE id="'.$id.'"';
    $res = mysql_query($sql);
    $ret = [];
while (false !== ($row = mysql_fetch_array($res))){
    $ret[] = $row;
   }
    return $ret ;
}

function News_insertOne($data) {
        $sql = "INSERT INTO news (title, description, text) VALUES ('" . $data['title'] ."',
        '" . $data['descr'] . "','" . $data['text'] . "')";
        sql();
        mysql_query($sql);
}

function News_deleteOne($data) {
    sql ();
    $sql = "DELETE FROM news WHERE id='".$data."'";
    mysql_query($sql);
}

function News_getOneall($id) {
    sql ();
    $sql = 'SELECT id, title, description, text  FROM news WHERE id="'.$id.'"';
    $res = mysql_query($sql);
    $ret = [];
    while (false !== ($row = mysql_fetch_array($res))){
        $ret[] = $row;
    }
    return $ret ;
}

function News_updateOne($data,$id) {
    sql ();
    $sql = "UPDATE news SET title = '".$data['title']."', description = '".$data['description']."', text = '".$data['text']."' WHERE id = '".$id."' ";
    mysql_query($sql);
}

*/

