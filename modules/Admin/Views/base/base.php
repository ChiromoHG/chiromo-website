<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chiromo admin - Recovering in Dignity</title>
    <link rel="icon" type="image/ico" href="<?= base_url('favicon.ico') ?>">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/buttons.dataTables.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('css/rowReorder.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/responsive.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/select.dataTables.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('css/flatpickr.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url("css/app.css") ?>">
    <link rel="stylesheet" href="<?= base_url("css/admin.css") ?>">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
    <!-- Alpine.js -->

</head>
<body>

<?= $this->renderSection('content') ?>



<!--flowbite toast for displaying alerts-->
<div id="toast-success" class="hidden fixed bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal" id="toast-success-content">Item moved successfully.</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>


<div id="toast-danger" class="hidden fixed bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
        </svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ml-3 text-sm font-normal" id="toast-danger-content">Item has been deleted.</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>

<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="<?= base_url('js/jquery-3.6.3.min.js')?>"></script>
<script src="<?= base_url('js/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('js/jszip.min.js')?>"></script>
<script src="<?= base_url('js/pdfmake.min.js')?>"></script>
<script src="<?= base_url('js/vfs_fonts.js')?>"></script>
<script src="<?= base_url('js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('js/buttons.print.min.js')?>"></script>

<script src="<?= base_url('js/dataTables.rowReorder.min.js')?>"></script>
<script src="<?= base_url('js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('js/dataTables.select.min.js')?>"></script>
<script src="<?= base_url('js/chart.min.js')?>"></script>
<script src="<?= base_url('js/anime.min.js')?>"></script>
<script src="<?= base_url('js/flatpickr.js')?>"></script>

<script type="text/javascript" src="<?= base_url("js/app.js") ?>"></script>
<script type="text/javascript" src="<?= base_url("js/admin.js") ?>"></script>
<?php $this->renderSection('manage-users-content-script'); ?>
<?php $this->renderSection('edit-user-content-script'); ?>
<?php $this->renderSection('edit-role-content-script'); ?>
<?php $this->renderSection('dashboard-content-script'); ?>
<?php $this->renderSection('profile-content-script'); ?>
<?php $this->renderSection('login-content-script'); ?>
<?php $this->renderSection('psychologist-content-script'); ?>
<?php $this->renderSection('appointments-content-script'); ?>
<?php $this->renderSection('patients-content-script'); ?>
<?php $this->renderSection('patients-patient-content-script'); ?>
<?php $this->renderSection('patients-history-content-script'); ?>
<?php $this->renderSection('patients-patient-examination-content-script'); ?>
<?php $this->renderSection('patients-patient-diagnosis-content-script'); ?>
<?php $this->renderSection('patients-patient-services-content-script'); ?>
<?php $this->renderSection('patients-patient-prescription-content-script'); ?>
<?php $this->renderSection('patients-patient-consultation-content-script'); ?>
<?php $this->renderSection('patients-patient-bill-content-script'); ?>
<?php $this->renderSection('patients-patient-referral-content-script'); ?>
<?php $this->renderSection('patients-patient-checkout-content-script'); ?>
<?php $this->renderSection('roles-content-script'); ?>
<?php $this->renderSection('assessments-group-content-script'); ?>
<?php $this->renderSection('assessments-answers-content-script'); ?>
<?php $this->renderSection('departments-content-script'); ?>
<?php $this->renderSection('services-content-script'); ?>
<?php $this->renderSection('create-carousel-content-script'); ?>
<?php $this->renderSection('create-job-content-script'); ?>
<?php $this->renderSection('create-offer-content-script'); ?>
<script>

    $(document).ready(function (){
        const body = document.querySelector('body'),
            modeToggle = body.querySelector('.mode-toggle');
        let sidebar = body.querySelector("nav");
        let sidebarToggle = body.querySelector('.sidebar-toggle')

        const date = document.getElementById('date');


        let mode = localStorage.getItem('mode');
        if(mode && mode === "dark"){
            body.classList.toggle("dark");
        }

        let getStatus = localStorage.getItem('status');
        if(getStatus && getStatus === "close"){
            sidebar.classList.toggle('close');
        }

        modeToggle.addEventListener('click', function(){
            body.classList.toggle('dark')
            if(body.classList.contains('dark')){
                localStorage.setItem('mode', 'dark')
            }else{
                localStorage.setItem('mode', 'light')
            }
        });

        sidebarToggle.addEventListener('click', function(){
            sidebar.classList.toggle('close');
            if(sidebar.classList.contains('close')){
                localStorage.setItem('status', 'close')
            }else{
                localStorage.setItem('status', 'open')
            }
        })


    })
</script>
</body>
</html>