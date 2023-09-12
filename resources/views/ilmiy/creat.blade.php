@extends('app')
@section('content')

<h1 class="text-center p-3">Ilmiy ish qo'shish</h1>
<div class="container">
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
    <form method="post" action="{{route('request.sciense_save')}}">
        @csrf
       
        
        <div class="mb-3">
            <label for="name" class="form-label">F.I.O</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Ilmiy ish mavzusi</label>
            <input type="text" class="form-control" id="ish_nomi" name="ish_nomi" value="{{old('ish_nomi')}}">
        </div>
        <div class="mb-3">
            <label for="darajasi" class="form-label">Ilmiy darajasi</label>
            <input type="text" class="form-control" id="darajasi" name="darajasi" value="{{old('darajasi')}}">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}">
            
        </div>
    
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
</div>
</div>


@endsection