@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">CSV Import</div>

                <div class="panel-body">
                    Here can you insert a CSV!<br>

                    <form class="form-inline" action="readCsv" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" name="csv">
                      <span class="custom-file-control"></span>
                    </label>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <br>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')

