<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Role
 *
 * @author Thieusike
 */
class Role extends Model {

    //put your code here
    public $table = "role";

    public function addRole($data) {
        return $this->save($data);
    }
    public function getAll() {
        return $this->findAll();
    }
    public function updateRole($data, $role_code)
    {
            $c = array('conditions' => array('ROLE_CODE' => $role_code));
            return $this->update($data, $c);
    }
    public function deleteRole($role)
    {
        return $this->delete($role);
    }

}
