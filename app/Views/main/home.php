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
                    <div class="absolute top-[70px] left-[20px] md:absolute md:top-[100px] md:left-[80px] lg:top-[120px] lg:left-[100px] lg:absolute lg:w-3/4 xl:w-2/4">
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
                    <div class="absolute top-[80px] left-[20px] md:absolute md:top-[180px] md:left-[80px] lg:top-[200px] lg:left-[100px] lg:absolute lg:w-3/4 xl:w-2/4">
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
    <section class="relative px-4 py-8 md:py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-20 z-50">
        <div class="absolute left-1/3 flex justify-center items-center -z-50">
            <div class="circle w-80 h-80 rounded-full">
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h2 class="text-xl md:text-3xl leading-tight font-bold welcome-custom-text">Welcome to the Chiromo Mental
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
            <h3 class="text-white text-xl md:text-3xl font-semibold">You deserve to be happy.</h3>
            <h4 class="pt-4 md:mt-5 text-slate-600 text-lg md:text-xl font-medium text-center">
                What type of therapy are you looking for?
            </h4>
        </div>

        <div class="px-4 mt-10 pb-20 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6 group">
                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-xl md:text-2xl font-semibold text-white">Individual Therapy</h4>
                            <p class="text-slate-600 font-medium text-sm md:text-lg pt-[.4rem] md:pt-[.8rem]">For myself <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-7.jpg') ?>" alt="" class="w-64 md:w-auto">
                        </div>
                    </div>
                </div>

                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-xl md:text-2xl font-semibold text-white">Couples Therapy</h4>
                            <p class="text-slate-600 font-medium text-sm md:text-lg pt-[.4rem] md:pt-[.8rem]">For me and my partner <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-9.jpg') ?>" alt="" class="w-64 md:w-auto">
                        </div>
                    </div>
                </div>


                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-xl md:text-2xl font-semibold text-white">Teen Therapy</h4>
                            <p class="text-slate-600 font-medium text-sm md:text-lg pt-[.4rem] md:pt-[.8rem]">For my child <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-8.jpg') ?>" alt="" class="w-64 md:w-auto">
                        </div>
                    </div>
                </div>

                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-xl md:text-2xl font-semibold text-white">Cooperate Therapy</h4>
                            <p class="text-slate-600 font-medium text-sm md:text-lg pt-[.4rem] md:pt-[.8rem]">For my organization <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-10.jpg') ?>" alt="" class="w-64 md:w-auto">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!--end of you deserve to be happy-->


    <!-- how it works section -->
    <section class="relative px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-10 md:py-20">
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                <span class="font-bold text-slate-500 text-lg md:text-lg">How It Works</span>
            </div>
        </div>

        <div class="inline-flex items-center justify-center w-full my-6 md:my-3">
            <span class="text-xl text-center md:text-2xl lg:text-4xl font-semibold inline-block how-it-works">Start Your Journey in Just 4 Steps</span>
        </div>

        <div class="md:flex md:flex-wrap md:mt-10 mt-4 text-center md:-mx-4">
            <div class="md:w-1/2 md:px-4 lg:w-1/4">
                <a href="">

                    <div class="bg-white-600 border border-gray-300 p-4 steps-border flex items-center justify-center flex-col">

                        <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i class="uil uil-edit-alt"></i></span>

                        <h4 class="text-lg md:text-xl font-bold mt-4 how-it-works">Take An Assessment</h4>
                        <p class="mt-4 font-semibold">Complete our 60-second online assessment.</p>
                    </div>
                </a>
            </div>


            <div class="md:w-1/2 md:px-4 mt-4 md:mt-0 lg:w-1/4">
                <a href="">
                    <div class="bg-white border border-gray-300 p-4 steps-border flex items-center justify-center flex-col">

                        <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i class="uil uil-stethoscope"></i></span>

                        <h4 class="text-lg md:text-xl font-bold mt-4 how-it-works">Find Your Therapist</h4>
                        <p class="mt-4 font-semibold">Connect with a therapist that fits your needs.</p>
                    </div>
                </a>
            </div>

            <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
                <a href="">
                    <div class="bg-white border border-gray-300 p-4 steps-border flex items-center justify-center flex-col">

                        <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i class="uil uil-transaction"></i></span>

                        <h4 class="text-lg md:text-xl font-bold mt-4 how-it-works">Pick level of support</h4>
                        <p class="mt-4 font-semibold">Choose the best plan for your therapy budget.</p>
                    </div>
                </a>
            </div>

            <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
               <a href="">
                   <div class="bg-white border border-gray-300 p-4 steps-border flex items-center justify-center flex-col">

                       <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i class="uil uil-video"></i></span>

                       <h4 class="text-lg md:text-xl font-bold mt-4 how-it-works">Start therapy</h4>
                       <p class="mt-4 font-semibold">Message your therapist and begin your journey today!</p>
                   </div>
               </a>
            </div>
        </div>
    </section>
    <!-- end of how it works -->


    <section class="bg-[#fafafa] px-4 sm:px-8 lg:px-20 xl:px-20 2xl:px-64 py-10 md:py-20">
        <div class="grid md:grid-cols-12 gap-10 md:px-10">
            <div class="grid md:col-span-6">
                <div class="legacy-container--img">
                    <a href="#" data-modal-target="defaultModal" data-modal-toggle="defaultModal">
                        <img  src="<?= base_url('images/carousel/image1.jpg') ?>" alt="legacy-img"
                             class="transition-all duration-500 transform hover:scale-110 z-1 opacity-70 h-full md:rounded-[3rem]">
                        <span class="text-red-400 z-10"><i class="uil uil-video"></i></span>
                    </a>
                </div>
            </div>
            <div class="grid md:col-span-6">
                <div class="h-full legacy-container--text">
                    <h3 class="text-xl md:text-3xl lg:text-4xl font-semibold inline-block">Chiromo Hospital Group since
                        1966
                    </h3>
                    <p class="pt-8 md:pt-10 text-slate-600 font-medium">
                        Founded over 25 years ago, Chiromo Hospital Group has established itself as a leading provider
                        of psychiatric services, offering exceptional care and support to individuals facing mental health
                        challenges.
                    </p>
                    <div class="mt-[1.5rem] md:mt-[2rem] flex flex-col space-y-5 md:flex-row md:items-center md:space-x-[2rem]">

                        <div class="flex flex-1 flex-row bg-white shadow-md rounded-md p-4">
                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-black">
                                <span><i class="uil uil-user-arrows"></i></span>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="font-bold text-lg">50 +</div>
                                <div class="text-md text-gray-500">Partners across Africa</div>
                            </div>
                        </div>


                        <div class="flex flex-1 flex-row bg-white shadow-md rounded-md p-4">
                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-black">
                                <span><i class="uil uil-clinic-medical"></i></span>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="font-bold text-lg">6</div>
                                <div class="text-md text-gray-500">Branches across Africa</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-[1.5rem] md:mt-[2rem]">
                        <a href="<?= base_url('about') ?>"
                           class="px-10 py-4 text-black rounded-[2.5rem] inline-block text-lg md:text-xl font-semibold bg-white border border-slate-300 hover:bg-slate-100 hover:border-transparent transition-all
                       duration-500 transform hover:scale-75 md:hover:scale-110 hover:opacity-50">Learn More about us<i
                                    class="uil uil-arrow-right font-semibold"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--    youtube video modal-->
    <div id="defaultModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-5xl max-h-full">
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

    <section class="why-choose--chiromo h-screen flex md:justify-center md:items-center px-4 py-20 md:px-10">
        <div class="grid md:grid-cols-2 md:gap-10">
            <div class="grid md:col-span-1">
                <h3 class="text-white text-xl md:text-4xl font-semibold">Why choose Chiromo Hospital Group?</h3>
                <h4 class="md:pt-10 sm:block md:inline text-slate-600 text-lg md:text-3xl font-medium">
                    We are always ready for every challenge. You can trust us.
                </h4>
                <p class="md:pt-10 text-slate-600 text-sm md:text-lg font-medium">
                    Our psychiatric facility and wellness centre have been in operation for 26 years,
                    providing quality in and out patient services to individuals from all walks of life.
                </p>

                <div class="md:mt-[2rem] hidden md:block">
                    <a href=""
                       class="px-10 py-4 text-black rounded-[2.5rem] inline-block text-lg md:text-xl font-semibold bg-white border border-slate-300 hover:bg-slate-100 hover:border-transparent transition-all
                       duration-500 transform hover:scale-75 md:hover:scale-110 hover:opacity-50">Learn More<i class="uil uil-arrow-right font-semibold"></i>
                    </a>
                </div>
            </div>
            <div class="grid md:col-span-1 why-choose-img--container">
                <div class="relative why-choose-img--content">
                    <img src="<?= base_url('images/carousel/image1.jpg') ?>" alt="" class="reason-img reason-img1">
                    <img src="<?= base_url('images/carousel/Image5.jpg') ?>" alt="" class="reason-img reason-img2">
                    <img src="<?= base_url('images/carousel/Image6.jpg') ?>" alt="" class="reason-img reason-img3">
                </div>
            </div>
        </div>
    </section>

    <section class="flex py-10 md:py-20 px-4 md:px-10">
        <div class="grid md:grid-cols-2 gap-10">
            <div class="md:grid col-span-1">

                <div class="w-full">
                    <div>
                        <h3 class="text-2xl md:text-5xl leading-relaxed font-semibold"><span class="custom-text"> Give the gift</span> of a Mental Health
                            Therapy</h3>
                    </div>
                    <div class="pt-10">
                        <p class="leading-snug text-xl md:text-3xl">Therapy is one of the most meaningful gifts you can give to your
                            friends and loved ones.</p>
                    </div>
                    <div class="pt-10">
                        <a href="<?= base_url('gift-member') ?>"
                           class="px-10 py-4 text-black rounded-[2.5rem] inline-block mt-8 text-2xl bg-white border border-slate-300 hover:bg-slate-100 hover:border-transparent transition-all duration-500 transform hover:scale-100 hover:opacity-50">Gift
                            a Membership</a>
                    </div>
                </div>
            </div>
                <div class="md:grid col-span-1">
                    <div class="">
                        <img alt="gift photo" src="<?= base_url('images/logo/gift.jpg') ?>" class="gift-img" />
                    </div>
                </div>
        </div>
    </section>
    <div class="flex justify-between flex-col md:flex-row space-y-6 items-center py-10 px-16">
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
        <div class="flex justify-between flex-col md:flex-row space-y-6">
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