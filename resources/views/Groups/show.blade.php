@extends('layouts.app')

@section('title', $group['name'])

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Group</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-4 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">{{ $group['name'] }}</h6>
                <p class="card-text">{{ $group['description'] }}</p>
            </div>
            <div class="card-body">
                <h6>Jumlah Anggota Saat Ini: {{ $jumlah_anggota }} </h6>
                <h6>Jumlah Anggota Masuk : {{ $group['total_users_join'] }}</h6>
                <h6>Jumlah Anggota Keluar : {{ $group['total_users_leave'] }}</h6>
            </div>
        </div>
    </div>
</div>
@endsection