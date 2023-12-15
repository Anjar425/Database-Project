@foreach ($pajak as $p)
    <div id="editModal{{ $p->NPWP }}"
        class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center">
        <div class="bg-gray-800 rounded-lg w-1/2">
            <form method="POST" action="{{ url('/' . $p->NPWP . '/update-pajak') }}" class=" w-5/6 mx-auto my-5">
                @csrf
                <h2 class=" text-center font-semibold text-lg text-white">Edit Pajak</h2><br>
                <div class="mb-5">
                    <label for="NPWP" class="block mb-2 text-sm font-medium  text-white">NPWP</label>
                    <input name="NPWP" type="text" id="NPWP"
                        class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        value="{{ $p->NPWP }}" required>
                </div>

                <div class="flex flex-row gap-3">
                    <div class="mb-5">
                        <label for="PajakPenghasilan" class="block mb-2 text-sm font-medium  text-white">PajakPenghasilan</label>
                        <input name="PajakPenghasilan" type="number" id="PajakPenghasilan"
                            class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->PajakPenghasilan }}">
                    </div>
                    <div class="mb-5">
                        <label for="PBB" class="block mb-2 text-sm font-medium text-white">PBB</label>
                        <input name="PBB" type="number" id="PBB"
                            class=" border  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->PBB }}">
                    </div>
                    <div class="mb-5">
                        <label for="PajakKendaraan" class="block mb-2 text-sm font-medium  text-white">PajakKendaraan</label>
                        <input name="PajakKendaraan" type="number" id="PajakKendaraan"
                            class=" border  text-sm rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->PajakKendaraan }}">
                    </div>
                    <div class="mb-5">
                        <label for="JumlahPajak" class="block mb-2 text-sm font-medium  text-white">JumlahPajak</label>
                        <input name="JumlahPajak" type="number" id="JumlahPajak"
                            class=" border  text-sm rounded-lg lock w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->JumlahPajak }}">
                    </div>
                </div>
                
                <div class="flex flex-row gap-3">
                    <div class=" basis-1/2 mb-5">
                        <label for="IDPenghasilan" class="block mb-2 text-sm font-medium  text-white">IDPenghasilan</label>
                        <input name="IDPenghasilan" type="text" id="IDPenghasilan"
                            class="border ext-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->IDPenghasilan }}">
                    </div>
                    <div class=" basis-1/2 mb-5">
                        <label for="NoIDNasional" class="block mb-2 text-sm font-medium  text-white">NoIDNasional</label>
                        <input name="NoIDNasional" type="text" id="NoIDNasional"
                            class="border ext-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->NoIDNasional }}">
                    </div>
                </div>

                <div class="flex flex-row gap-3">
                    <button type="submit"
                        class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                    <button type="button" onclick="closeEditModal('{{ $p->NPWP }}')"
                        class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
