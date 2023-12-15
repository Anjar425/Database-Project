<div id="insertModal" class="hidden fixed inset-0 bg-gray-400 bg-opacity-60 justify-center items-center ">
    <div class="bg-gray-800 rounded-lg w-1/2">
        <form method="POST" action="save-swasta" class=" w-5/6 mx-auto my-5">
            @csrf
            <h2 class=" text-center font-semibold text-lg text-white">Insert Pekerjaan</h2><br>
            <div class="mb-5">
                <label for="IDPekerjaan" class="block mb-2 text-sm font-medium  text-white">IDPekerjaan</label>
                <input name="IDPekerjaan" type="text" id="IDPekerjaan"
                    class="border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"required>
            </div>
            <div class="flex flex-row gap-3">
                <div class="mb-5  basis-1/2">
                    <label for="NamaPerusahaan"
                        class="block mb-2 text-sm font-medium  text-white">NamaPerusahaan</label>
                    <input name="NamaPerusahaan" type="text" id="NamaPerusahaan"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-5 basis-1/2">
                    <label for="SJabatan" class="block mb-2 text-sm font-medium  text-white">SJabatan</label>
                    <input name="SJabatan" type="text" id="SJabatan"
                        class=" border  text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>
            <div class="mb-5">
                <label for="Kontak" class="block mb-2 text-sm font-medium text-white">Kontak</label>
                <input name="Kontak" type="text" id="Kontak"
                    class=" border  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="flex flex-row gap-3">
                <button type="submit"
                    class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mb-5">Submit</button>
                <button type="button" onclick="closeInsertModal()"
                    class="text-blue-600  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-gray-100 hover:bg-gray-300 focus:ring-gray-600 mb-5">Cancel</button>
            </div>
        </form>
    </div>
</div>
