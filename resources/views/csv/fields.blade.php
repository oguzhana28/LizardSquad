@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">CSV Import</div>

                <div class="panel-body">
                    Here can you connect the fields!<br>
                   
                    <form class="form-inline" action="readCsv" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Import veld</th>
                            <th>Database veld</th>
                          </tr>
                        </thead>
                        <tbody> 
                        <td>
                        @foreach($file_data as $data)
                        <li>{{ $data }}</li>
                        @endforeach
                        </td>
                        <td>
                        @foreach($file_data as $data)
                           <li>
                            <select>
                                   <option value="none">select option</option>
                                @foreach($file_data as $data) 
                                    <option value="{{$data}}">{{ $data }}</option>
                                @endforeach
                             </select>
                             </li>
                         @endforeach
                        </td>
                        </tbody>
                      </table>
                    </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')

