<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>creation</title>
    <!-- 폰트어썸 불러오기 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- 제이쿼리 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js"></script>
    <!-- 스와이프 js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- 아울 캐러셀 불러오기, 제이쿼리 보다 밑에 있어야 합니다. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="./index.css">
    <script src="./index.js"></script>
</head>

<body class="page-con">
    <!-- 탑 팝업 -->
    <div class="top-banner">
        <div class="b-inner con flex">
            <div class="b-img-1 img-box">
                <img src="https://rimrumrom.github.io/img1/creation/b-img-1.png" alt="">
            </div>
            <div class="b-area b-area-1">
                <div class="flex flex-ai-c flex-jc-c">신규오픈매장</div>
                <div>대전 둔산점 | 대전 유성점 | 서울 홍대점 | 서울 영등포점</div>
            </div>
            <div class="b-area b-area-2">
                <div class="flex flex-ai-c flex-jc-c">오픈예정매장</div>
                <div>부산 광안리점 | 부산 서면점</div>
            </div>
            <div class="month">*20년 08월 기준</div>
            <div class="b-img-2 flex">
                <img src="https://rimrumrom.github.io/img1/creation/b-img-2.png" alt="">
            </div>
        </div>
        <button type="button" class="b-close" onclick="$('.top-banner').addClass('close')">
            <img src="https://rimrumrom.github.io/img1/creation/ic-gray-close-new-o.svg" alt="">
        </button>
    </div>
    <!-- 상단바 -->
    <div class="top-bar con-min-width">
        <div class="con flex flex-jc-sb">

            <a href="#" class="logo img-box flex flex-ai-c">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 108 82.9" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #9C0A1F;
                        }

                        .st1 {
                            opacity: 0.5;
                            enable-background: new;
                        }

                        .st2 {
                            fill: white;
                        }
                    </style>
                    <g>
                        <path class="st0" d="M41.4,82.8C18.6,82.8,0,64.3,0,41.4S18.6,0,41.4,0s41.4,18.6,41.4,41.4S64.3,82.8,41.4,82.8z M41.4,3
                               C20.2,3,3,20.2,3,41.4s17.2,38.4,38.4,38.4s38.4-17.2,38.4-38.4S62.6,3,41.4,3z"></path>
                    </g>
                    <g class="st1">
                        <path class="st0" d="M81.3,82c-14.7,0-26.7-12-26.7-26.7s12-26.7,26.7-26.7s26.7,12,26.7,26.7S96,82,81.3,82z M81.3,31.6
                               c-13.1,0-23.7,10.6-23.7,23.7S68.3,79,81.3,79S105,68.4,105,55.3S94.4,31.6,81.3,31.6z">
                        </path>
                    </g>
                    <g>
                        <g>
                            <path class="st2" d="M24.9,32H13.4v-3.1h28V32H29.8v25.7h-4.9L24.9,32L24.9,32z"></path>
                            <path class="st2" d="M45.6,29.3c2.2-0.4,5.5-0.6,8.9-0.6c4.9,0,8,0.6,10.4,2.1c2,1.1,3.2,2.9,3.2,5.1c0,2.8-2.4,5.2-6.4,6.3v0.1
                                 c3.6,0.7,7.8,2.9,7.8,7.2c0,2.5-1.3,4.4-3.2,5.7c-2.6,1.9-6.9,2.7-13.1,2.7c-3.4,0-5.9-0.2-7.6-0.3L45.6,29.3L45.6,29.3z
                                 M50.5,41.1h4.5c5.1,0,8.1-2.1,8.1-4.9c0-3.3-3.3-4.7-8.3-4.7c-2.3,0-3.6,0.1-4.4,0.3L50.5,41.1L50.5,41.1z M50.5,54.8
                                 c1,0.1,2.4,0.2,4.1,0.2c5.1,0,9.7-1.4,9.7-5.6c0-3.9-4.4-5.6-9.8-5.6h-4.1V54.8z"></path>
                        </g>
                    </g>
                </svg>
            </a>

            <nav class="menu-box-1">
                <ul class="flex height-100p">
                    <li>
                        <a href="#" class="flex height-100p flex-ai-c">BRAND</a>
                        <div class="img-box">
                            BRAND<br>
                            <span>태봉이는 언제나 즐겁습니다.</span>
                        </div>
                        <div class="relative">
                            <ul>
                                <li><a href="#" class="block">대표인사말</a></li>
                                <li><a href="#" class="block">죠스이야기</a></li>
                                <li><a href="#" class="block">채용정보</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="flex height-100p flex-ai-c">MENU</a>
                        <div class="img-box">
                            MENU<br>
                            <span>태봉이 메뉴입니다.</span>
                        </div>
                        <div class="relative">
                            <ul>
                                <li><a href="#" class="block">메인메뉴</a></li>
                                <li><a href="#" class="block">세트메뉴</a></li>
                                <li><a href="#" class="block">사이드메뉴</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="flex height-100p flex-ai-c">STORE</a>
                        <div class="img-box">
                            STORE<br>
                            <span>태봉이 매장입니다.</span>
                        </div>
                        <div class="relative">
                            <ul>
                                <li><a href="#" class="block">매장 찾기</a></li>
                                <li><a href="#" class="block">매장 안내</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="flex height-100p flex-ai-c">COMMUNITY</a>
                        <div class="img-box">
                            COMMUNITY<br>
                            <span>태봉이 커뮤니티입니다.</span>
                        </div>
                        <div class="relative">
                            <ul>
                                <li><a href="#" class="block">커뮤니티</a></li>
                                <li><a href="#" class="block">고객의 소리</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <a href="#" class="btn-go-franchise img-box flex flex-ai-c">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 181 56.35">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #231815;
                            }

                            .cls-2 {
                                fill: #fff;
                            }

                            .cls-3 {
                                fill: #9c0a1f;
                            }
                        </style>
                    </defs>
                    <title>top-bar-shop</title>
                    <rect class="cls-1" x="3" y="3.35" width="178" height="53" rx="12.73"></rect>
                    <rect class="cls-2" width="178" height="53" rx="12.73"></rect>
                    <path class="cls-3"
                        d="M102.13,48.17l-.22.4-.4.44-.61.94-.46,1.14-1.3-.42-.7-.25-.78-.09h-.44l-.2-.07-1.26-.15V50l-.82-.11-.72,0-.44,0-.62.09L92.68,50l-.14,0v.09L91.9,50l-.83.11-.34,0-.28.07h-.56l-.58.15-.86.23-.28,0-.08.07-.44,0-.28.16-.54.11-.24.07-.9.2-.36.24-.42.09-.4.16-.78.13h-.58l.08-.69.08-.47.48-1.45h.84l.76.13.62-.22.58-.22L87,48.9l2.44-.53,2.53-.52,3.28-.33,1.66-.07.86.07,1.52-.23h2.19l.58.18Zm-1-3.78-.63.47-1.6-.13-.7-.07h-.7l-.52,0v0h-.94l-.22,0h0v0h-1.1l-.44.06-.22.18h-.94l-.64.18-.46.07-.79.18-2,.71-.54,0-.52.22-.54.07-1,.31h-.42l-.42-.18V46l.58-.87.86-.6h.52l.48-.14.5-.11.44-.09h.16l.52-.2L91,43.65,92.06,43l1.48-1.05.28-.07.38-.55.32-.63.28-.54.2-.58.08-.29-.16-.11h-.46l-.16,0-.44.2-.38.11-.68.38-.58.33-.68.58-.39.59-.3.71-.12.29,0,.42-.38.43h-.54l-.4-.18-.9,0v-.56l.7-.74.56-1.11.1-.14.52-.73.42-.52.81-.42.86-.41-.74.09H89.85l-.46,0L89,38.34l-.58-.23L88.21,38l-.62-.52-.26-.29.1-.67.44-.42.42-.16L89,36l.66-.07h.1l.78-.16.36,0,.12-.07.63-.06.08,0,.28-.06,1-.25,1.54-.42h.58l.26,0,.38,0,.82,0v.09h.08l.44.11.26.07.78.22,1,.38L100,36l.36.6-.08.6-.56.29-.5.16-.88.25-.6.06L98,38l.8.31.68.38.06.56-.18.36-.34.69-.08.14-.22.35-.26.38-.64.92-.3.56-.42.46.3-.06,1-.14.36,0,.36,0,.44-.09,1.21.07Z"
                        transform="translate(-18.5 -16.81)"></path>
                    <path class="cls-3"
                        d="M111.88,35.61l.56.36.36.33.34.12v.2l.24.18.24.35.18.47-.12.67-.2.61-.38.22-.24.29-.24.58-.12.56-.06.6-.5.49-.56,0-.84,0-.87.07-.8.08-.38.09-.24.09-.14,0,.22.4-.3,1,.1.07.44,0,.24.09.44,0,1.41-.05.22,0,.56-.18,1-.45.52-.29.76-.31.36.94-.3.62-.24.25-.38.22-.68.34-.4.09-.1.07-.42.24-.2.09-.22.13-.32.05-.1,0-1,.06-.28.12-.08,0h0l-.5.09-.4.2-.24,0-.42.18-.48.2-.34.09-.74.29h-.14l-.4.07-.3-.43-.56-.82-.26-.5.22-.55.22-.32.2-.53.14-.61,0-.24-.28.09-.24.09-.4.06-.42-.35,0-.49.1-.58.34-1,.36-.32.32,0,.32,0,.32-.06.38,0,.94-.38,1.62-.6.46-.11.16-.23v-.11l-.24-.07-.26-.06-.8,0h-.3l-.26-.09-.32-.09-.78-.29-.88-.4-.44-.27-.18,0-.28,0-.48-.35.08-.72.28-.6.18-.54.4-.15.64,0,.76.06.7,0,.76,0,1,0,.8,0,.46.06.65.05.12.2.14,0,.12.09Zm9,13.58-.22,1.16.12,1.28-.6.69-.8.16-.57.13h0l-.36.09v.07h-.26v.11l-.56.11-.56.29-.68.29-.38.22-.44.11-.42.25-.5.18-1.3.07-.26-.43-.3-.27-.58-.69-.22-.24-.22-.36-.42-.43-.92-1.2-.69-.61-.16-.08-.56-.5-.06-.89.18-.47.5-.71.52-.7.65-.58.42-.11.38-.2.14,0,.32-.22h.54l.66,1.49.44.54.08.2.28.42.5.58.56.61.2.35.5,0,.26-.07.36-.22.26-.09.38-.27.24-.09.62-.4.78-.31.14-.05.36-.29.68-.11.35,0,.32.38Zm-.08-14.31,0,.49,0,1-.08.29v1.56l0,1,0,1.34v.92l0,.71,0,2.1-.2.94-.86.58-.91-.09-.8.14-1.64,1.27-.7-.09,1-1.18.62-.79.4-.58.06-.73V41.82l0-.8,0-.11V40.3l-.18,0-.74.31-.06,1.25,0,.87-.06.54-.16.51-.36.76-.34.47-.56.29-.5-.16-.16-.58v-.76l0-.53.1-.87,0-.76V40.46l0-.92,0-1.11V37l0-.49,0-.62-.12-.25-.3-.27-.06-.56.24-.47.56-.37.78.51.34.2.08.09.24.11.18.27.1.42,0,.92v1.83l.94-.18,0-1.58v-.63l0-1-.08-.13-.52-.5.42-1.22.88,0v.14h.06l.18.09.34.06.18.09h.6l.57.31.36.52Z"
                        transform="translate(-18.5 -16.81)"></path>
                    <path class="cls-3"
                        d="M136.08,47.43l-.16.67-.62.15-.28.09-.6.43-.52.22-.76,0-.32-.6-.34-.76-.3-1-.24-.94-.52-1.05-.38-.58-.52.76-.78,1.07-.46.8-.45.76-.4.56-.26.63L128,49l-.2.43-.68,1.09-.34.23-.48,0-.18,0-.36,0-.2-.2-.14-.07-.14-.2-.44-.4-.24-.49,0-.56.38-.4.4-.18.6-.42.6-.65.22-.32.28-.31.06-.15.44-.63.38-.6.78-1.28.29-.78.38-.6.32-.56-.68.18-.59.18-.78.38-.34.09-.44,0-.34-.13-.62-.65-.28-.42L125,41l-.36-.85v-.51l.38-.4h.62l.24.11.52,0,.42,0,.76-.16.22-.11.64-.16.22,0,.51-.22-.23-.14-.42-.33-.36-.2-.26-.25-.44-.29-.34-.13-.62-.43-.22-.38,0-.62.08-.31.18-.52.38-.65,1-.31.52.18v.09h0l.72.18.49.2.8.38.9.29,1.12.62,1,.79.24.4L134,37l.66,0,.52.16.32.71-.26,1-.16.94-.6.36-.6.22-.46.25-.28.13-.4.58-.16.38-.2.38,1,1,.6.92.38.56.68,1.09.58.76.24.49Zm7.29-4.22-.46,1-.42.38h-1.36l-.22,0-.9.25-.06.56.06.78v.89l.08.56v2l-.14,3.4-.24.24-.5.36-.26.07-.24.13-.87.45h-.78l-.38,0-.28-.38-.2-.46,0-.88.06-.24.14-1.52,0-1.18V48.05l0-.55,0-1V43.34l0-.29-.06-1,0-.32,0-.49,0-1.16.14-1.63V36.84l0-.49,0-1.09-.08-.52-.18-.38-.06-.38.2-.51.4-.49.4,0,.2.08.26.12.36.13.95.6H139l.5.36.36.18.34.42.16.47-.16.65,0,.63v1.09l0,.92,0,1.29v2.19l.66-.29.32-.18.84-.11.86.62.48.54Z"
                        transform="translate(-18.5 -16.81)"></path>
                    <path class="cls-3"
                        d="M157,40l0,.76L156.44,42l-1,1.74-1.06,1.57-.7.69-1.24.89-.32.16-.26.27h-.26l-.5.22-.7.14-1.28,0-.26-.13-.28-.13-.76-.9-.3-.24-.49-.7-.2-.11-.1-.27-.36-.46-.5-.88-.52-.78-.34-.91.06-.85.44-1,.92-1.83.32-.24.28-.36.39-.29.7-.83.4-.38v-.51l.3-.72.72-.58.88.34.42.24.46.41.06.49v.8l-.28.27-.92.62-.36.32-.4.2-.3.31-.72.63-.42.44-.16.54.06.91.14.14.34.47.12.06.58.67.22.07.18.22.46.34h0l0-.09h.86l.14,0,.06-.14.74-.65.32-.38.24-.35.24-1V39.3l0-.23-.26-.51-.56-.27-.16-.47,0-.58.38-.82.52-.27.8-.07v.16l.14,0,1.22,0,.44.54.16.36.28.45v.11l.18.24.26.4.44.61Zm4.83-4.67-.16.65,0,.63v1.09l0,.92,0,1.29v2.52l0,.85-.06,1.32-.08.83.06.78v.89l.08.56v2l-.14,3.4-.24.24-.5.36-.26.07-.24.13-.72.29,0,0v.06l-.9.07-.38,0-.28-.38-.2-.46,0-.88.06-.24.14-1.52,0-1.18V48.05l0-.55,0-1V43.34l0-.29-.06-1,0-.32,0-.49,0-1.16.14-1.63V36.84l0-.49,0-1.09-.08-.52-.18-.38-.06-.38.2-.51.36-.49.42,0,.2.08.28.12.36.13,1,.6h.16l.5.36.36.18.34.42Z"
                        transform="translate(-18.5 -16.81)"></path>
                    <path class="cls-3"
                        d="M184.23,47.94l-.22.4-.4.45-.62.94-.46,1.11-1.3-.4-.7-.24-.78-.09h-.44l-.2-.07-1.26-.16v-.06l-.82-.11-.72,0-.43,0-.63.09-.47-.07-.14,0v.09l-.64,0-.84.11-.34,0-.28.06H172l-.58.16-.86.22-.28,0-.08.06-.44.05-.28.15-.54.12-.24.06-.9.2-.36.25-.38.07-.4.17-.81.14h-.58l.08-.72.08-.44.47-1.45h.84l.76.13.62-.22.58-.23.38,0,2.44-.54,2.54-.51,3.27-.34,1.66-.06.86.06,1.52-.22h2.2l.58.18Zm-1.44-4.76-.28.41-.76.26-.42.07-.88.34-.56.15-.74.09-.5-.53-.22-.54-.28-.74-.08-.69-.4-.62-.08-.09-.34-.65-.14-.25-.06,0-1.17,1.7-.3.38-1.86,2-1.08,1-.3.09-.34.27-.82.51-.26.31-.7.07-1-.36-.58-.24-.58-.52-.66-.74.22-.33.76-.36.48-.38,1.12-.53.5-.27,1.24-1.19.56-.4,1-.85.52-.44.44-.4.12-.29,1.09-1.17-.73.12-.8.06-.62.07-.68-.05-.48-.11-.66,0-1.14-.4-.58-.69,0-.94.18-.29.18-.49.72-.07,1,.09.88-.09.78-.16.26-.06.92-.09.48-.07.75,0,.82-.05h.44l.9,0,.64,0,2.46-.15.48.58,0,.83-.82.73-.66.32-1,.71-.36.72.2.31,1.14.91.62.65.34.36.72.82.6.56v.14l.24.13Z"
                        transform="translate(-18.5 -16.81)"></path>
                    <path class="cls-3"
                        d="M62.81,45.43H57.38a2.7,2.7,0,0,0-2.7,2.7v4.18a2.7,2.7,0,0,0,2.7,2.7h5.43a2.7,2.7,0,0,0,2.7-2.7V48.13A2.7,2.7,0,0,0,62.81,45.43Zm.74,6.88a.74.74,0,0,1-.74.73H57.38a.74.74,0,0,1-.74-.73V48.13a.74.74,0,0,1,.74-.74h5.43a.74.74,0,0,1,.74.74Z"
                        transform="translate(-18.5 -16.81)"></path>
                    <path class="cls-3"
                        d="M74.39,37.83a.91.91,0,0,0-.13-.48l-6-10.49a1,1,0,0,0-.85-.49H41.32a1,1,0,0,0-.85.49L34.52,37.35a1,1,0,0,0-.13.48,5.75,5.75,0,0,0,3.44,5.26V60.38a1,1,0,0,0,1,1H70a1,1,0,0,0,1-1V43.21a.31.31,0,0,0,0-.1A5.78,5.78,0,0,0,74.39,37.83Zm-32.5-9.49h25l4.65,8.2H37.25Zm21,10.16a3.77,3.77,0,0,1-7.42,0Zm-9.51,0a3.77,3.77,0,0,1-7.42,0Zm-16.93,0h7.43a3.77,3.77,0,0,1-7.43,0ZM50.87,59.4H45.23V48.79a1.4,1.4,0,0,1,1.4-1.4h2.85a1.4,1.4,0,0,1,1.4,1.4V59.4ZM69,59.4H52.83V48.79a3.36,3.36,0,0,0-3.36-3.36H46.62a3.36,3.36,0,0,0-3.36,3.36V59.41H39.79V43.57h.34A5.71,5.71,0,0,0,44.89,41a5.72,5.72,0,0,0,9.51,0,5.71,5.71,0,0,0,9.5,0,5.71,5.71,0,0,0,4.76,2.54H69V59.4Zm-.33-17.78a3.79,3.79,0,0,1-3.72-3.12h7.43A3.78,3.78,0,0,1,68.66,41.62Z"
                        transform="translate(-18.5 -16.81)"></path>
                </svg>
            </a>

        </div>
    </div>
    <!-- 비디오 슬라이더 -->
    <div class="my-slider-1 con-min-width autoplay-now-work">
        <!-- Slider main container -->
        <div class="swiper-container height-100p">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="height-100p con flex flex-ai-c">
                        <h1>매콤한 국물이 별미 <br>태봉이 국물닭발</h1>
                    </div>
                    <video
                        src="https://rimrumrom.github.io/img1/creation/%ED%95%9C%EC%8B%A0%EB%8B%AD%EB%B0%9C_20171103.mp4 "
                        autoplay="autoplay" muted="muted" loop="loop"></video>
                </div>
                <div class="swiper-slide">
                    <div class="height-100p con flex flex-ai-c">
                        <h1>매콤한 국물이 별미 <br>태봉이 국물닭발</h1>
                    </div>
                    <video
                        src="https://rimrumrom.github.io/img1/creation/%ED%95%9C%EC%8B%A0%EB%8B%AD%EB%B0%9C_20171103.mp4"
                        autoplay="autoplay" muted="muted" loop="loop"></video>
                </div>
                <div class="swiper-slide">
                    <div class="height-100p con flex flex-ai-c">
                        <h1>매콤한 국물이 별미 <br>태봉이 국물닭발</h1>
                    </div>
                    <video
                        src="https://rimrumrom.github.io/img1/creation/%ED%95%9C%EC%8B%A0%EB%8B%AD%EB%B0%9C_20171103.mp4"
                        autoplay="autoplay" muted="muted" loop="loop"></video>
                </div>
            </div>
            <div class="nav-box flex  flex-ai-c">
                <div class="btn btn-prev"><i class="fas fa-angle-left"></i></div>
                <div class="pagination"></div>
                <div class="btn btn-next"><i class="fas fa-angle-right"></i></div>
                <div class="btn btn-start"><i class="fas fa-play"></i></div>
                <div class="btn btn-stop"><i class="fas fa-stop"></i></div>
            </div>
        </div>
    </div>
    <!-- 매장 -->
    <div class="page-1 con-min-width">
        <div class="con flex flex-jc-sb">
            <div>
                <div class="head">
                    <h2>NEW STORE</h2>
                    <h1>태봉이 푸드 <br><span>새 매장을 <br>소개합니다.</span></h1>
                    <div>
                        <a href="#" class="new-store-go">태봉이푸드 새 매장 만나기</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="head">
                    <h2>STORE SEARCH</h2>
                    <h1>태봉이 푸드 <br><span>매장,<br>어디있죠?!</span></h1>
                    <div>
                        <input type="text" class="search" placeholder="가까운 지역명을 검색하세요" maxlength="20">
                        <button type="submit" class="btn_search">
                            <img src="https://rimrumrom.github.io/img1/creation/search-solid 1.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 메뉴 -->
    <div class="page-2 con-min-width active-on-visible" data-active-on-visible-diff-y="-400">
        <div class="con flex flex-jc-sb">
            <div class="txt-box">
                <div class="head">
                    <h2>NEW STORE</h2>
                    <h1>오늘 태봉이에서 <br><span>뭘 먹을까?</span></h1>
                    <div>
                        <a href="#" class="new-store-go">태봉이푸드 전체메뉴 보기</a>
                    </div>
                </div>
            </div>
            <div class="img-box">
                <img src="https://rimrumrom.github.io/img1/creation/page-2-bn.png" alt="">
            </div>
        </div>
    </div>
    <!-- 모바일 -->
    <div class="page-3 con-min-width active-on-visible flex" data-active-on-visible-diff-y="-600">
        <div class="con flex flex-jc-sb">
            <div class="img-box">
                <img src="https://rimrumrom.github.io/img1/creation/page-3-mobile.png" alt="">
            </div>
            <div class="txt-box">
                <div class="head">
                    <h2>
                        <span><img src="https://rimrumrom.github.io/img1/creation/mobile-alt-solid.png" alt=""></span>
                        <span>MOBILE ORDER</span>
                    </h2>
                    <h1>배달도 되고,<br><span> 선물도 됩니다.</span><br><span>태봉이푸드.</span></h1>
                </div>
            </div>
            <div class="circel circle-img1">
                <img src="https://rimrumrom.github.io/img1/creation/one1.png" alt="">
            </div>
            <div class="circel circle-img2">
                <img src="https://rimrumrom.github.io/img1/creation/one2.png" alt="">
            </div>
        </div>
    </div>
    <!-- 리뷰 슬라이더 -->
    <div class="page-4">
        <div class="content-box con">
            <div class="title flex">
                <!-- 여기에 아이콘 넣으세용 -->
                <div class="icon">
                    <img src="https://rimrumrom.github.io/img1/creation/people-2.png" alt="">
                </div>
                <div class="txt">REVIEW</div>
            </div>
            <div class="sub-title">
                고객과 <span>소통하다.</span>
            </div>
        </div>
        <div class="slider-1">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190822286640.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190731798184.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607428397.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607343918.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="http://www.jawsfood.co.kr/uploads/sbanner/20190607654235.png" alt="">
                    </div>
                    <div class="txt-box">
                        글
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 채용 -->
    <div class="page-5 con-min-width active-on-visible" data-active-on-visible-diff-y="-400">
        <div class="con flex flex-jc-sb">
            <div class="txt-box">
                <div class="head">
                    <h2>PEOPLE</h2>
                    <h1>태봉이와 함께 할<br><span>당신을</span><br><span>모십니다.</span></h1>
                </div>
            </div>
            <div class="img-box">
                <img src="https://rimrumrom.github.io/img1/creation/people-2.png" alt="">
            </div>
            <div class="circle-img1">
                <img src="https://rimrumrom.github.io/img1/creation/one1.png" alt="">
            </div>
            <div class="circle-img2">
                <img src="https://rimrumrom.github.io/img1/creation/one2.png" alt="">
            </div>
        </div>
    </div>
    <!-- 따라다니는 풋바, 하단바 -->
    <div class="foot-bar">
        <div class="con flex flex-ai-c flex-jc-c">
            <div class="tit">창업 상담 신청</div>
            <div class="info-1">
                <input type="text" class="name" placeholder="이름" maxlength="20">
            </div>
            <div class="info-2 flex flex-ai-c">
                <input type="text" class="num-1" placeholder="연락처" maxlength="20">
                <span class="dash"></span>
                <input type="text" class="num-2" placeholder="" maxlength="20">
                <span class="dash"></span>
                <input type="text" class="num-3" placeholder="" maxlength="20">
            </div>
            <div class="btn">
                <input type="button" class="num-3" placeholder="" value="신청하기" maxlength="20">
            </div>
        </div>
    </div>
    <footer class="footer-bar foot-bar-on">
        <div class="con flex flex-jc-sb">
            <div class="txt-box txt-box-1">
                <div class="head">
                    <div>주식회사 태봉이푸드</div>
                </div>
                <div class="body">
                    <div>대전 서구 관저중로 95번길 18(관저동)</div>
                    <div>대표자 : 김미화</div>
                    <div>통신판매업신고 : 2020-대전-야호</div>
                    <div>사업자등록번호 : 888-88-8888</div>
                </div>
            </div>
            <div class="txt-box txt-box-2">
                <div class="head flex">
                    <div>채용안내</div>
                    <div>개인정보처리방침</div>
                    <div>이용약관</div>
                    <div>사이트맵</div>
                </div>
                <div class="body flex">
                    <div class="img">
                        <img src="https://rimrumrom.github.io/img1/creation/footer-icon-call.png" alt="">
                    </div>
                    <div class="txt">
                        <div>고객센터 : 042-1234-1234 | 주문번호 : 1588-8282</div>
                        <div>창업문의 : 042-541-3388</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>