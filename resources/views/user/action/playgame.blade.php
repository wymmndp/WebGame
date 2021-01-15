<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('user_css/comment.css')}}">
    <link rel="stylesheet" href="{{asset('user_css/playgame.css')}}">
</head>
@include('user/layout/header')

<body>
    <div id="main">
        <div id="main-inner">
            <!-- playgame -->
            <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="{{$game->linkgame}}"></iframe>
            </div>
            <!-- comment -->
            <div id="loadcomment">
                <div class="mt-3 pa-3 v-card theme--light" style="background-color: rgb(29, 31, 33);">
                    <div id="commento" class="commento-root commento-root-font">
                        <div id="commento-logged-container" class="commento-logged-container">
                            <div class="commento-logged-in-as"><img src="{{$detailAccount->avatar}}" class="commento-avatar-img"><a class="commento-name" href="#" style="max-width: 116.6875px;">{{session()->get('username')}}</a>
                            </div>
                        </div>
                        <div id="commento-login-box-container"></div>
                        <div id="commento-error" class="commento-error-box" style="display: none;"></div>
                        <div id="commento-mod-tools" class="commento-mod-tools" style="display: none"><button id="commento-mod-tools-lock-button">Lock Thread</button></div>
                        <div id="commento-main-area" class="commento-main-area" style="">
                            <div id="commento-textarea-super-container-root" class="commento-button-margin">
                                <div id="commento-textarea-container-root" class="commento-textarea-container"><textarea id="commento-textarea-root" placeholder="Add a comment"></textarea></div><button id="commento-submit-button-root" class="commento-button commento-submit-button add-comment-root">Add
                                    Comment</button>
                                <div class="commento-round-check commento-anonymous-checkbox-container"><label for="commento-anonymous-checkbox-root"></label></div><a id="commento-markdown-button-root" class="commento-markdown-button"></a>
                            </div>
                            <div class="commento-sort-policy-buttons-container">
                                <div class="commento-sort-policy-buttons"><a id="commento-sort-policy-creationdate-desc" class="commento-sort-policy-button"></a><a id="commento-sort-policy-creationdate-asc" class="commento-sort-policy-button"></a></div>
                            </div>
                            <div id="commento-pre-comments-area"></div>
                            <div id="commento-comments-area" class="commento-comments">
                                <div id="area-comments">
                                    @include('user/action/comment')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            function loadListComment(idgame) {
                $.ajax({
                    url: "{{route('loadListComment')}}",
                    type: 'post',
                    data: {
                        _token: '{{csrf_token()}}',
                        idgame: idgame,
                    },
                    success: function(data) {
                        $('#area-comments').html(data);
                    },
                })
            }
            $('.reply').on('click', function() {
                var id = $(this).attr('id');
                var idroot = $(this).data('idroot');
                alert(idroot)
                $('#commento-body-' + id).after(function() {
                    $('#commento-body-' + id).append(
                        '<div class="commento-button-margin"> <div class="commento-textarea-container"><textarea id="commento-textarea-' +
                        id + '"placeholder="Add a comment"></textarea></div><button id="' + id +
                        '" data-idroot="' + idroot + '" class="commento-button commento-submit-button add-comment">Add Comment</button> <div class="commento-round-check commento-anonymous-checkbox-container">  </div><a  class="commento-markdown-button"></a></div>'
                    );
                })
            })
            // add comment của mình (không phải reply)
            function addCommentRoot(username, txt, idgame) {
                $.ajax({
                    url: "{{route('addCommentRoot')}}",
                    type: 'post',
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username,
                        txt: txt,
                        idgame: idgame
                    },
                    success: function(data) {
                        alert(data);
                        loadListComment(idgame);
                    },
                });
            }
            $(document).on('click', '.add-comment-root', function() {
                var txt = $("#commento-textarea-root").val();
                if (txt.length > 0) {
                    var username = '{{session()->get("username")}}';
                    var idgame = '{{$idgame}}'
                    addCommentRoot(username, txt, idgame);
                } else alert('Nhập Bình Luận')
            })
            // reply comment
            function replyComment(username, replytxt, idgame, replyidcomment, idroot) {
                $.ajax({
                    url: "{{route('replyComment')}}",
                    type: 'post',
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username,
                        replytxt: replytxt,
                        idgame: idgame,
                        replyidcomment: replyidcomment,
                        idroot: idroot
                    },
                    success: function(data) {
                        alert(data);
                        loadListComment(idgame);
                    },
                });
            }
            $(document).on('click', '.add-comment', function() {
                var username = '{{session()->get("username")}}';
                var idgame = '{{$idgame}}';
                var replyidcomment = $(this).attr('id');
                var idroot = $(this).data('idroot');
                var txt = $("#commento-textarea-" + replyidcomment).val();
                replyComment(username, txt, idgame, replyidcomment, idroot);
            })
        })
    </script>
</body>

</html>