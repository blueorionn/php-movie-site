<?php
require "config/movies.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $release_year = (int) $_POST['year'];
    $rating = (float) $_POST['rating'];
    $genre = $_POST['genre'];
    $poster = $_POST['poster'];
    $movie_description = $_POST['description'];

    // creating movie
    $mv = new Movies();
    $message = $mv->createMovie(
        $title,
        $release_year,
        $rating,
        $genre,
        $poster,
        $movie_description
    );
}

// hide p tag is message is none
$message_class = "hide";
if (isset($message))
    $message_class = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table - Collection of Movie Database</title>
    <style>
        .hide {
            visibility: hidden;
        }
    </style>
    <link rel="stylesheet" href="/static/styles/base.css">
    <link rel="stylesheet" href="/static/styles/styles.css">
</head>

<body>
    <?php include "inc/header.php" ?>
    <main>
        <section class="w-full py-12">
            <div class="w-full pb-8">
                <p class="w-max mx-auto p-2 rounded-md border-2 border-gray-400 text-gray-600 <?php echo "$message_class" ?>"
                    id="message">
                    <?php if (isset($message))
                        echo "$message" ?>
                        <script>
                            const message = document.querySelector('p#message');
                            setTimeout(() => {
                                message.classList.add("hide")
                            }, 2000)
                        </script>
                    </p>
                </div>
                <div class="max-w-screen-2xl mx-auto">
                    <h1 class="text-xl mx-auto w-max font-semibold text-gray-600">Create Movie Table</h1>

                    <form action="create.php" method="post" class="mx-auto max-w-screen-sm p-4">
                        <div class="my-2.5">
                            <label for="title" class="my-1 text-base font-semibold text-gray-700">Movie Title</label>
                            <input type="text" name="title" id="title" placeholder="Title" required autofocus
                                class="w-full p-2.5 rounded border border-gray-300">
                        </div>
                        <div class="my-2.5">
                            <label for="year" class="my-1 text-base font-semibold text-gray-700">Release Year</label>
                            <input type="number" name="year" id="year" placeholder="2024" required
                                class="w-full p-2.5 rounded border border-gray-300">
                        </div>
                        <div class="my-2.5">
                            <label for="rating" class="my-1 text-base font-semibold text-gray-700">Rating</label>
                            <input type="number" name="rating" id="rating" placeholder="9.8" min="0" max="10.0" step="0.1"
                                required class="w-full p-2.5 rounded border border-gray-300">
                        </div>
                        <div class="my-2.5">
                            <label for="genre" class="my-1 text-base font-semibold text-gray-700">Genre</label>
                            <input type="text" name="genre" id="genre" placeholder="Action" required
                                class="w-full p-2.5 rounded border border-gray-300">
                        </div>
                        <div class="my-2.5">
                            <label for="poster" class="my-1 text-base font-semibold text-gray-700">Poster</label>
                            <input type="text" name="poster" id="poster" placeholder="poster.jpg" required
                                class="w-full p-2.5 rounded border border-gray-300">
                        </div>
                        <div class="my-2.5">
                            <label for="description" class="my-1 text-base font-semibold text-gray-700">Description</label>
                            <textarea name="description" id="description"
                                class="w-full p-2.5 rounded border border-gray-300 resize-none" rows="5"
                                required></textarea>
                        </div>
                        <div class="my-2.5">
                            <button type="submit" class="w-full p-2.5 rounded bg-blue-500"><span
                                    class="font-bold text-gray-50">Submit</span></button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </body>

    </html>