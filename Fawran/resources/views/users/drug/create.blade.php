@extends('layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-7">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">local_pharmacy</i>
                        </div>
                        <h4 class="card-title">Add Drug</h4>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{route('drug.store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-9">
                                <!-- Default values for Pharmacy -->
                                    <div class="form-group has-default">
                                
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Drug Name</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Drug Name in Arabic</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" class="form-control" name="name_ar">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-3 col-form-label">Price</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Offer Price</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="offer_price">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer" style="margin: 0 auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-fill btn-rose">Add</button>
                                <a href="/users/drug" class="btn btn-fill btn-rose">Cancel</a>
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
                            <label class="col-md-3 col-form-label">Available</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" name="is_aviliable">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">Pharmacy</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" name="pharmacy_id" value="{{$drug->pharmacy}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">Company</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" name="medical_company_id">
                                </div>
                            </div>
                        </div>
                     
                        <div class="row">
                            <label class="col-md-3 col-form-label"> Category</label>
                            <div class="col-md-9">
                                <div class="form-group has-default">
                                    <input type="text" class="form-control" name="category_id">
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