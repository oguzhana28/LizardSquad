@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Groups</div>

                <div class="panel-body">
                       @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                           <table class="table">
                            <a class="btn btn-primary" href="groups/create"><span class="glyphicon glyphicon-plus"></span> Create</a>
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Id</th>
                                  <th scope="col">Name</th>
                                    <th scope="col">Favorite</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($groups as $group)
                                <tr>
                                  <th scope="row">{{ $group->id }}</th>
                                  <td>{{ $group->name }}</td>
                                  <td>{{ $group->favorite }}</td>
                                  <td><a href="groups/view/{{ $group->id }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                  <td><a href="groups/edit/{{ $group->id }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                  <td><a href="groups/delete/{{ $group->id }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
