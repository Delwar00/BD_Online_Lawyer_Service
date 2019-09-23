@extends('layouts.app')

@section('content')
<div style="width:82%;margin:auto;">

  <form method="post" action="{{ url('/update/info/submit') }}" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    <div class="row">
        <div class="col-md-6">
          <br><br><br>
            <div class="card">
                <div class="card-header">
                  <strong style="font-size:18px">Add Personal info!!!</strong>
                </div>

                <div class="card-body" style="">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input  type="text" class="form-control"  name="l_name">
                  </div>

                  <div class="form-group">
                    <label for="birth">Date of Birth:</label>
                    <input  type="date" class="form-control"  name="l_birth">
                  </div>
                  {{-- <div class="form-group">
                    <label for="Nid">National Id No:</label>
                    <input  type="text" class="form-control"  name="nid_num">
                  </div> --}}
                  <div class="form-group" >
                    <label for="father">Gender:</label>
                    <select  name="gender"class="" style="width:100%;padding:7px 4px;border-radius:3px;font-size:14px">
                      <option >========</option>
                      <option value="1">Male</option>
                      <option value="2">FeMale</option>
                      <option value="3">Others</option>
                    </select>
                  </div>
                  <div class="form-group" >
                    <label for="maried">Marital Status :</label>
                    <select  name="maritual_status" style="width:100%;padding:7px 4px;border-radius:3px;font-size:14px">
                      <option >========</option>
                      <option value="1">Maried</option>
                      <option value="2">UnMaried</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="religion">Religion:</label>
                    <input  type="text" class="form-control"  name="religion">
                  </div>
                  <div class="form-group">
                    <label for="talk">Details of you :</label>
                    <textarea name="details" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="rate">Rate Per Hour :</label>
                    <input  type="text" class="form-control"  name="price">
                  </div>
                  <div class="form-group">
                    <label for="image"><strong>Profile Photo:</strong></label>
                    <input  name="profile_photo"  class="" type="file" >
                  </div>
                </div>

            </div>

        </div>

        <div class="col-md-6">
          <br><br><br>
            <div class="card">
                <div class="card-header">
                  <strong style="font-size:18px">Add Address Related info!!!</strong>
                </div>
                <div class="card-body" style="">
                  <div class="form-group">
                    <label for="degrees">Personal Address:</label>
                    <textarea name="p_address" class="form-control" rows="2"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="degree">Office Address:</label>
                    <textarea name="o_address" class="form-control" rows="2"></textarea>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header">
                      <strong style="color:red;font-size:18px">Add Practices Area, Degrees & Experience !!!</strong>
                    </div>
                    <div class="card-body" style="">
                      <div class="form-group">
                        <label for="practices">Practices Area:</label>
                        <input  type="text" class="form-control"  name="prac_area">
                        <label >Rate your Practices Area Out of 5</label><br>
                        <select  name="add_status" style="width:100%;padding:7px 4px;border-radius:3px;font-size:14px">
                          <option >========</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>

                        </select>
                      </div>

                      {{-- <div class="form-group" id="form-main-area">
                            <label >Practices Area:</label>
                             <input id="form-clone" type="text" class="form-control" name="prac_area[]" placeholder="Please Enter Your Practics Area!!" required>
                         </div>
                      <div id="add">

                         </div>
                         <button type="button"  class="btn btn-primary" id="add_designation">Add More Practices Area
                           <span style="font-weight:bold;"> +</span>
                         </button><br><br> --}}


                      <div class="form-group">
                        <label for="degree">Highest Degree</label>
                        <input  type="text" class="form-control"  name="highest_degree">
                      </div>
                      <div class="form-group">
                        <label for="experience">Experience & Qualifications:</label>
                      <textarea name="qualifications" class="form-control" rows="2"> </textarea>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
          <br><br>
              <button type="submit" style="font-size:20px" class="btn btn-success btn-lg">Add Your Profile Information</button>
        </div>

            </div>
        </div>
      </div>
  </form>
    </div>
@endsection
{{-- @section('footer_scripts')
  <script>
      $(document).ready(function(){
        $('#add_designation').click(function() {
          var clone = $('#form-main-area').clone('#form-clone');
          clone.find('#form-clone').val('');
          $('#add').append(clone);
        });
      });
  </script>

@endsection --}}
