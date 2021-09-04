@extends('master')

@section('title')
    Isi Data Pemain Film Baru:
@endsection

@section('subtitle')
    Biodata Pemain:
@endsection

@section('back')
<a href="/cast"><button type="button" class="btn btn-primary" ><i class="fa fa-angle-left" aria-hidden="true"></i>
    Back</button></a><br>
@endsection

@section('content')

<div class="card-body">
    
    <form role="form" action="/cast" method="POST">
        @csrf
        <div class="form-group row">
        <label for="inputNama3" class="col-sm-2 col-form-label">Nama:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNama3" name="Nama" placeholder="Nama" >
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
    </div>
    <div class="form-group row">
        <label for="inputUmur3" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputUmur3" name="Umur" placeholder="Umur" >
            @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
    </div>

    <div class="form-group row">
        <label for="inputBio3" class="col-sm-2 col-form-label">Bio</label>
        <div class="col-sm-10">
            <textarea type="textarea" class="form-control" id="inputBio3" name="Bio" placeholder="Bio" rows="5" cols="50"></textarea>
            @error('bio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
    </div>

    <button type="submit" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Tambahkan</button>
</form>
</div>

@endsection