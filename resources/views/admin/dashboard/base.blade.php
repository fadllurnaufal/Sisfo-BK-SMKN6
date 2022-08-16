<div class="container">
    <div class="top-content flex">
        <div class="left-content">
            <div class="header mt-10 text-6-1/2xl font-semibold text-tosca-300 tracking-wide">
                Dashboard
            </div>
            <div class="sub-header text-gray-400 font-semibold ml-1 mb-2 tracking-wider">
                Counseling Guidance Menu 
                <hr class="w-2/6 mt-2 absolute">
            </div>
        </div>
        <div class="right-content flex justify-between mt-20 ml-96">
            <div class="calendar h-14 w-44 bg-orange-100 box-border border-orange-300 border-2 text-center py-3.5 text-white font-semibold rounded-xl hover:cursor-default">
                <div id="date-time">
                    <script>
                        const zeroFill = n => {
                            return ('0' + n).slice(-2);
                        }
                        const interval = setInterval(() => {
                            const now = new Date();
                            const dateTime = zeroFill((now.getMonth() + 1)) + '/' + zeroFill(now.getUTCDate()) + '/' + now.getFullYear();
                            document.getElementById('date-time').innerHTML = dateTime;
                        }, 1000);
                    </script>
                </div> 
            </div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="h-14 w-68 ml-3 text-tosca-300 bg-white border border-2 rounded-xl hover:bg-gray-100 font-medium rounded-xl text-lg px-4 py-2.5 text-center inline-flex items-center place-content-center duration-200" type="button">
                <img src="../../../../user-tosca.png" class="w-10 h-10 bg-gray-100 m-2 p-1 rounded-2xl border-gray-300 border" alt="">
                <span class="ml-2">
                    Username
                </span>
                <svg class="ml-12 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded-xl divide-y divide-gray-100 shadow" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                <ul class="py-1 text-lg rounded-xl hover:bg-gray-100 duration-200" aria-labelledby="dropdownDefault">
                    <li>
                        <a href="#" class="block py-2 px-4 text-tosca-300 flex">
                            <img src="../../../../Gear.svg" class="pl-3 mx-2.5">
                            Setting
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom-content">
        <div class="bottom-left-content">
            <button class="h-24 w-116 bg-white border border-gray-300 box-border mt-5 ml-1 rounded-2xl shadow-md inline-flex">
                <img src="../../../../Name.svg" class="w-14 h-14 ml-5 my-auto">
                <span class="absolute ml-23 my-5 text-xl font-bold tracking-wide">Daftar Siswa</span>
                <span class="absolute ml-23 my-13 text-sm text-gray-400">SMKN 6 Bandung</span>
            </button>
        </div>
    </div>
</div>