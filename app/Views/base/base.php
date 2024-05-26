<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chiromo Hospital Group - Recovering in Dignity</title>
    <meta name="description" content="Chiromo hospital group a legacy for mental health care">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">

    <meta name="google-site-verification" content="IjF8yOEQPQGQq8NoemIim2A08pMaubh_FF4yfS7bT-8" />

    <link rel="icon" type="image/ico" href="<?= base_url('favicon.ico') ?>">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/buttons.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/flatpickr.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/quill.snow.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/dark.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/app.css'); ?>">
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">

    <!-- Alpine.js -->


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3QF8WT70PD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3QF8WT70PD');
    </script>


</head>
<body class="antialiased bg-white font-sans text-gray-900 relative">
<main class="w-full">

    <?= $this->renderSection('content') ?>


    <!-- Toast Success -->

    <div id="toast-success"
         class="hidden fixed bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
         role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                 viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal" id="toast-success-content"></div>
        <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>

    <!--Toast Danger-->

    <div id="toast-danger"
         class="hidden fixed bottom-5 right-5 flex items-center w-full z-50 max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
         role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                 viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
            </svg>
            <span class="sr-only">Error icon</span>
        </div>
        <div class="ml-3 text-sm font-normal" id="toast-danger-content"></div>
        <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-danger" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>


    <div id="toast-default"
         class="flex hidden items-center w-full max-w-xs p-4 text-gray-500 z-50 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
         role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15.147 15.085a7.159 7.159 0 0 1-6.189 3.307A6.713 6.713 0 0 1 3.1 15.444c-2.679-4.513.287-8.737.888-9.548A4.373 4.373 0 0 0 5 1.608c1.287.953 6.445 3.218 5.537 10.5 1.5-1.122 2.706-3.01 2.853-6.14 1.433 1.049 3.993 5.395 1.757 9.117Z"/>
            </svg>
            <span class="sr-only">Fire icon</span>
        </div>
        <div class="ml-3 text-sm font-normal" id="toast-default-content"></div>
        <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-default" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>


</main>

<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="<?= base_url('js/jquery-3.6.3.min.js') ?>"></script>
<script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('js/flowbite.js') ?>"></script>
<script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('js/fullCalender.min.js') ?>"></script>
<script src="<?= base_url('js/flatpickr.js') ?>"></script>
<script src="<?= base_url('js/quill.js') ?>"></script>
<script src="<?= base_url('js/iframe_api.js') ?>"></script>
<script src="<?= base_url('js/dataTables.rowReorder.min.js') ?>"></script>
<script src="<?= base_url('js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('js/dataTables.select.min.js') ?>"></script>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

<?= $this->renderSection('home-custom-script') ?>
<?= $this->renderSection('signup-content-script') ?>
<?= $this->renderSection('online-therapy-script') ?>
<?= $this->renderSection('about-section-script') ?>
<?= $this->renderSection('patient-dashboard-script') ?>
<?= $this->renderSection('patient-appointment-script') ?>
<?= $this->renderSection('patient-prescription-script') ?>
<?= $this->renderSection('patient-payment-script') ?>
<?= $this->renderSection('my-appointments-script') ?>
<?= $this->renderSection('patient-settings-script') ?>
<?= $this->renderSection('login-content-script') ?>
<?= $this->renderSection('appointment-booking-script') ?>
<?= $this->renderSection('navbar-section-script') ?>
<?= $this->renderSection('bookings-patient-details-script') ?>
<?= $this->renderSection('review-and-pay') ?>
<?= $this->renderSection('cookies-section-script') ?>
<?= $this->renderSection('slider-section-script') ?>
<?= $this->renderSection('offers-section-script') ?>
<?= $this->renderSection('youtube-section-script') ?>
<?= $this->renderSection('treatments-section-script') ?>
<?= $this->renderSection('feedback-section-script') ?>
<?= $this->renderSection('partners-section-script') ?>

<script>
    //loading

    window.addEventListener('load', function(){
        const loader = document.querySelector('.load');
        loader.classList.add('load-hidden');

        loader.addEventListener('transitionend', function(){
            loader.classList.remove("load");
        })
    })


    window.addEventListener('load', function(){
        const loader = document.querySelector('.spinner');
        loader.classList.add('load-hidden');

        loader.addEventListener('transitionend', function(){
            loader.classList.remove("spinner");
        })
    })
</script>
</body>
</html>
