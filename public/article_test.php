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

<div class="article-post-bt con con-2">
    <a href="/articles.php?cateItemId=1">1번 게시판</a>
    <a href="/articles.php?cateItemId=2">2번 게시판</a>
    <a href="/articles.php?cateItemId=3">3번 게시판</a>
    <a href="/articles.php?cateItemId=4">4번 게시판</a>
</div>

<style>

</style>

<div class="article-list-box con con-2">
    <ul class="flex flex-wrap">
        <?php foreach ( $articleRows as $aa ) { ?>
        <li>
            <a class="articleContent" href="/detail.php?id=<?=$aa['id']?>">
                <div class="img-box-wrap">
                    <div class="img-box" style=" background-image:url(<?=$aa['thumbImgUrl']?>); "></div>
                </div>
                <div class="txt-box title"><?=$aa['title']?></div>
                <div class="txt-box summary"><?=$aa['summary']?></div>
                <div class="txt-box reg-date"><?=$aa['regDate']?></div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>

<?php
include "../part/foot.php";
?>