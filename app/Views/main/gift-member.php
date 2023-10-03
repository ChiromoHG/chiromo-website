<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>


<header class="top-0 left-0 w-full main-bg px-4 sm:px-8 lg:px-20 xl:px-20 2xl:px-20">
    <div class="flex flex-wrap items-center justify-between py-6">
        <div class="w-1/2 md:w-auto">
            <a href="<?= base_url('/') ?>"
               class="text-white font-bold text-2xl rounded-lg focus:outline-none focus:shadow-outline">
                <img src="<?= base_url('images/logo/chg-logo-2.png') ?>" class="rounded-lg" alt="logo"
                     style="width: 240px;">
            </a>
        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block">
            <svg class="fill-current text-white"
                 xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>

        <input class="hidden" type="checkbox" id="menu-toggle">

        <div class="hidden md:block w-full md:w-auto" id="menu">
            <nav
                    class="w-full bg-white md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
                <ul class="md:flex items-center">
                    <li><a class="py-2 inline-block md:text-white md:hidden lg:block font-semibold" href="#">About
                            Us</a></li>
                    <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                           href="#">Treatments</a></li>
                    <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                           href="<?= base_url('our-blog'); ?>">Our Blogs</a></li>
                    <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                           href="<?= base_url('customer/sign-in') ?>">
                            Log in
                        </a></li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded"
                           href="<?= base_url('book-appointment') ?>">Book
                            Appointment</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- end header -->


<section>
    <div class="site-landing-page">
        <div class="shape shape-1">
            <img src="<?= base_url('images/mental/shape-1.png') ?>">
        </div>
        <div class="shape shape-2">
            <img src="<?= base_url('images/mental/shape-2.png') ?>">
        </div>
        <div class="shape shape-4">
            <img src="<?= base_url('images/mental/shape-4.png') ?>">
        </div>
        <div class="hero-container">
            <div class="hero-row">
                <div class="landing-page-text-wrap">
                    <div class="landing-page-text bg-white p-5">
                        <h1>
                            WellnessPro;
                            <span>Your Comprehensive</span>
                            Mental Wellness program
                        </h1>
                        <h5>
                            The program aims to promote mental health awareness in order to
                            reduce the stigma associated with mental illness and to create a
                            community where mental health is valued.
                        </h5>
                        <a href="#categories"
                           style="cursor: pointer; text-decoration: none; color: rgb(255, 255, 255);">Take
                            Assessment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div class="mx-auto w-[60%] text-center py-16">
        <h4 class="text-[#0060a3] text-[40px] font-semibold">
            Get A Mental Wellness Package From As Low As KES 3,000/- Annually
        </h4>
        <p class="mt-10 text-2xl text-slate-500">
            Wellness is an active lifestyle that incorporates several components that affect health (physical, mental
            and social wellbeing)
            on a holistic level.
        </p>
        <p class="mt-4 text-2xl text-slate-500">
            We would like to curate a specialized program for you; to get started, take a free self assessment from the
            categories below;
        </p>
    </div>

    <div class="lg:pt-[20px] pb-10 lg:pb-10 flex items-center justify-center">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-[30px] overflow-hidden mb-10">
                        <img
                                src="<?= base_url('images/disorders/image-1.jpg')?>" alt="image" class="w-full"
                        />
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    Burnout Self-Test Maslach Burnout Inventory(MBI)
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">Take self-test assessment for MBI</a>
                            </p>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy Now
                            </a>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy for Someone
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-[30px] overflow-hidden mb-10">
                        <img
                                src="<?= base_url('images/disorders/image-3.jpg')?>" alt="image" class="w-full"
                        />
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    Burnout Self-Test Screening
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">Take self-test assessment Burnout</a>
                            </p>
                            <a href="" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy Now
                            </a>
                            <a href="" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy for Someone
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-[30px] overflow-hidden mb-10">
                        <img
                                src="<?= base_url('images/disorders/image-4.jpg')?>" alt="image" class="w-full"
                        />
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    Depression (PHQ-9) Self Screening
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">Take self-test assessment for Depression (PHQ-9)</a>
                            </p>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy Now
                            </a>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy for Someone
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-[30px] overflow-hidden mb-10">
                        <img
                                src="<?= base_url('images/disorders/image-5.jpg')?>" alt="image" class="w-full"
                        />
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    PTSD Checklist for DSM-5 (PCL-5)
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">Take self-test assessment for DSM-5 (PCL-5)</a>
                            </p>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy Now
                            </a>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy for Someone
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-[30px] overflow-hidden mb-10">
                        <img
                                src="<?= base_url('images/disorders/image-6.jpg')?>" alt="image" class="w-full"
                        />
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    The Beck Anxiety Inventory (BAI)
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">Take self test assessment for BAI</a>
                            </p>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy Now
                            </a>
                            <a href="" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy for Someone
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-[30px] overflow-hidden mb-10">
                        <img
                                src="<?= base_url('images/disorders/image-7.png')?>" alt="image" class="w-full"
                        />
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    The Alcohol Use Disorders Identification Test(AUDIT)
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">Take self-test assessment for AUDIT</a>
                            </p>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy Now
                            </a>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Buy for Someone
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</section>


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
