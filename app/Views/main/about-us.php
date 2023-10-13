<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= $this->include('partials/navbar.php'); ?>

<section class="mx-5 my-5">
    <div class="about-us">
        <div class="flex flex-col h-[60vh] justify-center items-center">
            <h1 class="text-3xl font-bold pb-[2rem] text-white">About Chiromo Hospital Group</h1>

            <div class="flex items-center text-white text-sm">
                <a href="<?= base_url('/') ?>" class="hover:text-gray-400">Home</a>
                <i class="uil uil-angle-right-b"></i>
                <a href="<?= base_url('about-us') ?>" class="hover:text-gray-400">About Us</a>
            </div>
        </div>
    </div>
</section>

<section class="my-5 px-10">
    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-8 my-10">
            <div class="about-us-text">
                <h1>
                    <span>
                    Chiromo Hospital Group,
                    </span>
                    The leading private psychiatric
                    service provider in Sub Sahara Africa.
                </h1>
            </div>
            <div class="pt-10 md:pt-5">
                <p class="text-lg text-slate-600">
                    Our group of psychiatric facilities have been in operation since 1997.
                    We provide quality in and out patient services to individuals from all walks of life.
                </p>
            </div>
            <div class="py-5 flex space-x-4 owl-carousel owl-theme owl-loaded owl-drag">
                <div class="bg-gray-50 rounded-md p-4 flex-1 min-w-0 h-[10rem] flex space-x-5">
                    <span class="w-[3rem] h-[3rem] bg-white rounded-full grid place-items-center shadow-md">
                        <i class="uil uil-minus-path text-[2rem] text-[#0060a3]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#0060a3] font-semibold text-lg pb-2">Our Vision</h3>
                        <span>To provide dignified, quality mental healthcare in Africa</span>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-md p-5 flex-1 min-w-0 h-[10rem] flex space-x-5">
                     <span class="bg-white w-[6rem] h-[3rem] rounded-full grid place-items-center shadow-md">
                        <i class="uil uil-minus-path text-[2rem] text-[#0060a3]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#0060a3] font-semibold text-lg pb-2">Our Mission</h3>
                        <span>
                         To pursue excellence in the delivery of mental health
                         services by adhering to evidence-based practices.
                        </span>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-md p-5 flex-1 min-w-0 h-[10rem] flex space-x-5">
                    <span class="w-[3rem] h-[3rem] bg-white rounded-full grid place-items-center shadow-md">
                        <i class="uil uil-minus-path text-[2rem] text-[#0060a3]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#0060a3] font-semibold text-lg pb-2">Our Core Values</h3>
                        <span>
                       Respect, Honesty, Innovation, Reliability
                    </span>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-md p-5 flex-1 min-w-0 h-[10rem] flex space-x-5">
                    <span class="w-[3rem] h-[3rem] bg-white rounded-full grid place-items-center shadow-md">
                        <i class="uil uil-minus-path text-[2rem] text-[#0060a3]"></i>
                    </span>
                    <div>
                        <h3 class="text-[#0060a3] font-semibold text-lg pb-2">Our Corporate Tagline</h3>
                        <span>
                        Recovery in dignity.
                    </span>
                    </div>
                </div>
            </div>

            <div class="border border-[#ac8342] rounded-lg py-[2rem] px-[2rem]">
                <div class="flex justify-between items-center">
                    <div>
                        <h4 class="text-xl text-black font-semibold">Call us 24/7 on</h4>
                        <span class="inline-block pt-5 text-md text-[#ac8342]"><i class="uil uil-incoming-call"></i> 0800 220 000</span>
                    </div>
                    <div>
                        <div class="border border-[#ac8342] rounded-full w-[8rem] h-[8rem] grid place-items-center p-5">
                            <h4 class="text-[1.2rem] font-semibold text-[#ac8342] relative">9650 <span class="absolute -top-3 -right-3">+</span></h4>
                            <span class="text-[12px] font-semibold text-[#ac8342]">clients trust us</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-span-12 md:col-span-4">

            <div class="container mx-auto">
                <div class="max-w-md mx-auto my-10 bg-gray-100 dark:bg-gray-800 p-5 rounded-lg shadow-md">
                    <div class="text-center mt-5">
                        <p class="text-gray-600 text-lg font-semibold dark:text-gray-400">Fill up the form below to
                            request a callback.</p>
                    </div>
                    <div class="m-7">
                        <form action="https://api.web3forms.com/submit" method="POST" id="form">

                            <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">
                            <input type="hidden" name="subject" value="New Submission from Web3Forms">
                            <input type="checkbox" name="botcheck" id="" style="display: none;">


                            <div class="mb-6">
                                <label for="name"
                                       class="block mb-2 text-md font-semibold text-gray-600 dark:text-gray-400">Full
                                    Name</label>
                                <input type="text" name="name" id="name" placeholder="John Doe" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block text-md font-semibold text-gray-600 dark:text-gray-400">Email
                                    Address</label>
                                <input type="email" name="email" id="email" placeholder="you@company.com" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                            </div>
                            <div class="mb-6">

                                <label for="phone" class="text-md font-semibold text-gray-600 dark:text-gray-400">Phone
                                    Number</label>
                                <input type="text" name="phone" id="phone" placeholder="+254 71234-567" required
                                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                            </div>
                            <div class="mb-6">
                                <label for="message"
                                       class="block mb-2 text-md font-semibold text-gray-600 dark:text-gray-400">Your
                                    Message</label>

                                <textarea rows="3" name="message" id="message" placeholder="Your Message"
                                          class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                          required></textarea>
                            </div>
                            <div class="mb-6">
                                <button type="submit"
                                        class="w-full px-3 py-3 text-white text-xl font-semibold bg-[#0060a3] rounded-md focus:bg-indigo-600 focus:outline-none">
                                    Send Message
                                </button>
                            </div>
                            <p class="text-base text-center text-gray-400" id="result">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="my-5 px-10">
    <h1 class="text-2xl text-[#0060a3] pb-8 font-semibold">Our Services</h1>
    <div class="flex items-center justify-center">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-gray-50 rounded-[30px] overflow-hidden mb-10 h-[32rem]">
                        <div class="services-img--burnout">

                        </div>
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    Burnout
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">Burnout - Are you at a risk of burning out?</a>
                            </p>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-gray-50 rounded-[30px] overflow-hidden mb-10 h-[32rem]">
                        <div class="services-img--anxiety">

                        </div>
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    Anxiety
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">BAI - Have you been feeling anxious recently?</a>
                            </p>
                            <a href="" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-gray-50 rounded-[30px] overflow-hidden mb-10 h-[32rem]">
                        <div class="services-img--depression">

                        </div>
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    Depression
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">PHQ-9 - Have you been feeling depressed lately?</a>
                            </p>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-gray-50 rounded-[30px] overflow-hidden mb-10 h-[32rem]">
                        <div class="services-img--ptsd">

                        </div>
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    PTSD (PCL-5)
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">PCL-5 - Have you been through a traumatic event?</a>
                            </p>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-gray-50 rounded-[30px] overflow-hidden mb-10 h-[32rem]">
                        <div class="services-img--suicide">

                        </div>
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    The Beck's Suicidality Scale (BSS)
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">PCL-5 - Have you been through a traumatic event?</a>
                            </p>
                            <a href="#" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-gray-50 rounded-[30px] overflow-hidden mb-10 h-[32rem]">
                        <div class="services-img--alcohol">

                        </div>
                        <div class="p-8 sm:p-9 md:p-7 xl:p-6 text-center">
                            <h3>
                                <a href="#" class="font-semibold text-slate-600 text-[20px] sm:text-[22px] md:text-[20px] lg:text-[20px] xl:text-[22px] 2xl:text-[22px] mb-6 block hover:text-[#0060a3]">
                                    The Alcohol
                                </a>
                            </h3>
                            <p class="text-base text-[#0060a3] leading-relaxed mb-9 text-[20px] sm:text-[18px] md:text[18px] xl:text-['30px']">
                                <a href="#">Audit - Check on your alcohol consumption</a>
                            </p>
                            <a href="<?= base_url('gift-member/choose-packages')?>" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>


            </div>
    </div>

</section>

<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection(); ?>
<?= $this->section('about-section-script'); ?>
<script>
    $(document).ready(function () {
        const form = document.getElementById('form');
        const result = document.getElementById('result');

        form.addEventListener('submit', function (e) {
            const formData = new FormData(form);
            e.preventDefault();
            var object = {};
            formData.forEach((value, key) => {
                object[key] = value
            });
            var json = JSON.stringify(object);
            result.innerHTML = "Please wait..."

            fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: json
            })
                .then(async (response) => {
                    let json = await response.json();
                    if (response.status == 200) {
                        result.innerHTML = json.message;
                        result.classList.remove('text-gray-500');
                        result.classList.add('text-green-500');
                    } else {
                        console.log(response);
                        result.innerHTML = json.message;
                        result.classList.remove('text-gray-500');
                        result.classList.add('text-red-500');
                    }
                })
                .catch(error => {
                    console.log(error);
                    result.innerHTML = "Something went wrong!";
                })
                .then(function () {
                    form.reset();
                    setTimeout(() => {
                        result.style.display = "none";
                    }, 5000);
                });
        })


        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
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
                    items: 2
                }
            }
        })



    });
</script>
<?= $this->endSection(); ?>
