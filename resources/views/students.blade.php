@extends('layouts.backend')

@section('content')
    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Students
                    <a class="btn btn-primary" style="float:right; float" href="students/create"><span class="glyphicon glyphicon-plus"></span> Create</a>
                </h4>
            </div>
            <div class="panel-body">
                @foreach($students as $student)
                <div class="col-xs-12 col-sm-6 col-md-3"">
                    <div class="col-item">
                        <div class="photo">
                            <img src="{{ asset('uploads/' . $student->image) }}" class="img-responsive" />
                        </div>
                           <div class="info">
                            <div class="row">
                                <div class="price">
                                    <h5>{{ $student->firstname }}</h5>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection