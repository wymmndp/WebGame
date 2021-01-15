@foreach($listCommentRoot as $comment)
<div class="commento-card" style="border-left: 2px solid rgb(83, 81, 84);">
    <div class="commento-header">
        <div class="commento-options" style="width: 160px;"><button id="{{$comment->idcomments}}" data-idroot="{{$comment->idcomments}}" title="Reply" class="commento-option-button commento-option-reply reply" style="right: 96px;"></button></div><img src="{{$comment->avatar}}" class="commento-avatar-img"><a class="commento-name" href="https://simmer.io/@TiffanySIMMER" style="max-width: 122.4000015258789px;">{{$comment->username}}</a>
        <div class="commento-subtitle">
            <div class="commento-timeago">{{$comment->time}}</div>
        </div>
    </div>
    <div>
        <div id="commento-body-{{$comment->idcomments}}" class="commento-body">
            <div>
                {{$comment->content}}
                @foreach($listReplyComment as $reply)
                @if($reply->replyidcomments > 0 && $reply->idgame == $comment->idgame &&
                $reply->idroot == $comment->idcomments)
                <div class="commento-card" style="border-left: 2px solid rgb(83, 81, 84);">
                    <div class="commento-header">
                        <div class="commento-options" style="width: 160px;"><button id="{{$reply->idcomments}}" title="Reply" data-idroot="{{$comment->idcomments}}" class="commento-option-button commento-option-reply reply" style="right: 96px;"></button></div><img src="{{$reply->avatar}}" class="commento-avatar-img"><a class="commento-name" href="https://simmer.io/@TiffanySIMMER" style="max-width: 122.4000015258789px;">{{$reply->username}}</a>
                        <div class="commento-subtitle">
                            <div title="Thu Dec 03 2020 13:38:39 GMT+0700 (Giờ Đông Dương)" class="commento-timeago">{{$reply->time}}</div>
                        </div>
                    </div>
                    <div>
                        <div id="commento-body-{{$reply->idcomments}}" class="commento-body">
                            <div>
                                {{$reply->content}}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endforeach
