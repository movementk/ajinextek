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
                <li><a href="/introduction/vision.php">비전</a></li>
                <li class="active"><a href="/introduction/group.php">조직도</a></li>
                <li><a href="/introduction/news_list.php">아진소식</a></li>
                <li><a href="/introduction/location.php">오시는 길</a></li>
                <li><a href="/introduction/ci.php">CI소개</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content" class="space-content">
        <section class="group">
            <div class="container">
                <div class="section-header">
                    <h3>조직도</h3>
                </div>
                <div class="section-content">
                    <figure>
                        <img src="/assets/images/introduction/img_group.png" alt="">
                        <figcaption class="sr-only">
                            <ol>
                                <li>
                                    <h1>대표이사</h1>
                                    <ul>
                                        <li><h2>감사</h2></li>
                                        <li>
                                            <h2>COO</h2>
                                            <ul>
                                                <li>
                                                    <h3>연구개발</h3>
                                                    <ul>
														<li>개발 1팀</li>
														<li>개발 2팀</li>
														<li>개발 3팀</li>
														<li>개발 4팀</li>
                                                   		<li>개발 5팀</li>    
                                                   		<li>시스템설계팀</li>    
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>영업 고객지원</h3>
                                                    <ul>
                                                        <li>영업1팀</li>
                                                        <li>영업2팀</li>
                                                        <li>영업3팀</li>
                                                        <li>기술지원팀</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>제조기술</h3>
                                                    <ul>
                                                        <li>생산관리팀</li>
                                                        <li>생샌기술팀</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>품질경영</h3>
                                                    <ul>
                                                        <li>QM5 Part</li>
                                                        <li>QC Part</li>
                                                        <li>SE Part</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>경영지원</h3>
                                                    <ul>
                                                        <li>인사총무팀</li>
                                                        <li>재무회계팀</li>
                                                        <li>구매팀</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><h2>이사회</h2></li>
                                    </ul>
                                </li>
                            </ol>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>