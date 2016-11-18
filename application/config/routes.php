<?php

$routes = [
    'main' => 'main/index',
    'profile/edit/([0-9]+)' => 'profile/editUserProfile/$1',
    'mans' => 'user/register',
    '404' => 'main/404',
    'profile/([0-9]+)' => 'profile/index/$1',
    'logout' => 'user/logout',
    'login' => 'user/login',
    'price' =>'price/index'

];