<?php
include 'inc/hd.php';
?>

<br>
<br>
<br>


<section class="relative w-full h-[500px] md:h-[600px] lg:h-[400px] flex items-center" id="home">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        <img src="public/images/heroimg.png" alt="Background Image" class="object-cover object-center w-full h-full brightness-75">
    </div>

    <!-- Content Section -->
    <div class="relative z-10 w-full max-w-6xl mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 text-center md:text-left">
            <p class="text-lg font-semibold text-[#c8a876] uppercase tracking-wide mb-3">New Dent</p>
            <h1 class="text-white font-bold text-5xl md:text-6xl leading-tight mb-6">
                Smile <span class="text-[#c8a876]">Makes</span> Everything Better
            </h1>
            <p class="text-lg text-gray-300 mb-6">
                Creating beautiful, confident smiles with precision and care.
            </p>
            <a href="#contactUs"
                class="px-8 py-3 bg-[#c8a876] text-white font-medium rounded-full hover:bg-[#b78d50] transition duration-300 shadow-lg">
                Explore Our Services
            </a>
        </div>
    </div>
</section>

<div class="flex min-h-screen items-center justify-center bg-gray-100 text-gray-900">
    <div class="flex max-w-7xl rounded-xl border border-gray-300 bg-white shadow-lg overflow-hidden">
        <!-- Image Section -->
        <div class="w-1/3">
            <img src="public/images/home3.webp" alt="Doctor" class="h-full w-full object-cover">
        </div>

        <!-- Content Section -->
        <div class="w-2/2 flex flex-col justify-between p-8">
            <div class="space-y-4">
                <p class="text-sm uppercase text-indigo-600 tracking-widest">Dentistry Solutions</p>
                <h1 class="text-3xl font-bold leading-tight">Welcome to Dentigo</h1>
                <p class="text-gray-700">
                    Dentigo provides top-quality dental Designs, Manufacturing, and Equipment solutions worldwide. Based in India, we proudly serve dental labs with reliable and efficient services.
                </p>
                <p class="text-gray-700">
                    We specialize in 3Shape and Exocad design services, offering accurate and customized designs to meet your needs. Our manufacturing ensures superior dental products with high standards of quality.
                </p>
                <p class="text-gray-700">
                    Along with Designs and Manufacturing, we also provide a range of Dental Equipment to support your lab’s operations. Our goal is to offer complete solutions to help labs grow and succeed.
                </p>
                <p class="text-gray-700">
                    At Dentigo, we work closely with our clients to make sure every product meets their expectations. We focus on building strong, long-term relationships with consistent service and dependable results.
                </p>
            </div>

            <!-- CTA Button -->
            <div class="mt-6">
                <a href="about.php" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-xl shadow-md hover:bg-indigo-700 transition duration-300">
                    Discover More
                </a>
            </div>
        </div>
    </div>
</div>













<script>
    window.addEventListener('scroll', function() {
        if (window.scrollY > 1) {
            $("#topbar").css('display', 'none');
        } else {
            $('#topbar').css('display', 'flex');
        }
    })
</script>