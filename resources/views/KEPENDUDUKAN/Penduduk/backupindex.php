@extends('Layout.table')
@extends('Layout.notif')

@section('Title')
    PENDUDUK
@endsection

@section('table')
    <thead>
        <tr>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                No ID Nasional
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Nama
            </th>
            <th class="px-2 text-center w-24 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Status
            </th>
            <th class="px-2 text-center w-40 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Golongan Darah
            </th>
            <th class="px-2 text-center w-16 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Usia
            </th>
            <th class="px-2 text-center w-16 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Agama
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Kecamatan
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Kabupaten
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Provinsi
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Tanggal Lahir
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Bulan Lahir
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Tahun Lahir
            </th>
            <th class="px-2 text-center w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Tempat Lahir
            </th>
            <th class="px-2 w-44 py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penduduk as $p)
            <tr class="hover:bg-[#f5f5f5]">
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->NoIDNasional }}
                </td>
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->Nama }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->Status }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->GolDarah }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->Usia }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->Agama }}</td>
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->Kecamatan }}</td>
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->Kabupaten }}</td>
                <td class="p-2 border-b-[1px] text-left text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->Provinsi }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->TanggalLahir }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->BulanLahir }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->TahunLahir }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">{{ $p->TempatLahir }}</td>
                <td class="p-2 border-b-[1px] text-center text-xs border-b-gray-700 font-normal text-gray-400">
                    <div class="flex flex-row gap-x-2">
                        <button type="button" onclick="openEditModal('{{ $p->NoIDNasional }}')"
                            class=" basis-1/2 text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-14 py-2.5 text-center bg-green-600 hover:bg-green-700 focus:ring-green-500">Edit</button>
                        <button type="button"
                            class=" basis-1/2 text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-14 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-red-500">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection

@section('Insert Modal')
    @include('KEPENDUDUKAN.Penduduk.InsertModal')
@endsection

@section('Edit Modal')
    @include('KEPENDUDUKAN.Penduduk.EditModal')
@endsection