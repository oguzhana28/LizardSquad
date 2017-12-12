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
                    <td>Firstname</td>
                    <td>Prefix</td>
                    <td>Lastname</td>
                    <td>mobile</td>
                    <td>address</td>
                    <td>house number</td>
                    <td></td>
                    <td></td>
                </tr>
                @foreach($students as $student)
                <div class="col-item">
                <div class="photo">
                <img src="{{ asset('uploads/' . $student->image) }}" class="img-responsive">
                </div>
                <tr>
                    <td>{{ $student->firstname }}</td>
                    <td>{{ $student->prefix }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->mobile }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->house_number }}</td>
                    <td><a href="{{ URL::to('students/edit/'. $student->id) }}"><span class="glyphicon glyphicon-pencil"></span></td></a>
                    <td><a href="{{ URL::to('students/delete/'. $student->id) }}"><span class="glyphicon glyphicon-trash"></span></td></a>
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