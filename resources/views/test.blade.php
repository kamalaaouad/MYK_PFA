@extends('layouts.layout')

@section('title')
    profile
@endsection

@section('content')
    <form action="{{route('user.update',["user"=>auth::user()->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

    <hr>
    <div class="container bootstrap snippet">

        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div class="text-center">
                    <img src="{{asset('image/'.auth::user()->image)}}" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                <br>
            </div><!--/col-3-->
            <div class="col-sm-9">



                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>Nom </h4></label>
                                    <input type="text" class="form-control" name="first_name" value="{{auth::user()->name}}" id="first_name" title="enter your first name if any.">
                                </div>
                            </div>


                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>telephone</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{auth::user()->tel}}"title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{auth::user()->email}}" title="enter your email.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Adresse</h4></label>
                                    <input type="text" class="form-control" name="adresse" id="phone" value="{{auth::user()->address}}" title="enter your phone number if any.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div><!--/tab-pane-->






                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    </form>
@endsection
