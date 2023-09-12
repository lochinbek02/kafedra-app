@extends('app')
@section('content')

<h1 class="text-center p-3">Xodim xaqida</h1>
<div class="rov">
    <div class="col-md-6">
    <div class="mb-3">
        <a href="{{route('request.main')}}">Ortga</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <td>T/R</td>
            <td>{{$company['id']}}</td>
        </tr>
        <tr>
            <td>Ismi</td>
            <td>{{$company['name']}}</td>
        </tr>
        <tr>
            <td>Familiyasi</td>
            <td>{{ $company['lastname']}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $company['email']}}</td>
        </tr>
        <tr>
            <td>Xodim telifon raqami</td>
            <td>{{ $company['phone']}}</td>
        </tr>
        
    </table>

    </div>
</div>


@endsection