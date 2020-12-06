@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">contacts</i>
            </div>
            <h4 class="card-title">Add driver</h4>
          </div>
          <div class="card-body ">
            <form class="form-horizontal">


              <div class="row">

                  <label class="col-md-5 col-form-label">image</label>
                  <div class="col-lg-7">
                  <div class="  fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail img-circle">
                      <img src="../../assets/img/placeholder.jpg" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                    <div>
                      <span class="btn  btn-rose btn-file">
                        <span class="fileinput-new">Add Photo</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="..." />
                      </span>
                      <br />
                      <a href="#pablo" class="btn btn-danger  fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>
                </div>

              <div class="row">
                <label class="col-md-2 col-form-label">Fullname</label>
                <div class="col-md-4">
                  <div class="form-group has-default">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <label class="col-md-2 col-form-label">Phone number</label>
                <div class="col-md-4">
                  <div class="form-group has-default">
                    <input type="number" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-md-2 col-form-label">job type</label>
                <div class="col-md-4">
                  <div class="form-group has-default">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <label class="col-md-2 col-form-label">resturant</label>
                <div class="col-md-4">
                  <div class="form-group has-default">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-md-2 col-form-label">commission</label>
                <div class="col-md-4">
                  <div class="form-group has-default">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <label class="col-md-2 col-form-label">facebook account</label>
                <div class="col-md-4">
                  <div class="form-group has-default">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>



              <div class="row">
                <label class="col-md-2 col-form-label">Email</label>
                <div class="col-md-4">
                  <div class="form-group has-default">
                    <input type="email" class="form-control">
                  </div>
                </div>
                <label class="col-md-2 col-form-label">Password</label>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="password" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-md-8"></label>
                <div class="col-md-4">
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
            </form>
          </div>
          <div class="card-footer ">
            <div class="row">
              <div class="col-md-9">
                <button type="submit" class="btn btn-fill btn-rose">Sign in</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
