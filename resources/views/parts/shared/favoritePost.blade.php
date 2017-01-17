@if (!empty($post))
    <div class="widget-featured-post push-down-30">
        <h6>Избранный пост</h6>
        <img src="{{ $post->image }}" alt="Featured post" width="293" height="127">
        <h4>
            <a href="{{ route('site.posts.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
        </h4>
        @if ($post->tagline)
            <p>{{ $post->tagline }}</p>
        @endif
    </div>
@endif