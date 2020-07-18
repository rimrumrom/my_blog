<?php
include "../part/head_head.php";
?>
<!--링크 거는 구간-->
<link rel="stylesheet" href="/resource/aboutMe.css">
<script src="/resource/aboutMe.js"></script>
<?php
include "../part/head.php";

$dbConn = mysqli_connect('site18.blog.oa.gg','site18','sbs123414','site18',3306)or die ("DB CONNECT ERROR");

mysqli_query($dbConn, "SET NAMES utf8mb4");

$sql ="
SELECT *
FROM gallery
ORDER BY ID DESC
LIMIT 8
";

$rs = mysqli_query($dbConn , $sql);
$galleryImgs = [];

while ( $galleryImg = mysqli_fetch_assoc($rs) ) {
    $galleryImgs[] = $galleryImg;
}

?>

<!--어바웃미 메인 배너-->
<div class="aboutme-bn-box">
    <div class="main-bn">
        <div style="background-image:url(/resource/images/aboutme1.png);"></div>
    </div>
    <div class="main-img">
        <div style="background-image:url(/resource/images/aboutmeimg2.png);"></div>
    </div>
    <div class="icons">
        <div class="ic-rock">
            <img src="/resource/images/rock.png" alt=""></div>
        <div class="ic-Scissors">
            <img src="/resource/images/Scissors.png" alt="">
        </div>
        <div class="ic-Paper">
            <img src="/resource/images/Paper.png" alt=""></div>
    </div>
</div>
<!--취미-->
<div class="hobby con con-2">
    <div class="link flex flex-ai-c flex-jc-c"><a href="#">hobby</a></div>
    <div class="text flex flex-ai-c flex-jc-c">"저는 그림 그리는 것을 굉장히 좋아해요"</div>
    <div class="line line-1 flex flex-ai-c flex-jc-c"></div>
    <div class="line line-2 flex flex-ai-c flex-jc-c"></div>
    <div class="gallery">
        <div class="flex flex-wrap">
            <?php foreach( $galleryImgs as $img ) { ?>
            <div class="img-box"><img src="<?=$img['imageUrl']?>" alt=""></div>
            <?php } ?>
        </div>
    </div>
</div>
<!--어바웃미-->
<div class="aboutme">
    <p></p>
</div>


<div class="popup-box">
    <div class="popup">
        <img src="https://github.com/rimrumrom/img1/blob/4e43e3e0a42da51f2ed499b55f9682fe32fea25e/blog/article/2020/1.jpg?raw=true" alt="">
        <div class="btn btn-close">
            <i class="far fa-times-circle"></i>
        </div>
        <div class="side-btns">
            <i class="fas fa-angle-left"></i>
            <i class="fas fa-angle-right"></i>
        </div>
    </div>
</div>



<?php
include "../part/foot.php";
?>

