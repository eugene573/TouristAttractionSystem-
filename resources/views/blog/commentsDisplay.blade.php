
@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <a href="{{ $post->user->avatar }}"><img class="rounded-circle" height="70" width="70" 
        src="{{$post->user->avatar}}" alt="User profile picture"></a>
        <strong style="font-style: italic;">{{ $comment->user->name }}</strong>
        <p style="color: gray; font-style: italic;">{{ $comment->created_at->diffForHumans() }}</p>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        @include('blog.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach