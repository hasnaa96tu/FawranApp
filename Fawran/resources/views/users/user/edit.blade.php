@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
          </ul>
        </div>
      @endif
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">contacts</i>
            </div>
            <h4 class="card-title">Add User</h4>
          </div>
          <div class="card-body ">

            <form class="form-horizontal" method="POST" action="{{route('user.update',$u->id)}}">
                @csrf


                <div class=" row">
                  <label for="name" class="col-md-3 col-form-label ">type</label>
                    <div class=" col-md-9 ">
                      <div class="dropdown bootstrap-select">
                        <select class="selectpicker" name="type_id" data-size="10" data-style="btn btn-rose btn-round"  tabindex="-98">
                        <option value=""></option>
                        <option value="1">admin</option>
                        <option value="2">editor</option>
                        <option value="3">driver</option>
                      </select>
                    </div>
                </div>
                </div>

              <div class="row">
                <label class="col-md-3 col-form-label">username</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$u->name}}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>


              <div class="row">
                <label class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" class="form-control" value="{{$u->name}}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label">Password</label>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="password" class="form-control" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label"> confirm Password</label>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class=" row">
                <label for="name" class="col-md-3 col-form-label ">role</label>
                  <div class=" col-md-9 ">
                    <div class="dropdown bootstrap-select">
                      <select class="selectpicker" name="roles[]" data-size="10" data-style="btn btn-rose btn-round"  tabindex="-98" multiple>

                      <option value="1">admin</option>
                      <option value="2">editor</option>
                      <option value="3">driver</option>

                    </select>
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
            </form>
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

    </div>
  </div>
</div>
@endsection
