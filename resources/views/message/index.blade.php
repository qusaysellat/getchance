@extends('layouts.app')

@section('content')
<main class="">
    <div class="">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="p-5 flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            <div class="alert alert-secondary">
                <h1>Your conversation with {{ $user->username }}</h1>
            </div>
            @include('message.create')
            <div class="row">
                <div class="col-md">
                    <div class="alert alert-success">
                        Sent
                    </div>
                    @foreach ($sent as $message )
                        @include('message.showItem')
                    @endforeach
                </div>
                <div class="col">
                    <div class="alert alert-info">
                        Received
                    </div>
                    @foreach ($received as $message )
                        @include('message.showItem')
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
