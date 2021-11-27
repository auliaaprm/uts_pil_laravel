@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Friends</h1>
    <a href="/friends/create" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Teman</a>
</div>

<!-- Content Row -->
<div class="row">
    @foreach ($friends as $friend)
        <!-- Content Column -->
        <div class="col-lg-4 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/friends/{{ $friend['id'] }}" class="m-0 font-weight-bold text-success h6">{{ $friend['nama'] }}</a>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold mb-4">Nomor Telepon: <span class="float-right">{{ $friend['no_tlp'] }}</span></h4>
                    <h4 class="small font-weight-bold mb-4">Alamat: <span class="float-right">{{ $friend['alamat'] }}</span></h4>
                    <h4 class="small font-weight-bold mb-4">Jenis Kelamin: <span class="float-right">{{ $friend['jenis_kelamin'] }}</span></h4>
                    <h4 class="small font-weight-bold mb-4">Instagram: <span class="float-right">{{ $friend['instagram'] }}</span></h4>
                </div>
                <div class="card-footer">
                    <div class="d-inline float-right">
                        <a href="/friends/{{$friend['id']}}/edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        <form action="/friends/{{ $friend['id'] }}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></b>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row d-flex justify-content-center">
    {{ $friends-> links() }}
</div>
@endsection