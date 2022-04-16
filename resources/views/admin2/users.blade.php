@extends('admin2.sidebar')

@section('list')
<div class="row mb-4 pb-5 mx-3">
    <table class="table table-striped text-center table-bordered" id="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($users))
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->role_id->name}}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->no_hp }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-warning me-3">Edit</a>

                        <form method="post" action="/admin/users/{{ $user->id }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
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