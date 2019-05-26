<?php
class washingMachine extends Product{
    public $kit;
    public $waterConsumption;

    function getCharacteristics($nameProduct, $price, $kit, $waterConsumption){
        echo 'Название:'. $this->nameProduct = $nameProduct.'</br>';
        echo 'Цена:' .$this->price = $price.'</br>';
        echo 'Комплектация:' .$this->kit = $kit.'</br>';
        echo 'Расход воды:' .$this->waterConsumption = $waterConsumption.'</br>';

    }
}