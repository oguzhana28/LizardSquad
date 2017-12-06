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
                    <table class="table">
                        <thead>
                          <tr>
                            <th><input type="checkbox"></th>
                            <th>Student</th>
                            <th>student</th>
                          </tr>
                        </thead>
                        <tbody> 
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        </tbody>
                      </table>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
