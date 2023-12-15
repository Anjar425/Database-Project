<div>
    <nav class=" bg-transparent border-b-[0.2px] border-gray-500">
        <div class="px-8 mx-auto max-w-8xl">
            <div class="flex items-center justify-between h-16">
                <div class="w-full justify-between flex items-center">
                    <a class="flex-shrink-0 text-white font-bold" href="/">
                        DATABASE PROJECT
                    </a>
                    <div class="hidden md:block">
                        <div class="flex flex-row items-baseline ml-10 space-x-4">
                            <div class="flex flex-col group items-center">
                                <a class="text-gray-300 {{ Request::is('penduduk') || Request::is('wna') || Request::is('ortu') || Request::is('keluarga') || Request::is('keluargaortu') ? 'active:font-semibold text-white scale-105' : '' }} hover:scale-105  hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    href="/penduduk">
                                    KEPENDUDUKAN
                                </a>
                                <div
                                    class="hidden z-2 w-64 absolute group-hover:flex group-hover:flex-col group-hover:space-y-2 my-9 py-2 bg-gray-700/90 rounded-md">
                                    <a href="/penduduk"
                                        class="text-gray-300  hover:text-white px-4 rounded-md text-sm font-medium">PENDUDUK</a>
                                    <a href="/wna"
                                        class="text-gray-300  hover:text-white px-4 rounded-md text-sm font-medium">WNA</a>
                                    <a href="/keluarga"
                                        class="text-gray-300  hover:text-white px-4 rounded-md text-sm font-medium">KELUARGA</a>
                                    <a href="/penanggungjawab"
                                        class="text-gray-300  hover:text-white px-4 rounded-md text-sm font-medium">PENANGGUNG
                                        JAWAB KELUARGA</a>
                                </div>
                            </div>

                            <div class="flex flex-col group items-center">
                                <a href="/kelahiran"
                                    class="text-gray-300 {{ Request::is('kelahiran') || Request::is('kematian') || Request::is('pajak') || Request::is('bantuan') ? 'active:font-semibold text-white scale-105' : '' }} hover:scale-105  hover:text-white px-3 py-2
                                rounded-md text-sm font-medium">
                                    ADMINISTRASI
                                </a>
                                <div
                                    class="hidden z-2 w-56 group-hover:flex group-hover:flex-col group-hover:space-y-2 absolute my-9 py-2 bg-gray-700/90 rounded-md">
                                    <a href="/kelahiran"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">DATA
                                        KELAHIRAN</a>
                                    <a href="/kematian"
                                        class="text-gray-300  hover:text-white px-4 rounded-md text-sm font-medium">DATA
                                        KEMATIAN</a>
                                    <a href="/pajak"
                                        class="text-gray-300  hover:text-white px-4 rounded-md text-sm font-medium">PAJAK</a>
                                    <a href="/bantuan"
                                        class="text-gray-300  hover:text-white px-4 rounded-md text-sm font-medium">BANTUAN
                                    </a>
                                </div>
                            </div>
                            <div class="flex flex-col group items-center">
                                <a class="text-gray-300 {{ Request::is('perkawinan') || Request::is('pns') || Request::is('swasta') || Request::is('wirausaha') || Request::is('penghasilan') || Request::is('wirausaha') || Request::is('medsos') || Request::is('penyakit') || Request::is('pendidikan') || Request::is('tempattinggal') || Request::is('transmigrasi') || Request::is('imigrasi') || Request::is('emigrasi') ? 'active:font-semibold text-white scale-105' : '' }} hover:scale-105  hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    href="/perkawinan">
                                    PENDATAAN
                                </a>
                                <div
                                    class="hidden z-2 w-60 group-hover:flex group-hover:flex-col group-hover:space-y-2 fixed my-9 py-2 bg-gray-700/90 rounded-md">
                                    <a href="/perkawinan"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">DATA
                                        PERKAWINAN</a>
                                    <div class="group/pekerjaan">
                                        <a href="/pekerjaan"
                                            class="text-gray-300 group/pekerjaan hover:text-white px-4 rounded-md text-sm font-medium">PEKERJAAN</a>
                                        <div
                                            class="hidden z-30 absolute group-hover/pekerjaan:flex group-hover/pekerjaan:flex-col group-hover/pekerjaan:space-y-2  bg-gray-700/90 rounded-md py-2 w-56 right-[242px] top-7">
                                            <a href="/pns"
                                                class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">
                                                PNS</a>
                                            <a href="/swasta"
                                                class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">SWASTA</a>
                                            <a href="/wiraswasta"
                                                class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">WIRASWASTA</a>
                                        </div>
                                    </div>
                                    <a href="/penghasilan"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">PENGHASILAN</a>
                                    <!--
                                    <a href="/pekerjaan-penghasilan"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">PEKERJAAN
                                        DAN PENGHASILAN</a>
                                    -->
                                    <a href="/medsos"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">MEDIA
                                        SOSIAL
                                    </a>
                                    <a href="/penyakit"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">RIWAYAT
                                        PENYAKIT</a>
                                    <a href="/pendidikan"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">PENDIDIKAN</a>
                                    <a href="/tempattinggal"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">TEMPAT
                                        TINGGAL
                                    </a>
                                    <div class="group/migrasi">
                                        <a href="/migrasi"
                                            class="text-gray-300 group/migrasi hover:text-white px-4 rounded-md text-sm font-medium">MIGRASI</a>
                                        <div
                                            class="hidden z-30 absolute group-hover/migrasi:flex group-hover/migrasi:flex-col group-hover/migrasi:space-y-2  bg-gray-700/90 rounded-md py-2 w-56 right-[242px] top-[200px]">
                                            <a href="/transmigrasi"
                                                class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">
                                                TRANSMIGRASI</a>
                                            <a href="/imigrasi"
                                                class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">IMIGRASI</a>
                                            <a href="/emigrasi"
                                                class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">EMIGRASI</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex flex-col group items-center">
                                <a href="/persentase-penyakit"
                                    class="text-gray-300 {{ Request::is('kelahiran') || Request::is('kematian') || Request::is('pajak') || Request::is('bantuan') ? 'active:font-semibold text-white scale-105' : '' }} hover:scale-105  hover:text-white px-3 py-2
                                rounded-md text-sm font-medium">
                                    INFORMASI
                                </a>
                                <div
                                    class="hidden z-2 w-56 group-hover:flex group-hover:flex-col group-hover:space-y-2 absolute my-9 py-2 bg-gray-700/90 rounded-md">
                                    <a href="/persentase-penyakit"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">PERSENTASE
                                        PENYAKIT</a>
                                    <a href="/daftarbantuan"
                                        class="text-gray-300 hover:text-white px-4 rounded-md text-sm font-medium">BANTUAN
                                        BENCANA ALAM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
