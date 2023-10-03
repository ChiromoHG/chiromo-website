
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-96 md:h-128 overflow-hidden rounded-lg">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= base_url('images/carousel/image.JFIF') ?>"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-60"
                 alt="...">
            <div class="absolute inset-0 flex items-center start ml-20">
                <div class="bg-gray-800 bg-opacity-70 p-4 rounded-lg">
                    <h2 class="text-white text-lg font-semibold text-2xl">Our Online Therapy is Here</h2>
                    <p class="text-gray-300 pt-3 text-xl">Achieve Your Potential With Our Online Therapy</p>
                    <div class="pt-10 pb-3">
                        <a href=""
                           class="border border-1 border-yellow-500 text-black font-normal py-3 px-6 rounded-md hover:bg-yellow-600 transition-colors">GET
                            STARTED</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= base_url('images/carousel/image1.JPG') ?>"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-60"
                 alt="...">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-gray-800 bg-opacity-70 p-4 rounded-lg">
                    <h2 class="text-white text-2xl font-semibold text-center">Chiromo Hospital Group</h2>
                    <p class="text-gray-300 text-center text-xl">Recovery in Dignity</p>
                    <div class="pt-10 pb-3 flex ">
                        <a href=""
                           class="border border-1 border-yellow-500 text-black font-normal py-3 px-6 rounded-md hover:bg-yellow-600 transition-colors mr-2">ABOUT
                            US</a>
                        <a href=""
                           class="border border-1 border-yellow-500 text-black font-normal py-3 px-6 rounded-md hover:bg-yellow-600 transition-colors">OUR
                            SERVICES</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= base_url('images/carousel/image2.JPG') ?>"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-60"
                 alt="...">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-gray-800 bg-opacity-70 p-4 rounded-lg">
                    <h2 class="text-white text-lg font-semibold">Item 1 Title</h2>
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= base_url('images/carousel/image3.JFIF') ?>"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-60"
                 alt="...">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-gray-800 bg-opacity-70 p-4 rounded-lg">
                    <h2 class="text-white text-lg font-semibold">Item 1 Title</h2>
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<div class="bg-slate-50 flex justify-center px-10">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>


            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>


        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>