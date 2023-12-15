@extends('Layout.table')
@extends('Layout.notif')

@section('Title')
    TRANSMIGRASI
@endsection

@section('table')
    <thead>
        <tr>
            <th class="py-2 border-b-[1px] text-left px-2 text-sm border-b-gray-200 font-semibold text-gray-300 ">
                IDMigrasi
            </th>
            <th class="py-2 border-b-[1px] text-left px-2 text-sm border-b-gray-200 font-semibold text-gray-300 ">
                LokasiTransmigrasi
            </th>
            <th class="py-2 border-b-[1px] text-left px-2 text-sm border-b-gray-200 font-semibold text-gray-300 ">
                AlamatAsal
            </th>
            <th class="py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transmigrasi as $data)
            <tr class="hover:bg-[#f5f5f5]">
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $data->IDMigrasi }}
                </td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">
                    {{ $data->LokasiTransmigrasi }}</td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $data->AlamatAsal }}
                </td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">
                    <div class="flex flex-row gap-x-2 justify-center">
                        <button type="button" onclick="openEditModal('{{ $data->IDMigrasi }}')"
                            class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-green-600 hover:bg-green-700 focus:ring-green-500">Edit</button>
                        <button type="button"
                            onclick="openDeleteModal('{{ url('/' . $data->IDMigrasi . '/delete-transmigrasi') }}')"
                            class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-red-500">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection

@section('Insert Modal')
    @include('PENDATAAN.Migrasi.Transmigrasi.InsertModal')
@endsection

@section('Edit Modal')
    @include('PENDATAAN.Migrasi.Transmigrasi.EditModal')
@endsection
