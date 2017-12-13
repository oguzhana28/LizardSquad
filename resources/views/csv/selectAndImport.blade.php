@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">CSV Import</div>

                <div class="panel-body">
                    Here can you choose what you want to insert!<br>

                    <form class="form-inline" action="insertIntoDB" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <table class="table">
                        <thead>
                          <tr>
                            <th><input type="checkbox"></th>
                            <th>firstname</th>
                            <th>prefix</th>
                            <th>lastname</th>
                            <th>mobile</th>
                            <th>address</th>
                            <th>house_number</th>
                          </tr>
                        </thead>
                        <tbody> 
                        
                        @for($i=0;$i < count($readData); $i++)
                               <tr>
                                <td><input type="checkbox"  id="{{ $readData[$i]['id'] }}" name="{{ $readData[$i]['id'] }}"></td>
                                <td>{{ $readData[$i]['firstname'] }}</td>
                                  <td>{{ $readData[$i]['prefix'] }}</td>
                                  <td>{{ $readData[$i]['lastname'] }}</td>
                                  <td>{{ $readData[$i]['mobile'] }}</td>
                                  <td>{{ $readData[$i]['address'] }} </td>
                                  <td>{{ $readData[$i]['house_number'] }}</td>
                        </tr>
                                  
                        
                         @endfor
                        </tbody>
                      </table>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
