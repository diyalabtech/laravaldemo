@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Members Report</h2>
            </div>
            <div class="pull-right"></div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Roll No</th>
        </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{ $member->id }}</td>
        <td>{{ $member->name}}</td>
        <td>{{ $member->email}}</td>
        <td>{{ $member->mobile}}</td>
        <td>{{ $member->gender}}</td>
        <td>{{ $member->rollnumber}}</td>
    </tr>
    @endforeach
    </table>
@endsection