<?php

//use application\core\Controller;
//use application\model\registration;

class mainController extends Controller
{
    public function actionIndex()
    {
        if(isset($_SESSION['user']))
        {
            header('Location:/profile/'.$_SESSION['user']['user_id']);
        }
        else
        {
            $this->view->generate('main_view');

        }
    }

    public function action404()
    {
        $this->view->generate('404');
    }

}