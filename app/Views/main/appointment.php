<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>


<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex-shrink-0">
                <!-- Replace this with your logo -->
                <img class="h-12 w-auto" src="<?= base_url('images/logo/chg-logo-1.png')?>" alt="Logo">
            </div>
        </div>
    </div>
</nav>



<!-- SVG for the curved shape -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute mt-0 left-0">
    <path fill="#f3f4f5" fill-opacity="1" d="M0,96L0,192L49.7,192L49.7,256L99.3,256L99.3,96L149,96L149,32L198.6,32L198.6,224L248.3,224L248.3,192L297.9,192L297.9,96L347.6,96L347.6,64L397.2,64L397.2,224L446.9,224L446.9,192L496.6,192L496.6,96L546.2,96L546.2,64L595.9,64L595.9,288L645.5,288L645.5,256L695.2,256L695.2,160L744.8,160L744.8,96L794.5,96L794.5,224L844.1,224L844.1,192L893.8,192L893.8,256L943.4,256L943.4,192L993.1,192L993.1,192L1042.8,192L1042.8,160L1092.4,160L1092.4,224L1142.1,224L1142.1,256L1191.7,256L1191.7,256L1241.4,256L1241.4,256L1291,256L1291,192L1340.7,192L1340.7,288L1390.3,288L1390.3,64L1440,64L1440,0L1390.3,0L1390.3,0L1340.7,0L1340.7,0L1291,0L1291,0L1241.4,0L1241.4,0L1191.7,0L1191.7,0L1142.1,0L1142.1,0L1092.4,0L1092.4,0L1042.8,0L1042.8,0L993.1,0L993.1,0L943.4,0L943.4,0L893.8,0L893.8,0L844.1,0L844.1,0L794.5,0L794.5,0L744.8,0L744.8,0L695.2,0L695.2,0L645.5,0L645.5,0L595.9,0L595.9,0L546.2,0L546.2,0L496.6,0L496.6,0L446.9,0L446.9,0L397.2,0L397.2,0L347.6,0L347.6,0L297.9,0L297.9,0L248.3,0L248.3,0L198.6,0L198.6,0L149,0L149,0L99.3,0L99.3,0L49.7,0L49.7,0L0,0L0,0Z">
    </path>
</svg>

<div class="relative mt-20">
    <!-- Content with margin 0 -->
    <div class="text-center mt-0">
        <h1 class="text-3xl font-bold mb-4 custom-text">What type of service are you looking for?</h1>
        <p class="text-lg">Chiromo offers comprehensive treatment plans to meet all your mental health needs.</p>
    </div>
</div>





<div class="flex flex-wrap justify-center pt-20 relative">
    <!-- Card 1 -->

    <div class="max-w-sm p-3 bg-green-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-2">
        <a href="<?= base_url('book-appointment/online-therapy')?>">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Beck’s Suicidality Scale</h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">On-going support from a licensed therapist.</p>
        <a href="<?= base_url('book-appointment/online-therapy')?>" class="inline-flex items-center text-blue-600 hover:underline">
            Continue to Assessment
            <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
            </svg>
        </a>
    </div>



    <div class="max-w-sm p-3 bg-blue-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-2">
        <a href="<?= base_url('book-appointment/online-therapy')?>">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">PTSD</h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">On-going support from a licensed therapist.</p>
        <a href="<?= base_url('book-appointment/online-therapy')?>" class="inline-flex items-center text-blue-600 hover:underline">
            Continue to Assessment
            <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
            </svg>
        </a>
    </div>


    <div class="max-w-sm p-3 bg-amber-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-2">
        <a href="<?= base_url('book-appointment/online-therapy')?>">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Anxiety</h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">On-going support from a licensed therapist.</p>
        <a href="<?= base_url('book-appointment/online-therapy')?>" class="inline-flex items-center text-blue-600 hover:underline">
            Continue to Assessment
            <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
            </svg>
        </a>
    </div>


    <div class="max-w-sm p-3 bg-blue-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-2 my-3">
        <a href="<?= base_url('book-appointment/online-therapy')?>">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Depression</h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">On-going support from a licensed therapist.</p>
        <a href="<?= base_url('book-appointment/online-therapy')?>" class="inline-flex items-center text-blue-600 hover:underline">
            Continue to Assessment
            <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
            </svg>
        </a>
    </div>


    <div class="max-w-sm p-3 bg-amber-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-2 my-3">
        <a href="<?= base_url('book-appointment/online-therapy')?>">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Burnout</h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">On-going support from a licensed therapist.</p>
        <a href="<?= base_url('book-appointment/online-therapy')?>" class="inline-flex items-center text-blue-600 hover:underline">
            Continue to Assessment
            <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
            </svg>
        </a>
    </div>

    <div class="max-w-sm p-3 bg-green-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-2 my-3">
        <a href="<?= base_url('book-appointment/online-therapy')?>">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Alcohol Use</h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">On-going support from a licensed therapist.</p>
        <a href="<?= base_url('book-appointment/online-therapy')?>" class="inline-flex items-center text-blue-600 hover:underline">
            Continue to Assessment
            <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
            </svg>
        </a>
    </div>

</div>

<?= $this->endSection(); ?>
