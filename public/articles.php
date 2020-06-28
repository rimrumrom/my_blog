<?php
include "../part/head.php";
?>
<h1 class="con">Articles</h1>

<style>
.article-list-box > ul > li > a {
    padding:5px 0;
}

.article-list-box > ul > li:hover > a {
    background-color:black;
    color:white;
}
</style>

<div class="article-list-box con">
    <ul>
        <?php for ($i=3; $i>=1;$i--){?>
        <li><a class="block" href="/detail.php?id=<?=$i?>"><?=$i?>번글</a></li>
        <?php }?>
    </ul>
</div>

<?php
include "../part/foot.php";
?>