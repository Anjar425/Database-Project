@foreach ($mediaSosial as $m)
    <div id="editModal{{ $m->UserID }}"
        class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center ">
        <div class="bg-gray-800 rounded-lg w-1/2">
            <form method="POST" action="{{ url('/' . $m->UserID . '/update-medsos') }}" class=" w-5/6 mx-auto my-5">
                @csrf
                <h2 class=" text-center font-semibold text-lg text-white">Edit Media Sosial</h2><br>
                <div class=" mb-5">
                    <label for="UserID" class="block mb-2 text-sm font-medium  text-white">User ID</label>
                    <input name="UserID" type="text" id="UserID"
                        class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $m->UserID }}" required>
                </div>
                <div class="flex flex-row gap-3">
                    <div class=" basis-1/2 mb-5">
                        <label for="Username" class="block mb-2 text-sm font-medium  text-white">Username</label>
                        <input name="Username" type="text" id="Username"
                            class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $m->Username }}">
                    </div>
                    <div class="mb-5 basis-1/2">
                        <label for="JenisMedsos" class="block mb-2 text-sm font-medium  text-white">Jenis Medsos</label>
                        <input name="JenisMedsos" type="text" id="JenisMedsos"
                            class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $m->JenisMedsos }}">
                    </div>
                </div>
                <div class="mb-5">
                    <label for="LamaPenggunaan" class="block mb-2 text-sm font-medium  text-white">Lama Penggunaan</label>
                    <input name="LamaPenggunaan" type="text" id="LamaPenggunaan"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $m->LamaPenggunaan }}">
                </div>
                <div class="mb-5">
                    <label for="NoIDNasional" class="block mb-2 text-sm font-medium  text-white">Nomor ID Nasional</label>
                    <input name="NoIDNasional" type="text" id="NoIDNasional"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $m->NoIDNasional }}">
                </div>
                <div class="flex flex-row gap-3">
                    <button type="submit"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                    <button type="button" onclick="closeEditModal('{{ $m->UserID }}')"
                        class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
