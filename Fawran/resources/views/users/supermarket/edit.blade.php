@extends('layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-7">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">store</i>
                        </div>
                        <h4 class="card-title">Edit Supermarket</h4>
                    </div>
                    <div class="card-body ">
                    <form method="POST" action="{{route('supermarket.update', $supermarket->id)}}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="hidden" class="form-control" name="category_id" value="2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Supermarket Name</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" class="form-control" name="name" value="{{$supermarket->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Supermarket Name in Arabic</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" class="form-control" name="name_ar" value="{{$supermarket->name_ar}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">Supermarket User</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Password</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer" style="margin: 0 auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-fill btn-rose">Edit</button>
                                <a href="/users/pharmacy" class="btn btn-fill btn-rose">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
            </div>

            <div class="col-md-5">
                <div class="card ">

                    <div class="card-body ">

                        <div class="row">
                            <label class="col-md-3 col-form-label">Address</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" name="location" value="{{$supermarket->location}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">Address in Arabic</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" name="location_ar" value="{{$supermarket->location_ar}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">Phone Number</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" name="phone_number" value="{{$supermarket->phone_number}}">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <label class="col-md-3 col-form-label">Drugs Number</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <label class="col-md-3 col-form-label">Open Time</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="time" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">Closing Time</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="time" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">First Day</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">Second Day</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">

                            <label class="col-md-3 col-form-label">image</label>
                            <div class="col-lg-9">

                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="../../assets/img/image_placeholder.jpg" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose  btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image" />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection