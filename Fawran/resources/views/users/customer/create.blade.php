@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="card ">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">contacts</i>
            </div>
            <h4 class="card-title">Add Customer</h4>
          </div>
          <div class="card-body ">
            <form class="form-horizontal"action ="{{route('customer.store')}}" method = "post" enctype="multipart/form-data">
             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">


              <div class="row">

                  <label class="col-md-3 col-form-label">image</label>
                  <div class="col-lg-9">
                  <div class="  fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail img-circle">
                      <img src="../../assets/img/placeholder.jpg" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                    <div>
                      <span class="btn  btn-rose btn-file">
                        <span class="fileinput-new">Add Photo</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image" />
                      </span>
                      <br />
                      <a href="#pablo" class="btn btn-danger  fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>
                </div>

              <div class="row">
                <label class="col-md-3 col-form-label">Fullname</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control" name="fullname">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label">fullname in Arabic</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control" name="fullname_ar">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label">Phone number</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="number" class="form-control" name="phone_number">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label"> address</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control" name="location">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label"> address in Arabic</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control" name="location_ar">
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-md-3 col-form-label">username</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="email" class="form-control" name="email">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label">Password</label>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="password" class="form-control" name="password">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label"> confirm Password</label>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3"></label>
                <div class="col-md-9">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value=""> Remember me
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>

          </div>
          <div class="card-footer ">
            <div class="row">
              <div class="col-md-9">
                <button type="submit" class="btn btn-fill btn-rose">Sign in</button>
              </div>
            </div>
          </div>
            </form>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
