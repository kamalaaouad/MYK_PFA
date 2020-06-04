@extends('layouts.app')

@section('content')
    <form action="{{route('user.update',["user"=>auth::user()->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="wrapper">

            <div class="left">

                <img src="image/{{auth::user()->image}}" alt="user" width="100" >
                <br>
                <h4>{{auth::user()->name}}</h4>
                <a href="{{url('/index')}}" class="btn btn-warning">go to see product</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="right">
                <div class="info">
                    <h3>Information</h3>
                    <div class="info_data">
                        <div class="data">
                            <label>Nom</label>
                            <input type="text" name="name" value="{{auth::user()->name}}">
                        </div>
                        <div class="data">
                            <label>Prenom</label>
                            <input type="text" value="{{auth::user()->name}}">
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="info_data">
                        <div class="data">
                            <label>Tel</label>
                            <input type="text" name="email" value="{{auth::user()->email}}">
                        </div>
                        <div class="data">
                            <label>Email</label>
                            <input type="text" value="{{auth::user()->image}}">
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="info_data">
                        <div class="data">
                            <label>@</label>
                            <input type="text" value="{{auth::user()->address}}">
                        </div>
                        <div class="data">
                            <label>Mobile</label>
                            <input type="text" value="{{auth::user()->tel}}">
                        </div>
                    </div>
                </div>
                <label>Image</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" value="{{auth::user()->image}}">
                        <label class="custom-file-label">Choose file</label>
                    </div>


                </div>
                <button class="btn btn-primary" type="submit">Edit</button>
                <br><br>
                <div class="social_media">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>

            </div>

        </div>
    </form>
@endsection
