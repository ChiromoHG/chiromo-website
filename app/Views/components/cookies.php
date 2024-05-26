<!-- Cookies management -->
<div id="cookies_section" class="fixed bottom-[16px] left-5 z-40 bg-gray-500 w-full lg:w-1/4 rounded-lg transform -translate-x-full transition-transform duration-500">
    <div class="p-4">
        <h1 class="text-white text-lg md:text-lg font-bold">We Value Your Privacy</h1>
        <div class="pt-2">
            <p class="text-white text-xs leading-relaxed">
                We use cookies to enhance your visit to the site and provide personalized service, 
                support and product recommendations. By clicking "Accept All" 
                you consent to our use of cookies.
            </p>
        </div>
        <div class="pt-2">
            <a href="#" class="text-sm hover:text-[#0060a3] hover:underline">View Cookies Policy</a>
            <a href="#" class="text-sm hover:text-[#0060a3] hover:underline">View Privacy Policy</a>
        </div>
        <div class="flex items-center pt-3 space-x-3 rtl:space-x-reverse rounded-b dark:border-gray-600">
            <button class="py-2 px-4 text-white bg-[#be1e2d] rounded-md text-xs hover:bg-white hover:text-black" id="cookies_reject">Reject All</button>
            <button class="py-2 px-4 text-white bg-[#0060a3] rounded-md text-xs hover:bg-[#ac8342]" id="cookies_accept">Accept All</button>
        </div>
    </div>
</div>

<?php $this->section('cookies-section-script') ?>
<script>
    $(document).ready(function(){


        const cookiesSection = document.getElementById('cookies_section');
        const cookiesAccept = document.getElementById('cookies_accept');
        const cookiesReject = document.getElementById('cookies_reject');

        cookiesSection.classList.remove('-translate-x-full');

        cookiesReject.addEventListener('click', () => {
            cookiesSection.classList.add('hidden');
            localStorage.setItem('cookies-accepted', 'false');
        });

        function getCookie(name) {
            let nameEQ = name + "=";
            let ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }


        if(getCookie('acceptedCookies')){
            cookiesSection.classList.add('hidden');
        }


        cookiesAccept.addEventListener('click', acceptCookies);

        function generateRandomString(length) {
            let result = '';
            let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }


        function acceptCookies() {
            cookiesSection.classList.add('hidden');
            let userId = generateRandomString(32);
            setCookie('acceptedCookies', userId, 7);
        }

        function setCookie(name, value, days) {
            let expires = "";
            if (days) {
                let date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/" + "; SameSite=Lax" + "; Secure";
        }

    });
</script>
<?php $this->endSection() ?>
