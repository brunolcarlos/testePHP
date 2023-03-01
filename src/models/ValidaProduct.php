<?php

namespace App\models;

class ValidaProduct
{
    public static function valida(array $args){

    if (!is_numeric($args['stock']) || empty($args['stock'])) {
        api_exit(500, "Stock é obrigatório!");
    }

    if (!is_numeric($args['price']) || empty($args['price'])) {
        api_exit(500, "Price é obrigatório!");
    }

    if (empty($args['description'])) {
        api_exit(500, "Description é obrigatório!");
    }

    if (empty($args['name'])) {
        api_exit(500, "Name é obrigatório!");
    }

    return true;
    }
}
