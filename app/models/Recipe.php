<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Recipe
 *
 * @author TamHH
 */
class Recipe extends Model{
    //put your code here
    public $table = "recipe";

    public function addRecipe($data) {
        return $this->save($data);
    }
    public function getAll() {
        return $this->findAll();
    }
    public function updateRecipe($data, $role_code)
    {
            $c = array(
                'conditions' => array(
                    'INGRED_CODE' => $role_code->INGRED_CODE,
                    'MEDICINE_CODE' => $role_code->MEDICINE_CODE,
                )
            );
            return $this->update($data, $c);
    }
    public function deleteRecipe($role)
    {
        return $this->delete($role);
    }
}
