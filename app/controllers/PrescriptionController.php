<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of PrescriptionController
 *
 * @author TamHH
 */
class PrescriptionController extends Controller{
    //put your code here
    public function addPrescription() {
        $this->setData($this->Prescription->addPrescription($this->dataPost));
    }
    public function getAll() {
        $this->setData($this->Prescription->getAll());
    }
    public function updatePrescription(){
        $data = array(
            'PRESCRIPTION_QUANTITY' => $this->dataPost->PRESCRIPTION_QUANTITY,
            'PRESCRIPTION_IS_MORN' => $this->dataPost->PRESCRIPTION_IS_MORN,
            'PRESCRIPTION_IS_NOON' => $this->dataPost->PRESCRIPTION_IS_NOON,
            'PRESCRIPTION_IS_AFTERNOON' => $this->dataPost->PRESCRIPTION_IS_AFTERNOON,
            'PRESCRIPTION_DAY' => $this->dataPost->PRESCRIPTION_DAY,
        );
        $condition = array(
            'MEDICINCE_CODE'=> $this->dataPost->MEDICINCE_CODE,
            'MEDICAL_CODE'=> $this->dataPost->MEDICAL_CODE,
        );
        $this->setData($this->Prescription->updatePrescription($data, $condition));
    }
    public function delete() {
        $data = array(
            'conditions' => array(
                'MEDICINCE_CODE' => $this->dataPost->MEDICINCE_CODE,
                'MEDICAL_CODE' => $this->dataPost->MEDICAL_CODE,
            )
        );
        $this->setData($this->Prescription->deletePrescription($data));
    }
}
