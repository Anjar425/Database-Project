@foreach ($emigrasi as $data)
    <div id="editModal{{ $data->IDMigrasi }}"
        class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center">
        <div class="bg-gray-800 rounded-lg w-1/2">
            <form method="POST" action="{{ url('/' . $data->IDMigrasi . '/update-emigrasi') }}"
                class=" w-5/6 mx-auto my-5">
                @csrf
                <h2 class=" text-center font-semibold text-lg text-white">Edit Emigrasi</h2><br>
                <div class="mb-5">
                    <label for="IDMigrasi" class="block mb-2 text-sm font-medium  text-white">IDMigrasi</label>
                    <input name="IDMigrasi" type="text" id="IDMigrasi"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $data->IDMigrasi }}" required>
                </div>
                <div class="mb-5 basis-1/3">
                    <label for="ENegaraTujuan"
                        class="block mb-2 text-sm font-medium  text-white">ENegaraTujuan</label>
                    <input name="ENegaraTujuan" type="text" id="ENegaraTujuan"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $data->ENegaraTujuan }}">
                </div>

                <div class="mb-5 basis-1/3">
                    <label for="ENoPaspor" class="block mb-2 text-sm font-medium text-white">ENoPaspor</label>
                    <input name="ENoPaspor" type="text" id="ENoPaspor"
                        class=" border  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $data->ENoPaspor }}">
                </div>

                <div class="flex flex-row gap-3">
                    <button type="submit"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                    <button type="button" onclick="closeEditModal('{{ $data->IDMigrasi }}')"
                        class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
