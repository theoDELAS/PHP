<?php

    class Masterball extends Ball
    {
        public function __construct ()
        {
            $name = 'Masterball';
            $level = true;

            parent::__construct($name, $level);
        }
    }