@extends('admin2.sidebar')

@section('title')
<title>Manage Cities</title>
<link rel="icon" href="{{asset('assets/img/1.png')}}"/>
@endsection

@section('list')
<div class="row mb-4 pb-5 mx-3">
    <div class="d-flex justify-content-between">
        <a href="/admin/cities/create"><button class="btn btn-primary mb-2">Create City</button></a>
        @if(session()->has('msg'))
        <div class="alert alert-success" role="alert">{{ session('msg') }}</div>
        @endif

    </div>
    <table class="table table-striped text-center table-bordered" id="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">City Name</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($cities))
            @foreach ($cities as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/admin/cities/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                        <form method="post" action="/admin/cities/{{ $item->id }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection