<?php

/**
 * Created by PhpStorm.
 * User: Hamlet
 * Date: 18.11.2016
 * Time: 12:09
 */
class priceController extends Controller
{
    public function actionIndex()
    {
        $this->view->generate('price', NULL);
    }
}