<?php 
    $total = 100;
    $paypal = 20;
    $zinli = 20;
    $bolivares = 20;
    $efectivo = 20;
    $binance = 20;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Dashboard</title>
</head>
<body class="overflow-x-hidden bg-neutral-50">
    <!-- Nav -->
    <div class="flex flex-col px-8 py-6 items-center justify-center w-screen h-12 text-3xl">
        <span class="text-yellow-400 font-bold">Graham.</span>
    </div>
    <div class="h-screen flex">
        <!-- Side Nav -->
        <div class="w-1/6 p-6 flex flex-col items-center">Side Nav</div>
        <div class="flex flex-col w-5/6">
            <!-- Total Balance -->
            <div class="h-1/4 mx-6 my-3 mt-2 rounded-lg px-6 py-4 border-2 border-neutral-200">
                <h3 class="text-xl font-semibold">Saldo Total</h3>
                <h2 class="text-5xl mt-3 font-bold">$<?= $total ?></h2>
            </div>
            <!-- List of all assets -->
            <div class="h-3/4 mx-6 my-3 rounded-lg px-6 py-4 border-2 border-neutral-200">
                <h3 class="text-xl font-semibold">Distribución</h3>
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