<?php

require_once 'models/TestModel.php';
require_once 'Controller.php';

class TestController extends Controller {

    public function process() {
        $model = new TestModel();
        $data = $model->infonocList2();

        $this->_view->render($data);
        
        //Lanzar peticiones a otro controlador
        //header("Location: index.php?command=Main");
    }

}
