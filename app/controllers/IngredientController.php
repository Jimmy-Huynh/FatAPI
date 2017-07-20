<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of IngredientController
 *
 * @author TamHH
 */
class IngredientController extends Controller {
    //put your code here
    public function addIngredient() {
        $this->setData($this->Ingredient->addRole($this->dataPost));
    }
    public function getAll() {
        $this->setData($this->Ingredient->getAll());
    }
    public function updateIngredient(){
        $data = array('INGRED_NAME' => $this->dataPost->INGRED_NAME);
        $roleCode = $this->dataPost->INGRED_CODE;
        $this->setData($this->Ingredient->updateIngredient($data, $roleCode));
    }
    public function delete() {
        $data = array(
            'conditions' => array('INGRED_CODE' => $this->dataPost->INGRED_CODE)
        );
        $this->setData($this->Ingredient->deleteIngredient($data));
    }
}
