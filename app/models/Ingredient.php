<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Ingredient
 *
 * @author TamHH
 */
class Ingredient extends Model{
    //put your code here
    public $table = "ingredient";

    public function addIngredient($data) {
        return $this->save($data);
    }
    public function getAll() {
        return $this->findAll();
    }
    public function updateIngredient($data, $role_code)
    {
            $c = array('conditions' => array('INGRED_CODE' => $role_code));
            return $this->update($data, $c);
    }
    public function deleteIngredient($role)
    {
        return $this->delete($role);
    }
}
