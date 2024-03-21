<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\edit-role-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('edit-role-content-script') ?>
    <script>
        console.log('edit-role-content-script');
    </script>
<?= $this->endSection() ?>