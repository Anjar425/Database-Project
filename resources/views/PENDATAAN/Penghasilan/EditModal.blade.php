@foreach ($penghasilan as $data)
    <div id="editModal{{ $data->IDPenghasilan }}"
        class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center">
        <div class="bg-gray-800 rounded-lg w-1/2">
            <form method="POST" action="{{ url('/' . $data->IDPenghasilan . '/update-penghasilan') }}"
                class=" w-5/6 mx-auto my-5">
                @csrf
                <h2 class=" text-center font-semibold text-lg text-white">Edit Penghasilan</h2><br>
                <div class="mb-5">
                    <label for="IDPenghasilan" class="block mb-2 text-sm font-medium  text-white">ID Penghasilan</label>
                    <input name="IDPenghasilan" type="text" id="IDPenghasilan"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $data->IDPenghasilan }}" required>
                </div>
                
                    <div class="mb-5 basis-1/3">
                        <label for="JumlahPenghasilan"
                            class="block mb-2 text-sm font-medium  text-white">Jumlah Penghasilan</label>
                        <input name="JumlahPenghasilan" type="text" id="JumlahPenghasilan"
                            class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $data->JumlahPenghasilan }}">
                    </div>

                
                <div class="flex flex-row gap-3">
                    <button type="submit"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                    <button type="button" onclick="closeEditModal('{{ $data->IDPenghasilan }}')"
                        class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
