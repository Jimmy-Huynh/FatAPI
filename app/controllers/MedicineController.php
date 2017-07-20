<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of MedicineController
 *
 * @author TamHH
 */
class MedicineController extends Controller{
    //put your code here
    public function addMedicine() {
        $this->setData($this->Medicine->addMedicine($this->dataPost));
    }
    public function getAll() {
        $this->setData($this->Medicine->getAll());
    }
    public function updateMedicine(){
        $data = array(
            'MEDICINE_NAME' => $this->dataPost->MEDICINE_NAME,
            'MEDICINE_PRICE' => $this->dataPost->MEDICINE_PRICE,
            'MEDICINE_UNIT' => $this->dataPost->MEDICINE_UNIT,
        );
        $roleCode = $this->dataPost->MEDICINE_CODE;
        $this->setData($this->Medicine->updateMedicine($data, $roleCode));
    }
    public function delete() {
        $data = array(
            'conditions' => array('MEDICINE_CODE' => $this->dataPost->MEDICINE_CODE)
        );
        $this->setData($this->Medicine->deleteMedicine($data));
    }
}
