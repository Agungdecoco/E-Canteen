<?php

class Product
{

    public $productArray = array(
        "Item1" => array(
            'code' => '00001',
            'name' => 'Nasi Goreng',
            'image' => '',
            'price' => '10000'
        ),
        "Item2" => array(
            'code' => '00002',
            'name' => 'Soto',
            'image' => '',
            'price' => '10000'
        ),
        "Item3" => array(
            'code' => '00003',
            'name' => 'Rawon',
            'image' => '',
            'price' => '10000'
        )
    );

    public function getAllProduct() {
        return $this->productArray;
    }
}
