@foreach ($kelahiran as $k)
    <div id="editModal{{ $k->NoAkta }}"
        class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center">
        <div class="bg-gray-800 rounded-lg w-1/2">
            <form method="POST" action="{{ url('/' . $k->NoAkta . '/update-kelahiran') }}" class=" w-5/6 mx-auto my-5">
                @csrf
                <h2 class=" text-center font-semibold text-lg text-white">Edit Kelahiran</h2><br>
                <div class="basis-1/3 mb-5">
                    <label for="NoAkta" class="block mb-2 text-sm font-medium  text-white">No Akta</label>
                    <input name="NoAkta" type="text" id="NoAkta"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $k->NoAkta }}" required>
                </div>
                <div class="flex flex-row gap-3">
                    <div class=" basis-1/2 mb-5">
                        <label for="NIKAyah" class="block mb-2 text-sm font-medium  text-white">NIK Ayah</label>
                        <input name="NIKAyah" type="text" id="NIKAyah"
                            class="border ext-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->NIKAyah }}">
                    </div>
                    <div class=" basis-1/2 mb-5">
                        <label for="NIKIbu" class="block mb-2 text-sm font-medium  text-white">NIK Ibu</label>
                        <input name="NIKIbu" type="text" id="NIKIbu"
                            class="border ext-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->NIKIbu }}">
                    </div>
                </div>

                <div class="flex flex-row gap-3">
                    <div class="mb-5 basis-1/3">
                        <label for="BeratLahir" class="block mb-2 text-sm font-medium  text-white">Berat Lahir</label>
                        <input name="BeratLahir" type="text" id="BeratLahir"
                            class=" border  text-sm rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->BeratLahir }}">
                    </div>
                    <div class="mb-5 basis-1/3">
                        <label for="PanjangLahir" class="block mb-2 text-sm font-medium  text-white">Panjang
                            Lahir</label>
                        <input name="PanjangLahir" type="text" id="PanjangLahir"
                            class=" border  text-sm rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->PanjangLahir }}">
                    </div>
                    <div class="mb-5 basis-1/3">
                        <label for="TempatKelahiran" class="block mb-2 text-sm font-medium  text-white">Tempat Kelahiran</label>
                        <input name="TempatKelahiran" type="text" id="TempatKelahiran"
                            class=" border  text-sm rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->TempatKelahiran }}">
                    </div>
                </div>

                <div class="flex flex-row gap-3">
                    <div class="mb-5 basis-1/2">
                        <label for="JamKelahiran" class="block mb-2 text-sm font-medium  text-white">Jam Kelahiran</label>
                        <input name="JamKelahiran" type="time" id="JamKelahiran"
                            class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->JamKelahiran }}">
                    </div>
                    <div class="mb-5 basis-1/2">
                        <label for="TanggalKelahiran" class="block mb-2 text-sm font-medium text-white">Tanggal Kelahiran</label>
                        <input name="TanggalKelahiran" type="date" id="TanggalKelahiran"
                            class=" border  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $k->TanggalKelahiran }}">
                    </div>
                    
                </div>
                
                <div class="mb-5">
                    <label for="NoKK" class="block mb-2 text-sm font-medium  text-white">NoKK</label>
                    <input name="NoKK" type="text" id="NoKK"
                        class=" border  text-sm  rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $k->NoKK }}">
                </div>

                <div class="flex flex-row gap-3">
                    <button type="submit"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                    <button type="button" onclick="closeEditModal('{{ $k->NoAkta }}')"
                        class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
