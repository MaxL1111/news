<?php

class NewsController {

    public function actionAll(){
        $items = News :: News_getAll();
        include  __DIR__.'/../views/index.php';
    }

    public function actionOne(){
        $id = $_GET['id'];
        $items = News :: News_getOne($id);
        include  __DIR__.'/../views/article.php';
    }


    public function actionAdd(){
        include  __DIR__.'/../views/add.php';
    }

    public function actionAdd2(){
        if(!empty($_POST)){
            $data = [];
            if (!empty($_POST['title']&& $_POST['descr'] && $_POST['text'] )){
                $data['title'] = $_POST['title'];
                $data['descr'] = $_POST['descr'];
                $data['text'] = $_POST['text'];

                if (isset($data['title']) && isset($data['descr']) && isset($data['text'])){
                    News :: News_insertOne($data);
                    header('Location: /2news/index.php');
                    die;
                }
            }
        }
    }



    public function actionDelete(){
        $data = $_GET['id'];
        if(isset($data)){
            News :: News_deleteOne($data);

            $a = 'НОВОСТЬ УДАЛЕНА';
        } else {
            $b = 'НОВОСТЬ НЕ УДАЛЕНА!!!';
        }
        include  __DIR__.'/../views/delete.php';

    }

    public function actionEdit()
    {
        $id = $_GET['id'];
        $items = News:: News_getOneall($id);



        include __DIR__ . '/../views/edit.php';

    }


    public function actionEdit2(){

        if (!empty($_POST && $_GET)) {
            $data = [];
            $id = $_GET['id'];
            if (!empty($_POST['title'] && $_POST['description'] && $_POST['text'])) {
                $data['title'] = $_POST['title'];
                $data['description'] = $_POST['description'];
                $data['text'] = $_POST['text'];
            }

            if (isset($data['title']) && isset($data['description']) && isset($data['text']) && isset($id)) {
                News:: News_updateOne($data, $id);
                header('Location: /2news/index.php');
                die;
            }
        }

    }




}