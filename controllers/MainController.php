<?php

require_once 'models/MainModel.php';

class MainController {

    public function process() {
        $db = new MainModel();
        $building = $db->buildingList();

        require_once '/views/MainView.php';
    }

}
