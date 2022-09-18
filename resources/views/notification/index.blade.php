@extends('layouts.app')

@section('content')
<main class="">
    <div class="">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="p-5">
            <div class="container m-1 mb-5">

                <div class="alert alert-secondary">
                    <h1>Notifications</h1>
                </div>
                @foreach ($notifications as $notification )
                    @include('notification.showItem')
            @endforeach
            </div>
        </section>
    </div>
</main>
@endsection
