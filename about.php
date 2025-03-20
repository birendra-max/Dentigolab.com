<?php
include 'inc/hd.php';
?>
<script>
    document.title = 'About | Dentigo Designs'
</script>

<!-- Hero -->
<section class="relative h-screen flex flex-col justify-center items-center text-white text-center">
    <!-- Video Background -->
    <div class="absolute inset-0">
        <video autoplay muted loop class="h-full w-full object-cover">
            <source src="public/images/abouthero.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>

<section class="-mt-24">
    <!-- Features Section -->
    <div class="relative z-10 w-full max-w-screen-lg mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="bg-white bg-opacity-90 rounded-xl p-6 shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all text-center text-gray-800">
                <i class="fas fa-user-md text-5xl text-teal-600 mb-4"></i>
                <h3 class="text-2xl font-semibold">Experienced & Professional Team</h3>
                <p class="mt-2 text-gray-600">Bringing precision and quality to your dental designs.</p>
            </div>

            <div class="bg-white bg-opacity-90 rounded-xl p-6 shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all text-center text-gray-800">
                <i class="fas fa-handshake text-5xl text-teal-600 mb-4"></i>
                <h3 class="text-2xl font-semibold">Reliable Outsourcing Partner</h3>
                <p class="mt-2 text-gray-600">We are your trusted partner in delivering high-quality restorations.</p>
            </div>

            <div class="bg-white bg-opacity-90 rounded-xl p-6 shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all text-center text-gray-800">
                <i class="fas fa-clock text-5xl text-teal-600 mb-4"></i>
                <h3 class="text-2xl font-semibold">Fast & Affordable</h3>
                <p class="mt-2 text-gray-600">Get high-quality restorations with quick turnaround times at affordable prices.</p>
            </div>
        </div>
    </div>
</section>

<!-- End Hero -->


<!-- About us -->
<section class="relative py-12 sm:py-20 mt-14">
    <div class="container mx-auto px-6 lg:px-12">
        <img src="public/images/rv-1-vector-8.png" class="h-14 w-14 spin-infinite float-right" alt="">

        <div class="flex flex-col lg:flex-row items-center space-y-8 lg:space-y-0 lg:space-x-12">
            <!-- Image Section -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <div class="px-4 sm:px-8 md:px-12 mx-auto lg:py-12 h-auto flex flex-col justify-center bg-zinc-50">
                    <div class="flex flex-col sm:flex-row gap-6 mx-auto">
                        <a href="#_">
                            <img src="public/images/about2.jpg" class="rounded-xl rotate-6 hover:rotate-0 duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                        </a>
                        <a href="#_">
                            <img src="public/images/about3.webp" class="rounded-xl -rotate-12 hover:rotate-0 duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 px-4 sm:px-8" data-aos="fade-left">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 leading-tight mb-4">About Us</h2>
                <p class="text-base sm:text-lg">
                    At Dentigo, we help dental professionals across the world enhance their practice by providing top-quality CAD/CAM designs and custom prosthetics. We focus on precision, speed, and delivering excellence at competitive prices.
                </p>
            </div>

        </div>
    </div>
</section>


<img src="public/images/rv-1-vector-6.png" class="h-14 w-14 spin-infinite" alt="">


<!-- What We Do -->
<section data-aos="fade-up py-12">
    <div class="container mx-auto px-6 md:px-12 lg:px-20 relative">
        <div class="flex flex-wrap justify-between items-end">

            <!-- Text Content -->
            <div class="w-full lg:w-1/2 space-y-6">
                <div class="space-y-2" data-aos="fade-up">
                    <h6 class="text-sm text-gray-600 uppercase font-semibold tracking-wide"></h6>
                    <h2 class="text-3xl md:text-4xl font-bold text-black">What We Do</h2>
                </div>

                <ul class="flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="100">
                    <li class="bg-white shadow-md px-4 py-2 rounded-lg text-gray-700 font-medium">Reliability</li>
                    <li class="bg-white shadow-md px-4 py-2 rounded-lg text-gray-700 font-medium">Advanced Technology</li>
                    <li class="bg-white shadow-md px-4 py-2 rounded-lg text-gray-700 font-medium">Certified Expertise</li>
                    <li class="bg-white shadow-md px-4 py-2 rounded-lg text-gray-700 font-medium">Global Reach</li>
                </ul>

                <p class="text-black text-lg leading-relaxed" data-aos="fade-up" data-aos-delay="150">
                    We specialize in comprehensive dental solutions, including designing and manufacturing crowns, bridges, dentures, aligners, and implant-supported restorations. By leveraging advanced digital workflows and modern technology, we ensure precise, durable, and aesthetic products that meet international standards.
                </p>

                <!-- Buttons -->
                <div>
                    <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 shadow-lg shadow-transparent hover:shadow-blue-700/50 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:shadow-blue-700/50 py-3 px-6" href="prod&services.php">
                        Get Our Services
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Buttons -->
            </div>

            <!-- Image Content -->
            <div class="w-full lg:w-5/12 mt-10 lg:mt-0" data-aos="fade-up">
                <div class="overflow-hidden rounded-2xl shadow-lg">
                    <img src="public\images\about4.jpg" alt="About Us" class="rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet Our Team -->
<section class="py-24 mt-12">
    <div class="mx-auto max-w-6xl px-6 lg:px-8 text-center">
        <!-- Section Title -->
        <div class="mb-16">
            <h2 class="font-manrope text-5xl font-bold text-gray-900">Meet Our Team</h2>
            <p class="text-lg text-gray-600 mt-4">A team of dedicated professionals committed to excellence.</p>
        </div>

        <!-- Team Members Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 justify-center">
            <!-- Team Member -->
            <div class="group text-center transform transition duration-500 hover:scale-105">
                <div class="relative mb-5">
                    <img src="https://pagedone.io/asset/uploads/1696238374.png" alt="Manish Kumar"
                        class="w-44 h-44 rounded-full mx-auto border border-gray-300 shadow-lg object-cover">
                </div>
                <h4 class="text-2xl font-semibold text-gray-900 group-hover:text-indigo-600">Manish Kumar</h4>
                <span class="group-hover:text-gray-900">CAD/CAM Specialist</span>
            </div>

            <!-- Team Member -->
            <div class="group text-center transform transition duration-500 hover:scale-105">
                <div class="relative mb-5">
                    <img src="https://pagedone.io/asset/uploads/1696238396.png" alt="Poonam"
                        class="w-44 h-44 rounded-full mx-auto border border-gray-300 shadow-lg object-cover">
                </div>
                <h4 class="text-2xl font-semibold text-gray-900 group-hover:text-indigo-600">Miss. Poonam</h4>
                <span class=" group-hover:text-gray-900">Quality Control Expert</span>
            </div>

            <!-- Team Member -->
            <div class="group text-center transform transition duration-500 hover:scale-105">
                <div class="relative mb-5">
                    <img src="https://pagedone.io/asset/uploads/1696238411.png" alt="Dr. Shatakshi Rastogi"
                        class="w-44 h-44 rounded-full mx-auto border border-gray-300 shadow-lg object-cover">
                </div>
                <h4 class="text-2xl font-semibold text-gray-900 group-hover:text-indigo-600">Dr. Shatakshi Rastogi</h4>
                <span class=" group-hover:text-gray-900">Operation Manager</span>
            </div>

            <!-- Team Member -->
            <div class="group text-center transform transition duration-500 hover:scale-105">
                <div class="relative mb-5">
                    <img src="https://pagedone.io/asset/uploads/1696238446.png" alt="Dev Yadav"
                        class="w-44 h-44 rounded-full mx-auto border border-gray-300 shadow-lg object-cover">
                </div>
                <h4 class="text-2xl font-semibold text-gray-900 group-hover:text-indigo-600">Dev Yadav</h4>
                <span class="group-hover:text-gray-900">Digital Workflow Manager</span>
            </div>
        </div>
    </div>
</section>



<!-- Our Delivery Options -->
<section class="py-8 text-black px-2">
    <div class="text-center mb-12">
        <h2 class="text-2xl lg:text-4xl font-bold">Our Delivery Options</h2>
        <p class="text-lg mt-2">Efficient, Flexible, and Designed to Meet Your Needs.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto px-6">
        <!-- Rush Orders -->
        <div class="bg-white text-gray-900 p-6 rounded-2xl shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:rotate-3 hover:bg-yellow-100">
            <div class="text-4xl text-blue-500 mb-4 animate-pulse">
                <i class="fas fa-bolt"></i>
            </div>
            <h3 class="text-xl font-semibold">Rush Orders</h3>
            <p class="mt-2 text-gray-600">1-2 Hours</p>
        </div>
        <!-- Same Day -->
        <div class="bg-white text-gray-900 p-6 rounded-2xl shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:-rotate-3 hover:bg-green-100">
            <div class="text-4xl text-blue-500 mb-4 animate-bounce">
                <i class="fas fa-truck"></i>
            </div>
            <h3 class="text-xl font-semibold">Same Day</h3>
            <p class="mt-2 text-gray-600">6 Hours</p>
        </div>
        <!-- Next Day -->
        <div class="bg-white text-gray-900 p-6 rounded-2xl shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:rotate-6 hover:bg-blue-100">
            <div class="text-4xl text-blue-500 mb-4 animate-spin-slow">
                <i class="fas fa-clock"></i>
            </div>
            <h3 class="text-xl font-semibold">Next Day</h3>
            <p class="mt-2 text-gray-600">12 Hours</p>
        </div>
        <!-- Manufacturing Product Delivery -->
        <div class="bg-white text-gray-900 p-6 rounded-2xl shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:-rotate-6 hover:bg-red-100">
            <div class="text-4xl text-blue-500 mb-4 animate-wiggle">
                <i class="fas fa-industry"></i>
            </div>
            <h3 class="text-xl font-semibold">Manufacturing Product Delivery</h3>
            <p class="mt-2 text-gray-600">5-7 Days</p>
        </div>
    </div>
</section>

<style>
    @keyframes wiggle {

        0%,
        100% {
            transform: rotate(-3deg);
        }

        50% {
            transform: rotate(3deg);
        }
    }

    .animate-wiggle {
        animation: wiggle 0.3s ease-in-out infinite;
    }

    @keyframes spin-slow {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .animate-spin-slow {
        animation: spin-slow 6s linear infinite;
    }
</style>
<!-- Make the testminola first litel bit  -->


<!-- Our Vision -->
<section class="py-20" data-aos="fade-up">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left Side Content -->
            <div>
                <h6 class="text-lg font-semibold text-blue-600 uppercase tracking-wider" data-aos="fade-up">Our Vision</h6>
                <h2 class="text-4xl font-extrabold text-gray-900 leading-snug mb-6" data-aos="fade-up" data-aos-delay="100">
                    Commitment to Excellence
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                    At Dentigo, we prioritize quality, innovation, and reliability. Our products meet ISO and CE certifications, ensuring excellence in every aspect. We constantly improve to provide the best solutions for our clients.
                </p>
            </div>

            <!-- Right Side Image -->
            <div class="relative" data-aos="fade-left">
                <div class="rounded-xl overflow-hidden shadow-xl transform transition duration-300 hover:scale-105">
                    <img src="public/images/about7.jpg" alt="Our Commitment to Quality" class="w-full h-auto object-cover">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Our Vision -->


<section class="py-20" data-aos="fade-up">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left Side Image -->
            <div class="relative" data-aos="fade-right">
                <img src="public/images/The Dentigo Advantage.png" alt="Dental Lab"
                    class="w-full h-auto object-cover rounded-xl shadow-xl transform transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Right Side Content -->
            <div class="space-y-6" data-aos="fade-left">
                <h2 class="text-4xl font-extrabold text-gray-900">The Dentigo Advantage</h2>

                <div class="space-y-4">
                    <!-- Dropdown Items -->
                    <div class="border-b border-gray-300">
                        <button class="w-full flex justify-between items-center text-lg font-semibold text-gray-900 py-4 focus:outline-none"
                            onclick="toggleDropdown('precision')">
                            <span>Zero Compromise</span>
                            <svg id="precision-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-300"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="precision" class="dropdown-content">
                            Engineered for accuracy and aesthetics, our restorations ensure a perfect fit and long-lasting results every time.
                        </div>
                    </div>

                    <div class="border-b border-gray-300">
                        <button class="w-full flex justify-between items-center text-lg font-semibold text-gray-900 py-4 focus:outline-none"
                            onclick="toggleDropdown('technology')">
                            <span>Leading Technology</span>
                            <svg id="technology-icon" class="h-5 w-5 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="technology" class="dropdown-content">
                            We leverage advanced CAD/CAM systems like 3Shape to deliver superior precision and efficiency.
                        </div>
                    </div>

                    <div class="border-b border-gray-300">
                        <button class="w-full flex justify-between items-center text-lg font-semibold text-gray-900 py-4 focus:outline-none"
                            onclick="toggleDropdown('standards')">
                            <span>Global Standards</span>
                            <svg id="standards-icon" class="h-5 w-5 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="standards" class="dropdown-content">
                            With FDA registration, HIPAA compliance, and FDA-approved materials, we guarantee safety and reliability.
                        </div>
                    </div>

                    <div class="border-b border-gray-300">
                        <button class="w-full flex justify-between items-center text-lg font-semibold text-gray-900 py-4 focus:outline-none"
                            onclick="toggleDropdown('turnaround')">
                            <span>Fast Turnaround</span>
                            <svg id="turnaround-icon" class="h-5 w-5 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="turnaround" class="dropdown-content">
                            Delivering cases in 4-5 working days, we prioritize your time and practice needs.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    function toggleDropdown(id) {
        const content = document.getElementById(id);
        const icon = document.getElementById(id + '-icon');
        content.style.maxHeight = content.style.maxHeight ? null : content.scrollHeight + "px";
        icon.classList.toggle('rotate-180');
    }
</script>

<style>
    .dropdown-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
        padding-left: 1.5rem;
        font-size: 0.95rem;
        color: #4B5563;
    }
</style>

<?php
include 'inc/ft.php';
?>