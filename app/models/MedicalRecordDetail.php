<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of MedicalRecordDetail
 *
 * @author TamHH
 */
class MedicalRecordDetail extends Model {
    //put your code here
    public $table = "medical_record_detail";

    public function addMedicalRecordDetail($data) {
        return $this->save($data);
    }
    public function getAll() {
        return $this->findAll();
    }
    public function updateMedicalRecordDetail($data, $role_code)
    {
            $c = array('conditions' => array(
                'MEDICAL_CODE' => $role_code->MEDICAL_CODE,
                'USER_DOCTOR_ID' => $role_code->USER_DOCTOR_ID,
                'USER_CODE' => $role_code->USER_CODE,
                ));
            return $this->update($data, $c);
    }
    public function deleteMedicalRecordDetail($role)
    {
        return $this->delete($role);
    }
}
