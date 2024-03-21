<?= $this->extend('base/base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('partials/navbar.php'); ?>

<div class="load"></div>

<main class="grid md:grid-cols-3 gap-3 md:gap-4 mx-4 lg:mx-4 pt-2">
    <div class="grid md:col-span-1 h-96">
        <?= $this->include('partials/dashboard-side-bar.php'); ?>
    </div>
    <div class="grid md:col-span-2">
        <?= $this->include('partials/dashboard-main.php'); ?>
    </div>
</main>

<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection() ?>
<?= $this->section('patient-dashboard-script') ?>
<script>

    $(document).ready(function (){

        getPatientInformation();

        getAdditionalInformation();

        function getPatientInformation(){

            $.ajax({

                method: 'GET',
                url: '<?= base_url('api/get_patient_information') ?>',
                dataType: 'json',
                success: function (response){
                    if(response.status === 200){
                        $('#name').html(response.data.fname + ' ' + response.data.lname);
                        $('#uhid').html(response.data.uhid);
                        $('#encounter').html(response.data.encounter_number);
                        $('#gender').html(response.data.gender);
                        $('#dob').html(response.data.dob);
                        $('#residence').html(response.data.residence);
                        $('#email').html(response.data.email);

                        let age = moment().diff(response.data.dob, 'years');
                        $('#age').html(age + ' ' + 'years');

                        $('#phone').val(response.data.phone);
                    }
                },

                error: function (){
                    console.log('error fetching the data');
                }

            });
        }

        function getAdditionalInformation(){

            $.ajax({

                method: 'GET',
                url: '<?= base_url('api/get_patient_additional_information') ?>',
                dataType: 'json',

                success: function (response){
                    $('#address').val(response.data.address);
                    $('#nationality').val(response.data.nationality)
                    $('#title').val(response.data.title);
                    $('#occupation').val(response.data.occupation);
                    $('#education').val(response.data.education);
                    $('#identity').val(response.data.national_identity);
                    $('#marital-status').val(response.data.marital_status);
                },

                error: function (){
                    console.log('error fetching the data');
                }
            })
        }

        getDoctorAssigned();

        function getDoctorAssigned(){

            $.ajax({

                method: 'GET',
                url: '<?= base_url('api/get_doctor_assigned') ?>',
                dataType: 'json',

                success: function (response){
                    if(response.status === 200){
                        console.log(response.data);
                        $('#doctor').html(response.data.doctor_title + ' ' + response.data.doctor_fname + ' ' + response.data.doctor_lname);
                    }else{

                        $('#doctor').html('?');
                    }

                },

                error: function (error) {
                    console.log(error, 'error fetching the data');
                }
            })
        }

        function saveEditGeneralInformation(address, nationality, title, occupation, education){

            $('#general-information').prop('disabled', true).html('Saving...').css('cursor', 'not-allowed');
            $.ajax({
                method: 'POST',
                url: '<?= base_url('api/save_edit_general_information') ?>',
                dataType: 'json',
                data: {
                    address: address,
                    nationality: nationality,
                    title: title,
                    occupation: occupation,
                    education: education
                },

                success: function (response){
                    if(response.status === 200){
                        $('#toast-success').removeClass('hidden');
                        $('#toast-success #toast-success-content').text(response.message);
                    }
                },

                error: function (error){
                    console.log(error, 'error fetching the data');
                },

                complete: function (){
                    $('#general-information').prop('disabled', false).html('<i class="uil uil-save"></i> Save').css('cursor', 'pointer');
                }

            });

        }

        function saveEditAdditionalInformation(maritalStatus, govtId){

            $('#additional-information').prop('disabled', true).html('Saving...').css('cursor', 'not-allowed');
            $.ajax({
                method: 'POST',
                url: '<?= base_url('api/save_edit_additional_information') ?>',
                dataType: 'json',
                data: {
                    maritalStatus: maritalStatus,
                    govtId: govtId
                },

                success: function (response){
                    if(response.status === 200){
                        $('#toast-success').removeClass('hidden');
                        $('#toast-success #toast-success-content').text(response.message);
                    }
                },

                error: function (error){
                    console.log(error, 'error fetching the data');
                },

                complete: function (){
                    $('#additional-information').prop('disabled', false).html('<i class="uil uil-save"></i> Save').css('cursor', 'pointer');
                }

            });
        }

        $('#general-information').on('click', function (){
            let address = $('#address').val();
            let nationality = $('#nationality').val();
            let title = $('#title').val();
            let occupation = $('#occupation').val();
            let education = $('#education').val();
            saveEditGeneralInformation(address, nationality, title, occupation, education);
            getAdditionalInformation();
        })

        $('#additional-information').on('click', function (){
            let maritalStatus = $('#marital-status').val();
            let govtId = $('#identity').val();
            saveEditAdditionalInformation(maritalStatus, govtId);
            getAdditionalInformation();
        })
    })

</script>
<?= $this->endSection() ?>
