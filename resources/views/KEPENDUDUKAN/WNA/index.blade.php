@extends('Layout.table')
@extends('Layout.notif')

@section('Title')
    WNA
@endsection

@section('table')
    <thead>
        <tr>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                No ID Nasional
            </th>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Jenis Visa
            </th>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                No Izin Tinggal
            </th>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Kewarganegaraan
            </th>
            <th class="py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($wna as $w)
            <tr class="hover:bg-[#f5f5f5]">
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $w->NoIDNasional }}
                </td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $w->JenisVisa }}</td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $w->NoIzinTinggal }}
                </td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $w->Kewarganegaraan }}
                </td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">
                    <div class="flex flex-row gap-x-2 justify-center">
                        <button type="button" onclick="openEditModal('{{ $w->NoIDNasional }}')"
                            class=" text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-green-600 hover:bg-green-700 focus:ring-green-500">Edit</button>
                        <button type="button" onclick="openDeleteModal('{{ url('/' . $w->NoIDNasional . '/delete-wna') }}')"
                            class=" text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-red-500">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection

@section('Insert Modal')
    @include('KEPENDUDUKAN.WNA.InsertModal')
@endsection

@section('Edit Modal')
    @include('KEPENDUDUKAN.WNA.EditModal')
@endsection

