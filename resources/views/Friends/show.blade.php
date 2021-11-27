@extends('layouts.app')

@section('title', $friend->nama)

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Teman</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">{{ $friend->nama }}</h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold mb-4">Nomor Telepon: <span class="float-right">{{ $friend['no_tlp'] }}</span></h4>
                <h4 class="small font-weight-bold mb-4">Alamat: <span class="float-right">{{ $friend['alamat'] }}</span></h4>
                <h4 class="small font-weight-bold mb-4">Jenis Kelamin: <span class="float-right">{{ $friend['jenis_kelamin'] }}</span></h4>
                <h4 class="small font-weight-bold mb-4">Instagram: <span class="float-right">{{ $friend['instagram'] }}</span></h4>
                <h4 class="small font-weight-bold mb-4">Anggota Grup Saat Ini: <span class="float-right">{{ $friend->groups->name ?? 'Tidak Ada'}}</span></h4>
                <h4 class="small font-weight-bold mb-2 text-center">Riwayat Group</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Grup</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                        </thead>
                        <tbody>
                            @foreach ($riwayats as $riwayat)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $riwayat->groups->name }}</td>
                                    <td>
                                        @if ($riwayat->activity==1)
                                            Masuk
                                        @else
                                            Keluar
                                        @endif
                                    </td>
                                    <td>{{ $riwayat->date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection