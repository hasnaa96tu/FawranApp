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
                        <h4 class="card-title">Edit Company</h4>
                    </div>
                    <div class="card-body ">
                    <form method="POST" action="{{route('company.update', $company->id)}}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Company Name</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" class="form-control" name="name" value="{{$company->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Company Name in Arabic</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" class="form-control" name="name_ar" value="{{$company->name_ar}}">
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

            <!-- <div class="col-md-5">
                <div class="card ">

                    <div class="card-body ">

                     
                      
                      
                        
                       
                    
                      
                    
                        <br />
                     



                    </div>

                </div>
            </div> -->
        </div>
    </div>
</div>
</div>
@endsection