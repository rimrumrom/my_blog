<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/articles.css">
<?php
include "../part/head.php";
?>

<?php
$dbConn = mysqli_connect("site18.blog.oa.gg", "site18", "sbs123414", "site18", 3306) or die("DB CONNECTION ERROR");

$cateItemId = $_GET['cateItemId'];

$sql = "
SELECT *
FROM cateItem
WHERE id = {$cateItemId}
";
$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemName = $row['name'];

$sql = "
SELECT *
FROM article
WHERE cateItemId = {$cateItemId}
ORDER BY ID DESC
";
$rs = mysqli_query($dbConn, $sql);
$articleRows = [];
while ( true ) {
    $row = mysqli_fetch_assoc($rs);

    if ( $row == null ) {
        break;
    }

    $articleRows[] = $row;
}
?>

<a href="/articles.php?cateItemId=1">1번 게시판</a>
<a href="/articles.php?cateItemId=2">2번 게시판</a>
<a href="/articles.php?cateItemId=3">3번 게시판</a>
<a href="/articles.php?cateItemId=4">4번 게시판</a>

<div class="article-wrap">
    <?php foreach ($articleRows as $aa ) { ?>
        <div class="article">
            <a href="/detail.php?id=<?=$aa['id']?>">게시물 번호 : <?=$aa['id']?></a>
            <div>날짜 : <?=$aa['regDate']?></div>
            <div>제목 : <?=$aa['title']?></div>
            <div>내용 : <?=$aa['body']?></div>
        </div>
    <?php } ?>
</div>

<?php
include "../part/foot.php";
?>