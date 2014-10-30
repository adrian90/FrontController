<?php

class View {
    private $_controlador;
    public $_title;    
    private $_header;   
    private $_footer;  
    private $_layoutParams;
    
    
    public function __construct() {
        $uri = explode('/',$_SERVER["REQUEST_URI"]);
        $uri = array_pop($uri);
        
        /*if (!empty($_GET['command']))
            $this->_controlador = $_GET['command'];
        else
            $this->_controlador = "Main";*/
        
        if (!empty($uri))
            $this->_controlador = $uri;
        else
            $this->_controlador = "Inicio";
        
        $this->titulo = "Canaryfly";
        $this->header = "view/layout/". "header.php";
        $this->footer = "view/layout/". "footer.php";
        
        $this->layoutParams = array (
            'ruta_css' => "view/layout/". "css/",
            'ruta_img' => "view/layout/". "img/",
            'ruta_js' =>  "view/layout/". "css/"
        );
    }
    
    public function render($data){ 
        $rutaVista = 'view/' . $this->_controlador . 'View' . '.php';
        if (is_readable($rutaVista)){
            require_once $this->header;
            require_once $rutaVista;
            require_once $this->footer;
        } else {
            throw new Exception('View exception: '.$rutaVista.' no es accesible');
        }
    }

    // Indicar el titulo de la vista
    public function setTitle($title){
        $this->title = $title;
    }
    
    // Por si se desea usar un header o un footer distinto.
    // Es necesario poner la ruta completa.
    public function setHeader($header){
        $this->header = $header;
    }
    
    public function setFooter($footer){
        $this->footer = $footer;
    }
    
    // Para modificar los parametros del layout.
    // Con la opcion "all" pasamos a modificar los 3 parametros (ruta_css, ruta_js y ruta_img)
    // y, por lo tanto, $paramas es un array.
    // Si indicas, por ejemplo, la opcion "ruta_css", la variable $paramas setá 
    // una string con la ruta de ese único campo.
    public function setParams( $option = "all", $params ){
        //teclea codigo...
    }
}
