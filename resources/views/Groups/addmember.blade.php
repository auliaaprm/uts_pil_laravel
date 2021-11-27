@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Anggota Group</h1>
</div>
<form action="/groups/addmember/{{$group->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="friend_id">Nama Teman</label>
        <select class="form-control" aria-label="Default select example" name="friend_id" required style="max-width: 350px;">
            <option selected>Pilih teman untuk dimasukkan ke grup</option>
            @foreach ($friend as $f)
            <option value="{{$f->id}}">{{$f->nama}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Tambah ke group</button>
</form>

@endsection