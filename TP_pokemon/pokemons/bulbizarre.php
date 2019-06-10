<?php

    class Bulbizarre extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Bulbizarre';
            $max_life = 100 + 7 * $level;
            $life = $life ?? $max_life;
            $type = 'plante';
            $strength = 10 + 3 * $level;

            parent::__construct($name, $life, $max_life, $level, $strength, $type);
        }

        public function say_hi()
        {
            echo 'Bulbiiiii !!<br>';
        }
    }