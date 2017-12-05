@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Groups</div>

                <div class="panel-body">
                    Here can you create new students!<br>

                    <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                        <div id="uploadImage">
                        <label>Select image to upload:</label>
                         <input type="file" name="file" id="file">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">firstname</label>
                        <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Enter firstname" name="firstname">
                      </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">prefix</label>
                        <input type="text" class="form-control" id="prefix" aria-describedby="prefixHelp" placeholder="Enter prefix" name="prefix">
                      </div>
                      
                    <div class="form-group">
                        <label for="exampleInputEmail1">lastname</label>
                        <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Enter lastname" name="lastname">
                      </div>
                      
                        <div class="form-group">
                        <label for="exampleInputEmail1">mobile</label>
                        <input type="text" class="form-control" id="mobile" aria-describedby="mobileHelp" placeholder="Enter mobile" name="mobile">
                      </div>
                      
                        <div class="form-group">
                        <label for="exampleInputEmail1">address</label>
                        <input type="text" class="form-control" id="address" aria-describedby="addressHelp" placeholder="Enter address" name="address">
                      </div>    
                        
                        <div class="form-group">
                        <label for="exampleInputEmail1">house_number</label>
                        <input type="text" class="form-control" id="house_number" aria-describedby="house_numberHelp" placeholder="Enter house_number" name="house_number">
                      </div>
                      
                    <div class="form-group">
                        <label for="exampleInputEmail1">favorite</label>
                        <input type="checkbox"  name="favorite">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                      <br>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection