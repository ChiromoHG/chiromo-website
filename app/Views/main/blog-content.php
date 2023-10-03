<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>


<header class="top-0 left-0 w-full main-bg px-4 sm:px-8 lg:px-20 xl:px-20 2xl:px-20">
    <div class="flex flex-wrap items-center justify-between py-6">
        <div class="w-1/2 md:w-auto">
            <a href="<?= base_url('/')?>"
               class="text-white font-bold text-2xl rounded-lg focus:outline-none focus:shadow-outline">
                <img src="<?= base_url('images/logo/chg-logo-2.png')?>" class="rounded-lg" alt="logo" style="width: 240px;">
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
                    <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold" href="<?= base_url('customer/sign-in')?>">
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

<!-- start blog -->
<section class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-20">
    <div class="">
        <h2 class="text-2xl leading-tight font-bold secondary-color-text">WHAT'S GOING ON IN OUR BLOG?</h2>
        <p class="text-gray-600 mt-2 md:max-w-lg">

            Read our mental health articles and blog to get more information, advice and guidance on subjects about
            mental health and trending topics in the mental health industry for you or your loved one.
        </p>

        <a href="#" title="" class="inline-block text-teal-500 font-semibold mt-6 mt:md-0">View All Blog Posts</a>
    </div>

    <div class="md:flex mt-12 md:-mx-4">
        <div class="md:px-4 md:w-1/2 xl:w-1/4">
            <div class="bg-white rounded border border-gray-300">
                <div class="w-full h-48 overflow-hidden bg-gray-300">
                    <img src="<?= base_url('images/blog/blog-1.jpg')?>" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <div class="flex items-center text-sm">
                        <span class="text-teal-500 font-semibold">#Mental Health</span>
                        <span class="ml-4 text-gray-600">14 Feb, 2023</span>
                    </div>
                    <p class="text-lg font-semibold leading-tight mt-4 custom-text">My Stay in Chiromo Hospital Group</p>
                    <p class="text-gray-600 mt-1">
                        In the year 2012, I was diagnosed with a mental disorder known as bipolar mood disorder. An illness associated with…
                    </p>
                    <div class="flex items-center mt-4">
                        <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300">
                            <img src="<?= base_url('images/blog/author-1.jpeg')?>" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="ml-4 flex-grow">
                            <p class="text-gray-600">By <span class="text-gray-900 font-semibold">Janet Monda</span></p>
                        </div>
                        <div class="ml-auto">
                            <a class="custom-text font-semibold" href="">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="md:px-4 md:w-1/2 xl:w-1/4 mt-4 md:mt-0">
            <div class="bg-white rounded border border-gray-300 ">
                <div class="w-full h-48 overflow-hidden bg-gray-300">
                    <img src="<?= base_url('images/blog/blog-2.png')?>" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <div class="flex items-center text-sm">
                        <span class="text-teal-500 font-semibold">#Mental Health</span>
                        <span class="ml-4 text-gray-600">02 Feb, 2023</span>
                    </div>
                    <p class="text-lg font-semibold leading-tight mt-4 custom-text">How to make new year resolutions</p>
                    <p class="text-gray-600 mt-1">Majority of us look forward to a new year. In January, there is this one thing which many of us…
                    </p>
                    <div class="flex items-center mt-4">
                        <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300">
                            <img src="<?= base_url('images/blog/author-2.png')?>" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="ml-4 flex-grow">
                            <p class="text-gray-600">By <span class="text-gray-900 font-semibold">Faith Titus</span></p>
                        </div>
                        <div class="ml-auto">
                            <a class="custom-text font-semibold" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="md:px-4 md:w-1/2 xl:w-1/4 mt-4 md:mt-0">
            <div class="bg-white rounded border border-gray-300 ">
                <div class="w-full h-48 overflow-hidden bg-gray-300">
                    <img src="<?= base_url('images/blog/blog-3.png')?>" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <div class="flex items-center text-sm">
                        <span class="text-teal-500 font-semibold">#Mental Health</span>
                        <span class="ml-4 text-gray-600">20 Jan, 2023</span>
                    </div>
                    <p class="text-lg font-semibold leading-tight mt-4 custom-text">Risk Factors For Substance Abuse</p>
                    <p class="text-gray-600 mt-1">
                        Drug abuse has become a major problem in Kenya today especially among the teenagers and young adults...
                    </p>
                    <div class="flex items-center mt-4">
                        <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300">
                            <img src="<?= base_url('images/blog/author-3.png')?>" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="ml-4 flex-grow">
                            <p class="text-gray-600">By <span class="text-gray-900 font-semibold">Caroline Muthoni</span></p>
                        </div>
                        <div class="ml-auto">
                            <a class="custom-text font-semibold" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- end blog -->

<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
