@extends('admin.main')
@section('content')
    <a href="{{ route('departments.create') }}" ><i class="bi bi-plus-square btn btn-primary" ></i></a>
    <ul>
        <table class="table">
        @foreach ($departments as $department)
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="{{ route('departments.show', $department) }}">
                            {{  $department->name}}</a>
                    </td>
                    <td>
                        <a href="{{ route('departments.edit', $department) }}"><i class="bi bi-pencil-square btn btn-warning btn-sm"></i></a>
                        <form action="{{ route('departments.destroy', $department) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
                        </form>

                    </td>
                    <td>

                    </td>
                </tr>
                </tbody>

        @endforeach
        </table>
    </ul>
@endsection

