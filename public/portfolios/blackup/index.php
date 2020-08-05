<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolios</title>
    <!-- 폰트어썸 불러오기 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- 제이쿼리 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- 아울 캐러셀 불러오기, 제이쿼리 보다 밑에 있어야 합니다. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="index.css">
    <script src="./index.js"></script>

</head>

<body>

    <div class="wrap">
        <!--상단바-->
        <div class="header flex">
            <!--로고-->
            <div class-"logo">
                <a href="#" class="flex flex-ai-c height-100p">
                    <img src="https://github.com/rimrumrom/img1/blob/b93a787317a62e318e2bcd3eed8ddf5f80b3dd13/portfolios/blackup/main_logo.png?raw=true"
                        alt="">
                </a>
            </div>
            <!--//로고-->
            <!--메인 메뉴-->
            <nav class="menu-box-1 flex">
                <ul class="flex">
                    <li class=" flex flex-ai-c"><a href="#">NEW5%</a></li>
                    <li class=" flex flex-ai-c"><a href="#">BEST50</a>
                        <ul>
                            <li><a href="#">New Rising Item</a></li>
                            <li><a href="#">Weekly Best Item</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">SUMMER</a></li>
                    <li class=" flex flex-ai-c"><a href="#">MADE</a>
                        <ul>
                            <li><a href="#">상의</a></li>
                            <li><a href="#">하의</a></li>
                            <li><a href="#">기타</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">NTNY</a>
                        <ul>
                            <li><a href="#">OUTER/TOP</a></li>
                            <li><a href="#">BOOTOM</a></li>
                            <li><a href="#">ACC</a></li>
                            <li><a href="#">ETC</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">OUTER</a>
                        <ul>
                            <li><a href="#">자켓</a></li>
                            <li><a href="#">코트/점퍼</a></li>
                            <li><a href="#">가디건</a></li>
                            <li><a href="#">베스트</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">TOP</a>
                        <ul>
                            <li><a href="#">슬리브히스/반팔</a></li>
                            <li><a href="#">크롭</a></li>
                            <li><a href="#">SHIRT/BLOUSE</a></li>
                            <li><a href="#">오프숄더</a></li>
                            <li><a href="#">긴팔</a></li>
                            <li><a href="#">니트</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">PANTS</a>
                        <ul>
                            <li><a href="#">슬랙스</a></li>
                            <li><a href="#">데님</a></li>
                            <li><a href="#">숏/반바지</a></li>
                            <li><a href="#">조거팬츠</a></li>
                            <li><a href="#">트레이닝</a></li>
                            <li><a href="#">면바지/기타</a></li>
                            <li><a href="#">와이드</a></li>
                            <li><a href="#">부츠컷</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">SKIRT</a>
                        <ul>
                            <li><a href="#">스커트</a></li>
                            <li><a href="#">원피스</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">JEWELRY</a>
                        <ul>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Earrings</a></li>
                            <li><a href="#">Ring</a></li>
                            <li><a href="#">Brecelet</a></li>
                            <li><a href="#">925 Silver</a></li>
                            <li><a href="#">Etc</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">BAG&SHOES</a>
                        <ul>
                            <li><a href="#">가방</a></li>
                            <li><a href="#">슈즈</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">ACC</a>
                        <ul>
                            <li><a href="#">벨트</a></li>
                            <li><a href="#">안경/선글라스</a></li>
                            <li><a href="#">모자/헤어악세사리</a></li>
                            <li><a href="#">양말/스타킹</a></li>
                            <li><a href="#">머플러/장갑</a></li>
                            <li><a href="#">기타</a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">당일배송</a></li>
                    <li class=" flex flex-ai-c"><a href="#">PROJECT</a>
                        <ul>
                            <li><a href="#">UXISEX </a></li>
                            <li><a href="#">STAY HOME</a></li>
                            <li><a href="#">BLACKUP BASIC </a></li>
                        </ul>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#">SALE</a></li>
                </ul>
            </nav>
            <!--//메인 메뉴-->
            <!--마이리스트 메뉴-->
            <nav class="my-list flex">
                <ul class="flex">
                    <li class=" flex flex-ai-c">
                        <input type="text" placeholder="지금 가장 핫한 아이템">
                        <button><i class="fas fa-search" style="font-size:15px; color:#000"></i></button>
                    </li>
                    <li class=" flex flex-ai-c"><a href="#"><img
                                src="https://github.com/rimrumrom/img1/blob/b93a787317a62e318e2bcd3eed8ddf5f80b3dd13/portfolios/blackup/icon_globe.png?raw=true"
                                alt=""></a></li>
                    <li class=" flex flex-ai-c"><a href="#">LOGIN</a></li>
                    <li class=" flex flex-ai-c"><a href="#">JOIN <span>+2000</span></a></li>
                    <li class=" flex flex-ai-c"><a href="#">CART <span>(0)</span></a></li>
                    <li class=" flex flex-ai-c"><a href="#">MYPAGE</a></li>
                    <li class=" flex flex-ai-c"><a href="#">BOARD</a></li>
                    <li class=" flex flex-ai-c"><a href="#"><img
                                src="https://github.com/rimrumrom/img1/blob/b93a787317a62e318e2bcd3eed8ddf5f80b3dd13/portfolios/blackup/bu_icon_allmenu.png?raw=true"
                                alt=""></a></li>
                </ul>
            </nav>
            <!--//마이리스트 메뉴-->
        </div>
        <!--//상단바-->
        <!--메인슬라이드-->
        <div class="main_slider">
            <div class="owl-carousel owl-theme">
                <div class="item"
                    style="background-image:url(https://github.com/rimrumrom/img1/blob/master/portfolios/blackup/200724-main01.jpg?raw=true);"
                    class="active"></div>
                <div class="item"
                    style="background-image:url(https://github.com/rimrumrom/img1/blob/master/portfolios/blackup/200724-main02.jpg?raw=true);">
                </div>
                <div class="item"
                    style="background-image:url(https://github.com/rimrumrom/img1/blob/master/portfolios/blackup/200724-main03.jpg?raw=true);">
                </div>
            </div>
        </div>
        <!--//메인슬라이드-->
        <!--6종롤링배너-->
        <div class="banner-1">
            <div class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img
                            src="https://github.com/rimrumrom/img1/blob/b93a787317a62e318e2bcd3eed8ddf5f80b3dd13/portfolios/blackup/yg_bn_2_01_.jpg?raw=true"
                            alt=""></a></div>
                <div class="item"><a href="#"><img
                            src="https://github.com/rimrumrom/img1/blob/b93a787317a62e318e2bcd3eed8ddf5f80b3dd13/portfolios/blackup/yg_bn_2_02.jpg?raw=true"
                            alt=""></a></div>
                <div class="item"><a href="#"><img
                            src="https://github.com/rimrumrom/img1/blob/b93a787317a62e318e2bcd3eed8ddf5f80b3dd13/portfolios/blackup/yg_bn_2_03.jpg?raw=true"
                            alt=""></a></div>
                <div class="item"><a href="#"><img
                            src="https://github.com/rimrumrom/img1/blob/b93a787317a62e318e2bcd3eed8ddf5f80b3dd13/portfolios/blackup/yg_bn_2_04_200618.jpg?raw=true"
                            alt=""></a></div>
                <div class="item"><a href="#"><img
                            src="https://github.com/rimrumrom/img1/blob/b93a787317a62e318e2bcd3eed8ddf5f80b3dd13/portfolios/blackup/yg_bn_2_05_.jpg?raw=true"
                            alt=""></a></div>
                <div class="item"><a href="#"><img
                            src="https://github.com/rimrumrom/img1/blob/b93a787317a62e318e2bcd3eed8ddf5f80b3dd13/portfolios/blackup/200703yg_bn_2_06.jpg?raw=true"
                            alt=""></a></div>
            </div>
        </div>
        <!--//6종롤링배너-->
        <!--컨테이너-->
        <div class="container container-1">
            <div class="title">
                <h2>
                    <span>Recent hot item</span>
                </h2>
            </div>
            <div class="hot-list">
                <ul class="flex flex-row-wrap">
                    <li>
                        <a href="" class="block">
                            <span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/master/portfolios/blackup/110cc7e943fc4de2b22fd15577ad89c6.webp"
                                    alt=""></span>
                            <div class="txt-box flex flex-ai-c flex-jc-c">
                                <div class="prod-name">(UNISEX) 퓰리 프린팅 박스티</div>
                                <div class="color">
                                    <div class="chips chip-1"></div>
                                    <div class="chips chip-2"></div>
                                </div>
                                <div class="prod-price">19,000 won</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="block">
                            <span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/master/portfolios/blackup/d610e374323986153cbd9906b0d6ee49.webp"
                                    alt="">
                            </span>
                            <div class="txt-box flex flex-ai-c flex-jc-c">
                                <div class="prod-name">(UNISEX) 퓰리 프린팅 박스티</div>
                                <div class="color">
                                    <div class="chips chip-3"></div>
                                    <div class="chips chip-4"></div>
                                </div>
                                <div class="prod-price">19,000 won</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="block">
                            <span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/04a/portfolios/blackup/f1cfc6601f91cd8d81ebd822e83dc04a.webp"
                                    alt="">
                            </span>
                            <div class="txt-box flex flex-ai-c flex-jc-c">
                                <div class="prod-name">(UNISEX) 퓰리 프린팅 박스티</div>
                                <div class="color">
                                    <div class="chips chip-5"></div>
                                    <div class="chips chip-6"></div>
                                    <div class="chips chip-7"></div>
                                </div>
                                <div class="prod-price">19,000 won</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="block">
                            <span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/04a/portfolios/blackup/c3828d4a70d391b9c879d1d2b67c78a5.webp"
                                    alt="">
                            </span>
                            <div class="txt-box flex flex-ai-c flex-jc-c">
                                <div class="prod-name">(UNISEX) 퓰리 프린팅 박스티</div>
                                <div class="prod-price">19,000 won</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="block">
                            <span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/04a/portfolios/blackup/105bd0fcee1c09a3c4b1aa5f42666a29.webp"
                                    alt="">
                            </span>
                            <div class="txt-box flex flex-ai-c flex-jc-c">
                                <div class="prod-name">(UNISEX) 퓰리 프린팅 박스티</div>
                                <div class="color">
                                    <div class="chips chip-8"></div>
                                    <div class="chips chip-9"></div>
                                    <div class="chips chip-10"></div>
                                    <div class="chips chip-11"></div>
                                    <div class="chips chip-12"></div>
                                </div>
                                <div class="prod-price">19,000 won</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="block">
                            <span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/04a/portfolios/blackup/5eaf3b7185b98b827e83e205bc2a3760.webp"
                                    alt="">
                            </span>
                            <div class="txt-box flex flex-ai-c flex-jc-c">
                                <div class="prod-name">(UNISEX) 퓰리 프린팅 박스티</div>
                                <div class="color">
                                    <div class="chips chip-13"></div>
                                    <div class="chips chip-14"></div>
                                    <div class="chips chip-15"></div>
                                </div>
                                <div class="prod-price">19,000 won</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="block">
                            <span class="img-box"><img
                                    src="https://github.com/rimrumrom/img1/blob/master/portfolios/blackup/7.jpg?raw=true"
                                    alt="">
                            </span>
                            <div class="txt-box flex flex-ai-c flex-jc-c">
                                <div class="prod-name">(UNISEX) 퓰리 프린팅 박스티</div>
                                <div class="prod-price">19,000 won</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="block">
                            <span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/master/portfolios/blackup/8.webp"
                                    alt="">
                            </span>
                            <div class="txt-box flex flex-ai-c flex-jc-c">
                                <div class="prod-name">(UNISEX) 퓰리 프린팅 박스티</div>
                                <div class="color">
                                    <div class="chips chip-16"></div>
                                    <div class="chips chip-17"></div>
                                    <div class="chips chip-18"></div>
                                </div>
                                <div class="prod-price">19,000 won</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container container-2">
            <div class="title">
                <h2>
                    <span>Today's new item</span>
                </h2>
            </div>
            <div class="new-list">
                <ul class="flex flex-row-wrap">
                    <li>
                        <a href="" class="block"><span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/964ee55082939092c98aaff4dbf48ed7b6fae473/portfolios/blackup/fbece048e013c07a5a2d78bbd9c70ca7.webp"
                                    alt=""></span></a></li>
                    <li>
                        <a href="" class="block"><span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/964ee55082939092c98aaff4dbf48ed7b6fae473/portfolios/blackup/a9f57c47a182e3e252d8f19bdaff5c16.webp"
                                    alt=""></span></a></li>
                    <li>
                        <a href="" class="block"><span class="img-box"><img
                                    src="https://github.com/rimrumrom/img1/blob/964ee55082939092c98aaff4dbf48ed7b6fae473/portfolios/blackup/915074260138ae85fea8c8133e82679b.jpg?raw=true"
                                    alt=""></span></a></li>
                    <li>
                        <a href="" class="block"><span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/964ee55082939092c98aaff4dbf48ed7b6fae473/portfolios/blackup/e85f8fd9dc61a6737e1436e3d732ec2d.webp"
                                    alt=""></span></a></li>
                    <li>
                        <a href="" class="block"><span class="img-box"><img
                                    src="https://github.com/rimrumrom/img1/blob/964ee55082939092c98aaff4dbf48ed7b6fae473/portfolios/blackup/9e3cbde2647a9ad6508513e34a3d80fd.jpg?raw=true"
                                    alt=""></span></a></li>
                    <li>
                        <a href="" class="block"><span class="img-box"><img
                                    src="https://github.com/rimrumrom/img1/blob/964ee55082939092c98aaff4dbf48ed7b6fae473/portfolios/blackup/673bd4e879c25383367bbac3f5d7b856.jpg?raw=true"
                                    alt=""></span></a></li>
                    <li>
                        <a href="" class="block"><span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/964ee55082939092c98aaff4dbf48ed7b6fae473/portfolios/blackup/d222040a85a480cb104c0e669ac06983.webp"
                                    alt=""></span></a></li>
                    <li>
                        <a href="" class="block"><span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/964ee55082939092c98aaff4dbf48ed7b6fae473/portfolios/blackup/fa76c430c387d20070debd68a32623ef.webp"
                                    alt=""></span></a></li>
                    <li>
                        <a href="" class="block"><span class="img-box"><img
                                    src="https://raw.githubusercontent.com/rimrumrom/img1/master/portfolios/blackup/06d3d1b17f01f2dd3e626654b268b5e3.webp"
                                    alt=""></span></a></li>
                </ul>
            </div>
        </div>
        <!--//컨테이너-->
    </div>
</body>

</html>