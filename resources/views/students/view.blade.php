@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
        <section>
            <table>
                <tr>
                    <td>Firstname</td>
                    <td>Prefix</td>
                    <td>Lastname</td>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->firstname }}</td>
                    <td>{{ $student->prefix }}</td>
                    <td>{{ $student->lastname }}</td>
                </tr>
                @endforeach
            </table>
        </section>
    </div>
</div>
@endsection