@extends('Layout.table')
@extends('Layout.notif')

@section('Title')
    MEDIA SOSIAL
@endsection

@section('table')
    <thead>
        <tr>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                User ID
            </th>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Username
            </th>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Jenis Medsos
            </th>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Lama Penggunaan
            </th>
            <th class="py-2 text-left px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Nomor ID Nasional
            </th>
            <th class="py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mediaSosial as $m)
            <tr class="hover:bg-[#f5f5f5]">
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $m->UserID }}
                </td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $m->Username }}</td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $m->JenisMedsos }}
                </td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $m->LamaPenggunaan }}
                    <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $m->NoIDNasional }}
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">
                    <div class="flex flex-row gap-x-2 justify-center">
                        <button type="button" onclick="openEditModal('{{ $m->UserID }}')"
                            class=" text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-green-600 hover:bg-green-700 focus:ring-green-500">Edit</button>
                        <button type="button" onclick="openDeleteModal('{{ url('/' . $m->UserID . '/delete-medsos') }}')"
                            class=" text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-red-500">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection

@section('Insert Modal')
    @include('PENDATAAN.Medsos.InsertModal')
@endsection

@section('Edit Modal')
    @include('PENDATAAN.Medsos.EditModal')
@endsection

