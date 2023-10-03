<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= $this->include('partials/navbar.php'); ?>

    <!-- start hero -->
        <section class="cover overflow-hidden mx-5 mt-5 flex items-center">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="h-full relative bg-cover bg-left-top" style="background-image: linear-gradient(to right bottom, rgba(127,161,190,0.75), rgba(0,96,163,0.77)), url('<?= base_url('images/carousel/cover.jpg')?>')">
                    <div class="h-[75vh]">
                        <div class="md:absolute md:top-[100px] md:left-[80px] lg:top-[120px] lg:left-[100px] lg:absolute lg:w-3/4 xl:w-2/4">
                            <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-snug">
                                Chiromo Hospital Group
                            </h1>
                            <p class="text-blue-100 text-xl md:text-2xl leading-snug pt-10">Welcome to Chiromo Hospital
                                Group
                                Online Therapy.
                            </p>
                            <p class="text-red-700 text-md md:text-xl leading-snug pt-10 font-semibold"><span><i
                                            class="uil uil-check-circle mr-2"></i></span>Recovery in Dignity</p>
                            <span class="">
                                <a href="<?= base_url('book-appointment') ?>"
                                   class="px-8 py-4 text-white rounded inline-block mt-8 font-semibold custom-bg transition-all duration-500 transform hover:scale-90">Book
                                    Appointment <i class="uil uil-arrow-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>



                <div class="h-full relative bg-cover bg-left-top" style="background-image: linear-gradient(to right bottom, rgba(127,161,190,0.75), rgba(0,96,163,0.77)), url('<?= base_url('images/carousel/cover-bg.jpg')?>')">
                    <div class="h-[75vh]">
                        <div class="md:absolute md:top-[180px] md:left-[80px] lg:top-[200px] lg:left-[100px] lg:absolute lg:w-3/4 xl:w-2/4">
                            <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-snug">Chiromo
                                Hospital Group
                            </h1>
                            <p class="text-blue-100 text-xl md:text-2xl leading-snug pt-10">Specialized in Mental Health
                                care
                                Exelence.
                            </p>
                            <a href="<?= base_url('book-appointment') ?>"
                               class="px-8 py-4 text-white rounded inline-block mt-8 font-semibold custom-bg transition-all duration-500 transform hover:scale-90">Lean More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    <!-- end hero -->

    <!-- start about -->
    <section class="relative px-4 py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-20">
        <div class="flex flex-col lg:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h2 class="text-3xl leading-tight font-bold mt-4 custom-text">Welcome to the Chiromo Mental Health care
                    Hospital.</h2>
                <p class="text-lg mt-4 font-semibold text-red-400"><span><i
                                class="uil uil-check-circle mr-2"></i>Recovery in Dignity</p>
                <p class="mt-2 leading-relaxed">

                    Founded over 25 years ago, Chiromo Hospital Group has established itself as a leading provider of
                    psychiatric services,
                    offering exceptional care and support to individuals facing mental health challenges. With a strong
                    commitment to
                    patient well-being and a team of dedicated professionals, Chiromo Hospital Group has become a
                    trusted name in the
                    field of mental healthcare.
                </p>
            </div>

            <div class="w-full lg:w-1/2 lg:px-8 mt-12 lg:mt-0">
                <div class="md:flex">
                    <div>
                        <div class="flex justify-center items-center">
                            <div class="w-16 h-16 rounded-full flex justify-center items-center custom-bg">
                                <i class="uil uil-stethoscope text-white text-5xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="md:ml-8 mt-4 md:mt-0">
                        <h4 class="text-xl font-bold leading-tight custom-text">Vast Specialized Treatments</h4>
                        <p class="mt-2 leading-relaxed">
                            Chiromo Hospital Group has come to be known as a leading treatment facility
                            that specializes in diagnosis, treatment and management of adults, adolescents and
                            children who suffer from a spectrum of mental health disorders.
                        </p>
                    </div>
                </div>

                <div class="md:flex mt-8">
                    <div>
                        <div class="flex justify-center items-center">
                            <div class="w-16 h-16 rounded-full flex justify-center items-center custom-bg">
                                <i class="uil uil-award-alt text-white text-5xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="md:ml-8 mt-4 md:mt-0">
                        <h4 class="text-xl font-bold leading-tight custom-text">Quality Healthcare Kenya Award 2022</h4>
                        <p class="mt-2 leading-relaxed">
                            The hospital is committed to promoting holistic mental wellness, preventing mental illness
                            and managing mental illnesses when they occur, as we ensure your Recovery in Dignity
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="inline-flex items-center justify-center w-full mt-10">
            <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                <span class="font-bold text-slate-500 text-3xl md:text-xl">How It Works</span>
            </div>
        </div>

        <div  class="inline-flex items-center justify-center w-full mt-8">
            <span class="font-bold text-2xl text-slate-500 nd:text-lg">Start your journey in just 4 steps</span>
        </div>

        <div class="md:flex md:flex-wrap mt-10 text-center md:-mx-4">
            <div class="md:w-1/2 md:px-4 lg:w-1/4">
                <div class="bg-white-600 rounded-lg border border-gray-300 p-4">
                    <img src="<?= base_url('images/icons/assesment.jfif')?>" alt="" class="h-20 mx-auto">

                    <h4 class="text-xl font-bold mt-4 custom-text">Take An Assessment</h4>
                    <p class="mt-1">Complete our 60-second online assessment.</p>
                </div>
            </div>


            <div class="md:w-1/2 md:px-4 mt-4 md:mt-0 lg:w-1/4">
                <div class="bg-white rounded-lg border border-gray-300 p-4">
                    <img src="<?= base_url('images/icons/assesement3.PNG')?>" alt="" class="h-20 mx-auto">

                    <h4 class="text-xl font-bold mt-4 custom-text">Find Your Therapist</h4>
                    <p class="mt-1">Connect with a therapist that fits your needs.</p>
                </div>
            </div>

            <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
                <div class="bg-white rounded-lg border border-gray-300 p-4">
                    <img src="<?= base_url('images/icons/assessment2.PNG')?>" alt="" class="h-20 mx-auto">

                    <h4 class="text-xl font-bold mt-4 custom-text">Pick level of support</h4>
                    <p class="mt-1">Choose the best plan for your therapy budget.</p>
                </div>
            </div>

            <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
                <div class="bg-white rounded-lg border border-gray-300 p-4">
                    <img src="<?= base_url('images/icons/assesment2.jfif')?>" alt="" class="h-20 mx-auto">

                    <h4 class="text-xl font-bold mt-4 custom-text">Start therapy</h4>
                    <p class="mt-1">Message your therapist and begin your journey today!</p>
                </div>
            </div>
        </div>
    </section>



    <div class="section-reason">
        <div class="left-container">
            <h3>Personalized care starts here</h3>
            <p>
                Chiromo Hospital Group is the most comprehensive and convenient way to take care of your
                mental health and wellness.
            </p>
            <div class="services">
                <div class="list">
                    <span><i class="uil uil-check"></i>Depression</span>
                    <span><i class="uil uil-check"></i>Anxiety & Stress</span>
                    <span><i class="uil uil-check"></i>Relationships</span>
                </div>

                <div class="list">
                    <span><i class="uil uil-check"></i>Trauma & grief</span>
                    <span><i class="uil uil-check"></i>Anger</span>
                    <span><i class="uil uil-check"></i>Sleep</span>
                </div>

                <div class="list">
                    <span><i class="uil uil-check"></i>Psychotherapy</span>
                    <span><i class="uil uil-check"></i>Art therapy</span>
                    <span><i class="uil uil-check"></i>Group therapy</span>
                </div>
            </div>
            <a href="<?= base_url('book-appointment') ?>" class="btn">Get Started</a>
        </div>
        <div class="main-container">
            <div class="icon">
                <div class="imgBx active" style="--i:1;" data-id="content1">
                    <img src="image.JFIF">
                </div>
                <div class="imgBx" style="--i:2;" data-id="content2">
                    <img src="image3.JFIF">
                </div>
                <div class="imgBx" style="--i:3;" data-id="content3">
                    <img src="image3.JFIF">
                </div>
                <div class="imgBx" style="--i:4;" data-id="content4">
                    <img src="image3.JFIF">
                </div>
                <div class="imgBx" style="--i:5;" data-id="content5">
                    <img src="image3.JFIF">
                </div>
                <div class="imgBx" style="--i:6;" data-id="content6">
                    <img src="image3.JFIF">
                </div>
                <div class="imgBx" style="--i:7;" data-id="content7">
                    <img src="image3.JFIF">
                </div>
                <div class="imgBx" style="--i:8;" data-id="content8">
                    <img src="image3.JFIF">
                </div>
            </div>
            <div class="content">
                <div class="contentBx active" id="content1">
                    <div class="card">
                        <div class="imgBx">
                            <img src="image.JFIF">
                        </div>
                        <div class="textBx">
                            <h2>Depression<br><span>Therapy</span></h2>
                        </div>
                    </div>
                </div>

                <div class="contentBx" id="content2">
                    <div class="card">
                        <div class="imgBx">
                            <img src="image3.JFIF">
                        </div>
                        <div class="textBx">
                            <h2>Beck’s Suicidality Scale<br><span>Therapy</span></h2>
                        </div>
                    </div>
                </div>

                <div class="contentBx" id="content3">
                    <div class="card">
                        <div class="imgBx">
                            <img src="image3.JFIF">
                        </div>
                        <div class="textBx">
                            <h2>PTSD<br><span>Therapy</span></h2>
                        </div>
                    </div>
                </div>

                <div class="contentBx" id="content4">
                    <div class="card">
                        <div class="imgBx">
                            <img src="image3.JFIF">
                        </div>
                        <div class="textBx">
                            <h2>Anxiety<br><span>Therapy</span></h2>
                        </div>
                    </div>
                </div>

                <div class="contentBx" id="content5">
                    <div class="card">
                        <div class="imgBx">
                            <img src="image3.JFIF">
                        </div>
                        <div class="textBx">
                            <h2>Burnout<br><span>Therapy</span></h2>
                        </div>
                    </div>
                </div>

                <div class="contentBx" id="content6">
                    <div class="card">
                        <div class="imgBx">
                            <img src="image3.JFIF">
                        </div>
                        <div class="textBx">
                            <h2>Alcohol Use<br><span>Therapy</span></h2>

                        </div>
                    </div>
                </div>

                <div class="contentBx" id="content7">
                    <div class="card">
                        <div class="imgBx">
                            <img src="image3.JFIF">
                        </div>
                        <div class="textBx">
                            <h2>Psychotherapy<br><span></span></h2>
                        </div>
                    </div>
                </div>

                <div class="contentBx" id="content8">
                    <div class="card">
                        <div class="imgBx">
                            <img src="image3.JFIF">
                        </div>
                        <div class="textBx">
                            <h2>Detoxification<br><span>Therapy</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="why-choose--chiromo h-screen md:flex md:justify-center md:items-center">
        <div class="grid sm:grid-cols-2 sm:gap-y-4 gap-x-4 px-10">
            <div class="h-full">
                <h3 class="text-white sm:text-5xl font-semibold">Why choose Chiromo Hospital Group?</h3>
                <h4 class="sm:pt-10 text-slate-600 sm:text-3xl font-medium">
                    We are always ready for every challenge. You can trust us.
                </h4>
                <p class="sm:pt-10 text-slate-600 sm:text-lg font-medium">
                    Our psychiatric facility and wellness centre have been in operation for 26 years,
                    providing quality in and out patient services to individuals from all walks of life.
                </p>
                <a href="<?= base_url('gift-member') ?>" class="px-10 py-4 mt-8 text-black rounded-[2.5rem] inline-block text-xl font-semibold bg-white border border-slate-300 hover:bg-slate-100 hover:border-transparent transition-all duration-500 transform hover:scale-110 hover:opacity-50">Lean More <i class="uil uil-arrow-right font-semibold"></i></a>
            </div>
            <div class="why-choose-img--container md:min-h-full">
                <div class="relative why-choose-img--content">
                    <img src="<?= base_url('images/carousel/image1.jpg')?>" alt="" class="reason-img reason-img1">
                    <img src="<?= base_url('images/carousel/image5.jpg')?>" alt="" class="reason-img reason-img2">
                    <img src="<?= base_url('images/carousel/image6.jpg')?>" alt="" class="reason-img reason-img3">
                </div>
            </div>
        </div>
    </section>

    <div class="flex flex-col md:flex-row py-20 px-16">
        <div class="w-full md:w-1/2">
            <div>
                <h3 class="text-5xl leading-relaxed"><span class="custom-text"> Give the gift</span> of a Mental Health Therapy</h3>
            </div>
            <div class="pt-10">
                <p class="leading-snug text-3xl">Therapy is one of the most meaningful gifts you can give to your friends and loved ones.</p>
            </div>
            <div class="pt-10">
                <a href="<?= base_url('gift-member') ?>" class="px-10 py-4 text-black rounded-[2.5rem] inline-block mt-8 text-2xl bg-white border border-slate-300 hover:bg-slate-100 hover:border-transparent transition-all duration-500 transform hover:scale-100 hover:opacity-50">Gift a Membership</a>

            </div>
        </div>

        <div class="w-full md:w-1/2 ml-52">
            <svg viewBox="0 0 600 600" width="500" height="500">
                <defs>
                    <clipPath id="mypath">
                        <path d="M279.6560599333917 57.48958433506854C219.69102799165992 102.76930464146508 67.94277257987608 289.83224333165055 98.18752355643858 336.51056517002945C128.43227453300108 383.18888700840836 401.15953385103495 382.83923567173844 461.1245657927667 337.55951536534195C521.0895977344985 292.27979505894547 488.2224661833917 111.51056517002952 457.9777152068292 64.83224333165057C427.7329642302667 18.153921493271667 339.62109187512345 12.209864028672058 279.6560599333917 57.48958433506854C219.69102799165992 102.76930464146508 67.94277257987608 289.83224333165055 98.18752355643858 336.51056517002945 " fill="hsl(340, 45%, 50%)" stroke-width="0" stroke="hsl(340, 45%, 30%)" transform="matrix(1.4554316627400874,0,0,1.4554316627400874,-131.69078941871908,-27.40547753418491)"></path>
                    </clipPath>
                </defs>
                <image class="svg-image" x="0" y="0" xlink:href="<?= base_url('images/logo/gift.JPG') ?>" />
            </svg>
        </div>
    </div>
    <div class="flex justify-between items-center py-10 px-16">
        <p class="text-lg leading-snug">
            If you are in a crisis or any other person may be in danger - don't use this site. <br><a href="" class="custom-text">These resources</a> can provide you with immediate help.
        </p>
        <div class="flex items-center">
            <span class="text-8xl"><i class="uil uil-shield-check secure-icon"></i></span>
            <div class="flex flex-col">
                <span class="text-xl">256-bit SSL</span>
                <span class="text-4xl text-slate-300 font-semibold">secure</span>
            </div>
        </div>
    </div>


    <!-- start cta -->
    <section
            class="relative bg-blue-teal-gradient px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left">
        <div class="md:flex md:items-center md:justify-center">
            <h2 class="text-xl font-bold text-white">Get in touch with us today! <br class="block md:hidden">Call us on:
                0800 220 000</h2>
            <a href="<?= base_url('book-appointment') ?>"
               class="px-8 py-4 bg-white rounded inline-block font-semibold md:ml-8 mt-4 md:mt-0 custom-text">Book
                Appointment
            </a>
        </div>
    </section>
    <!-- end cta -->


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
<?= $this->section('home-custom-script'); ?>
    <script>
        AOS.init();
        // the personalized section

        let imgBx = document.querySelectorAll('.imgBx');
        let contentBx = document.querySelectorAll('.contentBx');

        for (let i = 0; i < imgBx.length; i++) {
            imgBx[i].addEventListener('click', function() {
                for(let j = 0; j < contentBx.length; j++) {
                    contentBx[j].className = 'contentBx';
                }

                document.getElementById(this.dataset.id).className = 'contentBx active';

                for (let i=0; i < imgBx.length; i++) {
                    imgBx[i].className = 'imgBx';
                }

                this.className = 'imgBx active';
            })
        }
        // end of the section

        //nav section
        $(document).ready(function(){
            $(window).scroll(function(){
                if(this.scrollY > 400){
                    $('.nav').addClass("is-sticky");
                }else{
                    $('.nav').removeClass("is-sticky");
                }
            });
        })
        //end of the nav section

        //owl carousel
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            dots: false,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                items:1
                }
            }
        })

        //end of the owl carousel

    </script>
<?= $this->endSection(); ?>