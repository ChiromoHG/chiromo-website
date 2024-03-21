<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= $this->include('partials/navbar.php'); ?>

<div class="load"></div>
<!-- start main content -->

<section class="bg-gray-50">
    <!-- component -->
    <div class="container mx-auto py-8">
<!--        <h1 class="text-2xl font-bold mb-3 text-center">Enter Your Details to Continue</h1>-->
        <span class="text-lg font-semibold block text-center mb-3">Who do you want to buy for ?</span>
        <div class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            <div x-data="{ activeTab: 'myself' }">
                <div class="flex">
                    <div class="flex start">
                        <button class="py-2 px-4 text-lg font-semibold hover:text-white hover:bg-[#0060a3] border border-gray-300 rounded-l-lg"
                                :class="{ 'bg-[#0060a3] text-white border-[#0060a3]': activeTab === 'myself' }"
                                x-on:click="activeTab = 'myself'">Buy for Myself
                        </button>
                        <button class="py-2 px-4 text-lg font-semibold hover:text-white hover:bg-[#0060a3] border border-gray-300 rounded-r-lg"
                                :class="{ 'bg-[#0060a3] text-white border-[#0060a3]': activeTab === 'beneficiary' }"
                                x-on:click="activeTab = 'beneficiary'">Buy for Another
                        </button>
                    </div>

                </div>

                <div x-show="activeTab === 'myself'">

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="myselfName">Full Name</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="text" id="myselfName" name="myself-name">
                    </div>

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="myselfEmail">Email Address</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="email" id="myselfEmail" name="myself-email">
                    </div>

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="myselfPhone">Phone Number</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="tel" id="myselfPhone" name="myself-phone">
                    </div>
                    <button
                            class="w-full py-2 px-7 border border-[#E5E7EB] rounded-full text-lg text-body-color font-semibold hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition duration-300"
                            type="submit">Submit
                    </button>

                </div>

                <div x-show="activeTab === 'beneficiary'" style="display: none;">
                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="beneficiaryName">Beneficiary Full Name</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="text" id="beneficiaryName" name="beneficiary-name">
                    </div>

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="beneficiaryEmail">Beneficiary Email Address</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="email" id="beneficiaryEmail" name="beneficiary-email">
                    </div>

                    <div class="mb-4 mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="beneficiaryPhone">Beneficiary Phone Number</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                               type="tel" id="beneficiaryPhone" name="beneficiary-phone">
                    </div>

                    <button
                            class="w-full py-2 px-7 border border-[#E5E7EB] rounded-full text-lg text-body-color font-semibold hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition duration-300"
                            type="submit">Submit
                    </button>

                </div>
            </div>
        </div>
    </div>

</section>


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
