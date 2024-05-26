<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>

<?= $this->include('partials/small-nav.php'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\OffersCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>


<?= view_cell('App\Cells\SliderSectionCell::display') ?>
<?= view_cell('App\Cells\AboutUsCell::display') ?>
<?= view_cell('App\Cells\ChooseTherapySectionCell::display') ?>
<?= view_cell('App\Cells\TreatmentSectionCell::display') ?>
<?= view_cell('App\Cells\HowItWorksCell::display') ?>

<?= view_cell('App\Cells\YoutubeSectionCell::display') ?>
<?= view_cell('App\Cells\WellnessSectionCell::display') ?>
<?= view_cell('App\Cells\GiftTherapyCell::display') ?>
<?= view_cell('App\Cells\NewsCell::display') ?>
<?= view_cell('App\Cells\PartnersSectionCell::display') ?>
<?= view_cell('App\Cells\BookSectionCell::display') ?>
<?= view_cell('App\Cells\FeedbackSectionCell::display') ?> 


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
<?= $this->section('home-custom-script'); ?>
    <script>

        $(document).ready(function () {

            AOS.init();

        })

    </script>
<?= $this->endSection(); ?>