@extends('master')

@section('title')
    Edit Data Pemain Film:
@endsection

@section('subtitle')
    Biodata Pemain:
@endsection

@section('back')
<a href="/cast"><button type="button" class="btn btn-primary" ><i class="fa fa-times" aria-hidden="true"></i> Cancel</button></a><br>
@endsection

@section('content')

<div class="card-body">
    
    <form role="form" action="/cast/{{$catchedCaster->id}}" method="POST">
        @csrf
        @method('PUT')
    <div class="form-group row">
        <label for="inputNama3" class="col-sm-2 col-form-label">Nama:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNama3" name="Nama" value="{{old('nama', $catchedCaster->nama)}}" placeholder="Nama" >
            @error('Nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        
    </div>
    <div class="form-group row">
        <label for="inputUmur3" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputUmur3" name="Umur" value="{{old('umur', $catchedCaster->umur)}}"placeholder="Umur" >
            @error('Umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
    </div>

    <div class="form-group row">
        <label for="inputBio3" class="col-sm-2 col-form-label">Bio</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="inputBio3" name="Bio" placeholder="Bio" rows="5" cols="50">{{old('bio', $catchedCaster->bio)}}</textarea>
            @error('Bio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
    </div>

    <button type="submit" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i> Tambahkan</button>
    </form>
</div>

@endsection