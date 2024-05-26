 <!-- start hero -->
 <section class="cover overflow-hidden mx-5 mt-2 flex items-center">
    
    <div class="owl-carousel owl-theme owl-loaded owl-drag slider">


        <?php if (isset($carousel)): ?>
        <?php foreach ($carousel as $item): ?>

                <div class="pb-64 md:pb-[500px] relative bg-gradient-to-tl from-[#0060a3] to-[#ac8342]">
                    <img src="<?= base_url('uploads/carousel/' . $item['carousel_image']) ?>" alt="" class="w-full h-full object-contain md:object-fill top-0 absolute mix-blend-overlay transition duration-500 ease-in-out">
                    <div class="absolute top-[70px] left-[20px] md:absolute md:top-[100px] md:left-[50px] lg:top-[120px] lg:left-[70px] w-full h-full">
                        <?php if(!empty($item['carousel_title'])): ?>
                            <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-snug">
                                <?= $item['carousel_title'] ?>
                            </h1>
                        <?php endif; ?>
                        <?php if(!empty($item['carousel_description'])): ?>
                            <p class="text-white text-xl md:text-2xl leading-snug pt-5">
                                <?= $item['carousel_description'] ?>
                            </p>
                        <?php endif; ?>
                        <?php if(!empty($item['carousel_tag'])) : ?>
                            <p class="text-[#0060a3] text-md md:text-xl leading-snug pt-10 font-semibold">
                                <span><i class="uil uil-check-circle mr-2"></i></span>
                                <?= $item['carousel_tag'] ?>
                            </p>
                        <?php endif; ?>
                        <?php if(!empty($item['carousel_has_button']) && $item['carousel_has_button'] == 1): ?>
                            <span class="">
                             <a href="<?= base_url('book-appointment') ?>"
                             class="px-8 py-3 text-white rounded inline-block mt-8 font-semibold bg-[#0060a3] transition-all duration-500 transform hover:scale-90">Book
                             Appointment <i class="uil uil-arrow-right"></i>
                             </a>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>

        <?php endforeach; ?>
        <?php endif; ?>


    </div>
</section>

<!-- end hero -->
<?php $this->section('slider-section-script') ?>
<script>

    $(document).ready(function(){

        //owl carousel for the patient dashboard
        $('.slider').owlCarousel({
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    nav: false,
                    dots: false,
                    lazyLoad:true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        1024: {
                            items: 1
                        },
                        1280: {
                            items: 1
                        }
                    }
                });
    });
</script>
<?php $this->endSection(); ?>