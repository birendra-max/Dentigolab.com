<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Outsource digital dental design & manufacturing with seamless workflows. High-quality CAD/CAM solutions for crowns, bridges, dentures, and full-arch restorations. Custom-made dental prosthetics, ensuring precision and aesthetics in every case. Fast, reliable, and affordable dental design & milling services for global dental labs. Seamless outsourcing for dental restorations with a commitment to accuracy. Your global partner for digital dentistry, helping labs scale efficiently. Premium dental outsourcing for crowns, implants, and full-arch solutions. End-to-end digital workflow, ensuring smooth case handling and timely delivery. Bringing high-end dental restorations to labs at competitive prices. Trusted by leading dental labs worldwide for consistency and long-term success. Helping dental labs grow with cost-effective, high-quality solutions. Latest CAD/CAM technology ensures perfect fit, function, and aesthetics. Reliable communication & support, so every case is handled with care. Dedicated to accuracy and efficiency, allowing your lab to focus on growth. Let’s build a strong partnership where trust, quality, and efficiency lead the way.">
    <meta name="keywords" content="digital dental design, dental manufacturing, CAD/CAM solutions, crowns, bridges, dentures, full-arch restorations, dental prosthetics, dental design services, dental milling services, dental labs, dental outsourcing, digital dentistry, dental restorations, dental implants, end-to-end digital workflow, dental technology, dental communication, dental support, dental accuracy, dental efficiency, dental growth, dental partnership, dental quality, dental trust">
    <meta name="author" content="Dentigo">
    <title>Dentigo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="public/js/jQuery.js"></script>
    <link rel="shortcut icon" href="public/images/dentigologo.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        html {
            margin: 0;
            padding: 0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>

<body class="bg-white">

    <header class='sticky top-0 z-50 flex shadow-lg px-4 sm:px-12 bg-black  min-h-[90px] tracking-wider'>
        <div class='flex flex-wrap items-center justify-between gap-3 w-full'>
            <a href="index.php" target="_self" class="max-sm:hidden"><img src="public/images/dentigologo.png" alt="logo" class='w-[100px]' /></a>
            <a href="index.php" target="_self" class="hidden max-sm:block"><img src="public/images/dentigologo.png" alt="logo" class='w-[70px]' /></a>

            <div id="collapseMenu" class='max-lg:hidden lg:block'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-2 z-[50] rounded-full bg-white w-10 h-10 flex items-center justify-center border'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z" data-original="#000000"></path>
                        <path d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z" data-original="#000000"></path>
                    </svg>
                </button>

                <ul class='lg:flex max-lg:space-y-4 max-lg:fixed max-lg:bg-black max-lg:w-3/4 max-lg:min-w-[85%] max-lg:top-0 max-lg:left-0 max-lg:p-8 max-lg:h-full max-lg:shadow-xl max-lg:overflow-auto z-[999]'>
                    <li class='mb-8 hidden max-lg:block'>
                        <a href="javascript:void(0)" target="_self"><img src="public/images/dentigologo.png" alt="logo" class='w-[100px]' /></a>
                    </li>
                    <li class='max-lg:border-b border-gray-300 max-lg:py-4 px-4'>
                        <a href='index.php' target="_self"
                            class='text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold' id="home">Home</a>
                    </li>
                    <li class='max-lg:border-b border-gray-300 max-lg:py-4 px-4'>
                        <a href='about.php' target="_self"
                            class='text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold' id="about">About Us</a>
                    </li>
                    <li class='max-lg:border-b border-gray-300 max-lg:py-4 px-4'>
                        <a href='prod&services.php' target="_self"
                            class='text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold' id="prodser">Products & Services</a>
                    </li>
                    <li class='max-lg:border-b border-gray-300 max-lg:py-4 px-4'>
                        <a href='digital&workflows.php' target="_self"
                            class='text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold' id="digitalworkflow"> Digital Workflows</a>
                    </li>

                    <li class='max-lg:border-b border-gray-300 max-lg:py-4 px-4'>
                        <a href='portfolio&gallery.php' target="_self"
                            class='text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold' id="portgallery">Portfolio & Gallery</a>
                    </li>

                    <li class='max-lg:border-b border-gray-300 max-lg:py-4 px-4'>
                        <a href='whychooseus.php' target="_self"
                            class='text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold' id="wcu">Why Choose Us</a>
                    </li>

                    <li class='max-lg:border-b border-gray-300 max-lg:py-4 px-4'>
                        <a href='contact.php' target="_self"
                            class='text-white text-sm hover:text-teal-500 transition-all duration-300 font-semibold' id="contact">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="flex max-lg:ml-auto space-x-6">
                <button
                    class="relative group border-none bg-transparent p-0 outline-none cursor-pointer font-mono font-light text-base">
                    <span
                        class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-25 rounded-lg transform translate-y-0.5 transition duration-[600ms] ease-[cubic-bezier(0.3,0.7,0.4,1)] group-hover:translate-y-1 group-hover:duration-[250ms] group-active:translate-y-px"></span>

                    <span
                        class="absolute top-0 left-0 w-full h-full rounded-lg bg-gradient-to-l from-[hsl(217,33%,16%)] via-[hsl(217,33%,32%)] to-[hsl(217,33%,16%)]"></span>

                    <div
                        class="relative flex items-center justify-between py-3 px-2 text-sm text-white rounded-lg transform -translate-y-1 bg-gradient-to-r from-[#f27121] via-[#e94057] to-[#8a2387] gap-3 transition duration-[600ms] ease-[cubic-bezier(0.3,0.7,0.4,1)] group-hover:-translate-y-1.5 group-hover:duration-[250ms] group-active:-translate-y-0.5 brightness-100 group-hover:brightness-110">
                        <span class="select-none">Login/SignUp</span>

                        <svg
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="w-5 h-5 -mr-1 transition duration-250 group-hover:translate-x-1">
                            <path
                                clip-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </div>
                </button>

                <!-- Mobile Menu Toggle -->
                <button id="toggleOpen" class="lg:hidden bg-white ">
                    <svg class="w-8 h-8" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

        </div>
    </header>

    <style>
        ul li a:hover {
            filter: drop-shadow(10px 10px 11px #dfe0e2) drop-shadow(-10px -10px 11px #dfe0e2);
        }
    </style>


    <script>
        var toggleOpen = document.getElementById('toggleOpen');
        var toggleClose = document.getElementById('toggleClose');
        var collapseMenu = document.getElementById('collapseMenu');

        function handleClick() {
            if (collapseMenu.style.display === 'block') {
                collapseMenu.style.display = 'none';
                document.getElementById('reqestcase').classList.remove('hidden');
                document.getElementById('chatbot').classList.remove('hidden');
            } else {
                collapseMenu.style.display = 'block';
                document.getElementById('reqestcase').classList.add('hidden');
                document.getElementById('chatbot').classList.add('hidden');
            }
        }

        toggleOpen.addEventListener('click', handleClick);
        toggleClose.addEventListener('click', handleClick);
        $(document).ready(function() {

            let pageTitle = document.title;

            if (pageTitle == 'Home | Dentigolab Designs') {
                $('#home').removeClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#home').addClass('text-teal-500 text-md font-extrabold hover:shadow-xl transition-all ease-in-out duration-300');
            } else {
                $("#home").addClass('text-white text-md hover:text-teal-500 hover:shadow-xl transition-all duration-300 font-semibold');
                $('#home').removeClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            }


            if (pageTitle == 'About | Dentigolab Designs') {
                $('#about').removeClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#about').addClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#about").addClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#about').removeClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            }


            if (pageTitle == 'Product & Services | Dentigolab Designs') {
                $('#prodser').removeClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#prodser').addClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#prodser").addClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#prodser').removeClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            }


            if (pageTitle == 'Digital Workflows | Dentigolab Designs') {
                $('#digitalworkflow').removeClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#digitalworkflow').addClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#digitalworkflow").addClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#digitalworkflow').removeClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            }


            if (pageTitle == 'Portfolio & Gallery | Dentigolab Designs') {
                $('#portgallery').removeClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#portgallery').addClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#portgallery").addClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#portgallery').removeClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            }


            if (pageTitle == 'Contact | Dentigolab Designs') {
                $('#contact').removeClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#contact').addClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#contact").addClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#contact').removeClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            }

            if (pageTitle == 'Why Choose Us | Dentigolab Designs') {
                $('#wcu').removeClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#wcu').addClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            } else {
                $("#wcu").addClass('text-white text-md hover:text-teal-500 transition-all duration-300 font-semibold');
                $('#wcu').removeClass('text-teal-500 text-md font-extrabold transition-all ease-in-out duration-300');
            }

        })
    </script>

    <main id="main">