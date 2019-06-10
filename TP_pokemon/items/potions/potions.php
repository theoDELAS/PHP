<?php

    abstract class Potions 
    {
        public $name;
        public $pdvRendu;

        public function __construct ($name, $pdvRendu)
        {
            $this->name = $name;
            $this->pdvRendu = $pdvRendu;

        }
    }