<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= $this->include('partials/navbar.php'); ?>

<div class="load"></div>

<section class="mx-5 my-5">
    <div class="about-us">
        <div class="flex flex-col h-[60vh] justify-center items-start pl-10">
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-semibold pb-[2rem]">What is going on in our blog</h2>
                <p class="text-white text-lg">
                    Read our mental health articles and blog to get more information about mental health.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- start blog -->
<section class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pb-20">
    <div class="flex md:justify-between items-center flex-col md:flex-row">
        <h1 class="text-2xl font-semibold sm:text-3xl pt-4">Our Blog and Latest News</h1>
        <div class="hidden md:block">
            <label for="sort-date" class="text-slate-500 text-lg block">Filter by Date:</label>
            <select id="sort-date" class="w-60 h-10 rounded-md border-2 border-[#0060a3]">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </div>
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
