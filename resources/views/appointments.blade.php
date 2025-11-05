@extends('layouts.app')
@section('content')
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 uppercase text-center" style="color: #FCD5CE; text-shadow: -1px -1px 0 #816B77, 1px -1px 0 #816B77, -1px 1px 0 #816B77, 1px 1px 0 #816B77;">Book an appointment</h2>

        @livewire('appointment-booking')
    </div>
@endsection
