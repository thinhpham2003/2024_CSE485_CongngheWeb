@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Logo</th>
            <th>Position</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$department->id}}</td>
                <td>{{$department->name}}</td>
                <td>{{$department->address}}</td>
                <td>{{$department->email}}</td>
                <td>{{$department->phone}}</td>
                <td>
                    <a href="{{$department->thumb }}" target="_blank">
                        <img src="{{$department->thumb }}" height="40px">
                    </a>
                </td>
                <td>{{$department->description }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('departments.index') }}">Back to Articles</a>
@endsection
