<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieDB - Collection of Movie Database</title>
    <link rel="stylesheet" href="http://localhost:8000/styles/base.css">
    <link rel="stylesheet" href="http://localhost:8000/styles/styles.css">
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
            <div class="max-w-screen-2xl mx-auto">
                <h1 class="text-xl font-semibold text-gray-600">Movies</h1>
            </div>
        </section>
    </main>
</body>

</html>