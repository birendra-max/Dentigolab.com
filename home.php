<?php
include 'inc/hd.php';
?>

<script>
    document.title = 'Home | Dentigolab Designs'
</script>


<section class="relative w-full h-[80vh] flex items-center justify-center bg-gray-900 px-4 py-4" id="home">
    <div class="absolute inset-0 h-full">
        <img src="public/images/Product Design Final home Dentigo.jpg" alt="Background Image" class="w-full h-full object-cover  object-center brightness-50">
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto text-center px-4 py-2 md:px-8">
        <div class="bg-black bg-opacity-70 backdrop-blur-sm rounded-3xl p-6 md:p-8 shadow-2xl">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Welcome to Dentigo</h2>
            <p class="text-md text-gray-300 mb-4">High-quality dental solutions tailored for your needs.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="prod&services.php" class="px-6 py-2 bg-[#f4c77d] text-black font-semibold rounded-lg shadow-lg hover:bg-[#eab662] hover:scale-105 transition-all">
                    Explore Services
                </a>
                <a href="whychooseus.php" class="px-6 py-2 bg-[#e94057] text-white font-semibold rounded-lg shadow-lg hover:bg-[#d2374a] hover:scale-105 transition-all">
                    <i class="fas fa-thumbs-up mr-2"></i>Why Choose Us
                </a>
                <a href="faq.php" class="px-6 py-2 bg-[#f27121] text-white font-semibold rounded-lg shadow-lg hover:bg-[#e76c1f] hover:scale-105 transition-all">
                    <i class="fas fa-question-circle mr-2"></i>FAQ
                </a>
            </div>
        </div>
    </div>
</section>


<!-- About us section  -->
<section class="flex min-h-screen items-center justify-center text-gray-900 md:px-0 px-4 py-8 mt-24">
    <div class="flex flex-col md:flex-row max-w-7xl rounded-xl border border-gray-300 bg-white shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-500 ease-in-out">
        <!-- Image Section -->
        <div class="w-full md:w-1/3 relative h-[65vh]">
            <img src="public/images/dentigo.jpg" alt="Doctor" class="h-full w-full object-cover transition-transform transform hover:scale-110 duration-500 ease-in-out">
        </div>

        <!-- Content Section -->
        <div class="w-full md:w-2/3 flex flex-col justify-between p-6 md:p-8">
            <div class="space-y-4">
                <p class="text-sm uppercase text-indigo-600 tracking-widest">Dentistry Solutions</p>
                <h1 class="text-2xl md:text-3xl font-bold leading-tight">Welcome to Dentigo</h1>
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
<section class="py-8">
    <div class="container mx-auto px-6 lg:px-18">
        <div class="text-center mb-12">
            <span class="text-sm font-semibold text-green-600">Dent Services</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900">Our Dental Services</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-desktop text-blue-500"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Complete Dental Solutions</h6>
                <p class="text-gray-600 mt-2">Offering a full range of dental services, including designs, manufacturing, and equipment.</p>
                <a href="#" class="text-blue-500 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right text-blue-500"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-blue-500 text-5xl mb-4">
                    <i class="fas fa-capsules text-blue-500"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Digital Workflow Integration</h6>
                <p class="text-gray-600 mt-2">Using advanced CAD/CAM systems and 3D printing to streamline workflows.</p>
                <a href="#" class="text-blue-500 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right text-blue-500"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-blue-500 text-5xl mb-4">
                    <i class="fas fa-suitcase-medical text-blue-500"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Outsourcing Support</h6>
                <p class="text-gray-600 mt-2">Simplifying outsourcing processes for international dental labs.</p>
                <a href="#" class="text-blue-500 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right text-blue-500"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-blue-500 text-5xl mb-4">
                    <i class="fas fa-stethoscope text-blue-500"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Affordable Pricing</h6>
                <p class="text-gray-600 mt-2">Providing competitive pricing while maintaining top-quality standards.</p>
                <a href="#" class="text-blue-500 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right text-blue-500"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-blue-500 text-5xl mb-4">
                    <i class="fas fa-microscope text-blue-500"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Experienced Team</h6>
                <p class="text-gray-600 mt-2">A team of skilled professionals with expertise in digital workflows.</p>
                <a href="#" class="text-blue-500 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right text-blue-500"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-blue-500 text-5xl mb-4">
                    <i class="fas fa-flask text-blue-500"></i> <!-- Flasks icon -->
                </div>

                <h6 class="text-xl font-semibold text-gray-800">Custom Workflow Integration</h6>
                <p class="text-gray-600 mt-2">Adapting workflows to meet client needs.</p>
                <a href="#" class="text-blue-500 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right text-blue-500"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-blue-500 text-5xl mb-4">
                    <i class="fas fa-cogs text-blue-500"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Flexible Material Options</h6>
                <p class="text-gray-600 mt-2">Offering diverse material choices to meet specific patient and clinical requirements.</p>
                <a href="#" class="text-blue-500 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right text-blue-500"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-blue-500 text-5xl mb-4">
                    <i class="fas fa-graduation-cap text-blue-500"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Training & Skill Development</h6>
                <p class="text-gray-600 mt-2">Ongoing training programs for our team to stay updated with the latest dental technologies.</p>
                <a href="#" class="text-blue-500 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right text-blue-500"></i></a>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-start transform transition duration-300 hover:scale-105">
                <div class="text-green-600 text-5xl mb-4">
                    <i class="fas fa-handshake text-blue-500"></i>
                </div>
                <h6 class="text-xl font-semibold text-gray-800">Commitment to Partnerships</h6>
                <p class="text-gray-600 mt-2">Building trust and long-term relationships with clients through consistent service and reliable solutions.</p>
                <a href="#" class="text-blue-500 mt-3 font-medium hover:underline">More details <i class="fas fa-angle-right text-blue-500"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Review Section with Unique Design -->
<section class="py-12 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-600">
    <div class="container mx-auto px-6 lg:px-20 mt-8 text-center text-white">
        <h2 class="text-4xl font-bold mb-8">Our Achievements</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center">
            <!-- Progress Bars -->
            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-8">
                    <!-- Progress Bar 1 -->
                    <div class="bg-white rounded-xl shadow-xl p-6 transform transition duration-300 hover:scale-105">
                        <div class="flex items-center justify-between">
                            <i class="fas fa-box text-4xl text-purple-600"></i>
                            <span class="text-lg font-semibold text-gray-800">Orders</span>
                        </div>
                        <div class="w-full h-2 bg-gray-300 rounded-full mt-4">
                            <div class="h-2 bg-purple-600 rounded-full progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <span class="text-lg font-semibold">0</span>
                            <span class="text-lg font-semibold">5000</span>
                        </div>
                    </div>

                    <!-- Progress Bar 2 -->
                    <div class="bg-white rounded-xl shadow-xl p-6 transform transition duration-300 hover:scale-105">
                        <div class="flex items-center justify-between">
                            <i class="fas fa-user-cog text-4xl text-purple-600"></i>
                            <span class="text-lg font-semibold text-gray-800">Skilled Designers</span>
                        </div>
                        <div class="w-full h-2 bg-gray-300 rounded-full mt-4">
                            <div class="h-2 bg-purple-600 rounded-full progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <span class="text-lg font-semibold">0</span>
                            <span class="text-lg font-semibold">50</span>
                        </div>
                    </div>

                    <!-- Progress Bar 3 -->
                    <div class="bg-white rounded-xl shadow-xl p-6 transform transition duration-300 hover:scale-105">
                        <div class="flex items-center justify-between">
                            <i class="fas fa-clipboard-check text-4xl text-purple-600"></i>
                            <span class="text-lg font-semibold text-gray-800">Quality Controllers</span>
                        </div>
                        <div class="w-full h-2 bg-gray-300 rounded-full mt-4">
                            <div class="h-2 bg-purple-600 rounded-full progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <span class="text-lg font-semibold">0</span>
                            <span class="text-lg font-semibold">20</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Country Section -->
            <div class="space-y-8">
                <div class="bg-white rounded-xl shadow-xl p-6 transform transition duration-300 hover:scale-105">
                    <div class="flex items-center justify-between">
                        <i class="fas fa-globe text-4xl text-purple-600"></i>
                        <span class="text-lg font-semibold text-gray-800">Countries Covered</span>
                    </div>
                    <div class="w-full h-2 bg-gray-300 rounded-full mt-4">
                        <div class="h-2 bg-purple-600 rounded-full progress-bar" style="width: 0%"></div>
                    </div>
                    <div class="flex justify-between mt-4">
                        <span class="text-lg font-semibold">0</span>
                        <span class="text-lg font-semibold">10</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Counter Animation & Progress Bar Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animated progress bars
            const progressBars = document.querySelectorAll('.progress-bar');

            progressBars.forEach(bar => {
                const target = parseInt(bar.closest('.p-6').querySelector('div:last-child').children[1].innerText);
                let currentWidth = 0;
                const increment = target / 2000; // Adjust speed by changing 2000

                const updateBar = () => {
                    if (currentWidth < target) {
                        currentWidth += increment;
                        bar.style.width = `${Math.min(currentWidth, target)}%`;
                        requestAnimationFrame(updateBar);
                    } else {
                        bar.style.width = `${target}%`;
                    }
                };
                updateBar();
            });
        });
    </script>
</section>



<!-- Why Choose Us -->
<section class=" py-16 px-12">
    <div class="container mx-auto flex flex-col lg:flex-row items-center gap-8">
        <!-- Image Section -->
        <div class="w-full lg:w-6/12 relative">
            <img src="public/images/computer.avif" class="w-full rounded-lg shadow-xl transform transition duration-300 hover:scale-105" alt="service img">
            <div class="absolute inset-0 flex items-center justify-center">
                <a class="bg-white text-gray-700 p-4 rounded-full shadow-lg hover:bg-gray-200 transition"
                    href="https://www.youtube.com/embed/KjpuOGDx_4E?si=fNVd64KesOcBrkRn">
                    <i class="fa-solid fa-play text-2xl"></i>
                </a>
            </div>
        </div>

        <!-- Content Section -->
        <div class="w-full lg:w-7/12 bg-white p-10 rounded-xl shadow-xl transform transition duration-300 hover:scale-105">
            <span class="bg-blue-500 text-white px-4 py-2 rounded-full text-sm font-semibold">Dentigo</span>
            <h2 class="text-4xl font-bold mt-4 text-gray-800">Why Choose Us</h2>
            <p class="text-gray-600 mt-2">We provide top-quality dental solutions trusted by professionals worldwide.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <!-- Reliability -->
                <div class="flex space-x-4 items-start">
                    <i class="fa-solid fa-check-circle text-4xl text-blue-500"></i>
                    <div>
                        <h6 class="text-xl font-semibold text-gray-800">Reliability</h6>
                        <p class="text-gray-600 text-sm">Trusted by dental professionals for consistent quality and on-time deliveries.</p>
                    </div>
                </div>

                <!-- Advanced Technology -->
                <div class="flex space-x-4 items-start">
                    <i class="fa-solid fa-microchip text-4xl text-blue-500"></i>
                    <div>
                        <h6 class="text-xl font-semibold text-gray-800">Advanced Technology</h6>
                        <p class="text-gray-600 text-sm">Utilizing cutting-edge CAD/CAM systems to ensure accuracy in every design.</p>
                    </div>
                </div>

                <!-- Certified Expertise -->
                <div class="flex space-x-4 items-start">
                    <i class="fa-solid fa-user-md text-4xl text-blue-500"></i>
                    <div>
                        <h6 class="text-xl font-semibold text-gray-800">Certified Expertise</h6>
                        <p class="text-gray-600 text-sm">A team of certified dentists and technicians ensures every product meets global benchmarks.</p>
                    </div>
                </div>

                <!-- Global Reach -->
                <div class="flex space-x-4 items-start">
                    <i class="fa-solid fa-globe text-4xl text-blue-500"></i>
                    <div>
                        <h6 class="text-xl font-semibold text-gray-800">Global Reach</h6>
                        <p class="text-gray-600 text-sm">Serving dental labs and clinics worldwide with tailored and efficient solutions.</p>
                    </div>
                </div>
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

<section class="md:py-20 py-6 text-black px-4">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl lg:text-4xl font-bold mb-2 text-black">Our Happy Clients</h2>
        <p class="text-lg mb-4 mx-auto max-w-2xl text-black">
            We value our clients and their feedback. Here's what they have to say about working with us!
        </p>

        <!-- Client Testimonials Slider -->
        <div id="client-carousel" class="relative w-full max-w-6xl mx-auto overflow-hidden rounded-lg bg-white shadow-2xl">
            <div class="carousel-inner flex transition-all duration-700 ease-in-out">
                <!-- Testimonials will be injected here dynamically -->
            </div>
        </div>
    </div>
</section>

<script>
    const clients = [{
            name: "Emily Carter (Owner)",
            address: "California, USA",
            comments: ["Bravodent's remote assistance has been invaluable, always quick and professional."]
        },
        {
            name: "Michael Adams (Operations Manager)",
            address: "New York, USA",
            comments: ["The Bravodent team provides excellent support, ensuring smooth workflow and timely resolutions."]
        },
        {
            name: "Sarah Williams (CAD/CAM Manager)",
            address: "Texas, USA",
            comments: ["Thanks to Bravodent, we’ve never faced delays, their remote assistance is a lifesaver."]
        },
        {
            name: "David Brown (Digital Dental Designer)",
            address: "Florida, USA",
            comments: ["Bravodent’s team is always available to solve our technical issues, ensuring minimal downtime."]
        },
        {
            name: "Olivia Martin (Laboratory Technician)",
            address: "Illinois, USA",
            comments: ["Bravodent offers fast, reliable support that keeps our systems running smoothly every time."]
        }
    ];

    const carouselInner = document.querySelector('.carousel-inner');
    let currentIndex = 0;

    const renderTestimonials = () => {
        clients.forEach(client => {
            const testimonialElement = document.createElement('div');
            testimonialElement.classList.add('carousel-item', 'flex-shrink-0', 'w-full', 'px-6', 'py-8', 'text-center');

            testimonialElement.innerHTML = `
                <div class="flex items-center justify-center mb-6">
                    <img class="w-24 h-24 rounded-full border-4 border-indigo-500 shadow-xl" src="public/images/profile.png" alt="${client.name}">
                </div>
                <p class="md:text-xl text-lg text-gray-800 mb-4 italic px-6 leading-relaxed">"${client.comments.join(' ')}"</p>
                <h3 class="font-semibold md:text-xl text-xl text-gray-900">${client.name}</h3>
                <p class="text-gray-500">${client.address}</p>
            `;
            carouselInner.appendChild(testimonialElement);
        });
    };

    const updateCarousel = () => {
        const offset = -100 * currentIndex;
        carouselInner.style.transform = `translateX(${offset}%)`;
    };

    const autoSlide = () => {
        currentIndex = (currentIndex + 1) % clients.length;
        updateCarousel();
    };

    renderTestimonials();
    updateCarousel();
    setInterval(autoSlide, 2000); // Auto-slide every 3 seconds
</script>


<script>
    window.addEventListener('scroll', function() {
        if (window.scrollY > 1) {
            $("#topbar").css('display', 'none');
        } else {
            $('#topbar').css('display', 'flex');
        }
    })
</script>

<?php
include 'inc/ft.php';
?>