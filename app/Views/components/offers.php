<section class="w-full bg-red-400 px-4 py-4 mt-2 sm:px-8 lg:px-16 xl:px-20 2xl:px-20 hidden" id="offer_running">
    <div class="flex flex-col sm:flex-col space-y-2 sm:space-y-2 md:space-y-0 md:flex-row md:justify-between">
        <div class="flex justify-between sm:justify-between md:justify-start">
            <h1 class="font-semibold text-white" id="offer_running_title"></h1>
            <span class="text-red-600 text-md font-semibold ml-2" id="offer_running_value"></span>
        </div>
        <div class="flex justify-between sm:justify-between md:justify-start text-sm sm:text-md md:text-md">
            <span id="time_remaining" class="font-semibold"></span>
            <a href="<?= base_url('appointment_bookings') ?>" class="text-white font-semibold ml-2">Book Now</a>
        </div>
    </div>
</section>

<?php $this->section('offers-section-script') ?>
<script>
    $(document).ready(function(){

        getOffer();
            function getOffer(){

                $.ajax({
                    url: "<?= base_url('api/offer/get_all_offers') ?>",
                    type: 'GET',
                    success: function(response){
                        
                        if(response.status === 200 && response.data.length > 0) {
                    
                            let data = response.data;
                            $('#offer_running').removeClass('hidden');
                            data.forEach(function(e){
                                let convertNumber = parseFloat(e.offer);
                                let wholeNumber = Math.floor(convertNumber);

                                $('#offer_running_title').text(e.offer_title);
                                $('#offer_running_value').text(`${convertNumber} % OFF`);

                                updateTimeRemaining(e.offer_start_date, e.offer_end_date, $('#time_remaining'));
                            })   
                        }else{
                            return $('#offer_running').addClass('hidden');
                        }
                    },
                })
            }


            function updateTimeRemaining(offerStartDate, offerEndDate, element) {
                let startDate = new Date(offerEndDate);
                let endDate = new Date(offerEndDate);

                let timeDiff = endDate - startDate;

                let intervalId = setInterval(function() {
                    // Calculate the remaining time
                    let now = new Date();
                    let remainingTime = endDate - now;

                    // Check if the offer has expired
                    if (remainingTime <= 0) {
                        clearInterval(intervalId); // Stop the interval
                        return element.text('Time expired');
                    }

                    // Convert remaining time to days, hours, minutes, and seconds
                    var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                    // Format the time remaining
                    var countdown = `${days} days ${hours} hours ${minutes} minutes ${seconds} seconds`;

                    // Update the cell content with the countdown
                    element.text(`${countdown}`);
            }, 1000); // Update every second
        }

    });
</script>
<?php $this->endSection(); ?>
