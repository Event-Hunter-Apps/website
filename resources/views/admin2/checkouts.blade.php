@extends('admin2.sidebar')

@section('title')
<title>Manage Checkouts</title>
<link rel="icon" href="{{asset('assets/img/1.png')}}"/>
@endsection

@section('list')


<div class="row mb-4 pb-5 mx-3">
    <table class="table table-striped text-center table-bordered" id="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Chekout Date</th>
                <th scope="col">Status</th>
                <th scope="col">Total Price</th>
                <th scope="col">Paid at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($checkouts))
            @foreach ($checkouts as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->user->nama }}</td>
                <td>{{ $item->tanggal_checkout }}</td>

                @if($item->status == "Pending")
                <td><p class="text-white bg-warning rounded-3">{{ $item->status }}</p></td>
                @elseif($item->status == "Complete")
                <td><p class="text-white bg-success rounded-3">{{ $item->status }}</p></td>
                @else
                <td><p class="text-white bg-danger rounded-3">{{ $item->status }}</p></td>
                @endif

                <td>Rp. {{ $item->idrPrice }}</td>
                <td>{{ isset($item->paid_at)?$item->paid_at:'-' }}</td>
                <td>
                    @if($item->status == "Cancel")
                    -
                    @else
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <form method="post" action="/admin/checkouts/{{ $item->id }}" style="display:inline" onsubmit="return confirm('You sure?')">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-{{isset($item->paid_at)?'secondary':'success'}}" {{isset($item->paid_at)?'disabled':''}}>{{isset($item->paid_at)?'Approved':'Approve'}}</button>
                        </form>
                    </div>
                    @endif
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection