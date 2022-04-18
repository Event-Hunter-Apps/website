@extends('admin2.sidebar')

@section('title')
<title>Form Ticket</title>
@endsection

@section('list')
<div class="container">
    <h2 class="text-center mb-4">{{ $title }} </h2>
    <form class="row g-3" method="POST" action="/{{ $action }}">
        @csrf
        <input type="hidden" name="_method" value="{{ $method }}" />
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Kategori</label>
            <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id">
                <option selected>{{ isset($tiket)?$tiket->kategori_id:'' }}</option>
                @foreach ($categories as $kategori)
                <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                @endforeach
            </select>
        </div>
        @error('kategori_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ isset($tiket)?$tiket->nama:old('nama') }}">
            </div>
        </div>
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input name="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ isset($tiket)?$tiket->deskripsi:old('deskripsi') }}">
            </div>
        </div>
        @error('deskripsi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input name="harga" type="text" class="form-control @error('harga') is-invalid @enderror" value="{{ isset($tiket)?$tiket->harga:old('harga') }}">
            </div>
        </div>
        @error('harga')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</div>
@endsection