@extends('app')
 
@section('content')
    <h2 class="text-center">Bu xodimlar ro'yxati</h2>
    
    
    <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('request.save')}}" ><button class="btn btn-success" type="button">Xodim qo'shish</button></a>
        
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>T/R</th>
                <th>Ism</th>
                <th>Familiya</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>

            @foreach($companies as $company)
            <tr>
                <td>{{($companies->currentpage()-1)*$companies->perpage()+ $loop->index+1}}</td>
                <td>
                    <a href="{{route('companies.show',$company['id'])}}"> 
                      
                    {{ $company ->name}}</a></td>
                <td>{{ $company->lastname}}</td>
                <td>{{ $company ->email}}</td>
                <td>{{ $company->phone}}</td>
                <td><a href="{{route('companies.edit',$company->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                    <br>
                    <form action="{{route('companies.destroy',$company->id)}}" method="post">
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
    {{ $companies->links()}}
    </div>

@endsection