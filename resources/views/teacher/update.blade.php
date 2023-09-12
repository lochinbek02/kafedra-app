@extends('app')
@section('content')

<h1 class="text-center p-3">Xodim ma'lumotlarni o'zgartirish sahifasi</h1>
<div class="rov">
    <div class="col-md-6">
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <form method="POST" action="{{route('home.teacher_update',['id' => $company->id])}}">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">F.I.O</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$company->name}}">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Maqolalar soni</label>
            <input type="number" class="form-control" id="maqolalar_soni" name="maqolalar_soni" value="{{$company->maqolalar_soni}}">
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Tezislar soni</label>
            <input type="number" class="form-control" id="tezis_soni" name="tezis_soni" value="{{$company->tezis_soni}}">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Ilmiy kitoblar soni</label>
            <input type="number" class="form-control" id="ilmiy_kitoblar_soni" name="ilmiy_kitoblar_soni" value="{{ $company->ilmiy_kitoblar_soni}}">
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Unvoni</label>
            <input type="text" class="form-control" id="unvon" name="unvon" value="{{ $company->unvon}}">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mutaxasisligi</label>
            <input type="text" class="form-control" id="mutaxasisligi" name="mutaxasisligi" value="{{ $company->mutaxasisligi}}">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ishga qabul qilingan yili</label>
            <input type="text" class="form-control" id="year" name="year" value="{{ $company->year}}">
            
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
</div>


@endsection