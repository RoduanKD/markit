@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Cover areas</h1>
            @livewire('coveredareas',['country'=>'','city'=>''])


   </div>
</section>
@endsection


