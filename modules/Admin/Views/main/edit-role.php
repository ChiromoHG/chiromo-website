<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('Modules\Admin\Views\includes\sidebar.php') ?>
<?= $this->include('Modules\Admin\Views\partials\edit-role-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('edit-role-content-script') ?>
    <script>
        console.log('edit-role-content-script');
    </script>
<?= $this->endSection() ?>