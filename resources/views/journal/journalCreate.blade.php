@extends('layouts.app')
    @section('content')
      <div class="container center">
        @include('layouts.messages')
        <br>
         <h1 align="center">JOURNAL FORM</h1> <br>
      <form action="{{url('journals')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" id="journal_form">
        {{ csrf_field() }}

  <!-- Text input-->
        <div class="form-group">
          <label class="col-md-8 col-md-offset-2 control-label" >Article title</label>
            <div class="col-md-8 col-md-offset-2 inputGroupContainer">
          <input name="title" placeholder="Journal title" class="form-control"  type="text">
            </div>
          </div>

    <!-- Text input-->
        <div class="form-group">
        <label class="col-md-8 col-md-offset-2 control-label">Abstract</label>
        <div class="col-md-8 col-md-offset-2 inputGroupContainer">
         <textarea name="abstract" rows="6" cols="80" class="form-control"></textarea>
        </div>
        </div>

        <div class="form-group">
          <label class="col-md-8 col-md-offset-2 control-label" >Key Words</label>
            <div class="col-md-8 col-md-offset-2 inputGroupContainer">
          <input name="keywords" placeholder="Key Words" class="form-control"  type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-8 col-md-offset-2 control-label" >Category</label>
              <div class="col-md-8 col-md-offset-2 inputGroupContainer">

                <select name="category_id" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  @foreach($categories as $category )
                  <option value="{{$category->id}}">{{$category->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>

          <div class="form-group">
            <label class="col-md-8 col-md-offset-2 control-label" >Publish Date</label>
              <div class="col-md-8 col-md-offset-2 inputGroupContainer">
            <input name="jdate" class="form-control"  type="date">
              </div>
            </div>

          <div class="form-group">
            <label class="col-md-8 col-md-offset-2 control-label" >Authors Details</label>
            </div>

            <!-- Author 1-->
            <div class="form-group">
              <label class="col-md-8 col-md-offset-2 control-label" ></label>
                <div class="col-md-8 col-md-offset-2 inputGroupContainer">
              <b>Lead Author:</b>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-8 col-md-offset-2 control-label" >First Name</label>
                  <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                <input name="a1fname" placeholder="First Name" class="form-control"  type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-8 col-md-offset-2 control-label" >Last Name</label>
                    <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                  <input name="a1lname" placeholder="Last Name" class="form-control"  type="text">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-8 col-md-offset-2 control-label" >Affiliation</label>
                      <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                    <input name="a1affiliation" placeholder="Affiliation" class="form-control"  type="text">
                      </div>
                    </div>

                      <div class="form-group">
                        <label class="col-md-8 col-md-offset-2 control-label" >Email</label>
                          <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                        <input name="a1email" placeholder="Email" class="form-control"  type="email">
                          </div>
                        </div>

                        <!-- Author 2-->
                        <div class="form-group">
                          <label class="col-md-8 col-md-offset-2 control-label" ></label>
                            <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                          <b>Author 2:</b>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-8 col-md-offset-2 control-label" >First Name</label>
                              <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                            <input name="a2fname" placeholder="First Name" class="form-control"  type="text">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-8 col-md-offset-2 control-label" >Last Name</label>
                                <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                              <input name="a2lname" placeholder="Last Name" class="form-control"  type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-md-8 col-md-offset-2 control-label" >Affiliation</label>
                                  <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                                <input name="a2affiliation" placeholder="Affiliation" class="form-control"  type="text">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-md-8 col-md-offset-2 control-label" >Email</label>
                                    <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                                  <input name="a2email" placeholder="Email" class="form-control"  type="email">
                                    </div>
                                  </div>

                                    <!-- Author 3-->
                                    <div class="form-group">
                                      <label class="col-md-8 col-md-offset-2 control-label" ></label>
                                        <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                                      <b>Author 3:</b>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-8 col-md-offset-2 control-label" >First Name</label>
                                          <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                                        <input name="a3fname" placeholder="First Name" class="form-control"  type="text">
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="col-md-8 col-md-offset-2 control-label" >Last Name</label>
                                            <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                                          <input name="a3lname" placeholder="Last Name" class="form-control"  type="text">
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="col-md-8 col-md-offset-2 control-label" >Affiliation</label>
                                              <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                                            <input name="a3affiliation" placeholder="Affiliation" class="form-control"  type="text">
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label class="col-md-8 col-md-offset-2 control-label" >Email</label>
                                                <div class="col-md-8 col-md-offset-2 inputGroupContainer">
                                              <input name="a3email" placeholder="Email" class="form-control"  type="email">
                                                </div>
                                              </div>

                                              
          <!-- Text input-->
        <div class="form-group">
          <label class="col-md-8 col-md-offset-2 control-label" >Insert doc file</label>
            <div class="col-md-8 col-md-offset-2 inputGroupContainer">
          <input type="file" name="doc">
            </div>
          </div>

          <!-- Text input-->
        <div class="form-group">
          <label class="col-md-8 col-md-offset-2 control-label" >Insert pdf file</label>
            <div class="col-md-8 col-md-offset-2 inputGroupContainer">
          <input type="file" name="pdf">
            </div>
          </div>

          <!-- Text input-->
        <div class="form-group">
          <label class="col-md-8 col-md-offset-2 control-label" >Insert image</label>
            <div class="col-md-8 col-md-offset-2 inputGroupContainer">
          <input type="file" name="image">
            </div>
        </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-8 col-md-offset-2 control-label"></label>
      <div class="col-md-8 col-md-offset-2 inputGroupContainer">
  <input type="submit" Value="Submit" class="btn btn-primary">
    </div>
  </div>
</form>
    </div>

    <br>
    <script src="{{asset('js/journal.js')}}"></script>
  @endsection
