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
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105 duration-300 ease-in-out border-t-4 border-blue-500 flex flex-col items-center">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Contact Info</h3>
            <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                    <a href="mailto:dentigo@dentigolab.com" class="text-blue-600 hover:underline text-sm">Dentigo@dentigolab.com</a>
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
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105 duration-300 ease-in-out border-t-4 border-blue-500 flex flex-col items-center">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Business Hours</h3>
            <ul class="text-gray-700 space-y-3 text-sm">
                <li><i class="fas fa-headset text-blue-600 mr-2 text-xl"></i><strong>Support:</strong> Available 24/7 – We’re always here to support you!
                </li>
            </ul>
        </div>

        <!-- Join Dentigo Box -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105 duration-300 ease-in-out border-t-4 border-blue-500 flex flex-col items-center">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Join Dentigo – Let’s Create Success Together!</h2>
            <p class="text-sm text-gray-600 mb-6">
                We’re not just another provider—we’re your partner in growth. Tell us a little about yourself, and let’s build something extraordinary together!
            </p>
        </div>

    </div>
</section>

<section class="py-12">
    <div class="max-w-6xl mx-auto text-center mb-12 px-4">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Try Our Digital Dental Design – Get Started Today!</h2>
        <p class="text-lg text-gray-600">Discover exceptional digital dental design with our trial service. See the quality, precision, and efficiency firsthand before making any commitment. Provide the details below to get started with your trial case</p>
    </div>


    <div class="mx-auto rounded-xl shadow-lg w-full sm:w-4/5 lg:w-5/5 p-6 sm:p-8 mt-8 bg-white ">
        <h3 id="form-heading" class="text-2xl font-semibold text-gray-800 mb-4 text-center">Account & Contact Details</h3>
        <div class="flex flex-col lg:flex-row container">
            <!-- Left Side Image -->
            <div class="flex-1 flex items-center justify-center">
                <img src="public/images/contact.jpg" alt="Dental Design" class="rounded-lg shadow-lg max-w-full h-auto">
            </div>
            <!-- Right Side Form -->
            <div class="flex-1 p-6">
                <form class="max-w-4xl mx-auto space-y-8" id="samplerequest" method="post">
                    <div id="contact-details">
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter your name" required
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <div class="flex w-full gap-2">
                                    <div class="relative w-full sm:w-1/4">
                                        <select id="country-code" name="country-code" required
                                            class="block appearance-none w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 transition-all">
                                            <option value="" id="codeshow" selected disabled>Country Code</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required
                                        class="w-full sm:w-3/4 p-3 border border-gray-300 shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 rounded-lg">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Business Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email address" required
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label for="clinic" class="block text-sm font-medium text-gray-700">Clinic/Lab Name</label>
                                <input type="text" id="clinic" name="clinic" placeholder="Enter your clinic or lab name" required
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                <input type="text" id="location" name="location" placeholder="City & Country" required
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500 transition-all">
                            </div>
                        </div>
                        <button type="button" id="next-to-services" class="mt-6 flex items-center justify-center px-8 py-4 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-300">
                            Next
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ml-2">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Services Required Section -->
                    <div id="services-required" class="hidden">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="cad-software" class="block text-sm font-medium text-gray-700">CAD Software Used</label>
                                <input type="text" id="cad-software" name="cad-software" placeholder="Enter 3Shape, Exocad"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                            <div class="space-y-2">
                                <label for="trial-case" class="block text-sm font-medium text-gray-700">Trial Case Type</label>
                                <input type="text" id="trial-case" name="trial-case" placeholder="Enter Crown & Bridge, Implant, Denture, Ortho, etc.)"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                            <div class="space-y-2">
                                <label for="contact-type" class="block text-sm font-medium text-gray-700">Preferred Contact Type</label>
                                <input type="text" id="contact-type" name="contact-type" placeholder="Enter Light, medium, heavy"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                            <div class="space-y-2">
                                <label for="occlusion-specifications" class="block text-sm font-medium text-gray-700">Occlusion Specifications</label>
                                <input type="text" id="occlusion-specifications" name="occlusion-specifications" placeholder="Enter Occlusion Type"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                            <div class="space-y-2">
                                <label for="pontic-design" class="block text-sm font-medium text-gray-700">Pontic Design</label>
                                <input type="text" id="pontic-design" name="pontic-design" placeholder="Enter Ridge lap, ovate, modified"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                            <div class="space-y-2">
                                <label for="anatomy-type" class="block text-sm font-medium text-gray-700">Anatomy Type</label>
                                <input type="text" id="anatomy-type" name="anatomy-type" placeholder="Enter Primary, secondary, adjacent match"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                            <div class="space-y-2">
                                <label for="connector-design" class="block text-sm font-medium text-gray-700">Connector Design</label>
                                <input type="text" id="connector-design" name="connector-design" placeholder="Enter Standard, high-strength, minimal"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                            <div class="space-y-2">
                                <label for="cutback-layering" class="block text-sm font-medium text-gray-700">Cutback & Layering</label>
                                <input type="text" id="cutback-layering" name="cutback-layering" placeholder="Enter Type-specific preferences"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                            <div class="space-y-2">
                                <label for="libraries-used" class="block text-sm font-medium text-gray-700">Which Libraries Do You Use? </label>
                                <input type="text" id="libraries-used" name="libraries-used" placeholder="Enter Anatomy name which you use"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                            <div class="space-y-2">
                                <label for="additional-instructions" class="block text-sm font-medium text-gray-700">Additional Design Instructions</label>
                                <input type="text" id="additional-instructions" name="additional-instructions" placeholder="Enter How would you like us to design your restorations?"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm placeholder-gray-500">
                            </div>
                        </div>
                        <div class="flex space-x-4 mt-6">
                            <button type="button" id="back-to-contact" class="px-6 py-4 bg-gray-600 text-white font-semibold rounded-lg shadow-lg hover:bg-gray-700 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-300 flex items-center justify-center">
                                <i class="fas fa-arrow-left mr-2"></i> Back
                            </button>
                            <button type="submit" id="sendrequest" class="px-6 py-4 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-300 flex items-center justify-center">
                                Submit Your Request
                            </button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Fetch country codes
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

            // Show services required section
            $("#next-to-services").click(function() {
                $("#contact-details").hide();
                $("#services-required").removeClass("hidden");
                $("#form-heading").text("Services Required"); // Change heading to Services Required
            });

            // Go back to contact details
            $("#back-to-contact").click(function() {
                $("#services-required").addClass("hidden");
                $("#contact-details").show();
                $("#form-heading").text("Account & Contact Details"); // Change heading back to Account & Contact Details
            });
        });
    </script>
</section>

<section class="py-12 px-6 to-white mt-12">
    <div class="container mx-auto flex flex-col items-center gap-14 text-center">

        <!-- Section Title -->
        <div class="max-w-4xl">
            <h2 class="text-4xl font-bold text-gray-900 leading-tight">🚀 Partner with Us for Exclusive Benefits</h2>
            <p class="text-lg text-gray-700 mt-4">Looking for custom solutions, bulk orders, or expert support? Let’s collaborate to bring your vision to life.</p>
        </div>

        <!-- Feature Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-6xl">
            <div class="p-8 bg-white rounded-2xl shadow-lg border border-gray-200 hover:shadow-xl transition duration-300">
                <h3 class="text-xl font-semibold text-gray-900">📦 Bulk & Project Orders</h3>
                <p class="text-gray-600 mt-2">Get personalized assistance for bulk purchases or specialized projects.</p>
            </div>

            <div class="p-8 bg-white rounded-2xl shadow-lg border border-gray-200 hover:shadow-xl transition duration-300">
                <h3 class="text-xl font-semibold text-gray-900">⚙️ Custom Solutions</h3>
                <p class="text-gray-600 mt-2">Tailor-made services to match your unique requirements perfectly.</p>
            </div>

            <div class="p-8 bg-white rounded-2xl shadow-lg border border-gray-200 hover:shadow-xl transition duration-300">
                <h3 class="text-xl font-semibold text-black">🛠 Technical Support</h3>
                <p class="text-gray-600 mt-2">Our experts are ready to assist with any technical inquiries.</p>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-blue-50 to-blue-100 text-black p-10 rounded-2xl shadow-lg max-w-4xl">
            <h3 class="text-3xl font-semibold">🎁 Get Started with a Free Trial</h3>
            <p class="text-lg mt-4">Experience our premium services with no obligation. Sign up today and see the difference.</p>
            <a href="#signup-form" class="mt-6 inline-block bg-white text-blue-600 text-lg font-semibold px-8 py-4 rounded-lg shadow-md hover:bg-gray-100 transition transform hover:scale-105">Sign Up for Free</a>
        </div>

    </div>
</section>

<?php
include 'faq.php';
?>

<?php
include 'inc/ft.php';
?>