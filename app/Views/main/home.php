<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= $this->include('partials/small-nav.php'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\OffersCell::display') ?>

<!--    <div class="load"></div>-->

    <!-- start hero -->
    <section class="cover overflow-hidden mx-5 mt-5 flex items-center">
        <div class="owl-carousel owl-theme owl-loaded owl-drag">


            <?php if (isset($carousel)): ?>
            <?php foreach ($carousel as $item): ?>

                    <div class="pb-64 md:pb-[500px] relative bg-gradient-to-tl from-[#0060a3] to-[#ac8342]">
                        <img src="<?= base_url('uploads/carousel/' . $item['carousel_image']) ?>" alt="" class="w-full h-full object-contain md:object-fill top-0 absolute mix-blend-overlay transition duration-500 ease-in-out">
                        <div class="absolute top-[70px] left-[20px] md:absolute md:top-[80px] md:left-[50px] lg:top-[100px] lg:left-[70px] w-full h-full">
                            <?php if(!empty($item['carousel_title'])): ?>
                                <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-snug">
                                    <?= $item['carousel_title'] ?>
                                </h1>
                            <?php endif; ?>
                            <?php if(!empty($item['carousel_description'])): ?>
                                <p class="text-white text-xl md:text-2xl leading-snug pt-5">
                                    <?= $item['carousel_description'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if(!empty($item['carousel_tag'])) : ?>
                                <p class="text-black text-md md:text-xl leading-snug pt-10 font-semibold">
                                    <span><i class="uil uil-check-circle mr-2"></i></span>
                                    <?= $item['carousel_tag'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if(!empty($item['carousel_has_button']) && $item['carousel_has_button'] == 1): ?>
                                <span class="">
                                 <a href="<?= base_url('book-appointment') ?>"
                                 class="px-8 py-3 text-white rounded inline-block mt-8 font-semibold custom-bg transition-all duration-500 transform hover:scale-90">Book
                                 Appointment <i class="uil uil-arrow-right"></i>
                                 </a>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

            <?php endforeach; ?>
            <?php endif; ?>


        </div>
    </section>

    <!-- end hero -->

    <!-- start about -->
    <section class="relative px-4 py-8 md:py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-20">
        <div class="absolute left-1/3 flex justify-center items-center">
            <div class="circle w-80 h-80 rounded-full">
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h2 class="text-xl md:text-3xl leading-tight font-bold welcome-custom-text">Welcome to the Chiromo
                    Hospital Group</h2>
                <p class="text-lg mt-4 font-semibold text-red-400"><span><i class="uil uil-check-circle mr-2"></i>Recovery in Dignity
                </p>
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
                        <h4 class="text-xl font-bold leading-tight custom-text">Dignified Quality Mental Healthcare</h4>
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
            <h4 class="pt-4 md:mt-5 text-black text-lg md:text-xl font-medium text-center">
                What type of therapy are you looking for?
            </h4>
        </div>

        <div class="px-4 mt-10 pb-20 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6 group">
                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-xl md:text-2xl font-semibold text-white">Individual Therapy</h4>
                            <p class="text-slate-600 font-medium text-sm md:text-lg pt-[.4rem] md:pt-[.8rem]">For myself
                                <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-88.jpg') ?>" alt="" class="w-64 md:w-auto">
                        </div>
                    </div>
                </div>

                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-xl md:text-2xl font-semibold text-white">Couples Therapy</h4>
                            <p class="text-slate-600 font-medium text-sm md:text-lg pt-[.4rem] md:pt-[.8rem]">For me and
                                my partner <i class="uil uil-arrow-right"></i></p>
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
                            <p class="text-slate-600 font-medium text-sm md:text-lg pt-[.4rem] md:pt-[.8rem]">For my
                                child <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-77.jpg') ?>" alt="" class="w-64 md:w-auto">
                        </div>
                    </div>
                </div>

                <div class="choose-therapy-individual--container rounded-lg cursor-pointer text-black p-4 transition-all duration-500 transform hover:scale-110">
                    <div class="relative h-60 group-hover:blur-sm hover:!blur-none">
                        <div class="absolute top-0 left-0">
                            <h4 class="text-xl md:text-2xl font-semibold text-white">Corporate Therapy</h4>
                            <p class="text-slate-600 font-medium text-sm md:text-lg pt-[.4rem] md:pt-[.8rem]">For my
                                organization <i class="uil uil-arrow-right"></i></p>
                        </div>
                        <div class="choose-therapy--individual">
                            <img src="<?= base_url('images/disorders/image-100.jpg') ?>" alt="" class="w-64 md:w-auto">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--end of you deserve to be happy-->


    <!-- how it works section -->
    <section class="relative px-4 sm:px-8 lg:px-16 xl:px-10 2xl:px-10 py-10 md:py-20">
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

                        <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i
                                    class="uil uil-edit-alt"></i></span>

                        <h4 class="text-lg md:text-xl font-bold mt-4 how-it-works">Take An Assessment</h4>
                        <p class="mt-4 font-semibold">Complete our 60-second online assessment.</p>
                    </div>
                </a>
            </div>


            <div class="md:w-1/2 md:px-4 mt-4 md:mt-0 lg:w-1/4">
                <a href="">
                    <div class="bg-white border border-gray-300 p-4 steps-border flex items-center justify-center flex-col">

                        <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i
                                    class="uil uil-stethoscope"></i></span>

                        <h4 class="text-lg md:text-xl font-bold mt-4 how-it-works">Find Your Therapist</h4>
                        <p class="mt-4 font-semibold">Connect with a therapist that fits your needs.</p>
                    </div>
                </a>
            </div>

            <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
                <a href="">
                    <div class="bg-white border border-gray-300 p-4 steps-border flex items-center justify-center flex-col">

                        <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i
                                    class="uil uil-transaction"></i></span>

                        <h4 class="text-lg md:text-xl font-bold mt-4 how-it-works">Pick level of support</h4>
                        <p class="mt-4 font-semibold">Choose the best plan for your therapy budget.</p>
                    </div>
                </a>
            </div>

            <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
                <a href="">
                    <div class="bg-white border border-gray-300 p-4 steps-border flex items-center justify-center flex-col">

                        <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i
                                    class="uil uil-video"></i></span>

                        <h4 class="text-lg md:text-xl font-bold mt-4 how-it-works">Start therapy</h4>
                        <p class="mt-4 font-semibold">Message your therapist and begin your journey today!</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- end of how it works -->


    <section class="bg-[#fafafa] px-4 xl:px-5 2xl:px-5 py-10 md:py-20">
        <div class="grid md:grid-cols-12 gap-10 md:px-10">
            <div class="grid md:col-span-6">
                <div class="legacy-container--img">
                    <iframe id="player"
                            class="w-full"
                            height="460"
                            src="https://www.youtube.com/embed/coPECmp8CJQ?si=IKamNkSRqzwM13mw&autoplay=1"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                    </iframe>

                </div>
            </div>
            <div class="grid md:col-span-6">
                <div class="h-full legacy-container--text">
                    <h3 class="text-xl md:text-3xl lg:text-4xl font-semibold inline-block">Chiromo Hospital Group since
                        1996
                    </h3>
                    <p class="pt-8 md:pt-10 text-slate-600 font-medium">
                        Founded over 25 years ago, Chiromo Hospital Group has established itself as a leading provider
                        of psychiatric services, offering exceptional care and support to individuals facing mental
                        health
                        challenges.
                    </p>
                    <div class="mt-[1.5rem] md:mt-[2rem] flex flex-col md:flex-row justify-center space-y-5 md:space-y-0 md:space-x-[2rem]">

                        <div class="flex flex-1 flex-row bg-white shadow-md rounded-md p-4 border hover:border-[#4a90e2] cursor-pointer">
                            <div class="flex items-center justify-center flex-shrink-0 h-10 w-10 rounded-xl bg-[#ac8342] text-white">
                                <span><i class="uil uil-user-arrows"></i></span>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="font-bold text-lg">50 +</div>
                                <div class="text-md text-gray-500">Corporate Partners</div>
                            </div>
                        </div>

                        <div class="flex flex-1 flex-row bg-white shadow-md rounded-md p-4 border hover:border-[#4a90e2] cursor-pointer">
                            <div class="flex items-center justify-center flex-shrink-0 h-10 w-10 rounded-xl bg-[#ac8342] text-white">
                                <span><i class="uil uil-clinic-medical"></i></span>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="font-bold text-lg">6</div>
                                <div class="text-md text-gray-500">All Our Branches</div>
                            </div>
                        </div>
                    </div>


                    <div class="mt-[1.5rem] md:mt-[2rem]">
                        <a href="<?= base_url('about') ?>"
                           class="w-full sm:w-auto text-center md:px-6 py-4 text-black rounded-[2.5rem] inline-block text-lg md:text-xl font-semibold bg-white border border-[#4a90e2] hover:bg-slate-100 hover:border-transparent transition-all duration-500 transform hover:scale-75 md:hover:scale-110 hover:opacity-50">
                            Learn More about us
                            <i class="uil uil-arrow-right font-semibold"></i>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="why-choose--chiromo h-screen flex md:justify-center md:items-center px-4 py-20 md:px-10">
        <div class="grid md:grid-cols-2 md:gap-10">
            <div class="grid md:col-span-1">
                <h3 class="text-white text-xl md:text-4xl font-semibold">Global Psychiatric and Wellness Center of
                    Excellence</h3>
                <h4 class="md:pt-10 sm:block md:inline text-slate-600 text-lg md:text-3xl font-medium">
                    We are always ready for every challenge. You can trust us.
                </h4>
                <p class="md:pt-10 text-slate-600 text-sm md:text-lg font-medium">
                    Our psychiatric facility and wellness centre have been in operation for more than 26 years,
                    providing quality in and out patient services to individuals from all walks of life.
                </p>

                <div class="md:mt-[2rem] hidden md:block">
                    <a href=""
                       class="px-10 py-4 text-black rounded-[2.5rem] inline-block text-lg md:text-xl font-semibold bg-white border border-slate-300 hover:bg-slate-100 hover:border-transparent transition-all
                       duration-500 transform hover:scale-75 md:hover:scale-110 hover:opacity-50">Learn More<i
                                class="uil uil-arrow-right font-semibold"></i>
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
                        <h3 class="text-2xl md:text-5xl leading-relaxed font-semibold">
                            <span class="custom-text"> Give the gift </span>of Mental Health Therapy
                        </h3>
                    </div>
                    <div class="pt-10">
                        <p class="leading-snug text-xl md:text-3xl">Therapy is one of the most meaningful gifts you can
                            give to your
                            friends and loved ones.</p>
                    </div>
                    <div class="pt-10">
                        <a href="<?= base_url('gift-member') ?>"
                           class="text-center py-4 md:px-6 w-full sm:w-auto text-black rounded-[2.5rem] inline-block mt-8 text-2xl bg-white border border-[#4a90e2] hover:bg-slate-100 hover:border-transparent transition-all duration-500 transform hover:scale-100 hover:opacity-50 cursor-not-allowed pointer-events-none">Gift
                            a Membership</a>
                    </div>
                </div>
            </div>
            <div class="md:grid col-span-1">
                <div class="">
                    <img alt="gift photo" src="<?= base_url('images/logo/gift.jpg') ?>" class="gift-img"/>
                </div>
            </div>
        </div>
    </section>
    <div class="flex md:justify-between flex-col md:flex-row space-y-6 items-center py-10 px-4 md:px-16">
        <p class="text-md leading-snug text-slate-500">
            If you are in a crisis or any other person may be in danger - don't use this site.
            <br>
            <a href="" class="text-[#0060a3]">These resources</a> can provide you with immediate help.
        </p>
        <div class="flex items-center">
            <span class="text-6xl"><i class="uil uil-shield-check secure-icon"></i></span>
            <div class="flex flex-col">
                <span class="text-sm">256-bit SSL</span>
                <span class="text-2xl text-slate-300 font-semibold">secure</span>
            </div>
        </div>
    </div>


    <!-- stories section-->
    <section class="top-stories">
        <div class="py-10 px-4 md:px-16">
            <div class="flex md:justify-between items-center flex-col md:flex-row space-y-6">
                <h4 class="font-semibold text-xl md:text-2xl">News and Updates</h4>
                <a href="" class="font-semibold text-xl md:text-2xl text-[#0060a3] ">All News and Updates</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6 py-10">
                <div class="stories-card">
                    <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                        <div class="card-picture">

                        </div>
                        <div class="py-10 px-8">
                            <span class="text-slate-600 text-[1rem]">August 30, 2023</span>
                            <h4 class="pt-[.8rem] text-[1.6rem] font-semibold">CHG Bustani Branch Launching</h4>
                            <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1.2rem]">Read
                                More</a>
                        </div>
                    </div>
                    <div class="stories-card--side-back shadow-xl rounded-xl">
                        <div class="flex flex-col justify-center items-center h-[30rem]">
                            <h4 class="pt-[.8rem] text-[1.6rem] font-semibold text-white">CHG Bustani Branch
                                Launching</h4>
                            <a href=""
                               class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
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
                            <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1.2rem]">Read
                                More</a>
                        </div>
                    </div>
                    <div class="stories-card--side-back shadow-xl rounded-xl">
                        <div class="flex flex-col justify-center items-center h-[30rem]">
                            <h4 class="pt-[.8rem] text-[1.6rem] font-semibold text-white">Healing the Mind Launch</h4>
                            <a href=""
                               class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
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
                            <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1.2rem]">Read
                                More</a>
                        </div>
                    </div>
                    <div class="stories-card--side-back shadow-xl rounded-xl">
                        <div class="flex flex-col justify-center items-center h-[30rem]">
                            <h4 class="pt-[.8rem] text-[1.6rem] font-semibold text-white">Training NPS on Mental
                                Health</h4>
                            <a href=""
                               class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--end of stories section-->


    <!-- component -->
    <section class="py-20 bg-stone-100 px-4 md:px-16">
        <div class="grid grid-cols-1 sm:grid-cols-2  gap-10 mx-auto  items-center max-w-6xl">
            <div class="md:mr-6">
                <h3 class="text-4xl pr-6 sm:leading-snug tracking-tight font-bold text-black">
                    Our Corporate Partners.
                </h3>
                <p class="mt-4 text-[#0060a3] text-xl font-medium">
                    With our corporate partners, we fight hard to get you covered.
                </p>
            </div>
            <div>
                <div class="absolute bg-none md:bg-[#0060a3] transform md:-translate-x-10 relative h-64">
                </div>
                <div class="transform md:rounded-md  bg-white md:rotate-3 md:scale-90 md:translate-x-10 md:shadow-2xl md:-ml-4 -mt-56 p-12  md:space-y-2">
                    <div class="px-4 sm:px-0 grid grid-cols-5 sm:grid-cols-4 gap-2 sm:gap-8 md:max-w-5xl mx-auto">
                        <img src="https://th.bing.com/th/id/OIP.UsSAC1eW3s25oVib6un_qwHaEs?rs=1&pid=ImgDetMain">
                        <img src="https://www.memorialkenya.com/wp-content/uploads/2020/06/Madison-Insurance-Company-Kenya.png">
                        <img src="https://i2.wp.com/kenyanwallstreet.com/wp-content/uploads/2017/02/Screen-shot-2017-02-02-at-7.40.47-PM.png?fit=711%2C397">
                        <img src="https://th.bing.com/th/id/OIP.b0Xmi4gtpIm48_Jc9tV3UQHaDt?rs=1&pid=ImgDetMain">
                        <img src="https://www.zse.co.zw/wp-content/uploads/2019/03/old-mutual-55.png">
                        <img src="https://assets-global.website-files.com/6038c1030be2580db46ccf46/6064e1fc87ab3dda4bf92b4d_CO-OP%20BANK%20SQUARE.jpg">
                        <img src="https://sokodirectory.com/wp-content/uploads/2015/10/communications-authority-of-kenya.png">
                        <img src="https://th.bing.com/th/id/OIP.JXyHarea8tc4vN_wi_W8cwHaDD?rs=1&pid=ImgDetMain">
                        <img src="https://th.bing.com/th/id/OIP.fEZfVzpkjNB73bZCorHCxQAAAA?rs=1&pid=ImgDetMain">
                        <img src="https://th.bing.com/th/id/OIP.eY_SO5EB-_c9mA_KWroWhgHaFj?rs=1&pid=ImgDetMain">
                        <img src="https://kenyanwallstreet.com/wp-content/uploads/2019/12/cic.png">
                        <img src="https://th.bing.com/th/id/OIP.eY_SO5EB-_c9mA_KWroWhgHaFj?rs=1&pid=ImgDetMain">
                    </div>
                    <a href=""
                       class="bg-none text-sm md:text-md lg:bg-stone-300 hover:bg-stone-500 hover:text-white px-4 py-2 rounded-md font-semibold text-black">Show
                        more partners</a>
                </div>
            </div>
        </div>
    </section>

    <!-- start cta -->
    <section
            class="relative bg-blue-teal-gradient px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left">
        <div class="md:flex md:items-center md:justify-center">
            <h2 class="text-xl font-bold text-white">Get in touch with us today! <br class="block md:hidden">Call us on:
                0800 220 000</h2>
            <a href="<?= base_url('appointment_bookings') ?>"
               class="px-8 py-4 bg-white rounded inline-block font-semibold md:ml-8 mt-4 md:mt-0 custom-text">Book
                An Appointment
            </a>
        </div>
    </section>
    <!-- end cta -->

    <!--    fixed right-10 z-50 bottom-16-->

    <section class="w-full fixed right-0 overflow-hidden md:right-5 md:w-2/5 rounded-lg shadow-md z-50 feedback-form"
             style="background-color: white; bottom: 60px; height: 60%; transition: 300ms ease-out;"
             id="feedbackContainer">
        <div class="text-center p-4 flex justify-between items-center feedback-form-header"
             style="background-color: #0060a3; color:white;">
            <h2 class="font-semibold">Recommend Our Services</h2>
            <span class="cursor-pointer w-6 h-6 bg-red-100 text-red-400 rounded-full flex items-center justify-center"><i
                        class="uil uil-times"></i></span>
        </div>
        <div class="overflow-y-auto px-4 py-6" style="max-height: 80%;">
            <form action="" class="flex flex-col space-y-4">
                <div class="flex flex-col space-y-2">
                    <label for="name" class="font-semibold">Would you recommend our services to anyone?</label>
                    <div class="flex justify-center border items-center border-gray-300 rounded-md feedback-range">
                        <span class="flex-1 flex items-center justify-center py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">1</span>
                        <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">2</span>
                        <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">3</span>
                        <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">4</span>
                        <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">5</span>
                        <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">6</span>
                        <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">7</span>
                        <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">8</span>
                        <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">9</span>
                        <span class="flex-1 flex items-center justify-center py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">10</span>
                    </div>
                    <div class="">
                        <p class="text-xs text-gray-400">1 = Not at all likely, 10 = Extremely likely</p>
                        <span class="text-sm text-red-400" id="feedbackRangeError"></span>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="feedbackDate" class="font-semibold">Date</label>
                    <input type="text" name="feedbackDate" id="feedbackDate"
                           class="border border-gray-300 rounded-md p-2">
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="feedbackName" class="font-semibold">Full Name</label>
                    <input type="text" name="feedbackName" id="feedbackName"
                           class="border border-gray-300 rounded-md p-2" placeholder="Enter your name">
                    <span class="text-sm text-red-400" id="feedbackNameError"></span>
                    <div class="flex flex-col space-y-2">
                        <label for="feedbackEmail" class="font-semibold">Email</label>
                        <input type="email" name="feedbackEmail" id="feedbackEmail"
                               class="border border-gray-300 rounded-md p-2" placeholder="Enter your email">
                        <span class="text-sm text-red-400" id="feedbackEmailError"></span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="feedbackPhone" class="font-semibold">Phone</label>
                        <input type="Number" name="feedbackPhone" id="feedbackPhone"
                               class="border border-gray-300 rounded-md p-2" placeholder="Enter your phone number">
                        <span class="text-sm text-red-400" id="feedbackPhoneError"></span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="feedbackMessage" class="font-semibold">Message</label>
                        <textarea name="feedbackMessage" id="feedbackMessage" cols="2" rows="3"
                                  class="border border-gray-300 rounded-md p-2"
                                  placeholder="Enter your message"></textarea>
                        <span class="text-sm text-red-400" id="feedbackMessageError"></span>
                    </div>
                    <div class="flex justify-between">
                        <label for="feedbackTerms" class="text-xs text-slate-400">Agree with our terms and conditions of personal data usage</label>
                        <input type="checkbox" name="feedbackTerms" class="rounded-md" id="feedbackTerms">
                    </div>
                    <div class="flex space-y-2 flex-col my-2">
                        <button class="px-8 py-2 bg-[#0060a3] text-white rounded-md font-semibold opacity-75 cursor-progress" disabled id="saveFeedback">
                            Submit
                        </button>
                        <a href="#" class="text-sm text-gray-400">Would you like to take a survey?</a>
                    </div>
            </form>
        </div>
    </section>

    <section class="fixed right-5 z-50" style="bottom: 10px;">
        <button style="background-color: #0060a3; padding: 8px 10px; color: white; border: none; border-radius: 10px; font-weight: 600"
                id="feedbackBtn"><i class="uil uil-feedback"></i> Feedback
        </button>
    </section>


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
<?= $this->section('home-custom-script'); ?>
    <script>

        $(document).ready(function () {

            AOS.init();

            //owl carousel for the patient dashboard
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                dots: false,
                nav: false,
                animateIn: 'slideInRight',
                animateOut: 'slideOutLeft',
                responsive: {
                    0: {
                        items: 1
                    },
                    1024: {
                        items: 1
                    },
                    1280: {
                        items: 1
                    }
                }
            });

            //toggle feedback button

            let feedbackContainer = $('#feedbackContainer');
            let feedbackBtn = $('#feedbackBtn');
            let closeFeedbackBtn = $('.feedback-form-header span');

            feedbackBtn.on('click', function () {
                feedbackContainer.toggleClass('feedback-form');
            })

            closeFeedbackBtn.on('click', function () {
                feedbackContainer.toggleClass('feedback-form');
            })

            //processing the feedback form

            let feedbackRangeValue;
            $('.feedback-range span').on('click', function () {
                $(this).addClass('bg-blue-500');
                if ($(this).hasClass('bg-blue-500')) {
                    $(this).prevAll().removeClass('bg-blue-500');
                    $(this).nextAll().removeClass('bg-blue-500');
                }
                feedbackRangeValue = $(this).text();
            })


            let feedbackRangeError = $('#feedbackRangeError');
            let feedbackDate = $('#feedbackDate');
            let feedbackName = $('#feedbackName');
            let feedbackEmail = $('#feedbackEmail');
            let feedbackPhone = $('#feedbackPhone');
            let feedbackMessage = $('#feedbackMessage');
            let feedbackNameError = $('#feedbackNameError');
            let feedbackEmailError = $('#feedbackEmailError');
            let feedbackPhoneError = $('#feedbackPhoneError');
            let feedbackMessageError = $('#feedbackMessageError');
            let feedbackTerms = $('#feedbackTerms');

            let currentDate = moment().format('DD/MM/YYYY');
            feedbackDate.val(currentDate);

            //form validations

            function validateFeedbackRange() {
                if (feedbackRangeValue === undefined) {
                    feedbackRangeError.text('Please select a value');
                    return false;
                } else {
                    feedbackRangeError.text('');
                    return true;
                }
            }

            function validateFullName() {
                let regex = /^[a-zA-Z ]{2,30}$/;
                if (regex.test(feedbackName.val())) {
                    feedbackName.removeClass('border-red-500 focus:border-red-500');
                    feedbackName.addClass('border-green-500');
                    feedbackNameError.text('');
                    return true;
                } else {
                    feedbackName.removeClass('border-green-500');
                    feedbackName.addClass('border-red-500 focus:border-red-500');
                    feedbackNameError.text('Please enter a valid full name');
                    return false;
                }
            }

            function validateEmail() {
                let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (regex.test(feedbackEmail.val())) {
                    feedbackEmail.removeClass('border-red-500 focus:border-red-500');
                    feedbackEmail.addClass('border-green-500');
                    feedbackEmailError.text('');
                    return true;
                } else {
                    feedbackEmail.removeClass('border-green-500');
                    feedbackEmail.addClass('border-red-500 focus:border-red-500');
                    feedbackEmailError.text('Please enter a valid email')
                    return false;
                }
            }

            function validatePhone() {
                let regex = /^[0-9]{10}$/;
                if (regex.test(feedbackPhone.val())) {
                    feedbackPhone.removeClass('border-red-500 focus:border-red-500');
                    feedbackPhone.addClass('border-green-500');
                    feedbackPhoneError.text('');
                    return true;
                } else {
                    feedbackPhone.removeClass('border-green-500');
                    feedbackPhone.addClass('border-red-500 focus:border-red-500');
                    feedbackPhoneError.text('Please enter a valid phone number');
                    return false;
                }
            }

            function validateMessage() {
                let regex = /^[a-zA-Z0-9 ]{2,200}$/;
                if (regex.test(feedbackMessage.val())) {
                    feedbackMessage.removeClass('border-red-500 focus:border-red-500');
                    feedbackMessage.addClass('border-green-500');
                    feedbackMessageError.text('');
                    return true;
                } else {
                    feedbackMessage.removeClass('border-green-500');
                    feedbackMessage.addClass('border-red-500 focus:border-red-500');
                    feedbackMessageError.text('Please enter a valid message');
                    return false;
                }
            }

            //attach event listeners to the input fields

            feedbackName.on('keyup', validateFullName);
            feedbackEmail.on('keyup', validateEmail);
            feedbackPhone.on('keyup', validatePhone);
            feedbackMessage.on('keyup', validateMessage);

            $('#feedbackTerms').change(function() {
                if ($(this).prop('checked')) {
                    $('#saveFeedback').prop('disabled', false);
                    $('#saveFeedback').removeClass('opacity-75 cursor-progress');
                } else {
                    $('#saveFeedback').prop('disabled', true);
                    $('#saveFeedback').addClass('opacity-75 cursor-progress');
                }
            });


            $('#saveFeedback').on('click', function (e) {
                e.preventDefault();
                if (validateFeedbackRange() && validateFullName() && validateEmail() && validatePhone() && validateMessage()) {
                    let feedbackData = {
                        feedbackRangeValue: feedbackRangeValue,
                        feedbackName: feedbackName.val(),
                        feedbackEmail: feedbackEmail.val(),
                        feedbackPhone: feedbackPhone.val(),
                        feedbackMessage: feedbackMessage.val()
                    }

                    $('#saveFeedback').prop('disabled', true).html('<span class="loading loading-spinner loading-xs"></span>');
                    $.ajax({
                        url: '<?= base_url('api/save_feedback') ?>',
                        method: 'POST',
                        data: feedbackData,
                        success: function (response) {
                            if (response.status === 200) {
                                $('#toast-success').removeClass('hidden');
                                $('#toast-success #toast-success-content').text(response.message);
                            } else if (response.status === 500) {
                                $('#toast-danger').removeClass('hidden');
                                $('#toast-danger #toast-danger-content').text(response.message);
                            }
                        },

                        error: function (error) {
                            $('#toast-danger').removeClass('hidden');
                            $('#toast-danger #toast-danger-content').text('Something went wrong. Please try again');
                        },

                        complete: function () {
                            $('#saveFeedback').prop('disabled', false).html('Submit');
                        }
                    })
                } else {
                    return false;
                }
            })

            //youtube video autoplay
            let video;

            function onYouTubeIframeAPIReady() {
                video = new YT.Player('player', {
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
            }

            function onPlayerReady(event) {
                event.target.playVideo();
            }

            function onPlayerStateChange(event) {
                if (event.data === YT.PlayerState.ENDED) {
                    event.target.playVideo();
                }
            }

        })

    </script>
<?= $this->endSection(); ?>