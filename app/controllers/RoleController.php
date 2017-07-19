<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of RoleController
 *
 * @author Thieusike
 */
class RoleController extends Controller {

    //put your code here
    public function addRole() {
        $this->setData($this->Role->addRole($this->dataPost));
    }
    public function getAll() {
        $this->setData($this->Role->getAll());
    }
    public function updateRole(){
        $data = array('ROLE_NAME' => $this->dataPost->ROLE_NAME);
        $roleCode = $this->dataPost->ROLE_CODE;
        $this->setData($this->Role->updateRole($data, $roleCode));
    }
    public function delete() {
        $data = array(
            'conditions' => array('ROLE_CODE' => $this->dataPost->ROLE_CODE)
        );
        $this->setData($this->Role->deleteRole($data));
    }

}
