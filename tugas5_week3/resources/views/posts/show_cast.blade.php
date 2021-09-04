@extends('master')

@section('back')
<a href="/cast"><button type="button" class="btn btn-primary" ><i class="fa fa-angle-left" aria-hidden="true"></i>
    Back</button></a><br>
@endsection

@section('content')

<h3>Biodata:</h3>
<table>
    <tr>
        <td>Data</td>
        <td>Keterangan</td>
    </tr> 
    <tr>
        
        <td>ID</td>
        <td>{{$catchedCaster->id}}</td>
    </tr> 
    <tr>

        <td>Nama</td>
        <td>{{$catchedCaster->nama}}</td>
    </tr> 
    <tr>

        <td>Umur</td>
        <td>{{$catchedCaster->umur}}</td>
    </tr> 
    <tr>

        <td>Bio</td>
        <td>{{$catchedCaster->bio}}</td>
    </tr> 
</table>
@endsection