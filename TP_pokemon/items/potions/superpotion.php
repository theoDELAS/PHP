<?php

    class Superpotion extends Potions
    {
        public function __construct ()
        {
            $name = 'Superpotion';
            $pdvRendu = 50;

            parent::__construct($name, $pdvRednu);
        }
    }