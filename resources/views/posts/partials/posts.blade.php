<div id="post-container">
    @foreach ($posts as $post)
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
    @endforeach
</div>
