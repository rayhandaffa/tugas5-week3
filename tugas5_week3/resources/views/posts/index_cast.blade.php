@extends('master')

@section('title')
    Daftar pemain:
@endsection

@section('create')
<a href="/cast/create" style="float: right"><button type="button" class="btn btn-primary mt-1 mb-2" ><i class="fa fa-plus" aria-hidden="true"></i>
    Add Caster</button></a>
@endsection

@section('successnotif')
@if(session('success'))
<script>  
    function hideAlert(){
        document.getElementById('notif').style.visibility="hidden";
    }
    setTimeout("hideAlert()", 2000);
</script>
    <div class="alert alert-success mb-0" id="notif" style="float: left; width:85%;">
        {{session('success')}}
    </div>
    
    

@endif

@endsection

@section('content')
    <table>
    @if (!empty($listCasts[0]))
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Actions</th>
        </tr>
        @foreach ($listCasts as $indexArr => $cast)
        <tr>
            <td>{{$indexArr + 1}}</td>
            <td>{{$cast->nama}}</td>
            <td>
            <a href="/cast/{{$cast->id}}"><button type="button" style="float: left;" class="btn btn-primary buttonShow mx-1" >Show</button></a>
            <a href="/cast/{{$cast->id}}/edit"><button type="button" style="float: left;" class="btn buttonEdit mx-1" >Edit</button></a>   
                <form action="/cast/{{$cast->id}}" method="post" id="">
                    @csrf
                    @method('delete')
                    <input value="Delete" type="submit" style="float: left;" class="btn btn-danger mx-1 btn-delete" id="delete">
                </form>
            </td>
        </tr> 
        @endforeach     
    @else
        <center><h3 colspan="3">NO DATA!</h3> </center>
    @endif
      
    </table>
@endsection

@push('deletenotif')
<script>
$(".btn-delete").on('click', function(e){
    e.preventDefault();
    var parent = document.getElementById("delete").parentElement;
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                setTimeout(function deleteFile(){
                parent.submit();
            }, 1000);
            swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
            });
            }
        });
});
</script>
@endpush