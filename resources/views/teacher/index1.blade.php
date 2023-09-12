@extends('app')
 
@section('content')
    <h2 class="text-center">Kafedra o'qituvchilari ma'lumotlari</h2>
    
    
    <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('home.teacher_create')}}" ><button class="btn btn-success" type="button">Ilmiy ish qo'shish</button></a>
        
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>T/R</th>
                <th>F.I.O</th>
                <th>Maqolalar soni</th>
                <th>Tezis soni</th>
                <th>Ilmiy kitoblar soni</th>
                <th>Unvoni</th>
                <th>Mutaxasisligi</th>
                <th>Ishga qabul qilingan yili</th>
                <th>Tahrirlash</th>
            </tr>
        </thead>
        <tbody>

            @foreach($documents as $document)
            <tr>
                <td>{{($documents->currentpage()-1)*$documents->perpage()+ $loop->index+1}}</td>
                <td>
                    <a href="{{route('home.teacher_show',$document['id'])}}"> 
                      
                    {{ $document ->name}}</a></td>
                <td>{{ $document->maqolalar_soni}}</td>
                <td>{{ $document ->tezis_soni}}</td>
                <td>{{ $document->ilmiy_kitoblar_soni}}</td>
                <td>{{ $document->unvon}}</td>
                <td>{{ $document->mutaxasisligi}}</td>
                <td>{{ $document->year}}</td>
                
                <td><a href="{{route('home.teacher_edit',$document->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                    <br>
                    <form action="{{route('home.teacher_destroy',$document->id)}}" method="post">
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