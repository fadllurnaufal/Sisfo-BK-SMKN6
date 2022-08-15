<div class="top-content flex">
    <div class="left-content">
        <div class="header mt-10 text-6-1/2xl font-semibold text-tosca-300 tracking-wide">
            Dashboard
        </div>
        <div class="sub-header text-gray-400 font-semibold ml-1 mb-2 ">
            Counseling Guidance Menu 
            <hr class="w-2/6 mt-2 absolute">
        </div>
    </div>
    <div class="right-content flex justify-between mt-20 ml-96">
        <div class="calendar h-14 w-44 bg-orange-100 box-border text-center py-4 text-white rounded-xl">
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
    
    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="h-14 w-68 text-tosca-300 bg-white border-gray-300 border-2 place-content-center ml-3 hover:bg-gray-100  font-normal rounded-lg text-xl items-center inline-flex duration-200" type="button">Username <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="z-10 w-48 px-1 py-2.5 bg-white rounded-lg shadow hover:bg-gray-100 rounded-lg cursor-pointer duration-200"  data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
        <ul class="py-1 text-xl text-tosca-300" aria-labelledby="dropdownDefault">
            <li>
                <a href="#" class="flex place-content-center"><img src="../../../../Gear.svg"> 
                    <span class="ml-3 tracking-wider font-normal">Setting</span> 
                </a>
            </li>
        </ul>
    </div>
</div>