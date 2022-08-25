@extends('layouts.app')

@section('content')
    <div class="container-xl mt-4">
        <div class="table-responsive">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>owner_id</th>
                        <th>title</th>
                        <th>details</th>
                        <th>status</th>
                        <th>employee_id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supports as $support)
                        <tr>
                            <td>{{ $support->id }}</td>
                            <td><a href="{{ route('supports.show', $support->id) }}">{{ $support->owner_id }}</a></td>
                            <td>{{ $support->title }}</td>
                            <td>{{ $support->details }}</td>
                            <td>{{ $support->status }}</td>
                            <td>{{ $support->employee_id }}</td>
                            <td>
                                <a href="{{ route('supports.show', $support) }}">
                                    Show
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
