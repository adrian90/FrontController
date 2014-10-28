<?php

require_once 'models/MainModel.php';
require_once 'Controller.php';

class InicioController extends Controller {

    public function process() {
        $model = new MainModel();
        $data = $model->infonocList();

        $this->_view->render($data);
    }

}
