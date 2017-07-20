<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Prescription
 *
 * @author TamHH
 */
class Prescription extends Model{
    public $table = "prescription";
    public function addPrescription($data) {
        return $this->save($data);
    }
    public function getAll() {
        return $this->findAll();
    }
    public function updatePrescription($data, $condition)
    {
            $c = array('conditions' => $condition);
            return $this->update($data, $c);
    }
    public function deletePrescription($role)
    {
        return $this->delete($role);
    }
}
