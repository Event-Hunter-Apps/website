@extends('admin2.sidebar')
@section('title')
<title>Form City</title>
<link rel="icon" href="{{asset('assets/img/1.png')}}" />
@endsection
@section('list')
<div class="container">
    <h2 class="text-center mb-4">{{ $title }} City</h2>
    <form class="row g-3" method="POST" action="/{{ $action }}">
        @csrf
        <input type="hidden" name="_method" value="{{ $method }}" />
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ isset($city)?$city->name:old('name') }}">
            </div>
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</div>
@endsection