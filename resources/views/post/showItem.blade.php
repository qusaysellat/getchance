<div class="">
    <div class="card bg-dark text-light">
        <div class="card-body text-center">
            <div class="h1 mb-3">
                <i class="bi bi-postcard"></i>
            </div>
            <div class="row row-cols-md-2">
                <div class="col-md">
                    <h3 class="card-title mb-3">{{ $post->title }}</h3>
                    <p class="text-secondary"> by: {{ $post->user->username }}</p>
                    <p><span class="badge bg-danger">{{ $post->category->name }}</span></p>
                    <p>
                    @foreach ($post->skills as $skill)
                        <span class="badge bg-primary">{{ $skill->name }}</span>
                    @endforeach
                    </p>
                    @if(Auth::user()->id == $post->user->id)
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-warning text-light" href="{{ route('posts.edit', $post->id) }}"><i class="bi bi-pencil-square"></i></a>
                            </div>
                            <div class="col">
                                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                                            action="{{ route('posts.destroy', $post->id)}}">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-x-lg"></i>
                                                </button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md">
                    <div class="border-bottom border-success pb-3 mb-3">
                        <p>{{ $post->content }}</p>
                    </div>
                    <p class="text-info">{{ ($post->posttype == 2)? 'Interactions are open' : 'Interactions are closed' }}</p>
                    @if(Auth::user()->hasInteracted($post))
                        @include('interaction.delete')
                    @elseif($post->posttype == 2)
                            @include('interaction.create')
                    @endif
                    <p class="text-info">Number of interactions to this post: <span class="badge bg-success"> {{ $post->interactions->count()}} </span></p>
                    @if($post->interactions->count()>0)
                        <p>
                            @foreach ($post->interactions as $interaction )
                                <span class="badge bg-warning">{{ $interaction->username }}.</span>
                            @endforeach
                            interacted with this post.
                        </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
