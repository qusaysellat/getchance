<h1>By: {{ $post->user->username }}</h2>
<h1>TITLE: {{ $post->title }}</h1>
<h1>CONTENT: {{ $post->content }}</h1>
<h1>POST TYPE: {{ ($post->posttype == 2)? 'INTERACTIVE' : 'NOT INTERACTIVE' }}</h1>
<h1>CATEGORY: {{ $post->category->name }}</h1>
@foreach ($post->skills as $skill)
    <h1>SKILL: {{ $skill->name }}</h1>
@endforeach
@if(Auth::user()->hasInteracted($post))
    @include('interaction.delete')
@elseif($post->posttype == 2)
        @include('interaction.create')
@endif
<br>
@foreach ($post->interactions as $interaction )
    <h4>{{ $interaction->username }} has interacted to this post.</h2>
@endforeach
<br><br>
@if(Auth::user()->id == $post->user->id)
    <a href="{{ route('posts.edit', $post->id) }}">EDIT POST</a>
    <br>
    <br>
    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                action="{{ route('posts.destroy', $post->id)}}">
                @csrf
                @method('DELETE')
                    <button type="submit">
                    {{ __('Delete') }}
                </button>
    </form>
@endif
