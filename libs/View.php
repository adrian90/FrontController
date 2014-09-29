<?php

class View {
    private $_controlador;
    public $_title;    
    private $_header;   
    private $_footer;  
    private $_layoutParams;
    
    
    public function __construct() {
        if (!empty($_GET['command']))
            $this->_controlador = $_GET['command'];
        else
            $this->_controlador = "Main";
        $this->titulo = "Canaryfly";
        $this->header = "views/layout/". "header.php";
        $this->footer = "views/layout/". "footer.php";
        
        $this->layoutParams = array (
            'ruta_css' => "views/layout/". "css/",
            'ruta_img' => "views/layout/". "img/",
            'ruta_js' =>  "views/layout/". "css/"
        );
    }
    
    public function render($data){ 
        $rutaVista = 'views/' . $this->_controlador . 'View' . '.php';
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
