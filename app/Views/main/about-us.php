<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>


<div class="load"></div>

<section class="mx-5 my-5">
    <div class="about-us">
        <div class="flex flex-col h-[50vh] justify-center items-start pl-10">
            <div class="w-full md:w-1/2">
                <h1 class="text-3xl font-semibold pb-[2rem]">About Chiromo Hospital Group</h1>

                <div class="flex text-white text-lg">
                    <a href="<?= base_url('/') ?>" class="hover:text-gray-400">Home</a>
                    <i class="uil uil-angle-right-b"></i>
                    <a href="<?= base_url('about-us') ?>" class="hover:text-gray-400">About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-10">
    <div class="grid grid-cols-12 gap-10">
        <div class="col-span-12 my-10">
            <div class="about-us-text">
                <h1 class="">
                    Chiromo Hospital Group,
                    <span class="text-[1.5rem]">
                        The leading private psychiatric service provider in Sub Sahara Africa.
                    </span>
                </h1>
            </div>
            <div class="pt-10 md:pt-5">
                <p class="text-lg text-slate-600">
                    Welcome to Chiromo Hospital Group, a distinguished Level Five psychiatric
                    mental health facility that has been in operation since 1997 dedicated to providing compassionate care and support. 
                    Specializing in PTSD, anxiety disorders, burnout, and more, our expert team offers 
                    comprehensive services tailored to individual needs, fostering healing and empowerment 
                    for every patient. Your journey to wellness starts here. 
                </p>
            </div>


            <div>
                <h3 class="text-lg text-slate-600 pt-4">
                    At Chiromo, our corporate values guide every interaction and decision. 
                    We prioritize our corporate values to ensure highest standards of care 
                    and fostering a culture of trust and collaboration.
                </h3>
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


            <div class="py-5 flex space-x-4 owl-carousel owl-theme owl-loaded owl-drag my-8 md:my-10 ">
                <div class="bg-blue-teal-gradient rounded-md p-4 flex-1 min-w-0 h-[10rem] flex space-x-5">
                    <span class="flex items-center justify-center flex-shrink-0 h-[3rem] w-[3rem] rounded-full bg-white text-black shadow-md">
                        <i class="uil uil-minus-path text-[2rem] text-[#ac8342]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#ac8342] font-semibold text-lg pb-2">Our Vision</h3>
                        <span class="text-white">To provide dignified, quality mental healthcare in Africa</span>
                    </div>
                </div>

                <div class="bg-blue-teal-gradient rounded-md p-5 flex-1 min-w-0 h-[10rem] flex space-x-5">
                     <span class="flex items-center justify-center flex-shrink-0 h-[3rem] w-[3rem] rounded-full bg-white text-black shadow-md">
                        <i class="uil uil-compress-arrows text-[2rem] text-[#ac8342]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#ac8342] font-semibold text-lg pb-2">Our Mission</h3>
                        <span class="text-white">
                         To pursue excellence in the delivery of mental health
                         services by adhering to evidence-based practices.
                        </span>
                    </div>
                </div>

                <div class="bg-blue-teal-gradient rounded-md p-5 flex-1 min-w-0 h-[10rem] flex space-x-5">
                    <span class="flex items-center justify-center flex-shrink-0 h-[3rem] w-[3rem] rounded-full bg-white text-black shadow-md">
                        <i class="uil uil-apps text-[2rem] text-[#ac8342]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#ac8342] font-semibold text-lg pb-2">Our Core Values</h3>
                        <span class="text-white">
                       Respect, Honesty, Innovation, Reliability
                    </span>
                    </div>
                </div>

                <div class="bg-blue-teal-gradient rounded-md p-5 flex-1 min-w-0 h-[10rem] flex space-x-5">
                    <span class="flex items-center justify-center flex-shrink-0 h-[3rem] w-[3rem] rounded-full bg-white text-black shadow-md">
                        <i class="uil uil-compress text-[2rem] text-[#ac8342]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#ac8342] font-semibold text-lg pb-2">Our Corporate Tagline</h3>
                        <span class="text-white">
                        Recovery in dignity.
                    </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="px-10">
    <h1 class="text-2xl text-[#0060a3] pb-8 font-semibold">Mental Health Services that We Provide</h1>
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

<section class="px-10 bg-blue-teal-gradient py-20 md:py-30 mt-10">
    <div class="grid grid-cols-12 gap-10">
        <div class="col-span-12 md:col-span-4">
            <h1 class="text-2xl text-[#ac8342] font-semibold">Frequently Asked Question</h1>
            <p class="pt-5 text-md font-semibold text-white">We have answers to common questions people ask</p>
        </div>
        <div class="col-span-12 md:col-span-8">
                <div class="flex justify-center items-start my-2">
                        <ul class="flex flex-col">
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(1)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    What does “mental health” mean?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        x-ref="tab"
                                        :style="handleToggle()"
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                >
                                    <p class="p-3 text-gray-900">
                                    Mental health is more than just the absence of mental illness. It encompasses an individual’s subjective well-being, positive feelings, and positive functioning in life.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(2)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    What is a psychiatric hospital?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    A psychiatric hospital, also known as a mental health or behavioral health unit, specializes in treating serious mental disorders such as schizophrenia, bipolar disorder, major depressive disorder, and PTSD.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(3)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    Can children have mental health difficulties?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    Yes, children can experience mental health challenges. It’s essential to pay attention to signs such as changes in behavior, mood, or social interactions. If a child expresses thoughts of self-harm, seek professional help immediately.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(4)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    How can I find a therapist off-campus?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    Chiromo Hospital Group may assist you in finding a therapist outside of their facility. It’s worth asking if they can provide recommendations or resources.
                                    </p>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(5)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    What types of mental health conditions do you treat?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    We specialize in treating a wide range of mental health conditions, including but not limited to depression, anxiety disorders, bipolar disorder, schizophrenia, post-traumatic stress disorder (PTSD), obsessive-compulsive disorder (OCD), and personality disorders.
                                    </p>
                                </div>
                            </li>


                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(6)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    How do I know if I need to seek treatment at a mental health hospital?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    If you're experiencing symptoms such as persistent sadness, overwhelming worry, extreme mood swings, hallucinations, delusions, or difficulty coping with daily life, it may be time to seek professional help. Our team of experts can assess your symptoms and recommend the appropriate level of care.
                                    </p>
                                </div>
                            </li>


                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(7)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    What types of services do you offer for individuals with mental health conditions?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    We offer a comprehensive range of services, including psychiatric evaluations, medication management, psychotherapy and counseling, inpatient and outpatient treatment programs, dual diagnosis treatment for co-occurring disorders, supportive care, rehabilitation services, and telepsychiatry services.
                                    </p>
                                </div>
                            </li>

                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(8)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    How do I schedule an appointment or consultation?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    Scheduling an appointment or consultation is easy. You can contact our hospital directly via phone or email, or visit our website to fill out an online appointment request form. Our friendly staff will assist you in scheduling a convenient time for your visit.
                                    </p>
                                </div>
                            </li>

                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(9)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    Do you accept insurance for mental health services?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    Yes, we work with a variety of insurance providers to ensure that our services are accessible and affordable for our patients. We recommend contacting your insurance provider to verify coverage and eligibility prior to scheduling an appointment.
                                    </p>
                                </div>
                            </li>

                            <li class="bg-white my-2 shadow-lg rounded-md" x-data="accordion(10)">
                                <h2
                                        @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>
                                    What can I expect during my first visit to your mental health hospital?
                                    </span>
                                    <svg
                                            :class="handleRotate()"
                                            class="fill-current text-[#ac8342] h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20"
                                    >
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                        class="border-l-2 border-[#ac8342] overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab"
                                        :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    During your first visit, you will undergo a comprehensive evaluation conducted by one of our experienced psychiatrists or psychologists. This assessment will involve discussing your medical history, current symptoms, and treatment goals. Based on this evaluation, a personalized treatment plan will be developed to address your unique needs.
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

