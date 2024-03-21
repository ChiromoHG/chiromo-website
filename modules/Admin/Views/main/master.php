<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>


<?= $this->include('Modules\Admin\Views\partials\master-content.php') ?>

<?= $this->endSection() ?>
