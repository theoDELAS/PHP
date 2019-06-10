<?php

    class Carapuce extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Carapuce';
            $max_life = 100 + 9 * $level;
            $life = $life ?? $max_life;
            $type = 'eau';
            $strength = 10 + 2 * $level;

            parent::__construct($name, $life, $max_life, $level, $strength, $type);
        }

        public function say_hi()
        {
            echo 'Caraaaaa !!<br>';
        }
    }