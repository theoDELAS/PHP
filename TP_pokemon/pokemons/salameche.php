<?php

    class Salameche extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Salameche';
            $max_life = 100 + 5 * $level;
            $life = $life ?? $max_life;
            $type = 'feu';
            $strength = 10 + 4 * $level;

            parent::__construct($name, $life, $max_life, $level, $strength, $type);
        }

        public function say_hi()
        {
            echo 'Salaaaa !!<br>';
        }
    }