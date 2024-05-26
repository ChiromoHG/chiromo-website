 <!-- treatments -->
 <section class="bg-[#e8e8e8] px-4 xl:px-5 2xl:px-5 pt-32 pb-20 -mt-10">
        <div class="grid md:grid-cols-12 gap-20 md:px-10">
            <div class="grid md:col-span-7">
                <div>
                    <h2 class="text-xs font-bold text-gray-500">Our Treatments</h2>
                    <h1 class="text-xl md:text-3xl leading-relaxed font-bold welcome-custom-text pt-10">We Specialize in the Following Psychiatric Services</h1>
                    <h2 class="text-sm text-gray-500 pt-8 leading-relaxed">
                        At Chiromo Hospital Group, we adopt a holistic approach to mental health, addressing the 
                        interconnected facets of mind, body, and spirit. Our team of seasoned professionals specializes 
                        in individual, couple, teen, and corporate therapy, employing evidence-based methodologies to 
                        facilitate effective healing and sustainable well-being.
                    </h2>

                    <h2 class="text-sm text-gray-500 pt-2 leading-relaxed">
                        Over the years of unwavering commitment to mental health care, we boasts a legacy of success in 
                        supporting individuals through diverse mental health challenges. Our compassionate and qualified 
                        professionals are dedicated to providing unparalleled care within a nurturing and safe environment.
                    </h2>
                </div>
                <div class="pt-4">
                        <a href="<?= base_url('treatments') ?>"
                            class="w-full sm:w-auto text-center md:px-6 py-2 text-white rounded-[2.5rem] inline-block text-md font-semibold bg-[#0060a3] hover:bg-[#ac8342] hover:border-transparent transition-all duration-500 transform hover:scale-75 md:hover:scale-110 hover:opacity-50">
                                Learn More
                                <i class="uil uil-arrow-right font-semibold"></i>
                        </a>
                </div>
            </div>
            <div class="grid md:col-span-5 overflow-hidden rounded-lg">
                <!-- component -->
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    
                    <div class="flex flex-col justify-between w-full md:w-96 sm:w-96 h-96 bg-white bg-center text-gray-800 shadow-md overflow-hidden cursor-pointer object-cover rounded-lg" style="background-image:url('https://media.istockphoto.com/id/1353629776/photo/close-up-of-woman-having-a-mental-breakdown.jpg?s=612x612&w=0&k=20&c=dJ988t1VmkqX8bl_MfNvYG0t8LlNBodhtxJu4WG59q8=')">
                        <div class="flex justify-between items-center ml-4 pr-8">
                            <div class="bg-red-600 text-white bg-opacity-95 shadow px-2 mt-3 py-1 flex items-center font-bold text-xs rounded">Bipolar mood disorder</div>
                        </div>
                        <div class="bg-white bg-opacity-95 shadow-md rounded-r-xl p-4 flex flex-col mr-4 mb-8">
                            <h3 class="text-xl font-bold pb-2">Bipolar mood disorder</h3>
                            <p class="text-gray-500 text-sm">
                                Bipolar disorder is a mood disorder and serious mental illness that is characterized by abrupt shifts in mood ...
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400 text-xs">These shifts include episodes ...</span>
                            </div>
                        </div>
                    </div>


                    <div class="flex flex-col justify-between w-full md:w-96 sm:w-96 h-96 bg-white bg-center text-gray-800 shadow-md overflow-hidden cursor-pointer object-cover rounded-lg" style="background-image:url('https://media.istockphoto.com/id/1271548792/photo/its-hard-to-fight-the-monster-in-your-mind.jpg?s=1024x1024&w=is&k=20&c=VxMOjU6QQt7CCu0kyMep_ZfwcDRCC79FyjPudALUYNo=')">
                        <div class="flex justify-between items-center ml-4 pr-8">
                        <div class="bg-red-600 text-white bg-opacity-95 shadow px-2 py-1 mt-3 flex items-center font-bold text-xs rounded">Schizophrenia</div>
                        </div>
                        <div class="bg-white bg-opacity-95 shadow-md rounded-r-xl p-4 flex flex-col mr-4 mb-8">
                        <h3 class="text-xl font-bold pb-2">Schizophrenia</h3>
                        <p class="text-gray-500 text-sm">
                            Schizophrenia is a mental illness that impacts an individual’s ability to remain grounded in reality...
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-400 text-xs">The disorder involves episodes of ...</span>
                        </div>
                        </div>
                    </div>

                    <div class="flex flex-col justify-between w-full md:w-96 sm:w-96 h-96 bg-white bg-center text-gray-800 shadow-md overflow-hidden cursor-pointer object-cover rounded-lg" style="background-image:url('https://plus.unsplash.com/premium_photo-1670828052629-583e1489fb90?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8U2NoaXpvcGhyZW5pYSUyMGJsYWNrJTIwd29tYW58ZW58MHx8MHx8fDA%3D')">
                        <div class="flex justify-between items-center ml-4 pr-8">
                            <div class="bg-red-600 text-white bg-opacity-95 shadow px-2 py-1 mt-3 flex items-center font-bold text-xs rounded">Posttraumatic Stress Disorder</div>
                            </div>
                            <div class="bg-white bg-opacity-95 shadow-md rounded-r-xl p-4 flex flex-col mr-4 mb-8">
                                <h3 class="text-xl font-bold pb-2">Post-traumatic Stress Disorder</h3>
                                <p class="text-gray-500 text-sm">
                                    Posttraumatic stress disorder, which is commonly referred to as PTSD, is a mental health condition that ...
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-400 text-xs">Examples of traumatic events that ...</span>
                                </div>
                            </div>
                        </div>


                </div>
           </div>
        </div>
    </section>

    <?php $this->section('treatments-section-script') ?>
        <script>
            $(document).ready(function() {
                  //owl carousel for the treatment section
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    dots: true,
                    nav: false,
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
    <?php $this->endsection(); ?>