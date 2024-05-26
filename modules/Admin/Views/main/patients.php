<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>


<?= $this->include('Modules\Admin\Views\partials\patients-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('patients-content-script') ?>
    <script>
        $(document).ready(function (){

            let startDateFilter = '';
            let endDateFilter = '';
            function initializeStartDateFlatpickr(){
                $('#startDate').flatpickr({
                    enableTime: false,
                    dateFormat: "Y-m-d",
                    mode: "single",
                    maxDate: "today",
                    onChange: function (selectedDates, dateStr, instance) {
                        startDateFilter = dateStr;
                    }
                })
            }

            function initializeEndDateFlatpickr(){
                $('#endDate').flatpickr({
                    enableTime: false,
                    dateFormat: "Y-m-d",
                    mode: "single",
                    maxDate: "today",
                    onChange: function (selectedDates, dateStr, instance) {
                        endDateFilter = dateStr;
                    }
                })
            }

            initializeEndDateFlatpickr();
            initializeStartDateFlatpickr();

            getPatients();

            function getPatients(){

                $('#manage-patients-dataTable').dataTable({
                    dom: 'lfBrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: '<i class="uil uil-file-exclamation-alt"></i> Excel',
                            titleAttr: 'Transactions summery excel',
                            exportOptions: {
                                columns: [1, 2, 3, 4]
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="uil uil-file-alt"></i> PDF',
                            titleAttr: 'Transactions summery pdf',
                            exportOptions: {
                                columns: [1, 2, 3, 4]
                            }
                        },
                        {
                            extend: 'print',
                            text: '<i class="uil uil-document-info"></i> Print',
                            titleAttr: 'Transactions summery print',
                            exportOptions: {
                                columns: [1, 2, 3, 4]
                            }
                        },
                    ],

                    scrollY: "800px",
                    scrollCollapse: true,

                    "language":{
                        "emptyTable": "No patients available"
                    },
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },

                    "responsive": true,
                    columnDefs: [
                        {
                            orderable: false,
                            className: 'select-checkbox',
                            targets: 0
                        }
                    ],
                    select: {
                        style: 'os',
                        selector: 'td:first-child'
                    },
                    order: [[1, 'asc']],

                    ajax: {

                        url: "<?= base_url('admin/patients/get-patients') ?>",
                        type: 'POST',
                        data: {
                            patient: $('#patient').val(),
                            startDate: startDateFilter,
                            endDate: endDateFilter,
                        },
                        dataSrc: function (response) {
                            if(response.status === 200){
                                return response.data;
                            }else{
                                return [];
                            }
                        }
                    },

                    columns: [

                        {
                            data: null,
                            defaultContent: '',
                            className: 'select-checkbox',
                            orderable: false
                        },
                        {
                            data: null,
                            render: function (data) {
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gren-100 text-green-800">
                            ${data.uhid}
                            </span>`
                            }
                        },

                        {
                            data: null,
                            render: function (data) {
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gren-100 text-green-800">
                            ${data.encounter_number}
                            </span>`
                            }
                        },

                        {
                            data: null,
                            render: function (data) {
                                return `<a href="<?= current_url() ?>/patient?uuid=${data.patient_uuid}" class="hover:text-[#0060a3]">${data.fname + ' ' + data.lname}</a>`;
                            }
                        },

                        {
                            data: null,
                            render: function (data) {
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            ${data.dob}
                            </span>`
                            }
                        },

                        {
                            data: null,
                            render: function (data) {
                                let date_of_birth = moment(data.dob);
                                let age = moment().diff(date_of_birth, 'years');
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold">
                            ${age} years
                            </span>`
                            }
                        },
                        {
                            data: null,
                            render: function (data) {
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold">
                            ${data.title + ' ' + data.doctor_fname + ' ' + data.doctor_lname}
                            </span>`
                            }
                        },
                    ]
                });

             }


             $('#searchByDateName').on('click', function (){
                $('#manage-patients-dataTable').DataTable().destroy();
                getPatients();
             });

            $('#clearDateName').on('click', function (){
                $('#manage-patients-dataTable').DataTable().destroy();
                $('#patient').val('');
                $('#startDate').val('');
                $('#endDate').val('');
                startDateFilter = '';
                endDateFilter = '';
                getPatients();
            });
    })
    </script>
<?= $this->endSection() ?>
