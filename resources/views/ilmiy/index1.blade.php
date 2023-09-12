@extends('app')
 
@section('content')
    <h2 class="text-center">Ilmiy ishlar ro'yxati</h2>
    
    
    <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('request.sciense_create')}}" ><button class="btn btn-success" type="button">Ilmiy ish qo'shish</button></a>
        
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>T/R</th>
                <th>F.I.O</th>
                <th>Ilmiy ish nomi</th>
                <th>Darajasi</th>
                <th>Email</th>
                <th>Tahrirlash</th>
            </tr>
        </thead>
        <tbody>

            @foreach($documents as $document)
            <tr>
                <td>{{($documents->currentpage()-1)*$documents->perpage()+ $loop->index+1}}</td>
                <td>
                    <a href="{{route('request.sciense_show',$document['id'])}}"> 
                      
                    {{ $document ->name}}</a></td>
                <td>{{ $document->ish_nomi}}</td>
                <td>{{ $document ->darajasi}}</td>
                <td>{{ $document->email}}</td>
                <td><a href="{{route('request.sciense_edit',$document->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                    <br>
                    <form action="{{route('request.sciense_destroy',$document->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <br>
                        <button class="btn btn-danger" type="sumbit"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
                

            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $documents->links()}}
    </div>

@endsection