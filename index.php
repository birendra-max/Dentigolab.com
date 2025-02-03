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

<!-- About us section  -->
<section class="flex min-h-screen items-center justify-center text-gray-900">
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
</section>

<!-- Services Section  -->
<section>
    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center mb-12">
            <span class="text-lg font-semibold text-green-600">Dent Services</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Our Dental Services</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-desktop"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Complete Dental Solutions</h6>
                <p class="text-gray-600 mt-2">Offering a full range of dental services, including designs, manufacturing, and equipment.</p>
                <a href="#" class="text-green-600 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-capsules"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Digital Workflow Integration</h6>
                <p class="text-gray-600 mt-2">Using advanced CAD/CAM systems and 3D printing to streamline workflows.</p>
                <a href="#" class="text-green-600 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-suitcase-medical"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Outsourcing Support</h6>
                <p class="text-gray-600 mt-2">Simplifying outsourcing processes for international dental labs.</p>
                <a href="#" class="text-green-600 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Affordable Pricing</h6>
                <p class="text-gray-600 mt-2">Providing competitive pricing while maintaining top-quality standards.</p>
                <a href="#" class="text-green-600 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-microscope"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Experienced Team</h6>
                <p class="text-gray-600 mt-2">A team of skilled professionals with expertise in digital workflows.</p>
                <a href="#" class="text-green-600 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-flask-vial"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Custom Workflow Integration</h6>
                <p class="text-gray-600 mt-2">Adapting workflows to meet client needs.</p>
                <a href="#" class="text-green-600 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-cogs"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Flexible Material Options</h6>
                <p class="text-gray-600 mt-2">Offering diverse material choices to meet specific patient and clinical requirements.</p>
                <a href="#" class="text-green-600 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Training & Skill Development</h6>
                <p class="text-gray-600 mt-2">Ongoing training programs for our team to stay updated with the latest dental technologies.</p>
                <a href="#" class="text-green-600 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-handshake"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Commitment to Partnerships</h6>
                <p class="text-gray-600 mt-2">Building trust and long-term relationships with clients through consistent service and reliable solutions.</p>
                <a href="#" class="text-green-600 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>



<!-- Review Section  -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-20 mt-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
            <!-- Counters -->
            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-6">
                    <div class="bg-green-800 p-6 rounded-2xl shadow-lg flex items-center space-x-4">
                        <i class="fas fa-box text-4xl text-white"></i>
                        <span class="text-white text-xl font-semibold">+ <span class="count" data-target="5000">0</span> Orders</span>
                    </div>
                    <div class="bg-green-800 p-6 rounded-2xl shadow-lg flex items-center space-x-4">
                        <i class="fas fa-user-cog text-4xl text-white"></i>
                        <span class="text-white text-xl font-semibold">+ <span class="count" data-target="50">0</span> Skilled Designers</span>
                    </div>
                    <div class="bg-green-800 p-6 rounded-2xl shadow-lg flex items-center space-x-4">
                        <i class="fas fa-clipboard-check text-4xl text-white"></i>
                        <span class="text-white text-xl font-semibold">+ <span class="count" data-target="20">0</span> Experienced Quality Controllers</span>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="bg-green-800 p-6 rounded-2xl shadow-lg flex items-center space-x-4">
                        <i class="fas fa-globe text-4xl text-white"></i>
                        <span class="text-white text-xl font-semibold">+ <span class="count" data-target="10">0</span> Countries Covered</span>
                    </div>
                    <div class="bg-green-800 p-6 rounded-2xl shadow-lg flex items-center space-x-4">
                        <i class="fas fa-smile text-4xl text-white"></i>
                        <span class="text-white text-xl font-semibold">+ <span class="count" data-target="1000">0</span> Happy Clients Worldwide</span>
                    </div>
                    <div class="bg-green-800 p-6 rounded-2xl shadow-lg flex items-center space-x-4">
                        <i class="fas fa-briefcase text-4xl text-white"></i>
                        <span class="text-white text-xl font-semibold">+ <span class="count" data-target="15">0</span> Years of Experience</span>
                    </div>
                </div>
            </div>
            <!-- Image Section -->
            <div class="flex justify-center">
                <img src="public/images/world.png" alt="Achievements" class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
            </div>
        </div>
    </div>
    <script>
        // Counter Animation Script
        const counters = document.querySelectorAll('.count');

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const increment = target / 2000; // Adjust speed by changing 200

            const updateCount = () => {
                const current = +counter.innerText;

                if (current < target) {
                    counter.innerText = Math.ceil(current + increment);
                    setTimeout(updateCount, 10); // Adjust the speed
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });

        function showImage(imagePath) {
            document.getElementById('product-image').src = `assets/image/${imagePath}`;
        }
    </script>
</section>

<section class=" py-16 px-4">
    <div class="container mx-auto flex flex-col lg:flex-row items-center gap-8">
        <!-- Image Section -->
        <div class="w-full lg:w-5/12 relative">
            <img src="public/images/computer.avif" class="w-full rounded-lg shadow-xl" alt="service img">
            <div class="absolute inset-0 flex items-center justify-center">
                <a class="bg-white text-gray-700 p-4 rounded-full shadow-lg hover:bg-gray-200 transition" 
                    href="https://www.youtube.com/embed/KjpuOGDx_4E?si=fNVd64KesOcBrkRn">
                    <i class="fa-solid fa-play text-2xl"></i>
                </a>
            </div>
        </div>
        
        <!-- Content Section -->
        <div class="w-full lg:w-7/12 bg-white p-10 rounded-xl shadow-xl">
            <span class="bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-semibold">Dentigo</span>
            <h2 class="text-4xl font-bold mt-4 text-gray-800">Why Choose Us</h2>
            <p class="text-gray-600 mt-2">We provide top-quality dental solutions trusted by professionals worldwide.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <!-- Reliability -->
                <div class="flex space-x-4 items-start">
                    <i class="fa-solid fa-check-circle text-4xl text-gray-700"></i>
                    <div>
                        <h6 class="text-xl font-semibold text-gray-800">Reliability</h6>
                        <p class="text-gray-600 text-sm">Trusted by dental professionals for consistent quality and on-time deliveries.</p>
                    </div>
                </div>
                
                <!-- Advanced Technology -->
                <div class="flex space-x-4 items-start">
                    <i class="fa-solid fa-microchip text-4xl text-gray-700"></i>
                    <div>
                        <h6 class="text-xl font-semibold text-gray-800">Advanced Technology</h6>
                        <p class="text-gray-600 text-sm">Utilizing cutting-edge CAD/CAM systems to ensure accuracy in every design.</p>
                    </div>
                </div>
                
                <!-- Certified Expertise -->
                <div class="flex space-x-4 items-start">
                    <i class="fa-solid fa-user-md text-4xl text-gray-700"></i>
                    <div>
                        <h6 class="text-xl font-semibold text-gray-800">Certified Expertise</h6>
                        <p class="text-gray-600 text-sm">A team of certified dentists and technicians ensures every product meets global benchmarks.</p>
                    </div>
                </div>
                
                <!-- Global Reach -->
                <div class="flex space-x-4 items-start">
                    <i class="fa-solid fa-globe text-4xl text-gray-700"></i>
                    <div>
                        <h6 class="text-xl font-semibold text-gray-800">Global Reach</h6>
                        <p class="text-gray-600 text-sm">Serving dental labs and clinics worldwide with tailored and efficient solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
















<script>
    window.addEventListener('scroll', function() {
        if (window.scrollY > 1) {
            $("#topbar").css('display', 'none');
        } else {
            $('#topbar').css('display', 'flex');
        }
    })
</script>