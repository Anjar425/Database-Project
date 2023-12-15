@foreach ($perkawinan as $p)
    <div id="editModal{{ $p->NoNikah }}"
        class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center">
        <div class="bg-gray-800 rounded-lg w-1/2">
            <form method="POST" action="{{ url('/' . $p->NoNikah . '/update-perkawinan') }}" class=" w-5/6 mx-auto my-5">
                @csrf
                <h2 class=" text-center font-semibold text-lg text-white">Edit Perkawinan</h2><br>
                <div class="mb-5">
                    <label for="NoNikah" class="block mb-2 text-sm font-medium  text-white">Nomor Nikah</label>
                    <input name="NoNikah" type="text" id="NoNikah"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $p->NoNikah }}" required>
                </div>

                <div class="mb-5 ">
                    <label for="WaktuNikah" class="block mb-2 text-sm font-medium  text-white">Waktu Nikah</label>
                    <input name="WaktuNikah" type="date" id="WaktuNikah"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $p->WaktuNikah }}">
                </div>
                <div class="mb-5">
                    <label for="NamaIstri" class="block mb-2 text-sm font-medium  text-white">Nama Istri</label>
                    <input name="NamaIstri" type="text" id="NamaIstri"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $p->NamaIstri }}" required>
                </div>
                <div class="mb-5">
                    <label for="NoIDNasional" class="block mb-2 text-sm font-medium  text-white">Nomor ID
                        Nasional</label>
                    <input name="NoIDNasional" type="text" id="NoIDNasional"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $p->NoIDNasional }}" required>
                </div>

                <div class="flex flex-row gap-3">
                    <button type="submit"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                    <button type="button" onclick="closeEditModal('{{ $p->NoNikah }}')"
                        class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
