<?php

/* Goal: To make a functional coffee machine, with not DB link
Use NumbrSelect to define which type of coffee will be made, then use the correct function
Functions need to have the recipe of the Desired coffee, and a function to determine the if the insert value is correct
to the amount nedded
*/

class CoffeMachine (){
    public $numberTyped="";
    public $insertValue="";
    public $number = [
        1 => Espresso,
        2 => Cappuccino,
        3 => Macciato,
        4 => Irish,
        ];
    public $value = ;
    public $NumberSelected= isset($this->number[$this->numberTyped]);

    public function SelectNumber($Number){

        
    }
}

