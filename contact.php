<?php
include 'inc/hd.php';
?>

<script>
    document.title = 'Contact | Dentigolab Designs'
</script>

<section class="py-10 px-4 md:px-8">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Let’s Connect & Collaborate</h2>
        <p class="text-lg text-gray-600">We believe in strong partnerships and seamless communication. Whether you have a question, need support, or are looking to collaborate, we’re here for you!</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-8xl mx-auto mt-16">
        <!-- Contact Info Box -->
        <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Contact Info</h3>
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-envelope text-blue-600 text-lg"></i>
                    <a href="mailto:info@bravodentdesigns.com" class="text-blue-600 hover:underline text-sm">info@bravodentdesigns.com</a>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-map-marker-alt text-red-600 text-lg"></i>
                    <p class="text-gray-600 text-sm">Gurgaon, Haryana, India</p>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-phone text-green-600 text-lg"></i>
                    <p class="text-gray-600 text-sm">+91 1234567890</p>
                </div>
            </div>
        </div>

        <!-- Business Hours Box -->
        <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Business Hours</h3>
            <ul class="text-gray-700 space-y-2 text-sm">
                <li><i class="far fa-clock text-gray-600 mr-2"></i><strong>Mon - Fri:</strong> 08:30 am - 10:00 pm</li>
                <li><i class="far fa-clock text-gray-600 mr-2"></i><strong>Sat - Sun:</strong> 10:30 am - 08:00 pm</li>
                <li><i class="fas fa-headset text-blue-600 mr-2"></i><strong>Support:</strong> Available 24/6</li>
            </ul>
        </div>

        <!-- Our Location Box -->
        <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Our Location</h3>
            <div class="rounded-xl overflow-hidden shadow-md">
                <iframe src="https://www.google.com/maps/embed?" width="100%" height="180" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>

        <!-- Join Dentigo Box -->
        <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Join Dentigo – Let’s Create Success Together!</h2>
            <p class="text-sm text-gray-600 mb-6">
                We’re not just another provider—we’re your partner in growth. Tell us a little about yourself, and let’s build something extraordinary together!
            </p>
        </div>
    </div>


    <!-- Second Section: Form Section -->
    <div class="container mx-auto rounded-xl shadow-lg w-full sm:w-4/5 lg:w-5/5 p-2 sm:p-4 mt-8">
        <h2 class="text-2xl font-extrabold text-gray-800 mb-6 text-center sm:text-xl">Try Our Digital Dental Design – Get Started Today!</h2>
        <p class="text-lg text-gray-600 mb-12 text-center sm:text-md">Discover exceptional digital dental design with our trial service. See the quality, precision, and efficiency firsthand before making any commitment. Provide the details below to get started with your trial case</p>

        <form class="max-w-4xl mx-auto space-y-8" id="samplerequest" method="post">
            <!-- Full Name and Phone Number in one line -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Full Name -->
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Phone Number -->
                <div class="space-y-2">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <div class="flex w-full gap-2">
                        <!-- Country Code Full Width (takes the full width) -->
                        <select id="country-code" name="country-code" required
                            class="w-full sm:w-1/4 p-4 border border-gray-300 shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm rounded-l-lg">
                            <option value="" id="codeshow" selected disabled>Country Code</option>
                        </select>

                        <!-- Phone Number input Half Width -->
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required
                            class="w-full sm:w-3/4 p-4 border border-gray-300 shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 rounded-r-lg">
                    </div>
                </div>
            </div>

            <!-- Business Email Address, Clinic/Lab Name, and Location in one line -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <!-- Business Email Address -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Business Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Clinic/Lab Name -->
                <div class="space-y-2">
                    <label for="clinic" class="block text-sm font-medium text-gray-700">Clinic/Lab Name</label>
                    <input type="text" id="clinic" name="clinic" placeholder="Enter your clinic or lab name" required
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Location -->
                <div class="space-y-2">
                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                    <input type="text" id="location" name="location" placeholder="City & Country" required
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $.ajax({
                        url: "https://restcountries.com/v3.1/all",
                        method: "GET",
                        success: function(data) {
                            const countries = data.map(country => ({
                                name: country.name.common,
                                dialingCode: country.idd?.root ?
                                    country.idd.root + (country.idd.suffixes ? country.idd.suffixes[0] : "") : "N/A"
                            }));

                            // Sort countries alphabetically
                            countries.sort((a, b) => a.name.localeCompare(b.name));

                            const countryList = $("#country-code");
                            if (countryList.length) {
                                countries.forEach(country => {
                                    countryList.append(
                                        `<option value="${country.dialingCode}" data-display="${country.dialingCode}">
                                        ${country.name} (${country.dialingCode})
                                    </option>`
                                    );
                                });
                            }

                            // When user selects a country, update the select box to show only the country code
                            countryList.on("change", function() {
                                const selectedOption = $(this).find(":selected");
                                const countryCode = selectedOption.data("display");

                                // Update the selected option text dynamically
                                selectedOption.text(countryCode);
                            });
                        },
                        error: function(error) {
                            console.error("Error fetching country data:", error);
                        }
                    });
                });
            </script>

            <!-- Services You Need -->
            <div class="w-full">
                <label for="services" class="block text-sm font-medium text-gray-700 mb-4">Services Required</label>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service1" value="CAD Software Used (3Shape, Exocad)"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">CAD Software (3Shape, Exocad)</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service2" value="Trial Case Type (Crown & Bridge, Implant, Denture)"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">Trial Case Type</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service3" value="Preferred Contact Type (Light, Medium, Heavy)"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">Preferred Contact</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service4" value="Occlusion Specifications (Occlusion Type)"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">Occlusion Specifications</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service5" value="Pontic Design (Ridge lap, Ovate, Modified)"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">Pontic Design</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service6" value="Anatomy Type (Primary, Secondary, Adjacent)"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">Anatomy Type</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service7" value="Connector Design (Standard, High-Strength)"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">Connector Design</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service8" value="Cutback & Layering Preferences"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">Cutback & Layering</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service9" value="Libraries Used (Anatomy)"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">Libraries Used</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="service10" value="Additional Design Instructions"
                            class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                        <span class="text-gray-700">Additional Instructions</span>
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="w-full text-center">
                <button type="submit" id="sendrequest"
                    class="px-8 py-4 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-300">
                    Submit Your Request
                </button>
            </div>
        </form>
    </div>



    <div class="container mx-auto flex flex-col items-center gap-8 mt-16 px-4">
        <!-- First Section: Gradient Section -->
        <div class="bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-400 text-white py-12 px-6 rounded-xl shadow-lg w-full sm:w-5/5 lg:w-4/5 min-h-[400px]">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">🤝 Looking to Partner with Us?</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="p-6 bg-white text-gray-800 rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
                        <h3 class="text-xl font-semibold mb-4">💼 Want to discuss a project or bulk orders?</h3>
                        <p>We’re happy to assist.</p>
                    </div>

                    <div class="p-6 bg-white text-gray-800 rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
                        <h3 class="text-xl font-semibold mb-4">🔧 Need Custom Solutions?</h3>
                        <p>Let’s find the right fit for your needs. We’re here to tailor solutions just for you!</p>
                    </div>

                    <div class="p-6 bg-white text-gray-800 rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
                        <h3 class="text-xl font-semibold mb-4">💬 Have Technical Queries?</h3>
                        <p>Our expert team is ready to guide you. Feel free to reach out for support!</p>
                    </div>
                </div>
            </div>

            <!-- Design CTA -->
            <div class="bg-white p-6 mt-12 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">📩 Try Our Design – No Obligation, Just Quality!</h3>
                <p class="text-gray-700 mb-4">Get your first case designed with Dentigo by signing up now! No strings attached.</p>
                <a href="#signup-form" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition duration-300">Sign Up Today</a>
            </div>
        </div>
    </div>


</section>

<script src="public/js/alpine.js" defer></script>

<section class="py-10 w-[80%] m-auto">
    <div class="container mx-auto px-6 lg:px-12">
        <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-12">
            Frequently Asked Questions (FAQ)
        </h2>
        <p class="text-lg text-center text-gray-700 mb-12 max-w-3xl mx-auto">
            At Dentigo, we believe in transparency and ensuring all your questions are answered. Whether you're a dental technician, lab owner, or clinician, here's everything you need to know about working with us.
        </p>

        <!-- Alpine.js Tab Section -->
        <div x-data="{ openTab: 1, activeClasses: 'border-l border-t border-r rounded-t text-teal-700', inactiveClasses: 'text-gray-500 hover:text-teal-700' }" class="w-full">

            <!-- Tab Headers -->
            <ul class="flex border-b">
                <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-1">
                    <a href="#" :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold">
                        Design & Digital Workflow
                    </a>
                </li>
                <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                    <a href="#" :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold">
                        Manufacturing & Production
                    </a>
                </li>
                <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                    <a href="#" :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold">
                        Shipping & Payments
                    </a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="w-full mt-4">
                <!-- Design & Digital Workflow Tab -->
                <div x-show="openTab === 1">
                    <div class="space-y-6">
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">What design services do you offer?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                We provide an all-in-one solution that includes CAD/CAM 3Shape designing for seamless digital workflows. Our services cover crowns, bridges, veneers, dentures, aligners, implant restorations, and appliances, ensuring high precision and reliability.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">How do I send my case files?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Simply upload your STL, DICOM, or digital impressions through our secure online portal.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Can I review the design before manufacturing?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Absolutely! We share the design for approval before moving to production. Any modifications can be made at this stage.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">What design software do you use?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                We utilize 3Shape, Exocad, and other advanced CAD/CAM solutions to ensure the highest accuracy in design.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Do you support digital smile design?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes! We offer digital smile planning and mock-ups to help clinicians visualize the final restoration before production.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Can you integrate with my existing lab system?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes! We work with various digital platforms and lab management systems for seamless case handling.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Do you offer trial cases for new clients?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes! We provide free first-case trials to help you experience our quality before committing.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">How do you handle case modifications?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Any required modifications can be requested before final approval, ensuring complete satisfaction with the design.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Manufacturing & Production Tab -->
                <div x-show="openTab === 2">
                    <div class="space-y-6">
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">What materials do you use for crowns and bridges?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                We offer a variety of materials including Zirconia, Lithium Disilicate, PFM, and PMMA based on your preference and the restoration requirements.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">What is the turnaround time for manufacturing?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Our typical turnaround time is 5-7 business days, depending on the complexity of the case.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Can you handle complex cases?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes, we specialize in complex cases including full arch restorations, implant-supported restorations, and hybrid dentures.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">How do you ensure the quality of your restorations?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                We have strict quality control measures in place, including CAD design verification, material checks, and final inspection before shipping.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Do you offer support for implant cases?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes, we specialize in implant restorations including crowns, bridges, abutments, and custom implant solutions.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Can I get a price quote before placing an order?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes, we offer free quotes for your cases, based on the complexity and materials required.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Do you offer rush service?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes! Rush services are available for urgent cases. Let us know your requirements, and we will prioritize your case.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">What happens if my case is rejected?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                In the rare case that your case is rejected, we will work with you to resolve the issue and make necessary corrections. Your satisfaction is our priority.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Shipping & Payments Tab -->
                <div x-show="openTab === 3">
                    <div class="space-y-6">
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">What shipping methods do you offer?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                We offer standard, expedited, and overnight shipping options. All shipments are tracked for your peace of mind.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">What payment methods do you accept?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                We accept all major credit cards, bank transfers, and PayPal for your convenience.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Do you offer international shipping?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes, we ship internationally! We offer reliable shipping options to many countries.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">How can I track my order?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Once your order is shipped, you will receive a tracking number via email for easy tracking.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">How do I handle returns or exchanges?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                If you're not satisfied with your order, please reach out to us. We'll guide you through our return/exchange process.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Do you offer payment plans?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes, we offer flexible payment options for qualified clients, including installment plans.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">Can I change the shipping address after placing an order?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                Yes, you can update your shipping address within 24 hours after placing an order.
                            </p>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold text-gray-800">What happens if my order is lost in transit?</p>
                                <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                If an order is lost in transit, we will investigate with the carrier and issue a refund or replacement as needed.
                            </p>
                        </div>
                    </div>
                </div>
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