<?php

abstract class AbstractModel
{
    // protected (защищенный)- разрешает доступ наследуемым и родительским классам
    protected static $table;
    protected static $class;
    //“ак как статические методы вызываютс€ без создани€ экземпл€ра класса, то псевдо-переменна€
    //this не доступна внутри метода, объ€вленного статическим.

    public static function News_getAll() {

        $db = new DB();
        $sql = 'SELECT * FROM '. static::$table. ' ORDER BY id DESC';
        return $db->query($sql, static::$class);
    }


    public static function News_getOne($id)
    {
        $db = new DB();
        $sql = 'SELECT text, title FROM '. static::$table. ' WHERE id="' . $id . '"';
        return $db->query($sql, static::$class);
    }

////////////////
    public static function News_insertOne($data)
    {
        $db = new DB();
            $db->queryinsert("INSERT INTO ". static::$table. " (title, description, text) VALUES ('" . $data['title'] . "',
        '" . $data['descr'] . "','" . $data['text'] . "')");
    }

    public static function News_deleteOne($data)
    {
        $db = new DB();
        $db->queryinsert("DELETE FROM ". static::$table. " WHERE id='" . $data . "'");
    }

    public static function News_getOneall($id)
    {
        $db = new DB();
        $sql = 'SELECT id, title, description, text  FROM '. static::$table. ' WHERE id="' . $id . '"';
        return $db->query($sql, static::$class);
    }

    public static function News_updateOne($data, $id)
    {
        $db = new DB();
        $db->queryinsert("UPDATE news SET title = '" . $data['title'] . "', description = '" . $data['description'] . "', text = '" . $data['text'] . "' WHERE id = '" . $id . "' ");
    }


}