@extends('layouts.app')
    @section('content')
      <h1> Reviewer Create </h1>

      <form action="{{url('reviewers/create')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" id="journal_form">


        <div class="form-group">
            <label class="col-md-8 col-md-offset-2 control-label" >Reviewer Name</label>
              <div class="col-md-8 col-md-offset-2 inputGroupContainer">
            <input name="name" placeholder="Reviewer Name" class="form-control"  type="text">
              </div>
        </div>

        <div class="form-group">
            <label class="col-md-8 col-md-offset-2 control-label" >Email</label>
              <div class="col-md-8 col-md-offset-2 inputGroupContainer">
            <input name="email" placeholder="Email" class="form-control"  type="email">
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-8 col-md-offset-2 control-label" >Organization Name</label>
              <div class="col-md-8 col-md-offset-2 inputGroupContainer">
            <input name="organization" placeholder="Organization Name" class="form-control"  type="text">
              </div>
        </div>

        <div class="form-group">
            <label class="col-md-8 col-md-offset-2 control-label" >Position Name</label>
              <div class="col-md-8 col-md-offset-2 inputGroupContainer">
            <input name="position" placeholder="Position Name" class="form-control"  type="text">
              </div>
        </div>

        <div class="form-group">
          <label class="col-md-8 col-md-offset-2 control-label"></label>
          <div class="col-md-8 col-md-offset-2 inputGroupContainer">
            <input type="submit" Value="Submit" class="btn btn-primary bg-green-500">
          </div>
      </div>

      </form>
    @endsection
