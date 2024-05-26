    <!-- drawer component -->
    <div id="drawer-right-example" class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 md:w-2/5 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">
        <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>Recommend Our Services</h5>
        <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>

        <div>
        <form action="" class="flex flex-col space-y-2">
            <?= csrf_field() ?>
            <div class="flex flex-col space-y-2">
                <label for="name" class="font-semibold">Would you recommend our services to anyone?</label>
                <div class="flex justify-center border items-center border-gray-300 rounded-md feedback-range">
                    <span class="flex-1 flex items-center justify-center py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">1</span>
                    <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">2</span>
                    <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">3</span>
                    <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">4</span>
                    <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">5</span>
                    <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">6</span>
                    <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">7</span>
                    <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">8</span>
                    <span class="flex-1 flex items-center justify-center border border-l-gray-300 py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">9</span>
                    <span class="flex-1 flex items-center justify-center py-2 cursor-pointer hover:bg-gray-100 hover:border-gray-100">10</span>
                </div>
                <div class="">
                    <p class="text-xs text-gray-400">1 = Not at all likely, 10 = Extremely likely</p>
                    <span class="text-sm text-red-400" id="feedbackRangeError"></span>
                </div>
            </div>
            <div class="flex flex-col space-y-2">
                <label for="feedbackDate" class="font-semibold">Date</label>
                <input type="text" name="feedbackDate" id="feedbackDate"
                       class="border border-gray-300 rounded-md p-2">
            </div>
            <div class="flex flex-col space-y-2">
                <label for="feedbackName" class="font-semibold">Full Name</label>
                <input type="text" name="feedbackName" id="feedbackName"
                       class="border border-gray-300 rounded-md p-2" placeholder="Enter your name">
                <span class="text-sm text-red-400" id="feedbackNameError"></span>
                <div class="flex flex-col space-y-2">
                    <label for="feedbackEmail" class="font-semibold">Email</label>
                    <input type="email" name="feedbackEmail" id="feedbackEmail"
                           class="border border-gray-300 rounded-md p-2" placeholder="Enter your email">
                    <span class="text-sm text-red-400" id="feedbackEmailError"></span>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="feedbackPhone" class="font-semibold">Phone</label>
                    <input type="Number" name="feedbackPhone" id="feedbackPhone"
                           class="border border-gray-300 rounded-md p-2" placeholder="Enter your phone number">
                    <span class="text-sm text-red-400" id="feedbackPhoneError"></span>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="feedbackMessage" class="font-semibold">Message</label>
                    <textarea name="feedbackMessage" id="feedbackMessage" cols="2" rows="1"
                              class="border border-gray-300 rounded-md p-2"
                              placeholder="Enter your message"></textarea>
                    <span class="text-sm text-red-400" id="feedbackMessageError"></span>
                </div>
                <div class="flex justify-between">
                    <label for="feedbackTerms" class="text-xs text-slate-400">Agree with our terms and conditions of personal data usage</label>
                    <input type="checkbox" name="feedbackTerms" class="rounded-md" id="feedbackTerms">
                </div>
                <div class="flex space-y-2 flex-col my-2">
                    <button class="px-8 py-2 bg-[#0060a3] text-white rounded-md font-semibold opacity-75 cursor-progress" disabled id="saveFeedback">
                        Submit
                    </button>
                    <a href="#" class="text-sm text-gray-400">Would you like to take a survey?</a>
                </div>
            </div>
        </form>
        </div>
    </div>



    <section class="fixed right-5 z-40" style="bottom: 16px; right: 16px">
        <button type="button" style="background-color: #0060a3; padding: 8px 10px; color: white; border: none; border-radius: 10px; font-weight: 600"
                id="feedbackBtn" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
            <i class="uil uil-feedback"></i> Feedback
        </button>
    </section>

    <?php $this->section('feedback-section-script') ?>
    <script>
        $(document).ready(function () {

                   //toggle feedback button

                   let feedbackContainer = $('#feedbackContainer');
            let feedbackBtn = $('#feedbackBtn');
            let closeFeedbackBtn = $('.feedback-form-header span');

            //processing the feedback form

            let feedbackRangeValue;
            $('.feedback-range span').on('click', function () {
                $(this).addClass('bg-blue-500');
                if ($(this).hasClass('bg-blue-500')) {
                    $(this).prevAll().removeClass('bg-blue-500');
                    $(this).nextAll().removeClass('bg-blue-500');
                }
                feedbackRangeValue = $(this).text();
            })


            let feedbackRangeError = $('#feedbackRangeError');
            let feedbackDate = $('#feedbackDate');
            let feedbackName = $('#feedbackName');
            let feedbackEmail = $('#feedbackEmail');
            let feedbackPhone = $('#feedbackPhone');
            let feedbackMessage = $('#feedbackMessage');
            let feedbackNameError = $('#feedbackNameError');
            let feedbackEmailError = $('#feedbackEmailError');
            let feedbackPhoneError = $('#feedbackPhoneError');
            let feedbackMessageError = $('#feedbackMessageError');
            let feedbackTerms = $('#feedbackTerms');

            let currentDate = moment().format('DD/MM/YYYY');
            feedbackDate.val(currentDate);

            //form validations

            function validateFeedbackRange() {
                if (feedbackRangeValue === undefined) {
                    feedbackRangeError.text('Please select a value');
                    return false;
                } else {
                    feedbackRangeError.text('');
                    return true;
                }
            }

            function validateFullName() {
                let regex = /^[a-zA-Z ]{2,30}$/;
                if (regex.test(feedbackName.val())) {
                    feedbackName.removeClass('border-red-500 focus:border-red-500');
                    feedbackName.addClass('border-green-500');
                    feedbackNameError.text('');
                    return true;
                } else {
                    feedbackName.removeClass('border-green-500');
                    feedbackName.addClass('border-red-500 focus:border-red-500');
                    feedbackNameError.text('Please enter a valid full name');
                    return false;
                }
            }

            function validateEmail() {
                let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (regex.test(feedbackEmail.val())) {
                    feedbackEmail.removeClass('border-red-500 focus:border-red-500');
                    feedbackEmail.addClass('border-green-500');
                    feedbackEmailError.text('');
                    return true;
                } else {
                    feedbackEmail.removeClass('border-green-500');
                    feedbackEmail.addClass('border-red-500 focus:border-red-500');
                    feedbackEmailError.text('Please enter a valid email')
                    return false;
                }
            }

            function validatePhone() {
                let regex = /^[0-9]{10}$/;
                if (regex.test(feedbackPhone.val())) {
                    feedbackPhone.removeClass('border-red-500 focus:border-red-500');
                    feedbackPhone.addClass('border-green-500');
                    feedbackPhoneError.text('');
                    return true;
                } else {
                    feedbackPhone.removeClass('border-green-500');
                    feedbackPhone.addClass('border-red-500 focus:border-red-500');
                    feedbackPhoneError.text('Please enter a valid phone number');
                    return false;
                }
            }

            function validateMessage() {
                let regex = /^[a-zA-Z0-9 ]{2,200}$/;
                if (regex.test(feedbackMessage.val())) {
                    feedbackMessage.removeClass('border-red-500 focus:border-red-500');
                    feedbackMessage.addClass('border-green-500');
                    feedbackMessageError.text('');
                    return true;
                } else {
                    feedbackMessage.removeClass('border-green-500');
                    feedbackMessage.addClass('border-red-500 focus:border-red-500');
                    feedbackMessageError.text('Please enter a valid message');
                    return false;
                }
            }

            //attach event listeners to the input fields

            feedbackName.on('keyup', validateFullName);
            feedbackEmail.on('keyup', validateEmail);
            feedbackPhone.on('keyup', validatePhone);
            feedbackMessage.on('keyup', validateMessage);

            $('#feedbackTerms').change(function() {
                if ($(this).prop('checked')) {
                    $('#saveFeedback').prop('disabled', false);
                    $('#saveFeedback').removeClass('opacity-75 cursor-progress');
                } else {
                    $('#saveFeedback').prop('disabled', true);
                    $('#saveFeedback').addClass('opacity-75 cursor-progress');
                }
            });


            $('#saveFeedback').on('click', function (e) {
                e.preventDefault();
                if (validateFeedbackRange() && validateFullName() && validateEmail() && validatePhone() && validateMessage()) {
                    let feedbackData = {
                        feedbackRangeValue: feedbackRangeValue,
                        feedbackName: feedbackName.val(),
                        feedbackEmail: feedbackEmail.val(),
                        feedbackPhone: feedbackPhone.val(),
                        feedbackMessage: feedbackMessage.val()
                    }

                    $('#saveFeedback').prop('disabled', true).html('<span class="loading loading-spinner loading-xs"></span>');
                    $.ajax({
                        url: '<?= base_url('api/save_feedback') ?>',
                        method: 'POST',
                        data: feedbackData,
                        success: function (response) {
                            if (response.status === 200) {
                                $('#toast-success').removeClass('hidden');
                                $('#toast-success #toast-success-content').text(response.message);
                                feedbackContainer.toggleClass('feedback-form');
                                feedbackRangeValue.removeClass('bg-blue-500');
                                feedbackName.removeClass('border-green-500');
                                feedbackEmail.removeClass('border-green-500');
                                feedbackPhone.removeClass('border-green-500');
                                feedbackMessage.removeClass('border-green-500');
                                feedbackTerms.prop('checked', false);
                                feedbackName.val('');
                                feedbackEmail.val('');
                                feedbackPhone.val('');
                                feedbackMessage.val('');
                            } else if (response.status === 500) {
                                $('#toast-danger').removeClass('hidden');
                                $('#toast-danger #toast-danger-content').text(response.message);
                                feedbackContainer.toggleClass('feedback-form');
                            }
                        },

                        error: function (error) {
                            $('#toast-danger').removeClass('hidden');
                            $('#toast-danger #toast-danger-content').text('Something went wrong. Please try again');
                        },

                        complete: function () {
                            $('#saveFeedback').prop('disabled', false).html('Submit');
                        }
                    })
                } else {
                    return false;
                }
            });
        });
    </script>
    <?php $this->endSection() ?>