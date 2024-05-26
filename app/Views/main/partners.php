<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>


<div class="load"></div>

<section class="py-20 md:py-20 px-4 md:px-10">
    <div class="">
        <h1 class="text-4xl pr-6 sm:leading-snug tracking-tight font-bold text-black">
            Our Corporate and Insurance Partners.
        </h1>
        <p class="mt-4 text-[#0060a3] text-xl font-medium">
            With our corporate partners, we fight hard to get you covered.
        </p>
    </div>
    <div class="pt-16 owl-carousel owl-theme owl-loaded owl-drag partners-slider">
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://th.bing.com/th/id/OIP.UsSAC1eW3s25oVib6un_qwHaEs?rs=1&pid=ImgDetMain" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://www.memorialkenya.com/wp-content/uploads/2020/06/Madison-Insurance-Company-Kenya.png" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://i2.wp.com/kenyanwallstreet.com/wp-content/uploads/2017/02/Screen-shot-2017-02-02-at-7.40.47-PM.png?fit=711%2C397" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://th.bing.com/th/id/OIP.b0Xmi4gtpIm48_Jc9tV3UQHaDt?rs=1&pid=ImgDetMain" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://www.zse.co.zw/wp-content/uploads/2019/03/old-mutual-55.png" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://assets-global.website-files.com/6038c1030be2580db46ccf46/6064e1fc87ab3dda4bf92b4d_CO-OP%20BANK%20SQUARE.jpg" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://sokodirectory.com/wp-content/uploads/2015/10/communications-authority-of-kenya.png" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://th.bing.com/th/id/OIP.JXyHarea8tc4vN_wi_W8cwHaDD?rs=1&pid=ImgDetMain" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://th.bing.com/th/id/OIP.fEZfVzpkjNB73bZCorHCxQAAAA?rs=1&pid=ImgDetMain" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://th.bing.com/th/id/OIP.eY_SO5EB-_c9mA_KWroWhgHaFj?rs=1&pid=ImgDetMain" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://kenyanwallstreet.com/wp-content/uploads/2019/12/cic.png" class="w-full h-full">
        </div>
        <div class="border border-[#ac8342] rounded-2xl p-5 w-full md:w-72 h-56 flex items-center cursor-pointer">
            <img src="https://th.bing.com/th/id/OIP.eY_SO5EB-_c9mA_KWroWhgHaFj?rs=1&pid=ImgDetMain" class="w-full h-full">
        </div>
    </div>
</section>


<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection(); ?>
<?= $this->section('partners-section-script'); ?>
<script>
    $(document).ready(function () {
        // owl-carousel
        $('.partners-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    });
</script>
<?= $this->endSection(); ?>