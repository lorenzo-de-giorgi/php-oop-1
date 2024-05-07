<?php
    include __DIR__ . '/Product.php';
    class Movie extends Product {
        public string $langauge;
        public function __construct($title, $langauge, $price, $rating, $cover) {
            $this -> langauge = $langauge;
            parent::__construct($title, $price, $rating, $cover);
        }

        public function play(){
            echo ' ' . $this -> title . ' is beign played';
        }

        public function printCategory(){
            echo $this -> category -> name;
        }
    }
