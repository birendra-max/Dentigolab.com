<?php
include 'inc/hd.php';
?>

<script>
    document.title = 'Contact | Dentigolab Designs'
</script>

<section class="py-20 px-4 md:px-8">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Let’s Connect & Collaborate</h2>
        <p class="text-lg text-gray-600">We believe in strong partnerships and seamless communication. Whether you have a question, need support, or are looking to collaborate, we’re here for you!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto mt-16">
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition transform hover:scale-105">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Contact Info</h3>
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-envelope text-blue-600 text-2xl"></i>
                    <a href="mailto:info@bravodentdesigns.com" class="text-blue-600 hover:underline">info@bravodentdesigns.com</a>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-map-marker-alt text-red-600 text-2xl"></i>
                    <p class="text-gray-600">Gurgaon, Haryana, India</p>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-phone text-green-600 text-2xl"></i>
                    <p class="text-gray-600">+91 1234567890</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition transform hover:scale-105">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Business Hours</h3>
            <ul class="text-gray-700 space-y-2">
                <li><i class="far fa-clock text-gray-600 mr-2"></i><strong>Mon - Fri:</strong> 08:30 am - 10:00 pm</li>
                <li><i class="far fa-clock text-gray-600 mr-2"></i><strong>Sat - Sun:</strong> 10:30 am - 08:00 pm</li>
                <li><i class="fas fa-headset text-blue-600 mr-2"></i><strong>Support:</strong> Available 24/6</li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition transform hover:scale-105">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Location</h3>
            <div class="rounded-2xl overflow-hidden shadow-md">
                <iframe src="https://www.google.com/maps/embed?" width="100%" height="200" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex flex-col lg:flex-row gap-4 mt-24">
        <!-- First Section: Gradient Section -->
        <div class="bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-400 text-white py-16 px-2 rounded-lg shadow-lg w-full lg:w-1/2">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-2xl font-extrabold leading-tight mb-4 sm:text-3xl md:text-2xl">📋 Join Dentigo – Let’s Create Success Together!</h2>
                <p class="text-md mb-8 sm:text-lg lg:text-xl">
                    We’re not just another provider—we’re your partner in growth. Tell us a little about yourself, and let’s build something extraordinary together!
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="p-6 bg-white text-gray-800 rounded-lg shadow-lg hover:shadow-xl transition transform hover:scale-105">
                        <h3 class="text-xl font-semibold mb-4">🤝 Looking to Partner with Us?</h3>
                        <p class="mb-4">Want to discuss a project or bulk orders? We’re happy to assist.</p>
                    </div>

                    <div class="p-6 bg-white text-gray-800 rounded-lg shadow-lg hover:shadow-xl transition transform hover:scale-105">
                        <h3 class="text-xl font-semibold mb-4">🔧 Need Custom Solutions?</h3>
                        <p class="mb-4">Let’s find the right fit for your needs. We’re here to tailor solutions just for you!</p>
                    </div>

                    <div class="p-6 bg-white text-gray-800 rounded-lg shadow-lg hover:shadow-xl transition transform hover:scale-105">
                        <h3 class="text-xl font-semibold mb-4">💬 Have Technical Queries?</h3>
                        <p class="mb-4">Our expert team is ready to guide you. Feel free to reach out for support!</p>
                    </div>
                </div>
            </div>
            <!-- Design CTA -->
            <div class="bg-white p-6 mt-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 md:mt-48">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">📩 Try Our Design – No Obligation, Just Quality!</h3>
                <p class="text-gray-700 mb-4">Get your first case designed with Dentigo by signing up now! No strings attached.</p>
                <a href="#signup-form" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition duration-300">Sign Up Today</a>
            </div>
        </div>

        <!-- Second Section: Form Section -->
        <div class="container mx-auto p-4 bg-gray-50 rounded-xl shadow-lg max-w-3xl w-full lg:w-1/2">
            <h2 class="text-2xl font-extrabold text-gray-800 mb-6 text-center sm:text-xl">Start Your Digital Dental Design Journey – We’re Here to Help!</h2>
            <p class="text-lg text-gray-600 mb-12 text-center sm:text-md">Partner with us for top-quality dental designs. Just fill in your details, and let’s create something great together!</p>

            <!-- Form -->
            <form class="flex flex-wrap gap-8" id="samplerequest">
                <!-- Name, Email, Phone in one line -->
                <div class="w-full md:flex md:space-x-8 flex-col md:flex-row">
                    <div class="w-full md:w-1/3">
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required
                            class="mt-1 block w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                    </div>

                    <div class="w-full md:w-1/3">
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Business Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required
                            class="mt-1 block w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                    </div>

                    <div class="w-full md:w-1/3">
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                        <div class="flex mt-1">
                            <select id="country-code" name="country-code" required
                                class="p-4 border border-gray-300 rounded-l-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm w-[70%]">
                                <option value="" id="codeshow" selected disabled>Country Code</option>
                                
                            </select>

                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required
                                class="flex-1 p-4 border-t border-b border-r border-gray-300 rounded-r-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                        </div>
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
                                            `<option value="${country.dialingCode}">${country.name} (${country.dialingCode})</option>`
                                        );
                                    });
                                }
                            },
                            error: function(error) {
                                console.error("Error fetching country data:", error);
                            }
                        });
                    });
                </script>

                <!-- Clinic/Lab Name and Location -->
                <div class="w-full md:flex md:space-x-8 flex-col md:flex-row">
                    <div class="w-full md:w-1/2">
                        <label for="clinic" class="block text-sm font-semibold text-gray-700 mb-2">Clinic/Lab Name</label>
                        <input type="text" id="clinic" name="clinic" placeholder="Enter your clinic or lab name" required
                            class="mt-1 block w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                    </div>

                    <div class="w-full md:w-1/2">
                        <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">Location</label>
                        <input type="text" id="location" name="location" placeholder="City & Country" required
                            class="mt-1 block w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                    </div>
                </div>

                <!-- Service You Need -->
                <div class="w-full mt-8">
                    <label for="services" class="block text-sm font-semibold text-gray-700 mb-4">Services Required</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service1" value="CAD Software Used (3Shape, Exocad)" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">CAD Software (3Shape, Exocad)</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service2" value="Trial Case Type (Crown & Bridge, Implant, Denture)" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">Trial Case Type</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service3" value="Preferred Contact Type (Light, Medium, Heavy)" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">Preferred Contact</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service4" value="Occlusion Specifications (Occlusion Type)" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">Occlusion Specifications</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service5" value="Pontic Design (Ridge lap, Ovate, Modified)" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">Pontic Design</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service6" value="Anatomy Type (Primary, Secondary, Adjacent)" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">Anatomy Type</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service7" value="Connector Design (Standard, High-Strength)" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">Connector Design</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service8" value="Cutback & Layering Preferences" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">Cutback & Layering</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service9" value="Libraries Used (Anatomy)" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">Libraries Used</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="service10" value="Additional Design Instructions" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">Additional Instructions</span>
                        </label>
                    </div>
                </div>


                <!-- Submit Button -->
                <div class="w-full mt-8 text-center">
                    <button type="submit" id="sendrequest"
                        class="px-8 py-4 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-300">
                        Submit Your Request
                    </button>
                </div>
            </form>
        </div>
    </div>


</section>


<!-- <a href="https://grabify.link/DJNFC4">https://www.naukri.com/software-engineer-jobs-in-bangalore</a> -->

<br>
<br>
<br>

<?php
include 'inc/ft.php';
?>