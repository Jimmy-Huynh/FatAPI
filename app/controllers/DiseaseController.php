<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of DiseaseController
 *
 * @author TamHH
 */
class DiseaseController extends Controller {
    //put your code here
    public function addDisease() {
        $this->setData($this->Disease->addDisease($this->dataPost));
    }
    public function getAll() {
        $this->setData($this->Disease->getAll());
    }
    public function updateDisease(){
        $data = array(
            'DISEASE_NAME' => $this->dataPost->DISEASE_NAME,
            'DISEASE_DESCRIPTION' => $this->dataPost->DISEASE_DESCRIPTION,
        );
        $roleCode = $this->dataPost->DISEASE_CODE;
        $this->setData($this->Disease->updateDisease($data, $roleCode));
    }
    public function delete() {
        $data = array(
            'conditions' => array('ROLE_CODE' => $this->dataPost->ROLE_CODE)
        );
        $this->setData($this->Disease->deleteDisease($data));
    }
}
