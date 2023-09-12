@extends('app')
@section('content')

<h1 class="text-center p-3">Xodim xaqida</h1>
<div class="container">
<div class="rov">
    <div class="col-md-6">
    <div class="mb-3">
        <a href="{{route('home.teacher')}}">Ortga</a>
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
            <td>Maqolalar soni</td>
            <td>{{ $company['maqolalar_soni']}}</td>
        </tr>
        <tr>
            <td>Tezis soni</td>
            <td>{{ $company['tezis_soni']}}</td>
        </tr>
        <tr>
            <td>Ilmiy kitoblar soni</td>
            <td>{{ $company['ilmiy_kitoblar_soni']}}</td>
        </tr>
        <tr>
            <td>Unvoni</td>
            <td>{{ $company->unvon}}</td>
        </tr>
        <tr>
            <td>Mutaxasisligi</td>
            <td>{{ $company->mutaxasisligi}}</td>
        </tr>
        <tr>
            <td>Ishga qabul qilingan yili</td>
            <td>{{ $company->year}}</td>
        </tr>
        
    </table>

    </div>
</div>

</div>
@endsection