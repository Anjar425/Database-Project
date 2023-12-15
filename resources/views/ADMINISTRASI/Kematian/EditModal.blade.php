@foreach ($kematian as $k)
    <div id="editModal{{ $k->NoSuratKematian }}"
        class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center">
        <div class="bg-gray-800 rounded-lg w-1/2">
            <form method="POST" action="{{ url('/' . $k->NoSuratKematian . '/update-kematian') }}" class=" w-5/6 mx-auto my-5">
                @csrf
                <h2 class=" text-center font-semibold text-lg text-white">Edit Kematian</h2><br>
                <div class="basis-1/3 mb-5">
                    <label for="NoSuratKematian" class="block mb-2 text-sm font-medium  text-white">No Surat Kematian</label>
                    <input name="NoSuratKematian" type="text" id="NoSuratKematian"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $k->NoSuratKematian }}" required>
                </div>
                <div class="flex flex-row gap-3">
                    <div class=" basis-1/2 mb-5">
                        <label for="Nama" class="block mb-2 text-sm font-medium  text-white">Nama</label>
                        <input name="Nama" type="text" id="Nama"
                            class="border ext-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->Nama }}">
                    </div>
                    <div class=" basis-1/2 mb-5">
                        <label for="Pelapor" class="block mb-2 text-sm font-medium  text-white">Pelapor</label>
                        <input name="Pelapor" type="text" id="Pelapor"
                            class="border ext-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->Pelapor }}">
                    </div>
                </div>

                    <div class="mb-5 basis-1/3">
                        <label for="TempatKematian" class="block mb-2 text-sm font-medium  text-white">Tempat Kematian</label>
                        <input name="TempatKematian" type="text" id="TempatKematian"
                            class=" border  text-sm rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->TempatKematian }}">
                    </div>

                <div class="flex flex-row gap-3">
                    <div class="mb-5 basis-1/2">
                        <label for="Jam" class="block mb-2 text-sm font-medium  text-white">Jam</label>
                        <input name="Jam" type="time" id="Jam"
                            class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->JamKematian }}">
                    </div>
                    <div class="mb-5 basis-1/2">
                        <label for="Tanggal" class="block mb-2 text-sm font-medium text-white">Tanggal</label>
                        <input name="Tanggal" type="date" id="Tanggal"
                            class=" border  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->TanggalKematian }}">
                    </div>     
                </div>
                
                <div class="mb-5 basis-1/3">
                    <label for="NoKK" class="block mb-2 text-sm font-medium  text-white">No KK</label>
                    <input name="NoKK" type="text" id="NoKK"
                        class=" border  text-sm  rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $k->NoKK }}">
                </div>

                <div class="flex flex-row gap-3">
                    <button type="submit"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                    <button type="button" onclick="closeEditModal('{{ $k->NoSuratKematian }}')"
                        class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
