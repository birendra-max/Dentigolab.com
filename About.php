<?php
include 'inc/hd.php';
?>
<script>
    document.title = 'About | Dentigolab Designs'
</script>

<!-- Hero -->
<div class="relative text-white py-24">
    <!-- Video Background -->
    <div class="absolute inset-0">
        <video autoplay muted loop class="w-full h-full object-cover">
            <source src="public/images/abouthero.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>

    <!-- Content -->
    <div class="max-w-screen-xl mx-auto px-8 lg:px-16 space-y-16 relative z-10">
        <div class="text-center space-y-4">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white">
                About Us
            </h1>
            <div class="text-center max-w-3xl mx-auto">
                <p class="text-xl text-gray-300 mb-8">
                    At Dentigo, we help dental professionals across the world enhance their practice by providing top-quality CAD/CAM designs and custom prosthetics. We focus on precision, speed, and delivering excellence at competitive prices.
                </p>
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 text-center">
            <div class="bg-gradient-to-r from-teal-600 to-teal-400 rounded-xl p-6 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                <i class="fas fa-user-md text-4xl text-white mb-4"></i>
                <h3 class="text-2xl font-semibold text-white">Experienced & Professional Team</h3>
                <p class="text-lg text-gray-300">Bringing precision and quality to your dental designs.</p>
            </div>

            <div class="bg-gradient-to-r from-teal-600 to-teal-400 rounded-xl p-6 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                <i class="fas fa-handshake text-4xl text-white mb-4"></i>
                <h3 class="text-2xl font-semibold text-white">Reliable Outsourcing Partner</h3>
                <p class="text-lg text-gray-300">We are your trusted partner in delivering high-quality restorations.</p>
            </div>

            <div class="bg-gradient-to-r from-teal-600 to-teal-400 rounded-xl p-6 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                <i class="fas fa-clock text-4xl text-white mb-4"></i>
                <h3 class="text-2xl font-semibold text-white">Fast & Affordable</h3>
                <p class="text-lg text-gray-300">Get high-quality restorations with quick turnaround times at affordable prices.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Hero -->

<!-- Who We Are? -->
<section class="relative py-20">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="flex items-center space-x-12">
            <div class="overflow-hidden w-1/2">
                <div class="px-8 md:px-12 mx-auto lg:py-12 h-svh flex flex-col justify-center bg-zinc-50">
                    <div class="flex flex-row mx-auto">
                        <a href="#_">
                            <img src="public/images/about2.jpg" class="rounded-xl rotate-6 hover:rotate-0 duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                        </a>
                        <a href="#_">
                            <img src="public/images/about3.webp" class="rounded-xl -rotate-12 hover:rotate-0 duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                        </a>
                        <!--- Ends component -->
                    </div>
                </div>
            </div>

            <!-- Text Section -->
            <div class="w-1/2 px-4" data-aos="fade-left">
                <h6 class="text-lg text-teal-600 font-semibold">About Us</h6>
                <h2 class="text-4xl font-bold text-gray-800 leading-tight mb-4">Who We Are?</h2>
                <p>
                    Dentigo is a state-of-the-art dental lab with over 50 years of experience serving India, now expanding to serve clients worldwide. Our expertise lies in designing and manufacturing high-quality dental restorations, combining advanced technology with the skills of certified dentists and experienced technicians. Our mission is to support the dental community with reliable solutions that improve patient outcomes.
                </p>

                <!-- Feature Pills -->
                <ul class="flex flex-wrap gap-3 mb-6 mt-4">
                    <li class="bg-teal-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Reliability</li>
                    <li class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Advanced Technology</li>
                    <li class="bg-indigo-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Certified Expertise</li>
                    <li class="bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Global Reach</li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- What We Do -->
<section class="-mt-32" data-aos="fade-up">
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
                <span class="group-hover:text-gray-900">Founder & CEO</span>
            </div>

            <!-- Team Member -->
            <div class="group text-center transform transition duration-500 hover:scale-105">
                <div class="relative mb-5">
                    <img src="https://pagedone.io/asset/uploads/1696238396.png" alt="Poonam"
                        class="w-44 h-44 rounded-full mx-auto border border-gray-300 shadow-lg object-cover">
                </div>
                <h4 class="text-2xl font-semibold text-gray-900 group-hover:text-indigo-600">Miss. Poonam</h4>
                <span class=" group-hover:text-gray-900">Design Lead</span>
            </div>

            <!-- Team Member -->
            <div class="group text-center transform transition duration-500 hover:scale-105">
                <div class="relative mb-5">
                    <img src="https://pagedone.io/asset/uploads/1696238411.png" alt="Dr Shatakshi Rastogi"
                        class="w-44 h-44 rounded-full mx-auto border border-gray-300 shadow-lg object-cover">
                </div>
                <h4 class="text-2xl font-semibold text-gray-900 group-hover:text-indigo-600">Dr Shatakshi Rastogi</h4>
                <span class=" group-hover:text-gray-900">BDS, MDS (ENDODONTIST)</span>
            </div>

            <!-- Team Member -->
            <div class="group text-center transform transition duration-500 hover:scale-105">
                <div class="relative mb-5">
                    <img src="https://pagedone.io/asset/uploads/1696238446.png" alt="Dev Yadav"
                        class="w-44 h-44 rounded-full mx-auto border border-gray-300 shadow-lg object-cover">
                </div>
                <h4 class="text-2xl font-semibold text-gray-900 group-hover:text-indigo-600">Dev Yadav</h4>
                <span class="group-hover:text-gray-900">Head of Sales</span>
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
<section class="py-16" data-aos="fade-up">
    <div class="container mx-auto px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between space-y-8 lg:space-y-0">

            <!-- Left Side Content -->
            <div class="w-full lg:w-2/3">
                <div class="text-center lg:text-left">
                    <div class="mb-6" data-aos="fade-up">
                        <h6 class="text-xl font-semibold text-blue-600">Our Vision</h6>
                        <h2 class="text-3xl font-bold text-gray-800">Our Commitment to Quality</h2>
                    </div>

                    <ul class="flex flex-wrap justify-center lg:justify-start space-x-6 mb-6" data-aos="fade-up" data-aos-delay="100">
                        <li class="text-blue-800 font-semibold bg-blue-200 px-6 py-2 rounded-full shadow-md">Reliability</li>
                        <li class="text-blue-800 font-semibold bg-blue-200 px-6 py-2 rounded-full shadow-md">Advanced Technology</li>
                        <li class="text-blue-800 font-semibold bg-blue-200 px-6 py-2 rounded-full shadow-md">Certified Expertise</li>
                        <li class="text-blue-800 font-semibold bg-blue-200 px-6 py-2 rounded-full shadow-md">Global Reach</li>
                    </ul>

                    <p class="text-lg text-gray-600 leading-relaxed mb-6" data-aos="fade-up" data-aos-delay="150">
                        Dentigo ensures all products meet ISO and CE certifications, emphasizing quality, innovation, and reliability. We continuously improve and innovate to support our clients and deliver the best solutions.
                    </p>
                </div>
            </div>

            <!-- Right Side Image -->
            <div class="w-full lg:w-1/3 flex justify-center lg:justify-end">
                <div class="max-w-md shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="public/images/about7.jpg" alt="Image" class="w-full h-auto object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16" data-aos="fade-up">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-16">

            <!-- Left Side Image -->
            <div class="w-full lg:w-1/2">
                <img src="https://staging.boostdigitalmarketing.com/wp-content/uploads/2023/02/UticaDentalLabV4-13.png" alt="Dental Lab" class="w-full h-auto object-cover rounded-lg shadow-lg transition-transform transform hover:scale-105 duration-300 ease-in-out">
            </div>

            <!-- Right Side Content (Dropdown List) -->
            <div class="w-full lg:w-1/2 space-y-6">
                <h2 class="text-3xl font-extrabold text-gray-800 mb-8">The Dentigo Advantage</h2>
                <div class="space-y-4">

                    <!-- Dropdown Item 1 -->
                    <div class="border-b border-gray-200">
                        <button class="w-full text-left flex justify-between items-center text-lg font-semibold text-gray-800 py-4 hover:bg-blue-50 rounded-md transition-all ease-in-out focus:outline-none" onclick="toggleDropdown('precision')">
                            <span>Zero Compromise</span>
                            <svg id="precision-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="precision" class="hidden mt-4 pl-6 text-gray-600 text-sm">
                            Engineered for accuracy and aesthetics, our restorations ensure a perfect fit and long-lasting results every time.
                        </div>
                    </div>

                    <!-- Dropdown Item 2 -->
                    <div class="border-b border-gray-200">
                        <button class="w-full text-left flex justify-between items-center text-lg font-semibold text-gray-800 py-4 hover:bg-blue-50 rounded-md transition-all ease-in-out focus:outline-none" onclick="toggleDropdown('technology')">
                            <span>Leading Technology</span>
                            <svg id="technology-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="technology" class="hidden mt-4 pl-6 text-gray-600 text-sm">
                            We leverage advanced CAD/CAM systems like 3Shape to deliver superior precision and efficiency.
                        </div>
                    </div>

                    <!-- Dropdown Item 3 -->
                    <div class="border-b border-gray-200">
                        <button class="w-full text-left flex justify-between items-center text-lg font-semibold text-gray-800 py-4 hover:bg-blue-50 rounded-md transition-all ease-in-out focus:outline-none" onclick="toggleDropdown('standards')">
                            <span>Global Standards</span>
                            <svg id="standards-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="standards" class="hidden mt-4 pl-6 text-gray-600 text-sm">
                            With FDA registration, HIPAA compliance, and FDA-approved materials, we guarantee safety and reliability.
                        </div>
                    </div>

                    <!-- Dropdown Item 4 -->
                    <div class="border-b border-gray-200">
                        <button class="w-full text-left flex justify-between items-center text-lg font-semibold text-gray-800 py-4 hover:bg-blue-50 rounded-md transition-all ease-in-out focus:outline-none" onclick="toggleDropdown('turnaround')">
                            <span>Fast Turnaround</span>
                            <svg id="turnaround-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="turnaround" class="hidden mt-4 pl-6 text-gray-600 text-sm">
                            Delivering cases in 4-5 working days, we prioritize your time and practice needs.
                        </div>
                    </div>

                    <!-- Dropdown Item 5 -->
                    <div>
                        <button class="w-full text-left flex justify-between items-center text-lg font-semibold text-gray-800 py-4 hover:bg-blue-50 rounded-md transition-all ease-in-out focus:outline-none" onclick="toggleDropdown('care')">
                            <span>Patient-Focused Care</span>
                            <svg id="care-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="care" class="hidden mt-4 pl-6 text-gray-600 text-sm">
                            Our less than 1% remake rate reflects our commitment to delivering restorations that exceed expectations.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<script>
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        const icon = document.getElementById(id + '-icon');

        // Toggle visibility of the dropdown content
        dropdown.classList.toggle('hidden');

        // Toggle the icon rotation
        icon.classList.toggle('rotate-180');
    }
</script>


<script>
    function toggleDropdown(id) {
        const content = document.getElementById(id);
        const icon = document.getElementById(id + '-icon');
        const isVisible = content.classList.contains('hidden');

        content.classList.toggle('hidden');

        if (isVisible) {
            icon.classList.add('rotate-180');
        } else {
            icon.classList.remove('rotate-180');
        }
    }
</script>


<section class="bg-white py-20">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="flex flex-col lg:flex-row items-center justify-between space-y-12 lg:space-y-0 lg:space-x-12">

            <!-- Form Section -->
            <div class="w-full lg:w-6/12 text-center lg:text-left">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">📞 Let’s Talk Business!</h2>
                <div class="border-b-4 border-teal-500 w-16 mb-6 mx-auto lg:mx-0"></div>
                <p class="text-lg text-gray-600 mb-6">
                    Fill out the form below to outsource your dental design & manufacturing with Dentigo. Our team will get back to you as soon as possible with a tailored solution!
                </p>

                <!-- Form Start -->
                <form action="mailto:[Your Email]" method="post" enctype="text/plain" class="space-y-6">

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="text-lg text-gray-700 font-medium">📩 Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full px-4 py-3 mt-2 rounded-md bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                    </div>

                    <!-- Website Input -->
                    <div>
                        <label for="website" class="text-lg text-gray-700 font-medium">🌍 Your Website</label>
                        <input type="url" id="website" name="website" placeholder="Enter your website" class="w-full px-4 py-3 mt-2 rounded-md bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="bg-gradient-to-r from-teal-500 to-violet-500 text-white px-8 py-4 rounded-full text-xl font-semibold shadow-lg transform hover:scale-105 transition-all duration-300">
                            Submit Your Info
                        </button>
                    </div>
                </form>
                <!-- Form End -->
            </div>

            <!-- Right Side Image Section -->
            <div class="w-full lg:w-6/12 flex justify-center lg:justify-end">
                <img src="https://cdn.shulex-voc.com/shulex/upload/2024-06-28/1eb69cab-1135-4e1b-9e02-38204c7aeec9.jpg" alt="Dental Design" class="rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 max-w-full h-auto">
            </div>

        </div>
    </div>
</section>


<br>
<br>
<br>

<?php
include 'inc/ft.php';
?>