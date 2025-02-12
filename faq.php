<script src="public/js/alpine.js" defer></script>

<section class="py-16 w-full md:w-[80%] m-auto">
    <div class="container mx-auto md:px-6 lg:px-12">
        <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-8">
            Frequently Asked Questions (FAQ)
        </h2>
        <p class="text-lg text-center text-gray-700 mb-12 max-w-3xl mx-auto">
            At Dentigo, we believe in transparency and ensuring all your questions are answered. Whether you're a dental technician, lab owner, or clinician, here's everything you need to know about working with us.
        </p>

        <!-- Alpine.js Tab Section -->
        <div x-data="{ openTab: 1 }" class="w-full bg-white p-6 rounded-lg shadow-lg border border-gray-200">

            <!-- Tab Headers -->
            <ul class="flex flex-col sm:flex-row border-b bg-gray-100 rounded-t-lg shadow-lg overflow-hidden mb-6">
                <li @click="openTab = 1" :class="{ 'bg-teal-500 text-white': openTab === 1 }"
                    class="cursor-pointer flex-1 sm:flex-none text-center py-3 transition-all duration-300 hover:bg-teal-200 hover:text-teal-700 rounded-t-lg font-bold md:mr-8">
                    Design & Digital Workflow
                </li>
                <li @click="openTab = 2" :class="{ 'bg-teal-500 text-white': openTab === 2 }"
                    class="cursor-pointer flex-1 sm:flex-none text-center py-3 transition-all duration-300 hover:bg-teal-200 hover:text-teal-700 rounded-t-lg font-bold md:mr-8">
                    Manufacturing & Production
                </li>
                <li @click="openTab = 3" :class="{ 'bg-teal-500 text-white': openTab === 3 }"
                    class="cursor-pointer flex-1 sm:flex-none text-center py-3 transition-all duration-300 hover:bg-teal-200 hover:text-teal-700 rounded-t-lg font-bold">
                    Shipping & Payments
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="w-full mt-4">
                <!-- Design & Digital Workflow Tab -->
                <div x-show="openTab === 1">
                    <div class="space-y-6">
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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
                            <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
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