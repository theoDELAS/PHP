<?php
    abstract class Pokemon 
    {
        protected $name;
        protected $life;
        protected $max_life;
        protected $level;
        protected $strength;
        protected $type;

        public function __construct ($name, $life, $max_life, $level, $strength, $type)
        {
            $this->name = $name;
            $this->life = $life;
            $this->max_life = $max_life;
            $this->level = $level;
            $this->strength = $strength;
            $this->type = $type;
            
            static::say_hi();
        }

        abstract public function say_hi();

        public function attack($pokemonAttacked)
        {
            $damage = ceil($this->strength * (rand(900, 1100) / 1000));
            echo $this->name . ' attaque le ' . $pokemonAttacked->name . '. ' . $this->name . ' inflige ' . $damage . ' points de dégâts à ' . $pokemonAttacked->name . '.<br>';
            $pokemonAttacked->life -= $damage;
            echo $pokemonAttacked->name . ' a maintenant ' . $pokemonAttacked->life . ' points de vie.<br>';
        }
    }