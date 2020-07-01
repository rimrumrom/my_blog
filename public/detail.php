<?php
include "../part/head_head.php";
?>
<!--링크 거는 구간-->
<?php
include "../part/head.php";
?>
<?php
$conn = mysqli_connect("site18.blog.oa.gg", "site18", "sbs123414", "site18", 3306);
$id = $_GET['id'];
$sql = "
SELECT *
FROM article
WHERE id = {$id}
";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($rs);
?>
<!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/styles/default.min.css">

<!-- 하이라이트 라이브러리, 언어 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php-template.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/sql.min.js"></script>

<!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.min.css" />

<!-- 토스트 UI 에디터, 자바스크립트 코어 -->
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-viewer.min.js"></script>

<!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
<script
    src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight-all.min.js">
</script>

<!-- 토스트 UI 에디터, CSS 코어 -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

<div class="con con-2">
    <a href="#" onclick="history.back();">[뒤로가기]</a>
    <a href="/articles.php">[리스트]</a>
</div>

<h1 class="con con-2"><?=$row['title']?></h1>
<div class="id-regDate con con-2 flex">
    <div class="id">
        작성자 : 장희성
    </div>
    <div class="regDate">
        등록날짜 : <?=$row['regDate']?>
    </div>
</div>

<div class="con con-2" style="display:none;" id="origin1"><?=$row['body']?></div>
<div class="postbt-icon-1 con con-2 flex">
    <div class="heart">
        <a href="#">
            <img src="/resource/images/heart.png" alt="">
        </a>
    </div>
    <div class="comment">
        <a href="#">
            <img src="/resource/images/comment.png" alt="">
        </a>
    </div>
</div>

<div class="line-bar-1 con con-2">
    <div class="line"></div>
</div>

<div class="con con-2" id="viewer1">

</div>

<div class="postbt-icon-2 con con-2 flex">
    <div class="flex">
        <div class="heart flex">
            <a href="#" class="flex-ai-c flex-jc-c">
                <img src="/resource/images/heart2.png" alt="">
                공감
            </a>
        </div>
        <div class="down flex">
            <a href="#" class="flex-ai-c flex-jc-c">
                <img src="/resource/images/down.png" alt="">
            </a>
        </div>
        <div class="more flex">
            <a href="#" class="flex-ai-c flex-jc-c">
                <img src="/resource/images/more.png" alt="">
            </a>
        </div>
    </div>
</div>

<div class="line-bar-2 con con-2">
    <div class="line"></div>
</div>

<script>
    var editor1__initialValue = $('#origin1').html();
    var editor1 = new toastui.Editor({
        el: document.querySelector('#viewer1'),
        initialValue: editor1__initialValue,
        viewer: true,
        plugins: [toastui.Editor.plugin.codeSyntaxHighlight]
    });
</script>

<?php
include "../part/foot.php";
?>