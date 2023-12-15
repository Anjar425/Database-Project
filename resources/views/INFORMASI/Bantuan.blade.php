@extends('Layout.table')
@extends('Layout.notif')

@section('Title')
    BANTUAN BENCANA ALAM
@endsection

@section('table')
<p class="px-2 text-center py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">Q2 : Daftar Penerima bantuan bencana alam dengan jenis uang atau sembako dari penduduk yang sudah menikah </p>
    <thead>
        <tr>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                No ID Nasional
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Nama
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Status
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Jenis Bantuan
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Syarat
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr class="hover:bg-[#f5f5f5]">
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{ $row->NoIDNasional  }}
                </td>
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{$row->Nama }}</td>
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{$row->Status }}</td>
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{$row->JenisBantuan  }}</td>
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{$row->Syarat  }}</td>
            </tr>
        @endforeach
    </tbody>
@endsection
