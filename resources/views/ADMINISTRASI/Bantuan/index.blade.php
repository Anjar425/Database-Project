@extends('Layout.table')
@extends('Layout.notif')

@section('Title')
    BANTUAN
@endsection

@section('table')
    <thead>
        <tr>
            <th class="py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                ID Bantuan
            </th>
            <th class="py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Jenis Bantuan
            </th>
            <th class="py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Syarat
            </th>
            <th class="py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bantuan as $b)
            <tr class="hover:bg-[#f5f5f5]">
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $b->IDBantuan }}</td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $b->JenisBantuan }}</td>
                <td class="p-2 border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">{{ $b->Syarat }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">
                    <div class="flex flex-row gap-x-2 justify-center">
                        <button type="button" onclick="openEditModal('{{ $b->IDBantuan }}')"
                            class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-green-600 hover:bg-green-700 focus:ring-green-500">Edit</button>
                        <button type="button" onclick="openDeleteModal('{{ url('/' . $b->IDBantuan . '/delete-bantuan') }}')"
                            class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-red-500">Delete</button>
                    </div>
            </tr>
        @endforeach
    </tbody>
@endsection

@section('Insert Modal')
    @include('ADMINISTRASI.Bantuan.InsertModal')
@endsection

@section('Edit Modal')
    @include('ADMINISTRASI.Bantuan.EditModal')
@endsection