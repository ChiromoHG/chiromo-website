<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?= view_cell('Modules\Admin\Cells\SideBarCell::display') ?>


<?= $this->include('Modules\Admin\Views\partials\patients-history-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('patients-history-content-script') ?>
    <script>
    </script>
<?= $this->endSection() ?>