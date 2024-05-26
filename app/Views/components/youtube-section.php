<section class="bg-[#fafafa] px-4 xl:px-5 2xl:px-5 py-10 md:py-20">
        <div class="grid md:grid-cols-12 gap-10 md:px-10" data-aos="fade-up">
            <div class="grid md:col-span-6">
                <div class="legacy-container--img">
                    <iframe id="player"
                            class="w-full"
                            height="460"
                            src="https://www.youtube.com/embed/coPECmp8CJQ?si=IKamNkSRqzwM13mw&autoplay=1"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                    </iframe>

                </div>
            </div>
            <div class="grid md:col-span-6">
                <div class="h-full legacy-container--text">
                    <h3 class="text-xl md:text-3xl lg:text-4xl font-semibold inline-block">Chiromo Hospital Group since
                        1996
                    </h3>
                    <p class="pt-8 md:pt-10 text-slate-600 font-medium">
                        In today's dynamic world, prioritizing mental health has become paramount. Chiromo Hospital
                         Group stands as Kenya's foremost mental health institution, offering a comprehensive array 
                         of services tailored to enhance mental wellness and foster holistic healing.
                    </p>
                    <div class="mt-[1.5rem] md:mt-[2rem] flex flex-col md:flex-row justify-center space-y-5 md:space-y-0 md:space-x-[2rem]">

                        <div class="flex flex-1 flex-row bg-white shadow-md rounded-md p-4 border hover:border-[#4a90e2] cursor-pointer">
                            <div class="flex items-center justify-center flex-shrink-0 h-10 w-10 rounded-xl bg-[#ac8342] text-white">
                                <span><i class="uil uil-user-arrows"></i></span>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="font-bold text-lg">50 +</div>
                                <div class="text-md text-gray-500">Corporate Partners</div>
                            </div>
                        </div>

                        <div class="flex flex-1 flex-row bg-white shadow-md rounded-md p-4 border hover:border-[#4a90e2] cursor-pointer">
                            <div class="flex items-center justify-center flex-shrink-0 h-10 w-10 rounded-xl bg-[#ac8342] text-white">
                                <span><i class="uil uil-clinic-medical"></i></span>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="font-bold text-lg">6</div>
                                <div class="text-md text-gray-500">All Our Branches</div>
                            </div>
                        </div>
                    </div>


                    <div class="mt-[1.5rem] md:mt-[2rem]">
                        <a href="<?= base_url('about') ?>"
                           class="w-full sm:w-auto text-center md:px-6 py-2 text-white rounded-[2.5rem] inline-block text-md font-semibold bg-[#0060a3] hover:bg-[#ac8342] hover:border-transparent transition-all duration-500 transform hover:scale-75 md:hover:scale-110 hover:opacity-50">
                            Learn more about us
                            <i class="uil uil-arrow-right font-semibold"></i>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <?php $this->section('youtube-section-script') ?>
    <script>
        $(document).ready(function() {

                //youtube video autoplay
                // let video;

                // function onYouTubeIframeAPIReady() {
                //     video = new YT.Player('player', {
                //         events: {
                //             'onReady': onPlayerReady,
                //             'onStateChange': onPlayerStateChange
                //         }
                //     });
                // }

                // function onPlayerReady(event) {
                //     event.target.playVideo();
                // }

                // function onPlayerStateChange(event) {
                //     if (event.data === YT.PlayerState.ENDED) {
                //         event.target.playVideo();
                //     }
                // }

        });
    </script>
    <?php $this->endSection(); ?>