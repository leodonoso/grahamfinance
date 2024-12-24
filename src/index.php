<?php 
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Graham Finance</title>
</head>
<body class="flex flex-col justify-center items-center w-screen h-screen bg-neutral-50">
    <div class="flex flex-col justify-around items-center w-1/2 h-2/3">
        <!-- H1 -->
        <div class="text-left w-1/2">
            <h1 class="text-6xl font-semibold shadow-outline">Let's get your money in <span class="underline">check</span>.</h1>
        </div>
        <form class="flex flex-col gap-8 items-center">
            <!-- Email -->
            <input class="w-64 h-12 p-4 bg-neutral-100 border-2 border-neutral-200 focus:border-neutral-400 outline-none" placeholder="Email" type="email" />
            <!-- Sign Up with... -->
            <!-- Buttons -->
            <button class="w-64 h-12 bg-yellow-200 rounded-md hover:bg-yellow-400 transition duration-300 ease-in-out">Sign Up</button>
            <button class="w-12 hover:underline transition duration-300 ease-in-out">Log In</button> 
        </form>
    </div>
</body>
</html>