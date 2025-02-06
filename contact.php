<?php
include 'inc/hd.php';
?>

<script>
    document.title = 'Contact | Dentigolab Designs'
</script>

<section class="py-20 px-4 md:px-8">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-5xl font-bold text-gray-900 mb-4">Contact Us</h2>
        <p class="text-lg text-gray-600">We're here to help! Reach out to us for any inquiries or support.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Contact Info</h3>
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                    <a href="mailto:info@bravodentdesigns.com" class="text-blue-600 hover:underline">info@bravodentdesigns.com</a>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-map-marker-alt text-red-600 text-xl"></i>
                    <p class="text-gray-600">Gurgaon, Haryana, India</p>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-phone text-green-600 text-xl"></i>
                    <p class="text-gray-600">+91 1234567890</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Business Hours</h3>
            <ul class="text-gray-700 space-y-2">
                <li><i class="far fa-clock text-gray-600 mr-2"></i><strong>Mon - Fri:</strong> 08:30 am - 10:00 pm</li>
                <li><i class="far fa-clock text-gray-600 mr-2"></i><strong>Sat - Sun:</strong> 10:30 am - 08:00 pm</li>
                <li><i class="fas fa-headset text-blue-600 mr-2"></i><strong>Support:</strong> Available 24/6</li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Location</h3>
            <div class="rounded-lg overflow-hidden shadow-md">
                <iframe src="https://www.google.com/maps/embed?" width="100%" height="200" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-16 bg-white p-10 rounded-lg shadow-lg hover:shadow-xl transition">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="hidden md:block">
                <img src="https://www.shutterstock.com/image-photo/hand-show-icon-address-phone-600nw-2475999141.jpg" alt="Contact Us" class="w-full h-full rounded-lg object-cover">
            </div>
            <div>
                <h3 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Send a Message</h3>
                <form class="space-y-6">
                    <div class="relative">
                        <i class="fas fa-user absolute left-4 top-4 text-gray-400"></i>
                        <input type="text" placeholder="Your Name" class="w-full p-4 pl-12 border rounded-lg focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-4 top-4 text-gray-400"></i>
                        <input type="email" placeholder="Your Email" class="w-full p-4 pl-12 border rounded-lg focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div class="relative">
                        <i class="fas fa-comment-dots absolute left-4 top-4 text-gray-400"></i>
                        <textarea placeholder="Your Message" class="w-full p-4 pl-12 border rounded-lg focus:ring-2 focus:ring-blue-600"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white p-4 rounded-lg hover:bg-blue-700 transition">Send Message</button>
                </form>
            </div>
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