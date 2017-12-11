@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">CSV Import</div>

                <div class="panel-body">
                    Here can you connect the fields!<br>
                   
                    <form class="form-inline" action="selectAndImport" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Import veld</th>
                            <th></th>
                            <th>Database veld</th>
                          </tr>
                        </thead>
                        <tbody> 
                        <td>
                        @foreach($file_columns as $columns)
                        <li>{{ $columns }}</li>
                        @endforeach
                        </td>
                        @for ($i = 0; $i < sizeof($file_data); $i++)
                        <td>
                        @foreach($file_data[$i] as $data)
                           <li>
                                    {{ $data }}
                             </li>
                         @endforeach
                        </td>
                        @endfor
                        <td>
                        @foreach($file_columns as $columns)
                           <li>
                            <select>
                                   <option value="none">select option</option>
                                @foreach($file_columns as $columns) 
                                    <option value="{{$columns}}">{{ $columns }}</option>
                                @endforeach
                             </select>
                             </li>
                         @endforeach
                        </td> 
                        </tbody>
                      </table>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')

