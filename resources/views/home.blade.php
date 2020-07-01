@extends('layouts.layout')

@section('title')
    profile
@endsection

@section('content')
    <form action="{{route('user.update')}}" method="post" >
        @csrf


        <hr>
        <div class="container bootstrap snippet">

            <div class="row">
                <div class="col-sm-3"><!--left col-->


                    <div class="text-center">
                        <img src="{{asset('image/'.$user['image'])}}" class="avatar img-circle img-thumbnail" alt="avatar">
                        <h6>Upload a different photo...</h6>
                        <input type="file" name="image" class="text-center center-block file-upload">
                    </div>
                    <br>
                </div><!--/col-3-->
                <div class="col-sm-9">



                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="first_name"><h4>Nom </h4></label>
                                        <input type="text" class="form-control" name="name" value="{{$user['name']}}" id="first_name" title="enter your first name if any.">
                                    </div>
                                </div>


                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="phone"><h4>telephone</h4></label>
                                        <input type="text" class="form-control" name="tel" id="phone" value="{{$user['tel']}}"title="enter your phone number if any.">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Email</h4></label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{$user['email']}}" title="enter your email.">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="phone"><h4>Adresse</h4></label>
                                        <input type="text" class="form-control" name="address" id="phone" value="{{$user['address']}}" title="enter your phone number if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                    </div>
                                </div>


                            <hr>

                        </div><!--/tab-pane-->
                    </div><!--/tab-pane-->
                </div><!--/tab-content-->

            </div><!--/col-9-->
        </div><!--/row-->
    </form>
@endsection
