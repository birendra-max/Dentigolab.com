<?php
include 'inc/hd.php';
?>

<script>
    document.title = 'Digital Workflows | Dentigolab Designs'
</script>


<section class="py-24 relative" data-aos="fade-up">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">

            <!-- Left Content -->
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <h2 class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                            Collaborate with <span class="text-blue-600">Dentigolab</span>
                        </h2>
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                            At Dentigolab, we streamline the collaboration process for digital designs, manufacturing, and online purchases. Whether you’re a digital partner or a lab, we ensure <strong>precision, quality, and efficiency</strong> every step of the way.
                        </p>
                    </div>

                    <!-- Feature Pills -->
                    <div class="mt-8 flex flex-wrap gap-2 justify-center lg:justify-start" data-aos="fade-up" data-aos-delay="150">
                        <span class="px-6 py-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all transform hover:scale-105">Reliability</span>
                        <span class="px-6 py-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all transform hover:scale-105">Advanced Technology</span>
                        <span class="px-6 py-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all transform hover:scale-105">Certified Expertise</span>
                        <span class="px-6 py-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all transform hover:scale-105">Global Reach</span>
                    </div>
                </div>

                <!-- Action Button -->
                <button
                    class="sm:w-fit w-full px-3.5 py-2 bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                    <span class="px-1.5 text-white text-sm font-medium leading-6">Read More</span>
                </button>
            </div>

            <!-- Right Image -->
            <div class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                    <img class="rounded-xl object-cover" src="public/images/teeth1.jpg" alt="about Us image" />
                </div>
                <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="public/images/teeth2.jpg" alt="about Us image" />
            </div>
        </div>
    </div>
</section>


<section class=" py-20">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-12 items-center">

            <!-- Left: Image -->
            <div class="lg:w-1/2 flex flex-col items-center relative space-y-6 mb-8 lg:mb-0">
                <img src="public/images/col2.avif" alt="Research lab"
                    class="w-full lg:w-4/5 rounded-lg shadow-lg transform hover:scale-105 transition duration-300" data-aos="fade-right">
            </div>

            <!-- Right: Steps Content -->
            <div class="lg:w-1/2 w-full" x-data="{ openStep: null }">
                <span class="bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-semibold uppercase tracking-widest">
                    How to Collaborate with Us
                </span>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mt-4">Steps for Collaboration</h2>

                <div class="mt-8 space-y-4">

                    <!-- Step 1 -->
                    <div class="bg-white rounded-lg shadow-md transition">
                        <button @click="openStep === 1 ? openStep = null : openStep = 1"
                            class="w-full flex items-center justify-between p-6 text-left">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-blue-100 text-blue-700 flex items-center justify-center rounded-full">
                                    <i class="lucide lucide-user-plus w-6 h-6"></i>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900">Step 1: Get Started with a Trial</h4>
                            </div>
                            <i class="lucide lucide-chevron-down w-6 h-6 transition-transform"
                                :class="{ 'rotate-180': openStep === 1 }"></i>
                        </button>
                        <div x-show="openStep === 1" x-collapse class="px-6 pb-6 text-gray-600">
                            <p>Submit your first case for a free trial and experience the accuracy of our CAD/CAM solutions.</p>
                            <p>Upload scans for crowns, bridges, veneers, or implants.</p>
                            <p>Receive a trial design to evaluate our quality and TAT.</p>
                            <p>Request a product trial to test the superior quality of our manufacturing.</p>
                            <p>Choose from crowns, clear aligners, implant bars, or other products.</p>
                            <p>We’ll send you a sample product to ensure it meets your standards.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-white rounded-lg shadow-md transition">
                        <button @click="openStep === 2 ? openStep = null : openStep = 2"
                            class="w-full flex items-center justify-between p-6 text-left">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-green-100 text-green-700 flex items-center justify-center rounded-full">
                                    <i class="lucide lucide-upload w-6 h-6"></i>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900">Step 2: Seamless Case Submission</h4>
                            </div>
                            <i class="lucide lucide-chevron-down w-6 h-6 transition-transform"
                                :class="{ 'rotate-180': openStep === 2 }"></i>
                        </button>
                        <div x-show="openStep === 2" x-collapse class="px-6 pb-6 text-gray-600">
                            <p>Use our Dentigolab Portal to submit your digital scans or case details.</p>
                            <p>Easy drag-and-drop functionality for uploads.</p>
                            <p>Specify your design preferences, restoration type, or product details.</p>
                            <p>Track case progress and receive real-time updates on your dashboard.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-white rounded-lg shadow-md transition">
                        <button @click="openStep === 3 ? openStep = null : openStep = 3"
                            class="w-full flex items-center justify-between p-6 text-left">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-yellow-100 text-yellow-700 flex items-center justify-center rounded-full">
                                    <i class="lucide lucide-cpu w-6 h-6"></i>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900">Step 3: Design & Manufacture</h4>
                            </div>
                            <i class="lucide lucide-chevron-down w-6 h-6 transition-transform"
                                :class="{ 'rotate-180': openStep === 3 }"></i>
                        </button>
                        <div x-show="openStep === 3" x-collapse class="px-6 pb-6 text-gray-600">
                            <p>Our skilled designers create precise, aesthetic, and functional CAD designs tailored to your case.</p>
                            <p>Our state-of-the-art lab produces crowns, bridges, aligners, and other products using FDA-approved materials.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="bg-white rounded-lg shadow-md transition">
                        <button @click="openStep === 4 ? openStep = null : openStep = 4"
                            class="w-full flex items-center justify-between p-6 text-left">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-purple-100 text-purple-700 flex items-center justify-center rounded-full">
                                    <i class="lucide lucide-check-circle w-6 h-6"></i>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900">Step 4: Review & Approve</h4>
                            </div>
                            <i class="lucide lucide-chevron-down w-6 h-6 transition-transform"
                                :class="{ 'rotate-180': openStep === 4 }"></i>
                        </button>
                        <div x-show="openStep === 4" x-collapse class="px-6 pb-6 text-gray-600">
                            <p>Preview the designs or products before final delivery.</p>
                            <p>Request adjustments or modifications at no additional charge during the trial.</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="bg-white rounded-lg shadow-md transition">
                        <button @click="openStep === 5 ? openStep = null : openStep = 5"
                            class="w-full flex items-center justify-between p-6 text-left">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-red-100 text-red-700 flex items-center justify-center rounded-full">
                                    <i class="lucide lucide-truck w-6 h-6"></i>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900">Step 5: Delivery & Support</h4>
                            </div>
                            <i class="lucide lucide-chevron-down w-6 h-6 transition-transform"
                                :class="{ 'rotate-180': openStep === 5 }"></i>
                        </button>
                        <div x-show="openStep === 5" x-collapse class="px-6 pb-6 text-gray-600">
                            <p>Designs and products are delivered within industry-leading turnaround times.</p>
                            <p>Our support team is available 24/7 to assist with any questions or concerns.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Alpine.js for dropdowns -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js"></script>
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>



<section class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900">Why Choose Dentigolab?</h2>
            <a href="about.php" class="mt-4 inline-flex items-center gap-2 text-blue-600 font-semibold hover:underline">
                Discover Now
                <i class="fas fa-arrow-right w-5 h-5"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center text-center transform transition-transform hover:scale-105 hover:shadow-xl">
                <a href="#" class="flex items-center gap-2 mb-4">
                    <i class="fas fa-cogs w-8 h-8 text-blue-600"></i> <!-- End-to-End Solutions Icon -->
                    <h5 class="text-xl font-semibold text-gray-900">End-to-End Solutions</h5>
                </a>
                <p class="text-gray-600 mt-2">From digital designs to product manufacturing, we handle it all.</p>
                <a href="#" class="mt-4 text-blue-600 font-semibold hover:underline flex items-center gap-1">
                    Learn More <i class="fas fa-arrow-right w-5 h-5"></i>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center text-center transform transition-transform hover:scale-105 hover:shadow-xl">
                <a href="#" class="flex items-center gap-2 mb-4">
                    <i class="fas fa-gift w-8 h-8 text-green-600"></i> <!-- Free Trials Icon -->
                    <h5 class="text-xl font-semibold text-gray-900">Free Trials</h5>
                </a>
                <p class="text-gray-600 mt-2">Experience our quality before committing.</p>
                <a href="#" class="mt-4 text-blue-600 font-semibold hover:underline flex items-center gap-1">
                    Learn More <i class="fas fa-arrow-right w-5 h-5"></i>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center text-center transform transition-transform hover:scale-105 hover:shadow-xl">
                <a href="#" class="flex items-center gap-2 mb-4">
                    <i class="fas fa-globe w-8 h-8 text-yellow-600"></i> <!-- Global Reach Icon -->
                    <h5 class="text-xl font-semibold text-gray-900">Global Reach</h5>
                </a>
                <p class="text-gray-600 mt-2">Collaborate with us from anywhere in the world.</p>
                <a href="#" class="mt-4 text-blue-600 font-semibold hover:underline flex items-center gap-1">
                    Learn More <i class="fas fa-arrow-right w-5 h-5"></i>
                </a>
            </div>

            <!-- Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center text-center transform transition-transform hover:scale-105 hover:shadow-xl">
                <a href="#" class="flex items-center gap-2 mb-4">
                    <i class="fas fa-headset w-8 h-8 text-purple-600"></i> <!-- Dedicated Support Icon -->
                    <h5 class="text-xl font-semibold text-gray-900">Dedicated Support</h5>
                </a>
                <p class="text-gray-600 mt-2">Our team ensures smooth communication and collaboration.</p>
                <a href="#" class="mt-4 text-blue-600 font-semibold hover:underline flex items-center gap-1">
                    Learn More <i class="fas fa-arrow-right w-5 h-5"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Font Awesome CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

<br>
<br>
<br>

<?php
include 'inc/ft.php';
?>