<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of RecipeController
 *
 * @author TamHH
 */
class RecipeController extends Controller {
    //put your code here
    public function addRecipe() {
        $this->setData($this->Recipe->addRecipe($this->dataPost));
    }
    public function getAll() {
        $this->setData($this->Recipe->getAll());
    }
    public function updateRecipe(){
        $data = array(
            'INGRED_QUANTITY' => $this->dataPost->INGRED_QUANTITY,
        );
        $roleCode = array(
            'INGRED_CODE' => $this->dataPost->INGRED_CODE,
            'MEDICINE_CODE' => $this->dataPost->MEDICINE_CODE,
        );
        $this->setData($this->Recipe->updateRecipe($data, $roleCode));
    }
    public function delete() {
        $data = array(
            'conditions' => array(
                'INGRED_CODE' => $this->dataPost->INGRED_CODE,
                'MEDICINE_CODE' => $this->dataPost->MEDICINE_CODE,
            ),
        );
        $this->setData($this->Recipe->deleteRecipe($data));
    }
}
