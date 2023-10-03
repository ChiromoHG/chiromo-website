<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('Modules\Admin\Views\includes\sidebar.php') ?>
<?= $this->include('Modules\Admin\Views\partials\manage-assessments-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('manage-assessment-content-script') ?>
<script>
    $(document).ready(function () {
        $('#manage-users-table').DataTable();
    });
</script>
<?= $this->endSection() ?>
