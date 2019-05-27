<?php

    class Pokeball 
    {
        public $name;
        public $level;

        public function __construct ($name, $level)
        {
            $this->name = $name;
            $this->level = $level;

        }

        public function capture($pokemonName)
        {
            $isCapture = false;
            $chanceToCapture = number_format(((($pokemonName->max_life - $pokemonName->life) / $pokemonName->max_life) * (1 + ($this->level - $pokemonName->level)) / 25), 2);
            echo 'Chance de capture : ' . $chanceToCapture;
            // if($isCapture)
            // {
            //     echo $pokemonName . 'a été capturé';
            // }
            // else
            // {
            //     echo $pokemonName . "s'est libéré";
            // }
        }
    }