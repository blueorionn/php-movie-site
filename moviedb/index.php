<?php
require "config/movies.php";

$mv = new Movies();
$movies = $mv->getAllMovies();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieDB - Collection of Movie Database</title>
    <link rel="stylesheet" href="/static/styles/base.css">
    <link rel="stylesheet" href="/static/styles/styles.css">
</head>

<body>
    <?php include "inc/header.php" ?>
    <main>
        <section class="w-full py-12 flex justify-center items-center">
            <form method="get" action="" class="px-4 flex">
                <input type="text" name="search" id="search" placeholder="Search for movies..." required autofocus
                    class="p-2.5 w-96 rounded-s-md outline-none focus-visible:outline-none border border-gray-300 text-gray-700 bg-gray-100"
                    style="outline: none;">
                <button type="button" class="p-2.5 border-t border-b border-r border-gray-300 bg-gray-100">
                    <span class="sr-only">Filter</span>
                    <ion-icon name="filter"></ion-icon>
                </button>
                <button type="submit"
                    class="p-2.5 px-4 rounded-e-md border-t border-b border-r border-blue-500 bg-blue-500">
                    <span class="sr-only">Search</span>
                    <ion-icon name="search" style="color: white;"></ion-icon>
                </button>
            </form>
        </section>
        <section class="w-full py-12 border-t-2 border-gray-200">
            <div class="max-w-screen-2xl mx-auto px-4">
                <h1 class="text-xl font-semibold text-gray-600">Movies</h1>
                <div class="my-8 w-full flex flex-wrap gap-16">
                    <?php
                    foreach ($movies as $movie) {
                        $escaped_title = htmlspecialchars($movie['title'], ENT_QUOTES, 'UTF-8');

                        echo "
                        <a href='/update/{$movie['id']}' class='max-w-96 grid grid-cols-2 gap-4 group transition-all'>
                            <div>
                                <img src='/static/images/{$movie['poster']}' alt='$escaped_title' class='h-auto w-full aspect-auto'>
                            </div>
                            <div>
                                <h1
                                    class='text-2xl my-2 text-gray-800 font-semibold group-hover:underline'>
                                    $escaped_title
                                </h1>
                                <!-- Released Date -->
                                <h2 class='text-base text-gray-500 font-semibold inline-block'>{$movie['release_year']}</h2>
                                <!-- Genre -->
                                <span class='text-base mx-2 text-gray-600 font-normal'>{$movie['genre']}</span>
                                <!-- Rating -->
                                <span class='mx-2 sr-only'>Divider</span>
                                <ion-icon name='star' style='color: goldenrod;'></ion-icon>
                                <span class='text-base text-gray-600 font-normal'>{$movie['rating']}</span>
                                <!-- Description -->
                                <p class='text-base py-2.5 text-gray-700 font-normal group-hover:underline'>
                                    {$movie['movie_description']}
                                </p>
                            </div>
                        </a>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
</body>

</html>