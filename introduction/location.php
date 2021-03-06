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
                <li><a href="/introduction/group.php">조직도</a></li>
                <li><a href="/introduction/news_list.php">아진소식</a></li>
                <li class="active"><a href="/introduction/location.php">오시는 길</a></li>
                <li><a href="/introduction/ci.php">CI소개</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="location">
                <div class="section-header">
                    <h3>오시는 길</h3>
                </div>
                <div class="section-content">
                    <nav class="tab-menu">
                        <ul>
                            <li class="active"><a href="#">본사(남부사무소)</a></li>
                            <li><a href="#">경인사무소</a></li>
                            <li><a href="#">중부사무소</a></li>
                            <li><a href="#">중국사무소</a></li>
                        </ul>
                    </nav>
                    <article class="information">
                        <h4>본사(남부사무소)</h4>
                        <p class="summary">
                            대구 성서 첨단 산업단지에 위치한 본사는 2100여평의 대지위에 사무동, 생산동 연구소를 갖춘 본사 사옥과 부속 기숙사동 등 2동의 건물로서 완벽한 연구개발 및 생산 시설을 갖춤으로서 R&amp;D를 통한 국부창조의 핵심공간입니다. 본사에서는 기술 연구소를 중심으로 메카트로닉스 핵심 부품을 국산화 하기 위한 연구개발이 365일 끊이지 않는 노력과 열정으로 이루어지며 또한 품질 경영의 토대위에 품질과 생산성 향상을 위한 노력들이 전략 기획팀을 중심으로 이루어지며 전략경영을 위한 마케팅, 경영지원, Global Marketing 서비스를 제공하고 있습니다.
                        </p>
                        <div class="table-wrap">
                            <table class="table type-1">
                                <colgroup>
                                    <col style="width: 155px">
                                    <col style="width: 1015px">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>주소안내</th>
                                        <td>대구광역시 달서구 성서공단로11길 27</td>
                                    </tr>
                                    <tr>
                                        <th>전화번호</th>
                                        <td>053-593-3700(내선 164번)</td>
                                    </tr>
                                    <tr>
                                        <th>FAX</th>
                                        <td>053-593-3703</td>
                                    </tr>
                                    <tr>
                                        <th>제품문의</th>
                                        <td>우승형 차장(<a href="mailto:tackfive@ajinextek.com">tackfive@ajinextek.com</a>)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <div class="maps">
                        <img src="/assets/images/introduction/img_maps.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>