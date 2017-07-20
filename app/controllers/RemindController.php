<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of RemindController
 *
 * @author TamHH
 */
class RemindController extends Controller{
    //put your code here
    public function addRemind() {
        $this->setData($this->Remind->addRemind($this->dataPost));
    }
    public function getAll() {
        $this->setData($this->Remind->getAll());
    }
    public function updateRemind(){
        $data = array(
            'REMIND_TIME' => $this->dataPost->REMIND_TIME,
            'REMIND_IS_REPEAT' => $this->dataPost->REMIND_IS_REPEAT,
            'REMIND_SOUND' => $this->dataPost->REMIND_SOUND,
            'REMIND_LABEL' => $this->dataPost->REMIND_LABEL,
            'REMIND_IS_ACTIVE' => $this->dataPost->REMIND_IS_ACTIVE,
        );
        $roleCode = $this->dataPost->REMIND_CODE;
        $this->setData($this->Remind->updateRemind($data, $roleCode));
    }
    public function delete() {
        $data = array(
            'conditions' => array('REMIND_CODE' => $this->dataPost->REMIND_CODE)
        );
        $this->setData($this->Remind->deleteRole($data));
    }
}
