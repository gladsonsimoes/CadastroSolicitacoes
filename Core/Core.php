<?php


class Core{
    public function run($routes)
    {
        $url = '/';

        //se o usuário não passar nada na url retornará vazio
        isset($_GET['url']) ? $url .= $_GET['url'] : '';

        //pegando o array de rotas e passando como controller
        foreach($routes as $path => $controller){
            //expressão regular para pegar somente valores alfanumerico (letras e numeros)
            $pattern = '#^'.preg_replace('/{id}/' , '(\w+)' , $path).'$#';

            //condicao para pegar a expressao da url pattern e passar para a matches o que foi passado
            if(preg_match($pattern, $url, $matches))
            {
                // echo '<pre>';
                // print_r($matches);

                //removendo o primeiro elemento do array
                array_shift($matches);

                // echo '<pre>';
                // print_r($matches);

                //currentController vai chamar o arquivo controller
                //action vai ser a funcao do controller 
                [$currentController, $action] = explode('@' , $controller);

                //chamando o arquivo dos controladores
                require_once __DIR__."/../Controllers/$currentController.php";

                //instanciando objeto e a funcao action
                $newController = new $currentController();
                $newController->$action($matches);
            }
        }
    }
}