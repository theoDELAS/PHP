<?php

    class Potion extends Potions
    {
        public function __construct ()
        {
            $name = 'Potion';
            $pdvRendu = 20;

            parent::__construct($name, $pdvRednu);
        }
    }