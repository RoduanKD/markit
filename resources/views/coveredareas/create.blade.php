@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Create a country</h1>
            @livewire('coveredareas',['country'=>'','city'=>''])


   </div>
</section>
@endsection


