<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Medicine
 *
 * @author TamHH
 */
class Medicine extends Model{
    //put your code here
    public $table = "medicine";

    public function addMedicine($data) {
        return $this->save($data);
    }
    public function getAll() {
        return $this->findAll();
    }
    public function updateMedicine($data, $role_code)
    {
            $c = array('conditions' => array('MEDICINE_CODE' => $role_code));
            return $this->update($data, $c);
    }
    public function deleteMedicine($role)
    {
        return $this->delete($role);
    }
}
