@extends('app')
@section('content')

<h1 class="text-center p-3">Ariza qoldirish sahifasi</h1>
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
    <form method="POST" action="{{route('companies.store')}}">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">*F.I.O</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
            
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <input style="height: 70px;" type="text" class="form-control" id="message" name="message" value="{{old('message')}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
</div>


@endsection