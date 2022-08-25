@extends('layouts.app')

@section('title', 'Supports' . ' - ' . $support->owner_id)

@section('content')
    <div class="container-xl">
        <div class="card mt-4">
            <div class="card-header">
                <h3 class="card-title">Title: {{ $support->title }}</h3>
            </div>
            <div class="card-body">
                <p class="text-muted">Details: {{ $support->details }}</p>
            </div>
        </div>
    </div>
@endsection
