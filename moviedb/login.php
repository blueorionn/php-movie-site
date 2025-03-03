<?php
session_start();
require "config/connect.php"; // Include PDO Connection
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MovieDB - Collection of Movie Database</title>
    <link rel="stylesheet" href="http://localhost:8000/styles/base.css">
    <link rel="stylesheet" href="http://localhost:8000/styles/styles.css">
</head>

<body>
    <main
        class="w-full h-[100vh] flex items-center justify-center bg-gradient-to-br from-pink-100 via-purple-100 to-cyan-100 p-4">
        <div class="w-full max-w-sm border-t-4 border-t-purple-500 shadow-lg rounded">
            <div class="py-2">
                <h1 class="text-2xl font-bold text-center text-purple-700">Sign in</h1>
                <p class="py-2 text-base text-gray-600 text-center">Enter your credentials to access your account</p>
            </div>
            <div class="py-3 px-4">
                <form action="login.php" method="post" class="w-full">
                    <div class="py-2 flex flex-col">
                        <label for="username" class="text-base py-2 text-purple-700">Username</label>
                        <input type="text" name="username" id="username" placeholder="username" required
                            class="rounded-sm border-purple-200 focus:ring-purple-500 p-2.5">
                        <p class="text-red-500 text-sm py-1"></p>
                    </div>
                    <div class="py-2 flex flex-col">
                        <label for="password" class="text-base py-2 text-purple-700">Password</label>
                        <input type="password" name="password" id="password" required
                            class="rounded-sm border-purple-200 focus:ring-purple-500 p-2.5">
                        <p class="text-red-500 text-sm py-1"></p>
                    </div>
                    <div class="py-4">
                        <button type="submit" class="w-full py-2.5 rounded font-semibold bg-gradient-to-r from-purple-500 to-cyan-500 hover:from-purple-600 hover:to-cyan-600 text-white">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>