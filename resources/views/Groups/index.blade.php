@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">My Groups</h1>
    <a href="/groups/create" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Group</a>
</div>

<!-- Content Row -->
<div class="row">
    @foreach ($groups as $group)
        <!-- Content Column -->
        <div class="col-lg-4 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/groups/{{$group['id']}}" class="m-0 font-weight-bold text-success h6">{{ $group['name'] }}</a>
                    <p class="card-text">{{ $group['description'] }}</p>
                    <a href="/groups/addmember/{{$group['id']}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Anggota</a>
                </div>
                <div class="card-body">
                    @forelse ($group->friends as $friend)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$friend->nama}}
                            <br>
                            {{$friend->no_tlp}}
                            <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger">x</button>
                            </form>
                        </li>
                    @empty
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tidak Ada Anggota
                        </li>
                    @endforelse
                </div>
                <div class="card-footer">
                    <div class="d-inline float-right">
                        <a href="/groups/{{$group['id']}}/edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        <form action="/groups/{{ $group['id'] }}" class="d-inline" method="POST">
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
    {{ $groups-> links() }}
</div>


{{-- <h3>LIST OF MY GROUP</h3>
<a href="/groups/create" class="card-link btn-primary">Tambah Group</a>
<div class="mb-3"></div>
<div class="row">
    @foreach ($groups as $group)
    <div class="col-sm-4">
        <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header bg-success text-light">
                <b>Group</b>
            </div>
            <div class="card-body text-dark">
                <a href="/groups/{{$group['id']}}" class="card-title">{{ $group['name'] }}</a>
                <p class="card-text">{{ $group['description'] }}</p>
                <hr>
                <a href="/groups/addmember/{{$group['id']}}" class="card-link btn-primary">Tambah Anggota Teman</a>
                @foreach ($group->friends as $friend)

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$friend->nama}}
                    <br>
                    {{$friend->no_tlp}}
                    <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bedge card-link btn-danger">x</button>
                    </form>
                </li>


                @endforeach
                </ul>
                <hr>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{ $groups-> links() }}
</div>
<div class="mb-3"></div> --}}
@endsection