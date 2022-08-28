@extends('layouts.guest')

@section('content')
    <div class="container">
        <ul>
            @forelse (notifications as notification)
                <li>
                    @if ($notification->type === 'App\Notifications\PaymentRecieved')
                        we have recieved a payment of {{ $notification->data['amount'] }} from you
                    @endif
                </li>
            @empty
                <li>you have no unread notifications at this time </li>
            @endforelse
        </ul>
    </div>
@endsection
