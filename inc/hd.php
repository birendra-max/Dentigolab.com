<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentigo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="public/js/jQuery.js"></script>
    <style>
        html {
            margin: 0;
            padding: 0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-black via-blue-100 to-black">
    <?php
    include 'inc/topbar.php';
    ?>
    <header class="fixed w-full flex items-center justify-between px-6 py-4 bg-gradient-to-r from-gray-800 to-blue-900 text-white shadow-lg z-50">

        <div class='flex items-center'>
            <a href="index.php" target="_self" class="mr-6">
                <img src="public/images/dentigologo.png" alt="logo" class="w-[80px] md:w-[80px] drop-shadow-lg hover:drop-shadow-2xl transition-all duration-300" />
            </a>
        </div>

        <div class="hidden lg:flex space-x-6">
            <a href='index.php' target="_self"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Home</a>
            <a href='AboutUs.php' target="_self"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>About Us</a>
            <a href='Prod&Services.php' target="_self"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Product & manufacturing</a>
            <a href='Workflow.php' target="_self"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Portfolio & Gallery</a>
            <a href='Join_our_Team.php' target="_self"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Digital Workflows</a>
            <a href='FAQ.php' target="_self"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Contact</a>
        </div>

        <div class="lg:flex items-center space-x-4">
            <a href="https://bravodentclouds.com/" target="_self"
                class="inline-flex items-center rounded bg-teal-500 px-4 py-2 text-lg font-medium text-black shadow-md hover:bg-teal-600 transition-all duration-300">
                Login/Signup →
            </a>

            <button id="toggleOpen" class='lg:hidden text-white'>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </header>

    <main>