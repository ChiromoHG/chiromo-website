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
    <div class="site-landing-page-alt">
        <div class="hero-container">
            <div class="landing-page-text-wrap">
                <div class="logo">
                    <div class="landing-page-text">
                        <h1>
                            WellnessPro,
                            <span>Your comprehensive</span>
                            mental Wellness Program.
                        </h1>
                        <h5>
                            The program aims to promote mental health awareness in order to
                            reduce the stigma associated with mental illness and to create a
                            community where mental health is valued.
                        </h5>
                        <a href="#products" class="cursor: pointer; text-decoration: none; color: rgb(255, 255, 255);">Choose
                            package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div class="mx-auto w-[60%] text-center py-16">
        <h4 class="text-[#0060a3] text-[40px] font-semibold">
            Our Wellness Packages Pricing
        </h4>
        <p class="mt-10 text-2xl text-slate-500">
            Wellness is an active lifestyle that incorporates several components that affect health.
        </p>
    </div>

    <!-- component -->
    <div class="grid md:grid-cols-2 gap-5 py-10 md:px-[200px]">

        <card class="rounded-[2.0rem] border shadow-xl flex flex-col p-5 bg-white">
            <div class="flex flex-col items-center">
                <p class="mt-10 text-2xl text-[#0060a3] font-semibold"> Silver Wellness Package </p>
                <button class="mt-10 rounded py-2 px-4 bg-[#0060a3] text-white hover:bg-[#0060a3] hover:text-gray-50 text-lg">
                    KSH 5,000 / month
                </button>
                <div class="h-0.5 bg-gray-200 w-full my-5"></div>

            </div>

            <div class="flex flex-col px-3">

                <p class="text-lg font-semibold text-[#0060a3] text-center"> Silver Wellness Package will offer the
                    following services;</p>

                <div class="grid grid-cols-5 mt-4 gap-y-2">
                    <div class="col-span-5 text-md font-light text-gray-700">
                        Two virtual Mental Wellness Assessments that will cover any of the two following areas:-
                    </div>
                </div>

                <div class="grid grid-cols-5 mt-4 gap-y-2">
                    <!-- Details 1 -->
                    <div class="pl-2">
                        <span class="inline-flex items-center justify-center bg-blue-100 h-6 w-6 rounded-full">
                        <i class="uil uil-check text-blue-500"></i>
                        </span>
                    </div>
                    <div class="col-span-4 text-sm font-light text-gray-700">
                        Anxiety
                    </div>

                    <!-- Details 2 -->
                    <div class="pl-2">
                        <span class="inline-flex items-center justify-center bg-blue-100 h-6 w-6 rounded-full">
                        <i class="uil uil-check text-blue-500"></i>
                        </span>
                    </div>
                    <div class="col-span-4 text-sm font-light text-gray-700">
                        Depression
                    </div>

                    <!-- Details 3 -->
                    <div class="pl-2">
                        <span class="inline-flex items-center justify-center bg-blue-100 h-6 w-6 rounded-full">
                        <i class="uil uil-check text-blue-500"></i>
                        </span>
                    </div>
                    <div class="col-span-4 text-sm font-light text-gray-700">
                        Alcohol abuse
                    </div>

                    <!-- Details 4 -->
                    <div class="pl-2">
                        <span class="inline-flex items-center justify-center bg-blue-100 h-6 w-6 rounded-full">
                        <i class="uil uil-check text-blue-500"></i>
                        </span>
                    </div>
                    <div class="col-span-4 text-sm font-light text-gray-700">
                        Burnout
                    </div>
                </div>

                <div class="grid grid-cols-5 mt-4 gap-y-2">
                    <div class="col-span-5 text-md font-light text-gray-700 pl-2">
                        Two e-counselling sessions.
                    </div>
                </div>

                <a href="<?= base_url('gift-member/payment-kyc')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition ease-out duration-500 text-center mt-4 mb-4">
                    Buy this package
                </a>

            </div>

        </card>

        <card class="rounded-[2.0rem] border shadow-xl flex flex-col p-5 bg-white">

            <div class="flex flex-col items-center">
                <p class="mt-10 text-2xl text-[#ac8342] font-semibold"> Gold Wellness Package </p>

                <button class="mt-10 rounded py-2 px-4 custom-bg text-white text-lg">
                    KSH 10,000 / Annually
                </button>
                <div class="h-0.5 bg-gray-200 w-full my-5"></div>

            </div>
            <div class="flex flex-col px-3">

                <p class="text-lg font-semibold text-[#ac8342] text-center"> Silver Wellness Package will offer the
                    following services;</p>

                <div class="grid grid-cols-5 mt-4 gap-y-2">
                    <div class="col-span-5 text-md font-light text-gray-700">
                        Two virtual assessments in a year that will cover any two of the following areas:-
                    </div>
                </div>

                <div class="grid grid-cols-5 mt-3 gap-y-2">

                    <div class="pl-2">
                        <span class="inline-flex items-center justify-center package-bg h-6 w-6 rounded-full">
                        <i class="uil uil-check text-black"></i>
                        </span>
                    </div>
                    <div class="col-span-4 text-sm font-light text-gray-700">
                        Anxiety
                    </div>

                    <div class="pl-2">
                        <span class="inline-flex items-center justify-center package-bg h-6 w-6 rounded-full">
                        <i class="uil uil-check text-black"></i>
                        </span>
                    </div>
                    <div class="col-span-4 text-sm font-light text-gray-700">
                        Depression
                    </div>

                    <div class="pl-2">
                        <span class="inline-flex items-center justify-center package-bg h-6 w-6 rounded-full">
                        <i class="uil uil-check text-black"></i>
                        </span>
                    </div>
                    <div class="col-span-4 text-sm font-light text-gray-700">
                        Alcohol abuse
                    </div>

                    <div class="pl-2">
                        <span class="inline-flex items-center justify-center package-bg h-6 w-6 rounded-full">
                        <i class="uil uil-check text-black"></i>
                        </span>
                    </div>
                    <div class="col-span-4 text-sm font-light text-gray-700">
                        Burnout
                    </div>

                </div>


                <div class="grid grid-cols-5 mt-4 gap-y-2">
                    <div class="col-span-5 text-md font-light text-gray-700 pl-2">
                        Six e-counselling sessions (One every 2 months).
                    </div>
                </div>

                <a href="<?= base_url('gift-member/payment-kyc')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition ease-out duration-500 text-center mt-4 mb-4">
                    Buy this package
                </a>


            </div>

        </card>

    </div>


</section>


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
