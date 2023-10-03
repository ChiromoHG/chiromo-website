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

<!-- start main content -->

<section class="bg-gray-50">
    <!-- component -->
    <div class="container mx-auto py-8">
<!--        <h1 class="text-2xl font-bold mb-3 text-center">Enter Your Details to Continue</h1>-->
        <span class="text-lg font-semibold block text-center mb-3">Who do you want to buy for ?</span>
        <div class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            <div x-data="{ activeTab: 'myself' }">
                <div class="flex">
                    <div class="flex start">
                        <button class="py-2 px-4 text-lg font-semibold hover:text-white hover:bg-[#0060a3] border border-gray-300 rounded-l-lg"
                                :class="{ 'bg-[#0060a3] text-white border-[#0060a3]': activeTab === 'myself' }"
                                x-on:click="activeTab = 'myself'">Buy for Myself
                        </button>
                        <button class="py-2 px-4 text-lg font-semibold hover:text-white hover:bg-[#0060a3] border border-gray-300 rounded-r-lg"
                                :class="{ 'bg-[#0060a3] text-white border-[#0060a3]': activeTab === 'beneficiary' }"
                                x-on:click="activeTab = 'beneficiary'">Buy for Another
                        </button>
                    </div>

                </div>

                <div x-show="activeTab === 'myself'">

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="myselfName">Full Name</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="text" id="myselfName" name="myself-name">
                    </div>

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="myselfEmail">Email Address</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="email" id="myselfEmail" name="myself-email">
                    </div>

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="myselfPhone">Phone Number</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="tel" id="myselfPhone" name="myself-phone">
                    </div>
                    <button
                            class="w-full py-2 px-7 border border-[#E5E7EB] rounded-full text-lg text-body-color font-semibold hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition duration-300"
                            type="submit">Submit
                    </button>

                </div>

                <div x-show="activeTab === 'beneficiary'" style="display: none;">
                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="beneficiaryName">Beneficiary Full Name</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="text" id="beneficiaryName" name="beneficiary-name">
                    </div>

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="beneficiaryEmail">Beneficiary Email Address</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="email" id="beneficiaryEmail" name="beneficiary-email">
                    </div>

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="beneficiaryPhone">Beneficiary Phone Number</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="tel" id="beneficiaryPhone" name="beneficiary-phone">
                    </div>

                    <button
                            class="w-full py-2 px-7 border border-[#E5E7EB] rounded-full text-lg text-body-color font-semibold hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition duration-300"
                            type="submit">Submit
                    </button>

                </div>
            </div>
        </div>
    </div>

</section>


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
