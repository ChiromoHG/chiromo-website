<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>


<?= $this->include('Modules\Admin\Views\partials\dashboard-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('dashboard-content-script') ?>
    <script>
        $(document).ready(function () {
            function updateTime(){
                date.innerText = moment().format('MMMM Do YYYY, h:mm:ss a');
            }
            setInterval(updateTime, 1000);
        });
    </script>
<?= $this->endSection() ?>