<?php
    include __DIR__ . '/Product.php';
    class Book extends Product {
        public string $numPages;
        public function __construct($title, $numPages, $price, $rating, $cover) {
            $this -> numPages = $numPages;
            parent::__construct($title, $price, $rating, $cover);
        }
    }
