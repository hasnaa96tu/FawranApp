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
            <h4 class="card-title">edit category</h4>
          </div>
          <div class="card-body ">


             <form class="form-horizontal" action ="{{route('category.update',$cat->id)}}" method = "post" enctype="multipart/form-data">
                       <input type="hidden" name="_method" value="PUT">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <div class="row">
                        <label class="col-md-3 col-form-label">type</label>
                    <div class=" col-md-9 ">
                                              <div class="dropdown bootstrap-select">
                                                <select class="selectpicker" name="type_id" data-size="10" data-style="btn btn-rose btn-round" title="Single Select" tabindex="-98">

                                                @foreach($type as $t)
                                                @if($t->id == $cat->type_id)
                                                <option value="{{$t->id}}" selected>{{$t->name}} </option>
                                                @else
                                                <option value="{{$t->id}}" >{{$t->name}} </option>
                                                @endif
                                                @endforeach
                                              </select>
                                             </div>
                                            </div>

                                          </div>
              <div class="row">
                <label class="col-md-3 col-form-label">name in English</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control" name="name" value="{{$cat->name}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-md-3 col-form-label">name in Arabic</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input type="text" class="form-control" name="name_ar" value="{{$cat->name_ar}}">
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
              </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
