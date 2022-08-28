@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
                {{ __('Messages') }}
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>received at</th>
                        <th class="w-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->id }}</td>
                            <td><a href="{{ route('messages.show', $message->id) }}">{{ $message->name }}</a></td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->created_at }}</td>
                            <td class="text-center row">
                                <div>
                                    <form action="{{ route('messages.destroy', $message) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" value="delete" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $messages->links() }}
        </div>
    </div>
@endsection

    <style>
        .pagination {
            justify-content: center;
        }
    </style>

