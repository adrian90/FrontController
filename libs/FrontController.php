<?php
session_start();

class FrontController {

    static function main() {
        require_once 'libs/Config.php';
        require_once 'libs/conf.php';
        if (!empty($_GET['command']))
            $controllerName = $_GET['command'] . 'Controller';
        else
            $controllerName = "MainController";

        //Lo mismo sucede con las acciones, si no hay acción, tomamos index como acción
        /*  if(! empty($_GET['accion']))
          $actionName = $_GET['accion'];
          else
          $actionName = "index"; */
        $config = Config::singleton();
        $controllerPath = $config->get('controllersFolder') . $controllerName . '.php';
        //Incluimos el fichero que contiene nuestra clase controladora solicitada
        if (is_file($controllerPath))
            require_once $controllerPath;
        else
            die('El controlador no existe - 404 not found');

        //Si no existe la clase que buscamos y su acción, mostramos un error 404
        /* if (is_callable(array($controllerName, $actionName)) == false)
          {
          trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
          return false;
          } */
        //Si todo esta bien, creamos una instancia del controlador y llamamos a la acción
        $controller = new $controllerName();
        $controller->process();
        //$controller->$actionName();
        //$controller->process();
    }

}
