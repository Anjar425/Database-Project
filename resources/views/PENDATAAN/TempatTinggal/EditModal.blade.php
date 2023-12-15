@foreach ($tempattinggal as $data)
    <div id="editModal{{ $data->NoDaerah }}"
        class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center">
        <div class="bg-gray-800 rounded-lg w-1/2">
            <form method="POST" action="{{ url('/' . $data->NoDaerah . '/update-tempattinggal') }}"
                class=" w-5/6 mx-auto my-5">
                @csrf
                <h2 class=" text-center font-semibold text-lg text-white">Edit Tempat Tinggal</h2><br>
                <div class="mb-5">
                    <label for="NoDaerah" class="block mb-2 text-sm font-medium  text-white">NoDaerah</label>
                    <input name="NoDaerah" type="text" id="NoDaerah"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $data->NoDaerah }}" required>
                </div>

                <div class="mb-5 basis-1/3">
                    <label for="NamaDaerah" class="block mb-2 text-sm font-medium  text-white">NamaDaerah</label>
                    <input name="NamaDaerah" type="text" id="NamaDaerah"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $data->NamaDaerah }}">
                </div>
                <div class="mb-5 basis-1/3">
                    <label for="Kecamatan" class="block mb-2 text-sm font-medium  text-white">Kecamatan</label>
                    <input name="Kecamatan" type="text" id="Kecamatan"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $data->Kecamatan }}">
                </div>
                <div class="mb-5 basis-1/3">
                    <label for="Kabupaten" class="block mb-2 text-sm font-medium  text-white">Kabupaten</label>
                    <input name="Kabupaten" type="text" id="Kabupaten"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $data->Kabupaten }}">
                </div>
                <div class="mb-5 basis-1/3">
                    <label for="Provinsi" class="block mb-2 text-sm font-medium  text-white">Provinsi</label>
                    <input name="Provinsi" type="text" id="Provinsi"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $data->Provinsi }}">
                </div>


                <div class="flex flex-row gap-3">
                    <button type="submit"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                    <button type="button" onclick="closeEditModal('{{ $data->NoDaerah }}')"
                        class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
