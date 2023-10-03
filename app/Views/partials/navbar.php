
<!-- end header -->
<section class="w-full px-4 sm:px-8 lg:px-20 xl:px-20 2xl:px-20">
    <?= $this->include('partials/small-nav.php'); ?>
</section>
<header class="w-full main-bg px-4 sm:px-8 lg:px-16 xl:px-20 2xl:px-20 nav">
    <div class="flex flex-wrap items-center justify-between py-3">
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