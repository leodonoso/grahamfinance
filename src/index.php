<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Font: Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <!-- Basic Head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Graham Finance</title>
</head>
<body class="bg-neutral-50">
    <!-- Nav -->
    <?php include "nav.php"; ?>
    <div class="flex flex-col justify-center items-center w-screen h-[85vh]">
        <!-- Landing Page -->
        <div class="flex flex-col justify-around items-center w-1/2 h-5/6">
            <!-- H1 -->
            <div class="ml-12 text-left w-[75%]">
                <h1 class="text-6xl font-semibold shadow-outline">Let's make the <span class="underline">most</br></span> out of your money.</h1>
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
    </div>
</body>
</html>