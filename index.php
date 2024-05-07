<?php
    include __DIR__ . "/Views/header.php";
    include __DIR__ . '/Models/Movie.php';
    $movies = [
        new Movie('Babylon A.D.', 'en', 10, 5.601, "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg"),
        new Movie('Rien à foutre', 'fr', 10, 6.417, "https://image.tmdb.org/t/p/w342/wLZ5jijVpOxHuBLmsICKLXwlldu.jpg")
    ];

    // $books = [
    //     new Book('Unlocking Android', 416, 15, 8, "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg"),
    //     new Book('Flex on Java', 265, 15, 7, "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/allmon.jpg")
    // ]
?>

<main class="container">
        <section>
            <h2>Movies</h2> 
            <div class="row">
                <?php foreach($movies as $movie){ ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $movie -> cover?>" class="card-img-top" alt="<?= $movie -> title?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie -> title?></h5>
                            <p class="card-text"><?= $movie -> langauge ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>     
        </section>
        <section>
            <h2>Books</h2>
        </section>
</main>

<?php
    include __DIR__ . "/Views/footer.php"
?>