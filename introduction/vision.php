<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduction.css">
</head>
<body class="sub introduction">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="bg-backdrop"></div>
        <div class="container">
            <div class="page-summary">
                <div class="v-align">
                    <h2>COMPANY</h2>
                    <p>미래를 여는 기업 아진엑스텍입니다</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- lnb -->
    <nav id="lnb">
        <div class="container">
            <ul class="lnb-list">
                <li><a href="/introduction/introduce.php">회사소개</a></li>
                <li><a href="/introduction/history.php">연혁</a></li>
                <li class="active"><a href="/introduction/vision.php">비전</a></li>
                <li><a href="/introduction/group.php">조직도</a></li>
                <li><a href="/introduction/news_list.php">아진소식</a></li>
                <li><a href="/introduction/location.php">오시는 길</a></li>
                <li><a href="/introduction/ci.php">CI소개</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="vision">
                <div class="section-header">
                    <h3>비전</h3>
                </div>
                <div class="section-content">
                    <article class="global-provider">
                        <div class="article-header">
                            <h4>
                                <small>AJINXTEK</small>
                                GLOBAL PROVIDER
                            </h4>
                            <p>"고속, 고정도 모션 제어" 를 중심으로 하는 메카트로닉스 정밀 제어기 분야</p>
                            <ol>
                                <li><span>1</span>제어 분야 핵심기술 국산화 자체 상품화 추진</li>
                                <li><span>2</span>FIELD Application 역량 강화 </li>
                                <li><span>3</span>글로벌 마케팅 (수입대체, 수출촉진) 추진</li>
                                <li><span>4</span>제품 신뢰성, 성능, 가격 경쟁력 개선</li>
                            </ol>
                        </div>
                        <div class="article-content">
                            <div class="row">
                                <div class="col-10 offset-1">
                                    <ul>
                                        <li>
                                            <figure>
                                                <img src="/assets/images/introduction/icon_vision01.png" alt="">
                                                <figcaption>자기계발 (기술경제)</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="/assets/images/introduction/icon_vision02.png" alt="">
                                                <figcaption>사회변혁 (정보경쟁)</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="/assets/images/introduction/icon_vision03.png" alt="">
                                                <figcaption>국부창조 (세계경쟁)</figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>