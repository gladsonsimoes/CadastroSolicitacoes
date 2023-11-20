<?php

/* arquivo das routas */

$routes = [
    '/' => 'IndexController@index',
    '/user/{id}' => 'UserController@show',
    '/solicitacao/{id}' => 'SolicitacaoController@show'
];