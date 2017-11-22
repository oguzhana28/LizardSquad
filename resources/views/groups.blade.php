@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Groups</div>

                <div class="panel-body">
                    Here are your groups!
                       @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                           <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">number</th>
                                  <th scope="col">Name</th>
                                    <th scope="col">Favorite</th>
                                    <th scope="col">edit</th>
                                    <th scope="col">delete</th>
                                    <th scope="col">create<a href="/groups/create"> +</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($groups as $group)
                                <tr>
                                  <th scope="row">{{ $group->id }}</th>
                                  <td>{{ $group->name }}</td>
                                  <td>{{ $group->favorite }}</td>
                                  <td><a href="/groups/edit/{{ $group->id }}">edit</td>
                                  <td><a href="/groups/delete/{{ $group->id }}">delete</td>
                                </tr>
                                @endforeach
                              </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
