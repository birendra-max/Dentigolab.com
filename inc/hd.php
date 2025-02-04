<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentigo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="public/js/jQuery.js"></script>
    <link rel="shortcut icon" href="public/images/dentigologo.png" type="image/x-icon">
    <style>
        html {
            margin: 0;
            padding: 0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-black via-yellow-100 to-black">
    <header class="fixed w-full flex items-center justify-between px-6 py-4 bg-gradient-to-b from-violet-600/10 via-transparent bg-gray-800 text-white shadow-lg z-50">

        <div class='flex items-center'>
            <a href="index.php" target="_self" class="mr-6">
                <img src="public/images/dentigologo.png" alt="logo" class="w-[120px] md:w-[120px] drop-shadow-lg hover:drop-shadow-2xl transition-all duration-300" />
            </a>
        </div>

        <div class="hidden lg:flex space-x-6">
            <a href='index.php' target="_self" id="home"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Home</a>
            <a href='about.php' target="_self" id="about"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>About Us</a>
            <a href='prod&services.php' target="_self" id="prodser"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Product & Services</a>
            <a href='portfolio&gallery.php' target="_self" id="portgallery"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Portfolio & Gallery</a>
            <a href='digital&workflows.php' target="_self" id="digitalworkflow"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Digital Workflows</a>
            <a href='contact.php' target="_self" id="contact"
                class='text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold'>Contact</a>
        </div>

        <!-- <div class="lg:flex items-center space-x-4">
            <a href="https://bravodentclouds.com/" target="_self"
                class="inline-flex items-center rounded bg-teal-500 px-4 py-2 text-md font-medium text-black shadow-md hover:bg-teal-600 transition-all duration-300">
                Login/Signup →
            </a>

            <button id="toggleOpen" class='lg:hidden text-white'>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div> -->

        <div class="flex justify-center">
            <a class="group inline-flex items-center bg-white/10 border border-white/10 p-1 ps-4 rounded-full shadow-md 
        focus:outline-none transition duration-300 ease-in-out 
        hover:bg-gradient-to-r from-teal-500 to-blue-600"
                href="../figma.html">

                <p class="me-2 text-white text-sm">
                    Login/Signup
                </p>

                <span class="group-hover:bg-white/20 py-1.5 px-2.5 flex justify-center items-center gap-x-2 
            rounded-full bg-white/10 font-semibold text-white text-sm transition duration-300 ease-in-out">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </span>
            </a>
        </div>

    </header>

    <script>
        $(document).ready(function() {
            let pageTitle = document.title;

            if (pageTitle == 'Home | Dentigolab Designs') {
                $('#home').removeClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#home').addClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#home").addClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#home').removeClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            }


            if (pageTitle == 'About | Dentigolab Designs') {
                $('#about').removeClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#about').addClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#about").addClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#about').removeClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            }


            if (pageTitle == 'Product & Services | Dentigolab Designs') {
                $('#prodser').removeClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#prodser').addClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#prodser").addClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#prodser').removeClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            }


            if (pageTitle == 'Digital Workflows | Dentigolab Designs') {
                $('#digitalworkflow').removeClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#digitalworkflow').addClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#digitalworkflow").addClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#digitalworkflow').removeClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            }


            if (pageTitle == 'Portfolio & Gallery | Dentigolab Designs') {
                $('#portgallery').removeClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#portgallery').addClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#portgallery").addClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#portgallery').removeClass('text-teal-500 text-lg font-extrabold transition-all ease-in-out duration-300');
            }


            // if (pageTitle == 'FAQ | BravoDent Designs') {
            //     $('#faq').removeClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
            //     $('#faq').addClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
            // } else {
            //     $("#faq").addClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
            //     $('#faq').removeClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
            // }


            if (pageTitle == 'Contact | Dentigolab Designs') {
                $('#contact').removeClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#contact').addClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#contact").addClass('text-white text-lg hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#contact').removeClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
            }

        })
    </script>

    <main>