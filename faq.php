<script src="public/js/alpine.js" defer></script>

<section class="py-12 px-4 sm:px-6 lg:px-12 w-full mx-auto">
    <div class="container mx-auto">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-center text-gray-900 mb-6">
            Frequently Asked Questions (FAQ)
        </h2>
        <p class="text-base sm:text-md text-center text-gray-700 mb-6 max-w-3xl mx-auto">
            At Dentigo, we believe in transparency and ensuring all your questions are answered. Whether you're a dental technician, lab owner, or clinician, here's everything you need to know about working with us.
        </p>

        <!-- FAQ Section with Image -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-4 bg-white shadow-md rounded-lg p-4">

            <!-- Left Side: FAQ Image (30% Width) -->
            <div class="w-full md:w-[35%] flex items-center justify-center">
                <img src="https://media.istockphoto.com/id/1349998432/photo/3d-render-of-faqs-business-concept.jpg?s=612x612&w=0&k=20&c=qhvy7I8jjnyAagxavLXVwSsvbsErceBVyIqF2eyHxWw="
                    alt="FAQ Illustration"
                    class="w-auto max-w-full object-contain">
            </div>

            <!-- Right Side: Alpine.js FAQ Tabs (60% Width) -->
            <div x-data="{ openTab: 1 }" class="w-full md:w-[60%]">

                <!-- Tab Headers -->
                <div class="flex flex-wrap justify-start md:justify-center gap-3 border-b pb-2">
                    <template x-for="(tab, index) in [
                        { id: 1, title: 'Design & Digital Workflow' },
                        { id: 2, title: 'Manufacturing & Production' },
                        { id: 3, title: 'Shipping & Payments' }
                    ]" :key="tab.id">
                        <button
                            @click="openTab = tab.id"
                            class="px-4 py-2 sm:px-6 sm:py-3 text-md sm:text-md font-bold transition-all duration-300 rounded-t-lg shadow-sm"
                            :class="{ 
                                'bg-white text-gray-900 border border-gray-300 border-b-0 shadow-md': openTab === tab.id,
                                'bg-gray-100 text-gray-600 hover:bg-gray-200': openTab !== tab.id 
                            }">
                            <span x-text="tab.title"></span>
                        </button>
                    </template>
                </div>

                <!-- Tab Content -->
                <div class="p-3 bg-gradient-to-r from-blue-50 to-blue-100 border border-gray-300 rounded-b-lg shadow-md">
                    <!-- Design & Digital Workflow Tab -->
                    <div x-show="openTab === 1">
                        <div class="space-y-2">
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">What design services do you offer?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    We provide an all-in-one solution that includes CAD/CAM 3Shape designing for seamless digital workflows. Our services cover crowns, bridges, veneers, dentures, aligners, implant restorations, and appliances, ensuring high precision and reliability.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">How do I send my case files?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Simply upload your STL, DICOM, or digital impressions through our secure online portal.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Can I review the design before manufacturing?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Absolutely! We share the design for approval before moving to production. Any modifications can be made at this stage.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">What design software do you use?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    We utilize 3Shape, Exocad, and other advanced CAD/CAM solutions to ensure the highest accuracy in design.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Do you support digital smile design?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes! We offer digital smile planning and mock-ups to help clinicians visualize the final restoration before production.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Can you integrate with my existing lab system?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes! We work with various digital platforms and lab management systems for seamless case handling.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Do you offer trial cases for new clients?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes! We provide free first-case trials to help you experience our quality before committing.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">How do you handle case modifications?</p>
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
                        <div class="space-y-2">
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">What materials do you use for crowns and bridges?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    We offer a variety of materials including Zirconia, Lithium Disilicate, PFM, and PMMA based on your preference and the restoration requirements.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">What is the turnaround time for manufacturing?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Our typical turnaround time is 5-7 business days, depending on the complexity of the case.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Can you handle complex cases?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes, we specialize in complex cases including full arch restorations, implant-supported restorations, and hybrid dentures.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">How do you ensure the quality of your restorations?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    We have strict quality control measures in place, including CAD design verification, material checks, and final inspection before shipping.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Do you offer support for implant cases?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes, we specialize in implant restorations including crowns, bridges, abutments, and custom implant solutions.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Can I get a price quote before placing an order?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes, we offer free quotes for your cases, based on the complexity and materials required.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Do you offer rush service?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes! Rush services are available for urgent cases. Let us know your requirements, and we will prioritize your case.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">What happens if my case is rejected?</p>
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
                        <div class="space-y-2">
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">What shipping methods do you offer?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    We offer standard, expedited, and overnight shipping options. All shipments are tracked for your peace of mind.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">What payment methods do you accept?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    We accept all major credit cards, bank transfers, and PayPal for your convenience.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Do you offer international shipping?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes, we ship internationally! We offer reliable shipping options to many countries.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">How can I track my order?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Once your order is shipped, you will receive a tracking number via email for easy tracking.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">How do I handle returns or exchanges?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    If you're not satisfied with your order, please reach out to us. We'll guide you through our return/exchange process.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Do you offer payment plans?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes, we offer flexible payment options for qualified clients, including installment plans.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">Can I change the shipping address after placing an order?</p>
                                    <button @click="open = !open" class="text-teal-600 hover:text-teal-700 focus:outline-none">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                <p x-show="open" class="text-gray-700 mt-4 text-sm opacity-80">
                                    Yes, you can update your shipping address within 24 hours after placing an order.
                                </p>
                            </div>
                            <div x-data="{ open: false }" class="bg-white p-3 rounded-lg  shadow-sm">
                                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                                    <p class="text-md font-boldtext-gray-800">What happens if my order is lost in transit?</p>
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
    </div>
</section>
