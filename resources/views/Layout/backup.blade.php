<div>
    <nav class="bg-white dark:bg-transparent border-b-[0.2px] border-gray-500">
        <div class="px-8 mx-auto max-w-7xl">
            <div class="flex items-center justify-between h-16">
                <div class="w-full justify-between flex items-center">
                    <a class="flex-shrink-0 text-white font-bold" href="/">
                        DATABASE PROJECT
                    </a>
                    <div class="hidden md:block">
                        <div class="flex flex-row items-baseline ml-10 space-x-4">
                            <div class="flex flex-col group items-center">
                                <a class="text-gray-300 {{ Request::is('penduduk') || Request::is('wna') || Request::is('ortu') || Request::is('keluarga') || Request::is('keluargaortu') ? 'active:font-semibold text-white' : '' }} hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    href="/penduduk">
                                    KEPENDUDUKAN
                                </a>
                                <div
                                    class="hidden z-2 w-56 items-center absolute group-hover:block my-9 py-2 pl-2 bg-gray-700/90 rounded-md">
                                    <a href="/penduduk"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">PENDUDUK</a><br>
                                    <a href="/wna"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">WNA</a><br>
                                    <a href="/keluarga"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">KELUARGA</a><br>
                                    <a href="/ortu"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">ORANG
                                        TUA</a><br>
                                    <a href="/keluargaortu"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">KELUARGA
                                        DAN ORANG TUA</a><br>
                                </div>
                            </div>

                            <div class="flex flex-col group items-center">
                                <a href="/kelahiran"
                                    class="text-gray-300 {{ Request::is('kelahiran') || Request::is('kematian') || Request::is('pajak') || Request::is('bantuan') ? 'active:font-semibold text-white' : '' }} hover:text-gray-800 dark:hover:text-white px-3 py-2
                                rounded-md text-sm font-medium">
                                    ADMINISTRASI
                                </a>
                                <div
                                    class="hidden z-2 w-56 items-center absolute group-hover:block my-9 py-2 pl-2 bg-gray-700/90 rounded-md">
                                    <a href="/kelahiran"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">DATA
                                        KELAHIRAN</a><br>
                                    <a href="/kematian"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">DATA
                                        KEMATIAN</a><br>
                                    <a href="/pajak"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">PAJAK</a><br>
                                    <a href="/bantuan"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">BANTUAN
                                    </a><br>
                                </div>
                            </div>
                            <div class="flex flex-col group items-center">
                                <a class="text-gray-300  hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    href="/#">
                                    PENDATAAN
                                </a>
                                <div
                                    class="hidden z-2 w-56 items-center absolute group-hover:block my-9 py-2 pl-2 bg-gray-700/90 rounded-md">
                                    <a href="/"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">DATA
                                        PERKAWINAN</a><br>
                                    <div class="group/a">
                                        <a href="/"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">PEKERJAAN</a><br>
                                        
                                        <div class="hidden z-2 w-56 items-center absolute group-hover/a:block py-2 bg-gray-700/90 rounded-md">
                                            <a href="/"
                                            class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">PEKERJAAN</a><br>
                                        </div>
                                    </div>


                                   
                                    <a href="/"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">PENGHASILAN</a><br>
                                    <a href="/"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">MEDIA SOSIAL
                                    </a><br>
                                    <a href="/"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">RIWAYAT PENYAKIT</a><br>
                                    <a href="/"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">PENDIDIKAN</a><br>
                                    <a href="/"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">TEMPAT TINGGAL
                                    </a><br>
                                    <a href="/"
                                        class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-2 py-2 rounded-md text-sm font-medium">MIGRASI
                                    </a><br>
                                </div>
                            </div>
                            <a class="text-gray-300  hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                href="/#">
                                INFORMASI
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="flex items-center ml-4 md:ml-6">
                    </div>
                </div>
                <div class="flex mr-2 md:hidden">
                    <button onclick="Dropdown()"
                        class="text-gray-800 dark:text-white hover:text-gray-300 inline-flex items-center justify-center p-2 rounded-md focus:outline-none">
                        <svg width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 1792 1792"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="Dropdown" class="hidden">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                    href="/#">
                    Home
                </a>
                <a class="text-gray-800 dark:text-white block px-3 py-2 rounded-md text-base font-medium"
                    href="/#">
                    Gallery
                </a>
                <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                    href="/#">
                    Content
                </a>
                <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                    href="/#">
                    Contact
                </a>
            </div>
        </div>
    </nav>
</div>

<script>
    let isOpen = false;

    function Dropdown() {
        const dropdownElement = document.getElementById('Dropdown');
        if (isOpen === false) {
            dropdownElement.classList.remove('hidden');
            isOpen = true;
        } else {
            dropdownElement.classList.add('hidden');
            isOpen = false;
        }

        function handleResize() {
            const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            if (screenWidth > 768) {
                dropdownElement.classList.add('hidden');
                isOpen = false;
            }
        }

        // Panggil fungsi handleResize saat halaman dimuat
        handleResize();

        // Tambahkan event listener untuk event resize
        window.addEventListener('resize', handleResize);
    }
</script>
