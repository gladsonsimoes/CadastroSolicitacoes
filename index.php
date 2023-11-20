<?php

//chamando os arquivos Core e Routes 
require_once __DIR__.'/Core/Core.php';
require_once __DIR__.'/Router/routes.php';

//instanciando o objeto Core e iniciando sua função run
$core = new Core();
$core->run($routes);