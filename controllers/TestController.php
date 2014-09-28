<?php

require_once 'models/TestModel.php';

class TestController {

    public function process() {
        $db = new TestModel();
        $city = $db->cityList();

        require_once '/views/TestView.php';
    }

}
