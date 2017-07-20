<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Disease
 *
 * @author TamHH
 */
class Disease extends Model{
    //put your code here
    public $table = "disease";

    public function addDisease($data) {
        return $this->save($data);
    }
    public function getAll() {
        return $this->findAll();
    }
    public function updateDisease($data, $role_code)
    {
            $c = array('conditions' => array('DISEASE_CODE' => $role_code));
            return $this->update($data, $c);
    }
    public function deleteDisease($role)
    {
        return $this->delete($role);
    }
}
