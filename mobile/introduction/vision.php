<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/introduction.css">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>

    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2>COMPANY</h2>
            <p>미래를 여는 기업 아진엑스텍입니다.</p>
        </div>
    </div>

    <!-- snb-list -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/introduction/_snb_list.php'); ?>
    
    <!-- Content -->
    <main id="content" class="introduction">
        <section class="vision">
            <div class="section-header">
                <h3 class="section-title">비젼</h3>
            </div>
            <div class="section-content">
                <article class="details">
                    <div class="container">
                        <div class="article-header">
                            <small>AJINEXTEK</small>
                            <h4>GLOBAL PROVIDER</h4>
                            <p>"고속, 고정도 모션 제어" 를 중심으로 하는<br> 메카트로닉스 정밀 제어기 분야</p>
                        </div>
                        <div class="article-content">
                            <ol>
                                <li><span>1</span>제어 분야 핵심기술 국산화 자체 상품화 추진</li>
                                <li><span>2</span>FIELD Application 역량 강화 </li>
                                <li><span>3</span>글로벌 마케팅 (수입대체, 수출촉진) 추진</li>
                                <li><span>4</span>제품 신뢰성, 성능, 가격 경쟁력 개선</li>
                            </ol>
                            <ul>
                                <li>
                                    <div>
                                        <figure>
                                            <img src="/mobile/assets/images/introduction/img_vision01.png" alt="">
                                            <figcaption>자기계발 (기술경제)</figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <figure>
                                            <img src="/mobile/assets/images/introduction/img_vision02.png" alt="">
                                            <figcaption>사회변혁 (정보경쟁)</figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <figure>
                                            <img src="/mobile/assets/images/introduction/img_vision03.png" alt="">
                                            <figcaption>국부창조 (세계경쟁)</figcaption>
                                        </figure>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>