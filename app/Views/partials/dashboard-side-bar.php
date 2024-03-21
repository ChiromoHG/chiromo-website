<div class="bg-gray-100 rounded overflow-hidden">
    <div class="h-32 relative" style="background-image: url('<?= base_url('images/logo/bg.webp') ?>'); background-size: cover; background-position: top">

            <div class="absolute top-3 left-3 inline-flex ring-2 ring-red-300 items-center justify-center w-10 h-10 lg:w-12 lg:h-12 overflow-hidden bg-white rounded-full dark:bg-gray-600">
                    <span class="font-medium text-gray-600 text-[12px] lg:text-[16px] dark:text-gray-300">
                        <?php
                        $firstName = session()->get('fname');
                        $lastName = session()->get('lname');

                        $initials = '';
                        if ($firstName) {
                            $initials .= strtoupper($firstName[0]);
                        }

                        if ($lastName) {
                            $initials .= strtoupper($lastName[0]);
                        }
                        echo $initials;
                        ?>
                    </span>
            </div>

            <div class="cursor-pointer absolute top-16 left-3">
                <input type="file" class="hidden" id="upload-profile">
                <label for="upload-profile" class="text-green-400 text-sm cursor-pointer font-semibold"><i class="uil uil-camera-plus"></i> take a picture</label>
            </div>

    </div>
    <div class="p-2 md:pt-4">
        <h4 class="font-semibold text-lg lg:text-xl">Welcome back,
            <?=
            ucfirst(session()->get('fname'));
            ?>!
        </h4>
        <div class="py-2 flex justify-between">
            <p class="text-gray-500 text-sm lg:text-md">How are you feeling today?</p>
            <a href="" class="text-sm text-[#0060a3] lg:text-md">Take assesment</a>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 owl-carousel owl-theme owl-loaded owl-drag overflow-hidden mt-2">
    <div class="bg-green-100 rounded-md shadow-md overflow-hidden hover:shadow-lg transition duration-300 transform hover:scale-90 cursor-pointer">
        <div class="p-6 h-full flex flex-col justify-between">
            <h4 class="text-xl font-semibold mb-4">What are Mental Disorders?</h4>
            <div class="flex items-center justify-between">
                <a href="#" class="bg-white px-5 py-2 font-semibold rounded-md">Read Story</a>
                <span class="flex items-center space-x-1 text-gray-700">
                            <i class="uil uil-eye"></i> 123
                        </span>
            </div>
        </div>
    </div>

    <div class="bg-yellow-100 rounded-md shadow-md overflow-hidden hover:shadow-lg transition duration-300 transform hover:scale-90 cursor-pointer">
        <div class="p-6 h-full flex flex-col justify-between">
            <h4 class="text-xl font-semibold mb-4">What are Mental Disorders?</h4>
            <div class="flex items-center justify-between">
                <a href="#" class="bg-white px-5 py-2 font-semibold rounded-md">Read Story</a>
                <span class="flex items-center space-x-1 text-gray-700">
                            <i class="uil uil-eye"></i> 123
                        </span>
            </div>
        </div>
    </div>

    <div class="bg-blue-100 rounded-md shadow-md overflow-hidden hover:shadow-lg transition duration-300 transform hover:scale-90 cursor-pointer">
        <div class="p-6 h-full flex flex-col justify-between">
            <h4 class="text-xl font-semibold mb-4">What are Mental Disorders?</h4>
            <div class="flex items-center justify-between">
                <a href="#" class="bg-white px-5 py-2 font-semibold rounded-md">Read Story</a>
                <span class="flex items-center space-x-1 text-gray-700">
                            <i class="uil uil-eye"></i> 123
                        </span>
            </div>
        </div>
    </div>
</div>
