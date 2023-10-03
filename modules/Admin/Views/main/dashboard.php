<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('Modules\Admin\Views\includes\sidebar.php') ?>
<?= $this->include('Modules\Admin\Views\partials\dashboard-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('dashboard-content-script') ?>
    <script>
        function updateTime(){
            date.innerText = moment().format('MMMM Do YYYY, h:mm:ss a');
        }
        setInterval(updateTime, 1000);
    </script>
<?= $this->endSection() ?>