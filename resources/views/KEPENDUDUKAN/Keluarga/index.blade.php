@extends('Layout.table')

@section('Title')
    KELUARGA
@endsection

@section('table')
    <thead>
        <tr>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                No KK
            </th>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Nomor Telepon Kepala Keluarga
            </th>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Nama Kepala Keluarga
            </th>
            <th class="py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($keluarga as $k)
            <tr class="hover:bg-[#f5f5f5]">
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $k->NoKK }}
                </td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $k->NoTelpKepKel }}</td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $k->NamaKepKel }}</td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">
                    <div class="flex flex-row gap-x-2 justify-center">
                        <button type="button" onclick="openEditModal('{{ $k->NoKK }}')"
                            class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-green-600 hover:bg-green-700 focus:ring-green-500">Edit</button>
                        <button type="button" onclick="openDeleteModal('{{ url('/' . $k->NoKK . '/delete-keluarga') }}')"
                            class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-red-500">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection

@section('Insert Modal')
    @include('KEPENDUDUKAN.Keluarga.InsertModal')
@endsection

@section('Edit Modal')
    @include('KEPENDUDUKAN.Keluarga.EditModal')
@endsection