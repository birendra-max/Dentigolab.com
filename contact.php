<?php
include 'inc/hd.php';
?>

<script>
    document.title = 'Contact | Dentigolab Designs'
</script>


<section class="py-16">
    <!-- Section Title and Description -->
    <div class="max-w-6xl mx-auto text-center mb-12 px-4">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Let’s Connect & Collaborate</h2>
        <p class="text-lg text-gray-600">We believe in strong partnerships and seamless communication. Whether you have a question, need support, or are looking to collaborate, we’re here for you!</p>
    </div>

    <!-- Grid Section for Boxes -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6 max-w-7xl mx-auto mt-16 px-4">

        <!-- Contact Info Box -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105 duration-300 ease-in-out border-t-4 border-teal-500 flex flex-col items-center">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Contact Info</h3>
            <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                    <a href="mailto:info@bravodentdesigns.com" class="text-blue-600 hover:underline text-sm">info@bravodentdesigns.com</a>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-map-marker-alt text-red-600 text-xl"></i>
                    <p class="text-gray-600 text-sm">Gurgaon, Haryana, India</p>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-phone text-green-600 text-xl"></i>
                    <p class="text-gray-600 text-sm">+91 1234567890</p>
                </div>
            </div>
        </div>

        <!-- Business Hours Box -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105 duration-300 ease-in-out border-t-4 border-teal-500 flex flex-col items-center">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Business Hours</h3>
            <ul class="text-gray-700 space-y-3 text-sm">
                <li><i class="far fa-clock text-gray-600 mr-2"></i><strong>Mon - Fri:</strong> 08:30 am - 10:00 pm</li>
                <li><i class="far fa-clock text-gray-600 mr-2"></i><strong>Sat - Sun:</strong> 10:30 am - 08:00 pm</li>
                <li><i class="fas fa-headset text-blue-600 mr-2"></i><strong>Support:</strong> Available 24/6</li>
            </ul>
        </div>

        <!-- Join Dentigo Box -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105 duration-300 ease-in-out border-t-4 border-teal-500 flex flex-col items-center">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Join Dentigo – Let’s Create Success Together!</h2>
            <p class="text-sm text-gray-600 mb-6">
                We’re not just another provider—we’re your partner in growth. Tell us a little about yourself, and let’s build something extraordinary together!
            </p>
            <a href="contact.html" class="inline-block bg-teal-500 text-white px-6 py-2 rounded-md text-sm font-semibold hover:bg-teal-600 transition-all duration-300">
                Get Started
            </a>
        </div>

    </div>
</section>

<section class="container mx-auto rounded-xl shadow-xl w-full sm:w-4/5 lg:w-5/5 p-6 sm:p-8 mt-8 bg-white">
    <h2 class="text-3xl font-extrabold text-gray-800 mb-6 text-center sm:text-2xl">Try Our Digital Dental Design – Get Started Today!</h2>
    <p class="text-lg text-gray-600 mb-12 text-center sm:text-md">Discover exceptional digital dental design with our trial service. See the quality, precision, and efficiency firsthand before making any commitment. Provide the details below to get started with your trial case</p>

    <form class="max-w-4xl mx-auto space-y-8" id="samplerequest" method="post">
        <!-- Full Name and Phone Number in one line -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <!-- Full Name -->
            <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required
                    class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 transition-all">
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
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <!-- Business Email Address -->
            <div class="space-y-2">
                <label for="email" class="block text-sm font-medium text-gray-700">Business Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required
                    class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 transition-all">
            </div>

            <!-- Clinic/Lab Name -->
            <div class="space-y-2">
                <label for="clinic" class="block text-sm font-medium text-gray-700">Clinic/Lab Name</label>
                <input type="text" id="clinic" name="clinic" placeholder="Enter your clinic or lab name" required
                    class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 transition-all">
            </div>

            <!-- Location -->
            <div class="space-y-2">
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" id="location" name="location" placeholder="City & Country" required
                    class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 transition-all">
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

        <!-- Services You Need (Replaced Checkboxes with Input Boxes) -->
        <div class="w-full">
            <label for="services" class="block text-sm font-medium text-gray-700 mb-4">Services Required</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- CAD Software Input -->
                <div class="space-y-2">
                    <label for="cad-software" class="block text-sm font-medium text-gray-700">CAD Software Used (3Shape, Exocad)</label>
                    <input type="text" id="cad-software" name="cad-software" placeholder="Enter details about CAD Software"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Trial Case Type Input -->
                <div class="space-y-2">
                    <label for="trial-case" class="block text-sm font-medium text-gray-700">Trial Case Type (Crown & Bridge, Implant, Denture)</label>
                    <input type="text" id="trial-case" name="trial-case" placeholder="Enter details about Trial Case Type"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Preferred Contact Type Input -->
                <div class="space-y-2">
                    <label for="contact-type" class="block text-sm font-medium text-gray-700">Preferred Contact Type (Light, Medium, Heavy)</label>
                    <input type="text" id="contact-type" name="contact-type" placeholder="Enter details about Preferred Contact Type"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Occlusion Specifications Input -->
                <div class="space-y-2">
                    <label for="occlusion-specifications" class="block text-sm font-medium text-gray-700">Occlusion Specifications</label>
                    <input type="text" id="occlusion-specifications" name="occlusion-specifications" placeholder="Enter Occlusion Specifications"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Pontic Design Input -->
                <div class="space-y-2">
                    <label for="pontic-design" class="block text-sm font-medium text-gray-700">Pontic Design (Ridge lap, Ovate, Modified)</label>
                    <input type="text" id="pontic-design" name="pontic-design" placeholder="Enter Pontic Design details"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Anatomy Type Input -->
                <div class="space-y-2">
                    <label for="anatomy-type" class="block text-sm font-medium text-gray-700">Anatomy Type (Primary, Secondary, Adjacent)</label>
                    <input type="text" id="anatomy-type" name="anatomy-type" placeholder="Enter Anatomy Type details"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Connector Design Input -->
                <div class="space-y-2">
                    <label for="connector-design" class="block text-sm font-medium text-gray-700">Connector Design (Standard, High-Strength)</label>
                    <input type="text" id="connector-design" name="connector-design" placeholder="Enter Connector Design details"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Cutback & Layering Preferences Input -->
                <div class="space-y-2">
                    <label for="cutback-layering" class="block text-sm font-medium text-gray-700">Cutback & Layering</label>
                    <input type="text" id="cutback-layering" name="cutback-layering" placeholder="Enter Cutback & Layering preferences"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Libraries Used Input -->
                <div class="space-y-2">
                    <label for="libraries-used" class="block text-sm font-medium text-gray-700">Libraries Used (Anatomy)</label>
                    <input type="text" id="libraries-used" name="libraries-used" placeholder="Enter Libraries Used details"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

                <!-- Additional Design Instructions Input -->
                <div class="space-y-2">
                    <label for="additional-instructions" class="block text-sm font-medium text-gray-700">Additional Design Instructions</label>
                    <input type="text" id="additional-instructions" name="additional-instructions" placeholder="Enter Additional Instructions"
                        class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                </div>

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
</section>


<section class="py-16 px-4 md:px-10 bg-gray-50">
    <div class="container mx-auto flex flex-col items-center gap-12 mt-16">
        <!-- First Section: Gradient Section -->
        <div class="bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-400 text-white py-14 px-6 sm:px-8 rounded-xl shadow-2xl w-full sm:w-5/6 lg:w-4/5 min-h-[400px]">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-extrabold mb-6 sm:mb-8 tracking-wide">🤝 Looking to Partner with Us?</h2>
                <p class="text-base sm:text-lg mb-8 sm:mb-12">Whether it’s a bulk order, custom project, or technical assistance, we’re here to help you get the best service possible!</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-10">
                    <div class="p-6 sm:p-8 bg-white text-gray-800 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4">💼 Want to discuss a project or bulk orders?</h3>
                        <p class="text-sm sm:text-base text-gray-600">We’re happy to assist with project discussions, bulk orders, and collaboration opportunities.</p>
                    </div>

                    <div class="p-6 sm:p-8 bg-white text-gray-800 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4">🔧 Need Custom Solutions?</h3>
                        <p class="text-sm sm:text-base text-gray-600">Let’s craft a tailored solution that fits your needs perfectly. We’re here to help make your ideas come to life.</p>
                    </div>

                    <div class="p-6 sm:p-8 bg-white text-gray-800 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4">💬 Have Technical Queries?</h3>
                        <p class="text-sm sm:text-base text-gray-600">Our experts are just a message away to assist you with any technical questions or challenges you may have.</p>
                    </div>
                </div>
            </div>

            <!-- Design CTA -->
            <div class="bg-white p-6 sm:p-8 mt-12 sm:mt-14 rounded-xl shadow-xl hover:shadow-2xl transition duration-300">
                <h3 class="text-2xl sm:text-3xl font-semibold text-gray-800 mb-6">📩 Try Our Design – No Obligation, Just Quality!</h3>
                <p class="text-base sm:text-lg text-gray-700 mb-6">Get your first case designed with Dentigo by signing up now! No strings attached. Just exceptional quality.</p>
                <a href="#signup-form" class="inline-block bg-blue-600 text-white text-lg sm:text-xl px-8 sm:px-10 py-4 sm:py-5 rounded-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">Sign Up Today</a>
            </div>
        </div>
    </div>
</section>


<?php
include 'faq.php';
?>


<br>
<br>
<br>

<?php
include 'inc/ft.php';
?>