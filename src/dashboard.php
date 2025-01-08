<?php 
    include "svgs.php";

    $icons = new Icons();

    $total = 100;
    $paypal = 20;
    $zinli = 20;
    $bolivares = 20;
    $efectivo = 20;
    $binance = 20;

    // Budgetting: Calculate how much should I spend on what.
    $necesidades = $total * 0.5;
    $deseos = $total * 0.3;
    $inversiones = $total * 0.2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Font: Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <!-- Main Head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/2e7c7d277f.js" crossorigin="anonymous"></script>

</head>
<body class="overflow-x-hidden bg-neutral-50">
    <!-- Nav -->
    <?php include "nav.php" ?>
    <!-- Main Page -->
    <div class="h-screen flex my-6">
        <!-- Side Nav -->
        <div class="w-1/6 flex flex-col items-left gap-2">
            <a href="" class="w-full h-12 hover:bg-neutral-200 flex items-center gap-2 p-6 rounded-lg ml-[-0.5rem] pl-10 transition duration-200 ease-in-out">
                <div class="w-6 h-6 flex justify-center items-center mr-3">
                    <?php $icons->home() ?>
                </div>
                Dashboard
            </a>
            <a href="" class="w-full h-12 hover:bg-neutral-200 flex items-center gap-2 p-6 rounded-lg ml-[-0.5rem] pl-10 transition duration-200 ease-in-out">
                <div class="w-5 h-6 flex justify-center items-center mr-4">
                    <?php $icons->wallet() ?>
                </div>
                Assets
            </a>
            <a href="" class="w-full h-12 hover:bg-neutral-200 flex items-center gap-2 p-6 rounded-lg ml-[-0.5rem] pl-10 transition duration-200 ease-in-out">
                <div class="w-6 h-6 flex justify-center items-center mr-3">
                    <?php $icons->investments() ?>
                </div>
                Investments
            </a>
            <a href="" class="w-full h-12 hover:bg-neutral-200 flex items-center gap-2 p-6 rounded-lg ml-[-0.5rem] pl-10 transition duration-200 ease-in-out">
                <div class="w-5 h-6 flex justify-center items-center mr-4">
                    <?php $icons->withdraw() ?>
                </div>
                Withdraw
            </a>
            <a href="" class="w-full h-12 hover:bg-neutral-200 flex items-center gap-2 p-6 rounded-lg ml-[-0.5rem] pl-10 transition duration-200 ease-in-out">
                <div class="w-5 h-6 flex justify-center items-center mr-4">
                    <?php $icons->account() ?>
                </div>
                Account
            </a>
            <a href="" class="w-full h-12 hover:bg-neutral-200 flex items-center gap-2 p-6 rounded-lg ml-[-0.5rem] pl-10 transition duration-200 ease-in-out">
                <div class="w-6 h-6 flex justify-center items-center mr-3">
                    <?php $icons->settings() ?>
                </div>
                Settings
            </a>
        </div>
        <div class="flex flex-col w-5/6">
            <!-- Total Balance -->
            <div class="h-1/4 mx-6 rounded-lg px-6 py-4 border-2 border-neutral-200">
                <h3 class="text-xl font-semibold">Total Balance</h3>
                <h2 class="text-5xl mt-3 font-bold">$<?= $total ?></h2>
            </div>
            <!-- List of all assets -->
            <div class="h-3/4 mx-6 my-3 rounded-lg px-6 py-4 border-2 border-neutral-200">
                <h3 class="text-xl font-semibold">Distribution</h3>
                <div>
                    <div>
                        <h4 class="font-semibold mt-4">Binance</h4>
                        <p>$ <?= $binance ?> </p>
                    </div>
                    <div>
                        <h4 class="font-semibold mt-4">PayPal</h4>
                        <p>$ <?= $paypal ?> </p>
                    </div>
                    <div>
                        <h4 class="font-semibold mt-4">Zinli</h4>
                        <p>$ <?= $zinli ?> </p>
                    </div>
                    <div>
                        <h4 class="font-semibold mt-4">Bolivares</h4>
                        <p>$ <?= $bolivares ?> </p>
                    </div>
                    <div>
                        <h4 class="font-semibold mt-4">Efectivo</h4>
                        <p>$ <?= $efectivo ?> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>