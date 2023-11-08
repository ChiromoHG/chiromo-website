<?= $this->extend('base/base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('partials/navbar.php'); ?>

<main class="grid md:grid-cols-3 gap-6 md:gap-10 mx-8 lg:mx-10 my-8 lg-my-10">
    <div class="grid md:col-span-1 h-96">
        <?= $this->include('partials/dashboard-side-bar.php'); ?>
    </div>
    <div class="grid md:col-span-2">
        <?= $this->include('partials/patient-appointment-content.php'); ?>
    </div>
</main>

<?= $this->endSection() ?>
<?= $this->section('patient-appointment-script') ?>
<script>
    $(document).ready(function(){
        const wrapper = document.querySelector('.wrapper'),
        selectInput = wrapper.querySelector('.select-input');

        selectInput.addEventListener('click', function(){
            wrapper.classList.toggle('active');
        });

        const wrapperTime = document.querySelector('.wrapper-time'),
            selectTime = wrapperTime.querySelector('.select-time');

        selectTime.addEventListener('click', function(){
            wrapperTime.classList.toggle('active');
        });
    })
</script>
<?= $this->endSection() ?>
