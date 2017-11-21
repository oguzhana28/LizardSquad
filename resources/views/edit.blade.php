@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Groups</div>

                <div class="panel-body">
                    Here can you create new groups!<br>
                    
                    
                    <form class="form-inline">
                      <label class="sr-only" for="inlineFormInput">Name</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">Group name</div>
                      <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">
                      </div>

                      <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox"> favorite
                        </label>
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