@extends('admin2.sidebar')

@section('list')

<div class="row mb-4 pb-5 mx-3">
    <div class="d-flex justify-content-between">
        <a href="/admin/orders/create"><button class="btn btn-primary mb-2">Create City</button></a>
        @if(session()->has('msg'))
        <div class="alert alert-success" role="alert">{{ session('msg') }}</div>
        @endif

    </div>
    <table class="table table-striped text-center table-bordered" id="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Chekout Date</th>
                <th scope="col">Paid at</th>
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

                        <form method="post" action="/admin/cities/{{ $item->id }}" style="display:inline" onsubmit="return confirm('You sure?')">
                            @csrf
                            @method('')
                            <button class="btn btn-success">Approve</button>
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