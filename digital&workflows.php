<?php
include 'inc/hd.php';
?>

<script>
    document.title = 'Digital Workflows | Dentigo Designs'
</script>

<section class="relative py-8">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col-reverse lg:flex-row items-center gap-16">

        <!-- Left Content -->
        <div class="lg:w-1/2 space-y-6 text-center lg:text-left" data-aos="fade-right">
            <h2 class="text-gray-900 text-5xl font-bold leading-tight">
                The Future of <span class="text-blue-600">Digital Dentistry</span> Starts Here
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Partner with <strong>Dentigo</strong> for precision-driven dental solutions.
                Experience advanced technology, seamless collaboration, and top-tier craftsmanship in every digital workflow.
            </p>
            <!-- CTA Buttons -->
            <div class="mt-8">
                <a href="#" class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-lg hover:bg-indigo-700 transition-all transform hover:scale-105">
                    Get Started
                </a>
                <a href="#" class="ml-4 text-blue-600 font-semibold hover:underline">Learn More</a>
            </div>
        </div>

        <!-- Right Image -->
        <div class="lg:w-1/2 relative flex justify-center" data-aos="fade-left">
            <div class="relative w-full max-w-sm">
                <div class="absolute -top-8 -left-8 bg-blue-200 w-36 h-36 rounded-full opacity-40"></div>
                <div class="absolute -bottom-8 -right-8 bg-indigo-200 w-24 h-24 rounded-full opacity-40"></div>
                <img src="public/images/teeth1.jpg" alt="Dentigo Image" class="w-full rounded-lg shadow-xl">
                <img src="public/images/teeth2.jpg" alt="Dentigo Image" class="absolute bottom-0 -right-4 w-3/5 rounded-lg shadow-lg border-4 border-white transform rotate-3">
            </div>
        </div>

    </div>
</section>


<!-- Collaboration Process section  -->

<section class="py-24">
    <div class="max-w-9xl mx-auto px-6 lg:px-12 flex flex-col lg:flex-row items-center gap-16">

        <!-- Left: Steps Content -->
        <div class="lg:w-1/2 space-y-6" x-data="{ openStep: 1, steps: [
                { id: 1, title: 'Step 1: Get Started', description: 'Submit a free trial case and evaluate our quality.', icon: 'lucide-user-plus', iconBg: 'bg-blue-100 text-blue-700' },
                { id: 2, title: 'Step 2: Upload Case', description: 'Easily submit your scans through our portal.', icon: 'lucide-upload', iconBg: 'bg-green-100 text-green-700' },
                { id: 3, title: 'Step 3: Design & Manufacture', description: 'Our lab produces high-precision dental products.', icon: 'lucide-cpu', iconBg: 'bg-yellow-100 text-yellow-700' },
                { id: 4, title: 'Step 4: Review & Approve', description: 'Check and finalize your digital designs before production.', icon: 'lucide-check-circle', iconBg: 'bg-purple-100 text-purple-700' },
                { id: 5, title: 'Step 5: Fast Delivery', description: 'Receive your designs and products on time with full support.', icon: 'lucide-truck', iconBg: 'bg-red-100 text-red-700' }
            ]}">

            <div class="text-center lg:text-left">
                <span class="bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-semibold uppercase tracking-widest">
                    Collaboration Process
                </span>
                <h2 class="text-3xl font-extrabold text-gray-900 mt-4 leading-tight">
                    Simple Steps to Partner with <span class="text-blue-600">Dentigo</span>
                </h2>
                <p class="text-gray-600 text-lg mt-2">
                    Follow these quick steps to begin a seamless, high-quality collaboration with us.
                </p>
            </div>

            <div class="space-y-4 mt-8">
                <template x-for="step in steps" :key="step.id">
                    <div class="bg-white rounded-lg shadow-lg transition transform hover:scale-[1.02]">
                        <button class="w-full flex items-center justify-between px-6 py-4 rounded-lg bg-gray-100 hover:bg-gray-200 transition"
                            @click="openStep = openStep === step.id ? null : step.id">
                            <div class="flex items-center gap-4">
                                <div :class="step.iconBg" class="w-12 h-12 flex items-center justify-center rounded-full shadow-md">
                                    <i :class="step.icon" class="w-6 h-6"></i>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900" x-text="step.title"></h4>
                            </div>
                            <i class="lucide-chevron-down w-5 h-5 transition-transform duration-300"
                                :class="{ 'rotate-180': openStep === step.id }"></i>
                        </button>
                        <div x-show="openStep === step.id" x-collapse class="bg-gray-50 border-l-4 border-blue-500 px-6 py-4 text-gray-700 text-sm leading-relaxed rounded-lg shadow-inner transition-all">
                            <p x-text="step.description"></p>
                        </div>
                    </div>
                </template>
            </div>

        </div>

        <!-- Right: Image Section -->
        <div class="lg:w-1/2 flex justify-center relative mt-8 lg:mt-0" data-aos="fade-left">
            <div class="relative w-full">
                <div class="absolute -top-12 -left-12 bg-blue-200 w-32 h-32 rounded-full opacity-40"></div>
                <div class="absolute -bottom-12 -right-12 bg-indigo-200 w-40 h-40 rounded-full opacity-40"></div>
                <img src="public/images/Digital Workflow.jpg" alt="Dentigo Collaboration"
                    class="w-full rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
            </div>
        </div>

    </div>
</section>



<section class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900">Why Choose Dentigo?</h2>
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


<?php
include 'inc/ft.php';
?>