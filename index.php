<?php
    include __DIR__ . "/Views/header.php";
    include __DIR__ . '/Models/Movie.php';
?>

<main class="container">
    <?php
        // $title, $category, $price, $rating, $cover
        $starWars = new Movie('Star Wars', 'en', 10, 5, "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg");
        echo $starWars -> title;
        $starWars -> play();
    ?>
</main>

<?php
    include __DIR__ . "/Views/footer.php"
?>