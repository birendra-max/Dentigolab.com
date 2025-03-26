<?php
include 'inc/hd.php';
?>

<script>
    document.title = 'Portfolio & Gallery | Dentigo Designs'
</script>

<section class="w-full h-screen relative">
    <video class="w-full h-full object-cover" autoplay muted loop>
        <source src="public/images/Portofolio (Video).mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <!-- Optional overlay or content -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center">
        <h1 class="text-4xl font-bold">Portfolio and Gallaery</h1>
    </div>
</section>

<section class="w-full bg-gray-100 py-10">
<h2 class="text-4xl font-bold text-gray-900 mb-6 text-center my-4">Extensive Dental Libraries. Customized by Our Experts. Designed to Match Your Needs.</h2>
    <div class="max-w-7xl mx-auto relative"
        x-data="{ 
         current: 0, 
         images: [
           'public/images/Dentigo smile libary .png', 
           'public/images/Dentigo smile libary 3.png', 
           'public/images/Dentigo smile libary 4.png', 
           'public/images/Dentigo smile libary 5.png', 
           'public/images/Dentigo smile libary 6.png',
           'public/images/Costmised libaries dentigo.png',
           'public/images/Costmised libaries dentigo V.png',
         ]
       }"
        x-init="setInterval(() => { current = current < images.length - 1 ? current + 1 : 0 }, 3000)">

        <!-- Carousel Wrapper -->
        <div class="overflow-hidden rounded-lg shadow-lg">
            <div class="flex transition-transform duration-500 ease-out"
                :style="'transform: translateX(-' + current * 100 + '%)'">
                <!-- Loop through images array -->
                <template x-for="(image, index) in images" :key="index">
                    <div class="min-w-full">
                        <img :src="image"
                            class="w-full object-contain rounded-lg" alt="Carousel Image">
                    </div>
                </template>
            </div>
        </div>

        <!-- Previous Button -->
        <button @click="current = current > 0 ? current - 1 : images.length - 1"
            class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-full">
            ❮
        </button>

        <!-- Next Button -->
        <button @click="current = current < images.length - 1 ? current + 1 : 0"
            class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-full">
            ❯
        </button>

        <!-- Dots Indicator -->
        <div class="flex justify-center space-x-2 mt-4">
            <template x-for="(image, index) in images" :key="index">
                <div @click="current = index"
                    :class="index === current ? 'bg-blue-600' : 'bg-gray-400'"
                    class="w-3 h-3 rounded-full cursor-pointer"></div>
            </template>
        </div>
    </div>
</section>


<section class="container mx-auto w-full sm:w-4/5 lg:w-3/4 p-10 sm:p-12 mt-4 text-center">
    <h2 class="text-4xl font-bold text-gray-900 mb-6">Dentigo - Digital & Manufacturing Solutions</h2>
    <p class="text-lg text-gray-600 mb-8">At Dentigo, we provide high-precision digital designs and manufacturing services for dental labs worldwide. We focus on quality, accuracy, and reliability, handling everything from digital restorations to full-scale production.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="p-6 bg-gray-100 rounded-xl shadow-inner">
            <span class="text-4xl">📸</span>
            <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Proven Results</h3>
            <p class="text-gray-600 text-sm">We design crowns, bridges, implants, clear aligners, and full-mouth rehabilitations, ensuring the best fit and function.</p>
        </div>

        <div class="p-6 bg-gray-100 rounded-xl shadow-inner">
            <span class="text-4xl">🔍</span>
            <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Designed for You</h3>
            <p class="text-gray-600 text-sm">Share your preferences, and we’ll create a trial design that fits seamlessly into your workflow.</p>
        </div>

        <div class="p-6 bg-gray-100 rounded-xl shadow-inner">
            <span class="text-4xl">🤝</span>
            <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Helping You Grow</h3>
            <p class="text-gray-600 text-sm">Whether you need design support or full production, we help you scale while maintaining precision and consistency.</p>
        </div>
    </div>

    <div>
        <?php
        include 'inc/Marquee.php';
        ?>
    </div>

    <div class="mt-10">
        <h3 class="text-2xl font-semibold text-gray-900">🚀 Let’s Grow Together!</h3>
        <p class="text-lg text-gray-600 mt-2">Partner with Dentigo for top-quality digital designs and reliable manufacturing.</p>
        <a href="#" class="inline-block mt-6 px-8 py-4 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 focus:ring-2 focus:ring-green-500 transition duration-300">
            Get Started
        </a>
    </div>
</section>
 

<?php
include 'inc/ft.php';
?>