@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Students</div>
<a class="btn btn-primary" href="students/create"><span class="glyphicon glyphicon-plus"></span> Create</a>
                <div class="panel-body">

                       @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                                @foreach($students as $student)
        <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="col-item">
                <div class="photo">
                    <img src="{{ asset('uploads/' . $student->image) }}" class="img-responsive" />
                </div>

                   <div class="info">
                    <div class="row">
                        <div class="price col-md-6">
                            <h5>{{ $student->firstname }}</h5>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
                                @endforeach
                              </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection