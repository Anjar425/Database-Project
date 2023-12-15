@extends('Layout.table')
@extends('Layout.notif')

@section('Title')
    PERSENTASE PENYAKIT
@endsection

@section('table')
<p class="px-2 text-center py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">Q1 : Persentase Penyakit yang ada di seluruh Penduduk Indonesia </p>
    <thead>
        <tr>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Nama Penyakit
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Persentase
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result as $row)
            <tr class="hover:bg-[#f5f5f5]">
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{ $row->NamaPenyakit }}
                </td>
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{ number_format($row->Persentase, 2) }}%</td>
            </tr>
        @endforeach
    </tbody>
@endsection
