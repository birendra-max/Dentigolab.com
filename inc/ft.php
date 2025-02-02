</main>

<footer class="w-full bg-gradient-to-r from-purple-800 via-blue-600 to-indigo-800 mt-8" style="font-family: 'Georgia', serif;">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="py-16 flex flex-col items-center gap-8 lg:flex-row">
            <!-- Logo -->
            <a href="index.php" class="flex justify-center">
                <img src="public/images/dentigologo.png" alt="Logo" class="w-[200px] sm:w-[210px] transition-all duration-300 ease-in-out transform hover:scale-105">
            </a>
            <!-- Links -->
            <ul class="text-lg text-center sm:flex items-center justify-center gap-10 lg:gap-8 xl:gap-10 text-white space-y-4 sm:space-y-0">
                <li><a href="AboutUs.php" class="hover:text-yellow-300 transition duration-200">About Us</a></li>
                <li><a href="Privacy&Policy.php" class="hover:text-yellow-300 transition duration-200">Privacy Policy</a></li>
                <li><a href="Terms&Conditions.php" class="hover:text-yellow-300 transition duration-200">Terms & Conditions</a></li>
                <li><a href="Blogs.php" class="hover:text-yellow-300 transition duration-200">Blogs</a></li>
                <li><a href="ContactUs.php" class="hover:text-yellow-300 transition duration-200">Contact Us</a></li>
            </ul>
            <!-- Social Icons -->
            <div class="flex space-x-4">
                <a href="javascript:;" target="_self" class="w-9 h-9 rounded-full bg-gray-700 hover:bg-yellow-400 flex justify-center items-center transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M11.3214 8.93666L16.4919 3.05566H15.2667L10.7772 8.16205L7.1914 3.05566H3.05566L8.47803 10.7774L3.05566 16.9446H4.28097L9.022 11.552L12.8088 16.9446H16.9446L11.3211 8.93666H11.3214ZM9.64322 10.8455L9.09382 10.0765L4.72246 3.95821H6.60445L10.1322 8.8959L10.6816 9.66481L15.2672 16.083H13.3852L9.64322 10.8458V10.8455Z" fill="white" />
                    </svg>
                </a>
                <!-- More social icons -->
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="py-7 border-t border-gray-700">
            <div class="flex items-center justify-center text-gray-400">
                <span>&copy; <a href="index.php" class="text-yellow-300 hover:text-yellow-400 transition duration-200">Dentigolab</a> <?php echo date('Y'); ?>, All rights reserved.</span>
            </div>
        </div>
    </div>
</footer>


</body>
<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
            document.getElementById('reqestcase').classList.remove('hidden');
            document.getElementById('chatbot').classList.remove('hidden');
        } else {
            collapseMenu.style.display = 'block';
            document.getElementById('reqestcase').classList.add('hidden');
            document.getElementById('chatbot').classList.add('hidden');
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);


    $(document).ready(function() {
        let pageTitle = document.title;

        if (pageTitle == 'BravoDent Designs - High-Quality Dental Designs & Solutions') {
            $('#home').removeClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#home').addClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        } else {
            $("#home").addClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#home').removeClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        }


        if (pageTitle == 'About Us | BravoDent Designs') {
            $('#about').removeClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#about').addClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        } else {
            $("#about").addClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#about').removeClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        }


        if (pageTitle == 'Products & Services | BravoDent Designs') {
            $('#prodser').removeClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#prodser').addClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        } else {
            $("#prodser").addClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#prodser').removeClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        }


        if (pageTitle == 'Workflow | BravoDent Designs') {
            $('#portalworkflow').removeClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#portalworkflow').addClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        } else {
            $("#portalworkflow").addClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#portalworkflow').removeClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        }


        if (pageTitle == 'Join Our Team | BravoDent Designs') {
            $('#jsoinus').removeClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#jsoinus').addClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        } else {
            $("#jsoinus").addClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#jsoinus').removeClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        }


        if (pageTitle == 'FAQ | BravoDent Designs') {
            $('#faq').removeClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#faq').addClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        } else {
            $("#faq").addClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#faq').removeClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        }


        if (pageTitle == 'Contact Us | BravoDent Designs') {
            $('#contactus').removeClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#contactus').addClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        } else {
            $("#contactus").addClass('text-black block text-[14px] hover:text-[#28a745] hover:font-extrabold transition-all ease-in-out duration-300 font-bold');
            $('#contactus').removeClass('text-[#28a745] font-extrabold transition-all ease-in-out duration-300');
        }

    })
</script>


</html>