<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= $this->include('partials/navbar.php'); ?>


<div class="load"></div>

<section class="mx-5 my-5">
    <div class="about-us">
        <div class="flex flex-col h-[60vh] justify-center items-start pl-10">
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-semibold pb-[2rem]">About Chiromo Hospital Group</h2>

                <div class="flex text-white text-lg">
                    <a href="<?= base_url('/') ?>" class="hover:text-gray-400">Home</a>
                    <i class="uil uil-angle-right-b"></i>
                    <a href="<?= base_url('about-us') ?>" class="hover:text-gray-400">About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5 px-10">
    <div class="grid grid-cols-12 gap-10">
        <div class="col-span-12 md:col-span-8 my-10">
            <div class="about-us-text">
                <h1>
                    <span>
                    Chiromo Hospital Group,
                    </span>
                    <span class="text-[1.5rem]">
                        The leading private psychiatric service provider in Sub Sahara Africa.
                    </span>
                </h1>
            </div>
            <div class="pt-10 md:pt-5">
                <p class="text-lg text-slate-600">
                    Our group of psychiatric facilities have been in operation since 1997.
                    We provide quality in and out patient services to individuals from all walks of life.
                </p>
            </div>
            <div class="py-5 flex space-x-4 owl-carousel owl-theme owl-loaded owl-drag">
                <div class="bg-blue-100 rounded-md p-4 flex-1 min-w-0 h-[10rem] flex space-x-5">
                    <span class="flex items-center justify-center flex-shrink-0 h-[3rem] w-[3rem] rounded-full bg-white text-black shadow-md">
                        <i class="uil uil-minus-path text-[2rem] text-[#0060a3]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#0060a3] font-semibold text-lg pb-2">Our Vision</h3>
                        <span>To provide dignified, quality mental healthcare in Africa</span>
                    </div>
                </div>

                <div class="bg-blue-100 rounded-md p-5 flex-1 min-w-0 h-[10rem] flex space-x-5">
                     <span class="flex items-center justify-center flex-shrink-0 h-[3rem] w-[3rem] rounded-full bg-white text-black shadow-md">
                        <i class="uil uil-minus-path text-[2rem] text-[#0060a3]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#0060a3] font-semibold text-lg pb-2">Our Mission</h3>
                        <span>
                         To pursue excellence in the delivery of mental health
                         services by adhering to evidence-based practices.
                        </span>
                    </div>
                </div>

                <div class="bg-blue-100 rounded-md p-5 flex-1 min-w-0 h-[10rem] flex space-x-5">
                    <span class="flex items-center justify-center flex-shrink-0 h-[3rem] w-[3rem] rounded-full bg-white text-black shadow-md">
                        <i class="uil uil-minus-path text-[2rem] text-[#0060a3]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#0060a3] font-semibold text-lg pb-2">Our Core Values</h3>
                        <span>
                       Respect, Honesty, Innovation, Reliability
                    </span>
                    </div>
                </div>

                <div class="bg-blue-100 rounded-md p-5 flex-1 min-w-0 h-[10rem] flex space-x-5">
                    <span class="flex items-center justify-center flex-shrink-0 h-[3rem] w-[3rem] rounded-full bg-white text-black shadow-md">
                        <i class="uil uil-minus-path text-[2rem] text-[#0060a3]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#0060a3] font-semibold text-lg pb-2">Our Corporate Tagline</h3>
                        <span>
                        Recovery in dignity.
                    </span>
                    </div>
                </div>
            </div>

            <div class="border border-[#ac8342] rounded-lg py-[2rem] px-[2rem]">
                <div class="flex justify-between items-center">
                    <div>
                        <h4 class="text-xl text-black font-semibold">Call us 24/7 on</h4>
                        <span class="inline-block pt-5 text-md text-[#ac8342]"><i class="uil uil-incoming-call"></i> 0800 220 000</span>
                    </div>
                    <div>
                        <div class="border border-[#ac8342] rounded-full w-[8rem] h-[8rem] grid place-items-center p-5">
                            <h4 class="text-[1.2rem] font-semibold text-[#ac8342] relative">9650 <span class="absolute -top-3 -right-3">+</span></h4>
                            <span class="text-[12px] font-semibold text-[#ac8342]">clients trust us</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-span-12 md:col-span-4">

            <div class="container mx-auto">
                <div class="max-w-md mx-auto my-10 bg-blue-100 dark:bg-gray-800 p-5 rounded-lg shadow-md">
                    <div class="text-center mt-5">
                        <p class="text-gray-600 text-lg font-semibold dark:text-gray-400">Fill up the form below to
                            request a callback.</p>
                    </div>
                    <div class="m-7">
                        <form action="https://api.web3forms.com/submit" method="POST" id="form">

                            <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">
                            <input type="hidden" name="subject" value="New Submission from Web3Forms">
                            <input type="checkbox" name="botcheck" id="" style="display: none;">


                            <div class="mb-6">
                                <label for="name"
                                       class="block mb-2 text-md font-semibold text-gray-600 dark:text-gray-400">Full
                                    Name</label>
                                <input type="text" name="name" id="name" placeholder="John Doe" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block text-md font-semibold text-gray-600 dark:text-gray-400">Email
                                    Address</label>
                                <input type="email" name="email" id="email" placeholder="you@company.com" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                            </div>
                            <div class="mb-6">

                                <label for="phone" class="text-md font-semibold text-gray-600 dark:text-gray-400">Phone
                                    Number</label>
                                <input type="text" name="phone" id="phone" placeholder="+254 71234-567" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                            </div>
                            <div class="mb-6">
                                <label for="message"
                                       class="block mb-2 text-md font-semibold text-gray-600 dark:text-gray-400">Your
                                    Message</label>

                                <textarea rows="3" name="message" id="message" placeholder="Your Message"
                                          class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                          required></textarea>
                            </div>
                            <div class="mb-6">
                                <button
                                   class="py-3 mt-4 border w-full border-gray-600 rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                    Submit
                                </button>
                            </div>
                            <p class="text-base text-center text-gray-400" id="result">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="px-10">
    <h1 class="text-2xl text-[#0060a3] pb-8 font-semibold">Our Services</h1>
    <div class="flex items-center justify-center">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 xl:w-1/3 px-4">
                <div class="bg-gray-50 rounded-[30px] overflow-hidden mb-10 h-[32rem]">
                    <div class="services-img--burnout">

                    </div>
                    <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                        <h3>
                            <a href="#"
                               class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                Burnout
                            </a>
                        </h3>
                        <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                            <a href="#">Burnout - Are you at a risk of burning out?</a>
                        </p>
                        <a href="<?= base_url('gift-member/choose-packages') ?>"
                           class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                            Read More
                        </a>
                    </div>
                </div>
            </div>


            <div class="w-full md:w-1/3 xl:w-1/3 px-4">
                <div class="bg-gray-50 rounded-[30px] overflow-hidden mb-10 h-[32rem]">
                    <div class="services-img--anxiety">

                    </div>
                    <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                        <h3>
                            <a href="#"
                               class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                Anxiety
                            </a>
                        </h3>
                        <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                            <a href="#">BAI - Have you been feeling anxious recently?</a>
                        </p>
                        <a href=""
                           class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                            Read More
                        </a>
                    </div>
                </div>
            </div>


            <div class="w-full md:w-1/3 xl:w-1/3 px-4">
                <div class="bg-gray-50 rounded-[30px] overflow-hidden mb-10 h-[32rem]">
                    <div class="services-img--depression">

                    </div>
                    <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                        <h3>
                            <a href="#"
                               class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                Depression
                            </a>
                        </h3>
                        <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                            <a href="#">PHQ-9 - Have you been feeling depressed lately?</a>
                        </p>
                        <a href="<?= base_url('gift-member/choose-packages') ?>"
                           class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                            Read More
                        </a>
                    </div>
                </div>
            </div>


            <div class="w-full md:w-1/3 xl:w-1/3 px-4">
                <div class="bg-gray-50 rounded-[30px] overflow-hidden h-[32rem]">
                    <div class="services-img--ptsd">

                    </div>
                    <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                        <h3>
                            <a href="#"
                               class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                PTSD (PCL-5)
                            </a>
                        </h3>
                        <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                            <a href="#">PCL-5 - Have you been through a traumatic event?</a>
                        </p>
                        <a href="<?= base_url('gift-member/choose-packages') ?>"
                           class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/3 px-4">
                <div class="bg-gray-50 rounded-[30px] overflow-hidden h-[32rem]">
                    <div class="services-img--suicide">

                    </div>
                    <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                        <h3>
                            <a href="#"
                               class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                The Beck's Suicidality Scale (BSS)
                            </a>
                        </h3>
                        <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                            <a href="#">PCL-5 - Have you been through a traumatic event?</a>
                        </p>
                        <a href="#"
                           class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/3 px-4">
                <div class="bg-gray-50 rounded-[30px] overflow-hidden h-[32rem]">
                    <div class="services-img--alcohol">

                    </div>
                    <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                        <h3>
                            <a href="#"
                               class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                The Alcohol
                            </a>
                        </h3>
                        <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                            <a href="#">Audit - Check on your alcohol consumption</a>
                        </p>
                        <a href="<?= base_url('gift-member/choose-packages') ?>"
                           class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container flex flex-col px-8 mx-auto py-10 space-y-6 lg:space-x-5 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
        <div class="w-full lg:w-1/2">
            <div class="lg:max-w-lg">
                <h1 class="text-xl font-bold tracking-wide text-gray-800 dark:text-white lg:text-2xl">
                   Meet our leadership and management team who are backbone of our corporate values
                </h1>

                <div class="mt-8 space-y-5">
                    <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-[#0060a3]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span class="mx-2">Respect</span>
                    </p>

                    <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-[#0060a3]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span class="mx-2">Honesty</span>
                    </p>

                    <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-[#0060a3]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span class="mx-2">Innovation</span>
                    </p>

                    <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-[#0060a3]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span class="mx-2">Reliability</span>
                    </p>

                </div>
            </div>

            <a href="<?= base_url('gift-member/choose-packages') ?>"
               class="inline-block py-3 px-8 mt-10 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                Meet the team
            </a>
        </div>

        <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
            <img class="leadership object-cover w-full h-full mx-auto lg:max-w-2xl" src="https://images.unsplash.com/photo-1543269664-7eef42226a21?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="glasses photo">
        </div>
    </div>

</section>

<section class="px-10 bg-blue-100 py-20">
    <div class="grid grid-cols-12 gap-10">
        <div class="col-span-12 md:col-span-4">
            <h1 class="text-2xl text-[#0060a3] font-semibold">Frequently Asked Question</h1>
            <p class="pt-5 text-md font-semibold">We have answers to common questions people ask</p>
        </div>
        <div class="col-span-12 md:col-span-8">
                <div class="flex justify-center items-start my-2">
                        <ul class="flex flex-col">
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(1)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>What is mental health treatment?</span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#0060a3] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        x-ref="tab"
                                        :style="handleToggle()"
                                        class="border-l-2 border-[#0060a3] overflow-hidden max-h-0 duration-500 transition-all"
                                >
                                    <p class="p-3 text-gray-900">
                                        Treatment depends on the type of mental health concern that you have, its severity and what works best for you.
                                        In many cases, a combination of treatments works best.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(2)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>Who can benefit from mental health treatment?</span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#0060a3] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#0060a3] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                        Anyone struggling with thoughts, feelings or behaviors and anyone living with a mental health concern, whether short or long term.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(4)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>How do I know when to seek for mental health treatment for me or loved one?</span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#0060a3] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#0060a3] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                        Each mental health condition has its own set of signs and symptoms. In general, however, professional help may be warranted if you or a loved one experiences:
                                        Marked change in personality, eating or sleeping patterns.
                                        Inability to cope with problems or daily activities.
                                        Strange or extreme ideas.
                                        Excessive anxiety.
                                        Prolonged depression or loss of interest or enjoyment.
                                        Thinking or talking about suicide.
                                        Substance abuse.
                                        Extreme mood swings or excessive anger, hostility or violent behavior.
                                        Many people who have mental health conditions consider their signs and symptoms a normal part of life or avoid treatment out of shame or fear. If you're concerned about your mental health or a loved one's mental health, don't hesitate to seek advice.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(5)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>Who can come with me to mental appointment?</span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#0060a3] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#0060a3] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                        You can decide who you want to bring with you for support.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(6)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>Where do I begin to get started with mental healthcare?</span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#0060a3] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#0060a3] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                        You can call the Chiromo Mental Health Hospital (CMHH) Access Line at 0800 220 000. We accepts many forms of insurance
                                        however; you may want to check with your insurance company regarding coverage for behavioral health services.
                                    </p>
                                </div>
                            </li>
                        </ul>
                </div>
        </div>
    </div>
</section>

<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection(); ?>
<?= $this->section('about-section-script'); ?>
<script>
    $(document).ready(function () {
        const form = document.getElementById('form');
        const result = document.getElementById('result');

        form.addEventListener('submit', function (e) {
            const formData = new FormData(form);
            e.preventDefault();
            var object = {};
            formData.forEach((value, key) => {
                object[key] = value
            });
            var json = JSON.stringify(object);
            result.innerHTML = "Please wait..."

            fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: json
            })
                .then(async (response) => {
                    let json = await response.json();
                    if (response.status == 200) {
                        result.innerHTML = json.message;
                        result.classList.remove('text-gray-500');
                        result.classList.add('text-green-500');
                    } else {
                        console.log(response);
                        result.innerHTML = json.message;
                        result.classList.remove('text-gray-500');
                        result.classList.add('text-red-500');
                    }
                })
                .catch(error => {
                    console.log(error);
                    result.innerHTML = "Something went wrong!";
                })
                .then(function () {
                    form.reset();
                    setTimeout(() => {
                        result.style.display = "none";
                    }, 5000);
                });
        })

        // owl-carousel
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    });
    //accordion alpine
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });

        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script>
<?= $this->endSection(); ?>

