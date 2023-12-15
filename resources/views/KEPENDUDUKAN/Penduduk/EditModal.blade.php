@foreach ($penduduk as $p)
    <div id="editModal{{ $p->NoIDNasional }}"
        class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center">
        <div class="bg-gray-800 rounded-lg w-1/2">
            <form method="POST" action="{{ url('/' . $p->NoIDNasional . '/update-penduduk') }}"
                class=" w-5/6 mx-auto my-5">
                @csrf
                <h2 class=" text-center font-semibold text-lg text-white">Edit Penduduk</h2><br>
                <div class="basis-1/2 mb-5">
                    <label for="NoIDNasional" class="block mb-2 text-sm font-medium  text-white">No ID
                        Nasional</label>
                    <input name="NoIDNasional" type="text" id="NoIDNasional"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $p->NoIDNasional }}" required>
                </div>
                <div class="flex flex-row gap-3">
                    <div class=" basis-1/2 mb-5">
                        <label for="Nama" class="block mb-2 text-sm font-medium  text-white">Nama</label>
                        <input name="Nama" type="text" id="Nama"
                            class="border ext-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->Nama }}">
                    </div>
                    <div class="basis-1/2 mb-5">
                        <label for="JenisKelamin" class="block mb-2 text-sm font-medium  text-white">Jenis
                            Kelamin</label>
                        <input name="JenisKelamin" type="text" id="JenisKelamin"
                            class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->JenisKelamin }}" required>
                    </div>
                </div>

                <div class="flex flex-row gap-3">
                    <div class="mb-5 basis-1/2">
                        <label for="TempatLahir" class="block mb-2 text-sm font-medium  text-white">Tempat Lahir</label>
                        <input name="TempatLahir" type="text" id="TempatLahir"
                            class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->TempatLahir }}">
                    </div>
                    <div class="mb-5 basis-1/2">
                        <label for="TanggalLahir" class="block mb-2 text-sm font-medium text-white">Tanggal
                            Lahir</label>
                        <input name="TanggalLahir" type="date" id="TanggalLahir"
                            class=" border  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->TanggalLahir }}">
                    </div>
                </div>

                <div class="flex flex-row gap-3">
                    <div class="mb-5">
                        <label for="Status" class="block mb-2 text-sm font-medium  text-white">Status</label>
                        <input name="Status" type="text" id="Status"
                            class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->Status }}">
                    </div>
                    <div class="mb-5">
                        <label for="GolDarah" class="block mb-2 text-sm font-medium text-white">Golongan Darah</label>
                        <input name="GolDarah" type="text" id="GolDarah"
                            class=" border  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->GolDarah }}">
                    </div>
                    <div class="mb-5">
                        <label for="Usia" class="block mb-2 text-sm font-medium  text-white">Usia</label>
                        <input name="Usia" type="number" id="Usia"
                            class=" border  text-sm rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->Usia }}">
                    </div>
                    <div class="mb-5">
                        <label for="Agama" class="block mb-2 text-sm font-medium  text-white">Agama</label>
                        <input name="Agama" type="text" id="Agama"
                            class=" border  text-sm rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->Agama }}">
                    </div>
                </div>

                <div class="flex flex-row gap-3">
                    <div class="mb-5 basis-1/3">
                        <label for="Kecamatan" class="block mb-2 text-sm font-medium  text-white">Kecamatan</label>
                        <input name="Kecamatan" type="text" id="Kecamatan"
                            class=" border  text-sm  rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->Kecamatan }}">
                    </div>
                    <div class="mb-5 basis-1/3">
                        <label for="Kabupaten" class="block mb-2 text-sm font-medium text-white">Kabupaten</label>
                        <input name="Kabupaten" type="text" id="Kabupaten"
                            class=" border  text-sm  rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->Kabupaten }}">
                    </div>
                    <div class="mb-5 basis-1/3">
                        <label for="Provinsi" class="block mb-2 text-sm font-medium  text-white">Provinsi</label>
                        <input name="Provinsi" type="text" id="Provinsi"
                            class=" border  text-sm  rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->Provinsi }}">
                    </div>
                </div>
                <div class="mb-5 basis-1/3">
                    <label for="NoKK" class="block mb-2 text-sm font-medium  text-white">Nomor KK</label>
                    <input name="NoKK" type="text" id="NoKK"
                        class=" border  text-sm  rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $p->NoKK }}">
                </div>

                <div class="flex flex-row gap-3">
                    <button type="submit"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                    <button type="button" onclick="closeEditModal('{{ $p->NoIDNasional }}')"
                        class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
