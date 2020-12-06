@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">store</i>
            </div>
            <h4 class="card-title">Add category</h4>
          </div>
          <div class="card-body ">
            <form class="form-horizontal">


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
                            <input type="file" name="..." />
                          </span>
                          <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>

                    </div>
                </div>
                </div>

              <div class="row">
                <label class="col-md-3 col-form-label"> name</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-md-3 col-form-label"> description</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>


          </div>
          <div class="card-footer ">
            <div class="row">
              <div class="col-md-9">
                <button type="submit" class="btn btn-fill btn-rose">save</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection
