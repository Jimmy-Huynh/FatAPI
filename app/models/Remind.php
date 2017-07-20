<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Remind
 *
 * @author TamHH
 */
class Remind extends Model{
    //put your code here
    public $table = "remind";

    public function addRemind($data) {
        return $this->save($data);
    }
    public function getAll() {
        return $this->findAll();
    }
    public function updateRemind($data, $role_code)
    {
            $c = array('conditions' => array('REMIND_CODE' => $role_code));
            return $this->update($data, $c);
    }
    public function deleteRemind($role)
    {
        return $this->delete($role);
    }
}
