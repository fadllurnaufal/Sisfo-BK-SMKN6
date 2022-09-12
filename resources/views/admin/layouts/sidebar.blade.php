<!-- Main Sidebar -->
<div class="absolute mx-10">
    <div class="absolute z-10 w-24 duration-500 h-200 rounded-4xl bg-tosca-300 hover:w-72"> 
        <div class="pt-20 profile">
            <div class="w-16 h-16 mx-auto bg-gray-200 rounded-full">
                <img src="../../../../user.png">
            </div>
            <div class="mt-5 font-semibold font-sans tracking-wider text-center text-gray-200 text-sm hover:text-white cursor-default capitalize">
                {{ auth()->user()->username }}
            </div>
        </div>
        <div class="mt-28 overflow-hidden text-sm font-medium text-white menu">
            <ul>
                <li>
                    <a href="../dashboard/base" class="flex h-16 px-8 py-4 duration-200 w-80 place-items-center hover:bg-tosca-200">
                        <img src="../../../home.png" class="w-8 h-8 "/>
                        <span class="ml-8 tracking-wider font-semibold">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li >
                    <a href="../siswa/base" class="flex h-16 px-8 py-4 duration-200 w-80 place-items-center hover:bg-tosca-200 ">
                        <img src="../../../users.png" class="w-8 h-8"/>
                        <span class="ml-8 tracking-wider font-semibold">
                            Daftar Siswa
                        </span>
                    </a>
                </li>
                <li>
                    <div class="flex h-16 px-16 py-4 duration-200 w-80 place-items-center hover:bg-tosca-200 cursor-pointer tracking-wider">
                        <img src="../../../copybook.svg" class="absolute -ml-8 w-8 h-8">
                        <div @click.away="openSort = false" class="ml-8 relative -mt-2 mr-2 tracking-wider" x-data="{ openSort: false,sortType:'Laporan Kegiatan' }">
                            <button @click="openSort = !openSort" class="flex  text-white bg-gray-200 items-center justify-start w-48 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg tracking-wider">
                                <span x-text="sortType"></span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': openSort, 'rotate-0': !openSort}" class="w-4 h-4  transition-transform duration-200 transform ml-3"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="openSort" x-transition:enter="transition ease-out duration-100 hidden" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 w-full  origin-top-right">                                    
                                <div class="px-2 pt-2 pb-2 bg-tosca-200 rounded-md shadow-lg">
                                    <div class="flex flex-col">
                                        <a @click="sortType='Jurnal Harian',openSort=!openSort" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-gray-300 " href="../report/jurnal">
                                            <div class="">
                                                <p class="font-semibold">Jurnal Harian</p> 
                                            </div>
                                        </a>            
                                            <a @click="sortType='Kunjungan Rumah',openSort=!openSort" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-gray-300 " href="../report/visit">
                                                <div class="">
                                                    <p class="font-semibold">Kunjungan Rumah</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div> 
                    </div>
				</li>
                <li>
                    <div class="flex h-16 px-16 py-4 duration-200 w-80 place-items-center hover:bg-tosca-200 cursor-pointer ">
                        <img src="../../../list.png" class="absolute -ml-8 w-8 h-8">
                        <div @click.away="openSort = false" class="ml-8 relative -mt-2 mr-2 tracking-wider" x-data="{ openSort: false,sortType:'Evaluasi Siswa' }">
                            <button @click="openSort = !openSort" class="flex  text-white bg-gray-200 items-center justify-start w-48  py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg tracking-wider">
                                <span x-text="sortType"></span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': openSort, 'rotate-0': !openSort}" class="w-4 h-4  transition-transform duration-200 transform ml-8"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="openSort" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 w-full origin-top-right">
                                <div class="px-2 pt-2 pb-2 bg-tosca-200 rounded-md shadow-lg dark-mode:bg-gray-700">
                                    <div class="flex flex-col">
                                        <a @click="sortType='Individu',openSort=!openSort" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-gray-300 " href="../evaluation/individual">
                                            
                                            <div class="">
                                                <p class="font-semibold">Individu</p>
                                            </div>                                            
                                        </a>
                                        <a @click="sortType='Kelompok',openSort=!openSort" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-gray-300 " href="../evaluation/group">
                                                
                                            <div class="">
                                                <p class="font-semibold">Kelompok</p>
                                            </div>
                                        </a>

                                        <a @click="sortType='Daftar Kasus',openSort=!openSort" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-gray-300 " href="../evaluation/cases">
                                            
                                            <div class="">
                                                <p class="font-semibold">Daftar Kasus</p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </li>
                <div class="mt-20">
                    <li>
                        <a href="/admin/profile" class="flex h-16 px-8 py-4 duration-200 w-80 place-items-center hover:bg-tosca-200 ">
                            <img src="../../../user.png" class="w-8 h-8"/>
                            <span class="ml-8 tracking-wider font-semibold">
                                Profile
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('logout') }}" class="flex h-16 px-8 py-4 duration-200 w-80 place-items-center hover:bg-tosca-200 ">
                            <img src="../../../logout.png" class="w-8 h-8"/>
                            <span class="ml-8 tracking-wider font-semibold">
                                Logout
                            </span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</div>