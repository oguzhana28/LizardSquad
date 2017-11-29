@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Students</div>

                <div class="panel-body">
                       @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                           <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($students as $student)
                                <tr>
                                  <td>{{ $student->firstname }}</td>
                                </tr>
                                @endforeach
                              </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection