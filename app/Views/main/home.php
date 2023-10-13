<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= $this->include('partials/small-nav.php'); ?>
<?= $this->include('partials/navbar.php'); ?>

    <!-- start hero -->
    <section class="cover overflow-hidden mx-5 mt-5 flex items-center">
        <div class="owl-carousel owl-theme owl-loaded owl-drag">
            <div class="h-full relative bg-cover bg-left-top"
                 style="background-image: linear-gradient(to right bottom, rgba(127,161,190,0.33), rgba(0,96,163,0.25)), url('<?= base_url('images/carousel/cover.jpg') ?>')">
                <div class="h-[75vh]">
                    <div class="md:absolute md:top-[100px] md:left-[80px] lg:top-[120px] lg:left-[100px] lg:absolute lg:w-3/4 xl:w-2/4">
                        <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-snug">
                            Chiromo Hospital Group
                        </h1>
                        <p class="text-blue-100 text-xl md:text-2xl leading-snug pt-10">Welcome to Chiromo Hospital
                            Group
                            Online Therapy.
                        </p>
                        <p class="text-red-700 text-md md:text-xl leading-snug pt-10 font-semibold"><span><i
                                        class="uil uil-check-circle mr-2"></i></span>Recovery in Dignity</p>
                        <span class="">
                                <a href="<?= base_url('book-appointment') ?>"
                                   class="px-8 py-4 text-white rounded inline-block mt-8 font-semibold custom-bg transition-all duration-500 transform hover:scale-90">Book
                                    Appointment <i class="uil uil-arrow-right"></i></a>
                            </span>
                    </div>
                </div>
            </div>


            <div class="h-full relative bg-cover bg-left-top"
                 style="background-image: linear-gradient(to right bottom, rgba(127,161,190,0.33), rgba(0,96,163,0.25)), url('<?= base_url('images/carousel/cover-bg.jpg') ?>')">
                <div class="h-[75vh]">
                    <div class="md:absolute md:top-[180px] md:left-[80px] lg:top-[200px] lg:left-[100px] lg:absolute lg:w-3/4 xl:w-2/4">
                        <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-snug">Chiromo
                            Hospital Group
                        </h1>
                        <p class="text-blue-100 text-xl md:text-2xl leading-snug pt-10">Specialized in Mental Health
                            care Exelence.
                        </p>
                        <a href="<?= base_url('book-appointment') ?>"
                           class="px-8 py-4 text-white rounded inline-block mt-8 font-semibold custom-bg transition-all duration-500 transform hover:scale-90">Lean
                            More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end hero -->

    <!-- start about -->
    <section class="relative px-4 py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-20">
        <div class="flex flex-col lg:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h2 class="text-3xl leading-tight font-bold mt-4 welcome-custom-text">Welcome to the Chiromo Mental
                    Health care
                    Hospital.</h2>
                <p class="text-lg mt-4 font-semibold text-red-400"><span><i
                                class="uil uil-check-circle mr-2"></i>Recovery in Dignity</p>
                <p class="mt-2 leading-relaxed">

                    Founded over 25 years ago, Chiromo Hospital Group has established itself as a leading provider of
                    psychiatric services,
                    offering exceptional care and support to individuals facing mental health challenges. With a strong
                    commitment to
                    patient well-being and a team of dedicated professionals, Chiromo Hospital Group has become a
                    trusted name in the
                    field of mental healthcare.
                </p>
            </div>

            <div class="w-full lg:w-1/2 lg:px-8 mt-12 lg:mt-0">
                <div class="md:flex">
                    <div>
                        <div class="flex justify-center items-center">
                            <div class="w-16 h-16 rounded-full flex justify-center items-center custom-bg">
                                <i class="uil uil-stethoscope text-white text-5xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="md:ml-8 mt-4 md:mt-0">
                        <h4 class="text-xl font-bold leading-tight custom-text">Vast Specialized Treatments</h4>
                        <p class="mt-2 leading-relaxed">
                            Chiromo Hospital Group has come to be known as a leading treatment facility
                            that specializes in diagnosis, treatment and management of adults, adolescents and
                            children who suffer from a spectrum of mental health disorders.
                        </p>
                    </div>
                </div>

                <div class="md:flex mt-8">
                    <div>
                        <div class="flex justify-center items-center">
                            <div class="w-16 h-16 rounded-full flex justify-center items-center custom-bg">
                                <i class="uil uil-award-alt text-white text-5xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="md:ml-8 mt-4 md:mt-0">
                        <h4 class="text-xl font-bold leading-tight custom-text">Quality Healthcare Kenya Award 2022</h4>
                        <p class="mt-2 leading-relaxed">
                            The hospital is committed to promoting holistic mental wellness, preventing mental illness
                            and managing mental illnesses when they occur, as we ensure your Recovery in Dignity
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- you deserve to be happy-->
    <section class="choose-therapy">

        <div class="pt-10 flex items-center flex-col justify-center">
            <h3 class="text-white sm:text-4xl font-semibold">You deserve to be happy.</h3>
            <h4 class="sm:pt-6 text-slate-600 sm:text-2xl font-medium">
                What type of therapy are you looking for?
            </h4>
        </div>

        <div class="px-4 mt-10 pb-20 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6 group">
                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-2xl font-semibold text-white">Individual Therapy</h4>
                            <p class="text-slate-600 font-medium text-lg pt-[2rem]">For myself <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-7.jpg') ?>" alt="" class="w-2/4">
                        </div>
                    </div>
                </div>

                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-2xl font-semibold text-white">Couples Therapy</h4>
                            <p class="text-slate-600 font-medium text-lg pt-[2rem]">For me and my partner <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-9.jpg') ?>" alt="" class="w-2/4">
                        </div>
                    </div>
                </div>


                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-2xl font-semibold text-white">Teen Therapy</h4>
                            <p class="text-slate-600 font-medium text-lg pt-[2rem]">For my child <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-8.jpg') ?>" alt="" class="w-2/4">
                        </div>
                    </div>
                </div>

                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-2xl font-semibold text-white">Cooperate Therapy</h4>
                            <p class="text-slate-600 font-medium text-lg pt-[2rem]">For my organization <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-10.jpg') ?>" alt="" class="w-2/4">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!--end of you deserve to be happy-->


    <!-- how it works section -->
    <section class="relative px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-20">
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                <span class="font-bold text-slate-500 text-3xl md:text-xl">How It Works</span>
            </div>
        </div>

        <div class="inline-flex items-center justify-center w-full my-6">
            <span class="text-4xl md:text-xl lg:text-4xl font-semibold inline-block how-it-works">Start Your Journey in Just 4 Steps</span>
        </div>

        <div class="md:flex md:flex-wrap mt-10 text-center md:-mx-4">
            <div class="md:w-1/2 md:px-4 lg:w-1/4">
                <div class="bg-white-600 rounded-lg border border-gray-300 p-4 how-it-works--card">
                    <img src="<?= base_url('images/icons/assesment.jfif') ?>" alt="" class="h-20 mx-auto">

                    <h4 class="text-xl font-bold mt-4 custom-text">Take An Assessment</h4>
                    <p class="mt-1">Complete our 60-second online assessment.</p>
                </div>
            </div>


            <div class="md:w-1/2 md:px-4 mt-4 md:mt-0 lg:w-1/4">
                <div class="bg-white rounded-lg border border-gray-300 p-4">
                    <img src="<?= base_url('images/icons/assesement3.PNG') ?>" alt="" class="h-20 mx-auto">

                    <h4 class="text-xl font-bold mt-4 custom-text">Find Your Therapist</h4>
                    <p class="mt-1">Connect with a therapist that fits your needs.</p>
                </div>
            </div>

            <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
                <div class="bg-white rounded-lg border border-gray-300 p-4">
                    <img src="<?= base_url('images/icons/assessment2.PNG') ?>" alt="" class="h-20 mx-auto">

                    <h4 class="text-xl font-bold mt-4 custom-text">Pick level of support</h4>
                    <p class="mt-1">Choose the best plan for your therapy budget.</p>
                </div>
            </div>

            <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
                <div class="bg-white rounded-lg border border-gray-300 p-4">
                    <img src="<?= base_url('images/icons/assesment2.jfif') ?>" alt="" class="h-20 mx-auto">

                    <h4 class="text-xl font-bold mt-4 custom-text">Start therapy</h4>
                    <p class="mt-1">Message your therapist and begin your journey today!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of how it works -->


    <section
            class="legacy-container md:flex md:justify-center md:items-center sm:flex sm:justify-center sm:items-center">
        <div class="grid md:grid-cols-2 sm:grid-cols-1 sm:gap-y-4 gap-x-4 px-10">
            <div class="legacy-container--img">
                <a href="#" data-modal-target="defaultModal" data-modal-toggle="defaultModal">
                    <img src="<?= base_url('images/carousel/image1.jpg') ?>" alt="legacy-img"
                         class="transition-all duration-500 transform hover:scale-150 z-1 opacity-70 md:w-50">
                    <span class="text-red-400 z-10"><i class="uil uil-video"></i></span>
                </a>
            </div>
            <div class="h-full legacy-container--text ml-[2.5rem]">
                <h3 class="text-4xl md:text-xl lg:text-4xl font-semibold inline-block">Chiromo Hospital Group since
                    1966</h3>
                <p class="sm:pt-10 text-slate-600 sm:text-lg font-medium">
                    Founded over 25 years ago, Chiromo Hospital Group has established itself as a leading provider
                    of psychiatric services, offering exceptional care and support to individuals facing mental health
                    challenges.
                </p>
                <div class="md:mt-[2rem] flex items-center space-x-[2rem]">

                    <div class="flex flex-1 flex-row bg-white shadow-md rounded-md p-4">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="font-bold text-lg">50 +</div>
                            <div class="text-md text-gray-500">Partners across Africa</div>
                        </div>
                    </div>


                    <div class="flex flex-1 flex-row bg-white shadow-md rounded-md p-4">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="font-bold text-lg">6</div>
                            <div class="text-md text-gray-500">Branches across Africa</div>
                        </div>
                    </div>
                </div>

                <div class="mt-[2rem]">
                    <a href="<?= base_url('about') ?>"
                       class="px-10 py-4 text-black rounded-[2.5rem] inline-block mt-8 text-xl font-semibold bg-white border border-slate-300 hover:bg-slate-100 hover:border-transparent transition-all
                       duration-500 transform hover:scale-110 hover:opacity-50">Learn More about us<i
                                class="uil uil-arrow-right font-semibold"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!--    youtube video modal-->
    <div id="defaultModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Chirormo Hospital Group Celebrates 25 years of service
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <iframe
                            class="w-full"
                            height="600" src="https://www.youtube.com/embed/coPECmp8CJQ?si=IKamNkSRqzwM13mw"
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                             encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                    </iframe>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="defaultModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of youtube video modal-->

    <section class="why-choose--chiromo h-screen md:flex md:justify-center md:items-center">
        <div class="grid md:grid-cols-2 sm:gap-y-4 gap-x-4 px-10">
            <div class="h-full">
                <h3 class="text-white sm:text-5xl font-semibold">Why choose Chiromo Hospital Group?</h3>
                <h4 class="sm:pt-10 text-slate-600 sm:text-3xl font-medium">
                    We are always ready for every challenge. You can trust us.
                </h4>
                <p class="sm:pt-10 text-slate-600 sm:text-lg font-medium">
                    Our psychiatric facility and wellness centre have been in operation for 26 years,
                    providing quality in and out patient services to individuals from all walks of life.
                </p>
                <a href="<?= base_url('gift-member') ?>"
                   class="px-10 py-4 mt-8 text-black rounded-[2.5rem] inline-block text-xl font-semibold bg-white border border-slate-300 hover:bg-slate-100 hover:border-transparent transition-all duration-500 transform hover:scale-110 hover:opacity-50">Lean
                    More <i class="uil uil-arrow-right font-semibold"></i></a>
            </div>
            <div class="why-choose-img--container md:min-h-full">
                <div class="relative why-choose-img--content">
                    <img src="<?= base_url('images/carousel/image1.jpg') ?>" alt="" class="reason-img reason-img1">
                    <img src="<?= base_url('images/carousel/image5.jpg') ?>" alt="" class="reason-img reason-img2">
                    <img src="<?= base_url('images/carousel/image6.jpg') ?>" alt="" class="reason-img reason-img3">
                </div>
            </div>
        </div>
    </section>

    <div class="flex flex-col md:flex-row py-20 px-16">
        <div class="w-full md:w-1/2">
            <div>
                <h3 class="text-5xl leading-relaxed"><span class="custom-text"> Give the gift</span> of a Mental Health
                    Therapy</h3>
            </div>
            <div class="pt-10">
                <p class="leading-snug text-3xl">Therapy is one of the most meaningful gifts you can give to your
                    friends and loved ones.</p>
            </div>
            <div class="pt-10">
                <a href="<?= base_url('gift-member') ?>"
                   class="px-10 py-4 text-black rounded-[2.5rem] inline-block mt-8 text-2xl bg-white border border-slate-300 hover:bg-slate-100 hover:border-transparent transition-all duration-500 transform hover:scale-100 hover:opacity-50">Gift
                    a Membership</a>

            </div>
        </div>

        <div class="w-full md:w-1/2 ml-52">
            <svg viewBox="0 0 600 600" width="500" height="500">
                <defs>
                    <clipPath id="mypath">
                        <path d="M279.6560599333917 57.48958433506854C219.69102799165992 102.76930464146508 67.94277257987608 289.83224333165055 98.18752355643858 336.51056517002945C128.43227453300108 383.18888700840836 401.15953385103495 382.83923567173844 461.1245657927667 337.55951536534195C521.0895977344985 292.27979505894547 488.2224661833917 111.51056517002952 457.9777152068292 64.83224333165057C427.7329642302667 18.153921493271667 339.62109187512345 12.209864028672058 279.6560599333917 57.48958433506854C219.69102799165992 102.76930464146508 67.94277257987608 289.83224333165055 98.18752355643858 336.51056517002945 "
                              fill="hsl(340, 45%, 50%)" stroke-width="0" stroke="hsl(340, 45%, 30%)"
                              transform="matrix(1.4554316627400874,0,0,1.4554316627400874,-131.69078941871908,-27.40547753418491)"></path>
                    </clipPath>
                </defs>
                <image class="svg-image" x="0" y="0" xlink:href="<?= base_url('images/logo/gift.JPG') ?>"/>
            </svg>
        </div>
    </div>
    <div class="flex justify-between items-center py-10 px-16">
        <p class="text-lg leading-snug">
            If you are in a crisis or any other person may be in danger - don't use this site. <br><a href="" class="custom-text">
                These resources</a>
            can provide you with immediate help.
        </p>
        <div class="flex items-center">
            <span class="text-8xl"><i class="uil uil-shield-check secure-icon"></i></span>
            <div class="flex flex-col">
                <span class="text-xl">256-bit SSL</span>
                <span class="text-4xl text-slate-300 font-semibold">secure</span>
            </div>
        </div>
    </div>


<!-- stories section-->
<section class="top-stories">
    <div class="py-10 px-16">
        <div class="flex justify-between">
            <h4 class="font-semibold text-2xl">Top Stories and News</h4>
            <a href="" class="font-semibold text-2xl text-[#0060a3]">All Stories and News</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6 py-10">
            <div class="stories-card">
                <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                    <div class="card-picture">

                    </div>
                    <div class="py-10 px-8">
                        <span class="text-slate-600 text-[1rem]">August 30, 2023</span>
                        <h4 class="pt-[.8rem] text-[1.6rem] font-semibold">CHG Bustani Branch Launching</h4>
                        <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1.2rem]">Read More</a>
                    </div>
                </div>
                <div class="stories-card--side-back shadow-xl rounded-xl">
                    <div class="flex flex-col justify-center items-center h-[30rem]">
                        <h4 class="pt-[.8rem] text-[1.6rem] font-semibold text-white">CHG Bustani Branch Launching</h4>
                        <a href="" class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                            Read More
                        </a>
                    </div>
                </div>
            </div>


            <div class="stories-card">
                <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                    <div class="card-picture-1">

                    </div>
                    <div class="py-10 px-8">
                        <span class="text-slate-600 text-[1rem]">October 9, 2023</span>
                        <h4 class="pt-[.8rem] text-[1.6rem] font-semibold">Healing the Mind Launch</h4>
                        <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1.2rem]">Read More</a>
                    </div>
                </div>
                <div class="stories-card--side-back shadow-xl rounded-xl">
                    <div class="flex flex-col justify-center items-center h-[30rem]">
                        <h4 class="pt-[.8rem] text-[1.6rem] font-semibold text-white">Healing the Mind Launch</h4>
                        <a href="" class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="stories-card">
                <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                    <div class="card-picture-2">

                    </div>
                    <div class="py-10 px-8">
                        <span class="text-slate-600 text-[1rem]">October 9, 2023</span>
                        <h4 class="pt-[.8rem] text-[1.6rem] font-semibold">Training NPS on Mental Health</h4>
                        <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1.2rem]">Read More</a>
                    </div>
                </div>
                <div class="stories-card--side-back shadow-xl rounded-xl">
                    <div class="flex flex-col justify-center items-center h-[30rem]">
                        <h4 class="pt-[.8rem] text-[1.6rem] font-semibold text-white">Training NPS on Mental Health</h4>
                        <a href="" class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--end of stories section-->

    <!-- start cta -->
    <section
            class="relative bg-blue-teal-gradient px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left">
        <div class="md:flex md:items-center md:justify-center">
            <h2 class="text-xl font-bold text-white">Get in touch with us today! <br class="block md:hidden">Call us on:
                0800 220 000</h2>
            <a href="<?= base_url('book-appointment') ?>"
               class="px-8 py-4 bg-white rounded inline-block font-semibold md:ml-8 mt-4 md:mt-0 custom-text">Book
                Appointment
            </a>
        </div>
    </section>
    <!-- end cta -->


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
<?= $this->section('home-custom-script'); ?>
    <script>
        AOS.init();
        // the personalized section

        let imgBx = document.querySelectorAll('.imgBx');
        let contentBx = document.querySelectorAll('.contentBx');

        for (let i = 0; i < imgBx.length; i++) {
            imgBx[i].addEventListener('click', function () {
                for (let j = 0; j < contentBx.length; j++) {
                    contentBx[j].className = 'contentBx';
                }

                document.getElementById(this.dataset.id).className = 'contentBx active';

                for (let i = 0; i < imgBx.length; i++) {
                    imgBx[i].className = 'imgBx';
                }

                this.className = 'imgBx active';
            })
        }
        // end of the section

        //nav section
        $(document).ready(function () {
            $(window).scroll(function () {
                if (this.scrollY > 400) {
                    $('.nav').addClass("is-sticky");
                } else {
                    $('.nav').removeClass("is-sticky");
                }
            });
        })
        //end of the nav section

        //owl carousel
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
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })

        //end of the owl carousel

    </script>
<?= $this->endSection(); ?>