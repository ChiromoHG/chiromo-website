<!-- component -->
<!-- component -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<div x-data="{
        billingType: 'month',
        basicPrice: '19',
        premiumPrice: '29',
        proPrice: '39'
    }" class="min-h-full bg-gray-200 pb-12">
    <div class="w-full bg-blue-900 pt-16 pb-24 text-center">
        <h4 class="text-2xl text-gray-100">Choose the right plan for you</h4>
        <p class="text-sm text-gray-100 mt-2">Pricing built for businesses of all sizes. Choose package that suits your needs.</p>
        <div class="flex items-center justify-center mt-8">
            <button @click="
                    billingType = 'month',
                    basicPrice = '19',
                    premiumPrice = '29',
                    proPrice = '39'
                " class="text-gray-800 px-4 py-2 rounded-tl-lg rounded-bl-lg bg-gray-200" :class=" billingType === 'month' ? 'bg-blue-300' : 'bg-gray-200' " title="Choose Monthly billing">
                Monthly billing
            </button>
            <button @click="
                    billingType = 'year',
                    basicPrice = '205',
                    premiumPrice = '313',
                    proPrice = '421'
                " class="text-gray-800 px-4 py-2 rounded-tr-lg rounded-br-lg bg-gray-200" :class=" billingType === 'year' ? 'bg-blue-300' : 'bg-gray-200' " title="Choose Annual billing">
                Annual billing
            </button>
        </div>
    </div>
    <div class="w-full 2xl:w-3/4 flex items-center justify-center px-8 md:px-32 lg:px-16 2xl:px-0 mx-auto -mt-8">
        <div class="w-full grid grid-cols-1 xl:grid-cols-3 gap-8">
            <div class="bg-white shadow-2xl rounded-lg py-4">
                <p class="text-xl text-center font-bold text-blue-600">Basic</p>
                <p class="text-center py-8">
                    <span class="text-4xl font-bold text-gray-700">
                        $<span x-text="basicPrice">19</span>
                    </span>
                    <span class="text-xs uppercase text-gray-500">
                        / <span x-text="billingType">month</span>
                    </span>
                </p>
                <ul class="border-t border-gray-300 py-8 space-y-6">
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Free Setup Guidance</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Email Support</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">User Management</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Reports</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-400 capitalize">Unlimited Users</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-400 capitalize">Data Export</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-400 capitalize">Automated Workflows</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-400 capitalize">API Access</span>
                    </li>
                </ul>
                <div class="flex items-center justify-center mt-6">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150" title="Purchase">Purchase</a>
                </div>
            </div>
            <div class="bg-white shadow-2xl rounded-lg py-4">
                <p class="text-xl text-center font-bold text-blue-600">Premium</p>
                <p class="text-center py-8">
                    <span class="text-4xl font-bold text-gray-700">
                        $<span x-text="premiumPrice">29</span>
                    </span>
                    <span class="text-xs uppercase text-gray-500">
                        / <span x-text="billingType">month</span>
                    </span>
                </p>
                <ul class="border-t border-gray-300 py-8 space-y-6">
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Free Setup Guidance</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Email Support</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">User Management</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Reports</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Unlimited Users</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Data Export</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-400 capitalize">Automated Workflows</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-gray-300 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-400 capitalize">API Access</span>
                    </li>
                </ul>
                <div class="flex items-center justify-center mt-6">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150" title="Purchase">Purchase</a>
                </div>
            </div>
            <div class="bg-white shadow-2xl rounded-lg py-4">
                <p class="text-xl text-center font-bold text-blue-600">Pro</p>
                <p class="text-center py-8">
                    <span class="text-4xl font-bold text-gray-700">
                        $<span x-text="proPrice">39</span>
                    </span>
                    <span class="text-xs uppercase text-gray-500">
                        / <span x-text="billingType">month</span>
                    </span>
                </p>
                <ul class="border-t border-gray-300 py-8 space-y-6">
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Free Setup Guidance</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Email Support</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">User Management</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Reports</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Unlimited Users</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Data Export</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">Automated Workflows</span>
                    </li>
                    <li class="flex items-center space-x-2 px-8">
                        <span class="bg-blue-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="text-gray-600 capitalize">API Access</span>
                    </li>
                </ul>
                <div class="flex items-center justify-center mt-6">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150" title="Purchase">Purchase</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<section class="cover bg-blue-teal-gradient bg-blue-600 px-4 sm:px-8 lg:px-20 xl:px-20 2xl:px-20 overflow-hidden py-48 flex items-center min-h-screen">
    <div class="h-full absolute z-0">
        <img src="<?= base_url('images/carousel/cover.jpg')?>" alt="" class="w-full h-full object-cover opacity-20">
    </div>

    <div class="lg:w-3/4 xl:w-2/4 relative z-10 h-100 lg:mt-16">
        <div>
            <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-tight">Chiromo Hospital Group - A Legacy of
                Mental Health care Exelence.
            </h1>
            <p class="text-blue-100 text-xl md:text-2xl leading-snug mt-4">Welcome to Chiromo Hospital Group
                Online Therapy.
            </p>
            <p class="text-red-500 text-md md:text-xl leading-snug mt-4 font-thin"><span><i
                            class="uil uil-check-circle mr-2"></i></span>Recovery in Dignity</p>
            <a href="<?= base_url('book-appointment') ?>" class="px-8 py-4 text-white rounded inline-block mt-8 font-semibold custom-bg">Book
                Appointment</a>
        </div>
    </div>
</section>


<!-- why choose chiromo hospital group -->


<div class="relative bg-contain bg-cover h-64 md:h-80 lg:h-96 xl:h-128" style="background-image: url(<?= base_url('images/carousel/image-157.jpg')?>);">
    <!-- Background image container -->
    <div class="absolute inset-0 bg-opacity-10 bg-white"></div>

    <!-- Text container -->
    <div class="absolute inset-0 flex items-center justify-end">
        <div class="max-w-screen-lg p-6 w-full h-full md:w-3/5 main-bg">
            <!-- Add your text content here -->
            <h1 class="text-2xl md:text-3xl lg:text-4xl text-white">Why choose Chiromo Hospital Group?</h1>
            <p class="mt-20 text-lg md:text-xl lg:text-2xl text-white custom-bg p-5 rounded-lg">
                Our psychiatric facility and wellness centre have been in operation for 20 years, providing quality
                in and out patient services to individuals from all walks of life.
            </p>
        </div>
    </div>
</div>