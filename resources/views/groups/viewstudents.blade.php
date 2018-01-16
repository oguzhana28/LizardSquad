@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
    <div class="panel-body">
        <section>
            <table class="table table-striped">
                <tr>
                    <td>Name</td>
                    <td>Favorite</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                @foreach($groups as $group)
                <tr>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->favorite }}</td>
                    <td><a href="{{ URL::to('group/edit/'. $group->id) }}"><span class="glyphicon glyphicon-pencil"></span></td></a>
                    <td><a href="{{ URL::to('group/delete/'. $group->id) }}"><span class="glyphicon glyphicon-trash"></span></td></a>
                </tr>
                @endforeach
            </table>
        </section>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection