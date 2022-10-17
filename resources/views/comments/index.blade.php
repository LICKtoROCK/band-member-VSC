@if(count($comments)>0)
    <div class="form-group">
        <div class="row col-8 offset-2">
            <div class="card border-dark mt-4">
                <div class="card-header">
                    <h5>コメント一覧</h5>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($comments as $comment)
                    <li class="list-group-item">
                        {!! nl2br(e($comment->user->name)) !!}
                        {!! nl2br(e($comment->updated_at)) !!}<br>
                        {!! nl2br(e($comment->comment)) !!}
                    @if(Auth::id()==$comment->user_id)
                    {!! Form::open(['route'=>['comments.destroy','comment_id'=>$comment->id,'post_id'=>$post->id],'method'=>'delete']) !!}
                        <div class="d-flex justify-content-end">
                            {!! Form::submit('削除',['class'=>'btn btn-link']) !!}
                        </div>
                    {!! Form::close() !!}
                    @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    {{ $comments->links() }}
@endif
