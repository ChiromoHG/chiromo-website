<div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
    <span><i class="uil uil-history-alt"></i></span>
    <a href="<?= base_url('admin/dashboard/patients/patient/history/?patient_uuid=' . $patient[0]['patient_uuid'])?>">History</a>
</div>
<div class="flex items-center space-x-1 text-[#0060a3] hover:text-black pt-2">
    <span><i class="uil uil-hdd"></i></span>
    <a href="<?= base_url('admin/dashboard/patients/patient/examination/?patient_uuid=' . $patient[0]['patient_uuid'])?>">Physical Examination</a>
</div>
<div class="flex items-center space-x-1 text-[#0060a3] hover:text-black pt-2">
    <span><i class="uil uil-stethoscope"></i></span>
    <a href="<?= base_url('admin/dashboard/patients/patient/diagnosis/?patient_uuid=' . $patient[0]['patient_uuid'])?>">Diagnosis</a>
</div>
<div class="flex items-center space-x-1 text-[#0060a3] hover:text-black pt-2">
    <span><i class="uil uil-servicemark"></i></span>
    <a href="<?= base_url('admin/dashboard/patients/patient/services/?patient_uuid=' . $patient[0]['patient_uuid'])?>">Services</a>
</div>
<div class="flex items-center space-x-1 text-[#0060a3] hover:text-black pt-2">
    <span><i class="uil uil-prescription-bottle"></i></span>
    <a href="<?= base_url('admin/dashboard/patients/patient/prescription/?patient_uuid=' . $patient[0]['patient_uuid'])?>">Prescription</a>
</div>
<div class="flex items-center space-x-1 text-[#0060a3] hover:text-black pt-2">
    <span><i class="uil uil-notes"></i></span>
    <a href="<?= base_url('admin/dashboard/patients/patient/consultation/?patient_uuid=' . $patient[0]['patient_uuid'])?>">Consultation Notes</a>
</div>
<div class="flex items-center space-x-1 text-[#0060a3] hover:text-black pt-2">
    <span><i class="uil uil-clipboard-notes"></i></span>
    <a href="<?= base_url('admin/dashboard/patients/patient/referral/?patient_uuid=' . $patient[0]['patient_uuid'])?>">Referral Latter</a>
</div>
<div class="flex items-center space-x-1 text-[#0060a3] hover:text-black pt-2">
    <span><i class="uil uil-bill"></i></span>
    <a href="<?= base_url('admin/dashboard/patients/patient/bill/?patient_uuid=' . $patient[0]['patient_uuid'])?>">Estimated Bill</a>
</div>
<div class="flex items-center space-x-1 text-[#0060a3] hover:text-black pt-2">
    <span><i class="uil uil-cloud-check"></i></span>
    <a href="<?= base_url('admin/dashboard/patients/patient/checkout/?patient_uuid=' . $patient[0]['patient_uuid'])?>">Check out</a>
</div>