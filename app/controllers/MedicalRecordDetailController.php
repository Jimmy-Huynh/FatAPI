<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of MedicalRecordDetailController
 *
 * @author TamHH
 */
class MedicalRecordDetailController extends Controller {
    //put your code here
    public function addMedicalRecordDetail() {
        $this->setData($this->MedicalRecordDetail->addMedicalRecordDetail($this->dataPost));
    }
    public function getAll() {
        $this->setData($this->MedicalRecordDetail->getAll());
    }
    public function updateMedicalRecordDetail(){
        $data = array(
            'DISEASE_CODE' => $this->dataPost->DISEASE_CODE,
            'MEDICAL_SYMPTOMS' => $this->dataPost->MEDICAL_SYMPTOMS,
            'MEDICAL_RED_MORNING' => $this->dataPost->MEDICAL_RED_MORNING,
            'MEDICAL_RED_NOON' => $this->dataPost->MEDICAL_RED_NOON,
            'MEDICAL_RED_AFTERNOON' => $this->dataPost->MEDICAL_RED_AFTERNOON,
        );
        
        $roleCode = array(
            'MEDICAL_CODE'=>$this->dataPost->MEDICAL_CODE,
            'USER_DOCTOR_ID'=>$this->dataPost->USER_DOCTOR_ID,
            'USER_CODE'=>$this->dataPost->USER_CODE,
        );
        $this->setData($this->MedicalRecordDetail->updateMedicalRecordDetail($data, $roleCode));
    }
    public function delete() {
        $data = array(
            'conditions' => array('ROLE_CODE' => $this->dataPost->ROLE_CODE)
        );
        $this->setData($this->MedicalRecordDetail->deleteMedicalRecordDetail($data));
    }
}
