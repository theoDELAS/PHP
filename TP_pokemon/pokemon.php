<?php

    class Pokemon 
    {
        public $name;
        public $life;
        public $max_life;
        public $level;
        public $strength;

        public function __construct ($name, $life, $max_life, $level, $strength)
        {
            $this->name = $name;
            $this->life = $life;
            $this->max_life = $max_life;
            $this->level = $level;
            $this->strength = $strength;

        }

        public function attack($pokemonAttacked)
        {
            $damage = ceil($this->strength * (rand(900, 1100) / 1000));
            echo $this->name . ' inflige ' . $damage . ' points de dégâts à ' . $pokemonAttacked->name . '.<br>';
            $pokemonAttacked->life -= $damage;
            echo $pokemonAttacked->name . ' à maintenant ' . $pokemonAttacked->life . ' points de vie.<br>';
        }
    }