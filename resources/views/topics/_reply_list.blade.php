<div class="reply-list">
    @foreach ($replies as  $reply)
        <div>
            {{$reply->username}}
            {{$reply->content}}
            {{$reply->updated_at}}
        </div>
        <span>
            <form action="{{ route('replies.destroy', $reply->id) }}" method="post">
            {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit">
                删除
            </button>
            </form>
        </span>
    @endforeach
</div>