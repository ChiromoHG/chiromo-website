<?= $this->extend('base/base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('partials/navbar.php'); ?>

<main class="grid md:grid-cols-3 gap-6 md:gap-10 mx-8 lg:mx-10 my-8 lg-my-10">
    <div class="grid md:col-span-1 h-96">
        <?= $this->include('partials/dashboard-side-bar.php'); ?>
    </div>
    <div class="grid md:col-span-2">
        <?= $this->include('partials/patient-payment-content.php'); ?>
    </div>
</main>

<?= $this->endSection() ?>
<?= $this->section('patient-payment-script') ?>
<script>
    $(document).ready(function(){
        console.log('working')
    })
</script>
<?= $this->endSection() ?>
