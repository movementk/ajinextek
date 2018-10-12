<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/product.css">
</head>
<body class="sub product">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>

    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2>PRODUCT</h2>
            <p>미래를 여는 기업 아진엑스텍입니다.</p>
        </div>
    </div>

    <!-- snb-list -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/product/_snb_list.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <div class="container">
            <section class="product-list product-list01">
                <div class="section-header">
                    <h3 class="section-title">모둘형 보드</h3>
                </div>
                <div class="section-content">
                    <article class="product-info">
                        <figure>
                            <img src="/mobile/assets/images/product/img_product01.jpg" class="img-fluid" alt="">
                        </figure>
                        <div class="details">
                            <p><strong>모듈형 제어 보드</strong> 제품들은 제어 시스템의 최적 설계와 유연성을 고려하여 제작된 Add-On 방식의 모듈 제품군으로 ISA, PCI 등의 표준 버스 베이스보드에 장착되어 다양한 시스템 구축이가능합니다.</p>
                            <ul class="dott-list">
                                <li>
                                    <dl>
                                        <dt>Motion Module</dt>
                                        <dd>펄스 출력형과 아날로그 출력형으로 구성된 모터 전용 제어 모듈보드</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>Counter Module</dt>
                                        <dd>외부 펄스신호를 입력받아 트리거 신호로 생성하는 카운터 모듈 보드</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>Digital Module</dt>
                                        <dd>V.V, Lamp, Switch, Relay 등을 제어하기 위한 디지털 입출력 모듈보드</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>Analog Module</dt>
                                        <dd>전류, 전압, 온도 측정 등 물리량을 제어하기 위한 아날로그 입출력 모듈보드</dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="depth-list">
                        <div class="article-header">
                            <nav class="product-nav">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="product-depth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        BOARD(Module)
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="product-depth">
                                        <a class="dropdown-item" href="#">MOTION CHIP</a>
                                        <a class="dropdown-item" href="#">BOARD(Module)</a>
                                        <a class="dropdown-item" href="#">BOARD(Single)</a>
                                        <a class="dropdown-item" href="#">NETWORK</a>
                                        <a class="dropdown-item" href="#">PLC</a>
                                        <a class="dropdown-item" href="#">ROBOT CONTROLLER</a>
                                        <a class="dropdown-item" href="#">EZSOFTWARE</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="article-content">
                            <ul>
                                <li>
                                    <figure>
                                        <img src="/mobile/assets/images/product/img_product02.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <div class="summary">
                                        <h4>MOTION MODULE</h4>
                                        <p>Base Board 제품군은 PCI Bus,  PCIe Bus를 지원하는 모듈 베이스 보드입니다.</p>
                                        <div class="btn-area">
                                            <a href="/mobile/product/product_list02.php" class="btn btn-lg btn-blue" role="button">제품보기</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/mobile/assets/images/product/img_product02.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <div class="summary">
                                        <h4>MOTION MODULE</h4>
                                        <p>Base Board 제품군은 PCI Bus,  PCIe Bus를 지원하는 모듈 베이스 보드입니다.</p>
                                        <div class="btn-area">
                                            <a href="/mobile/product/product_list02.php" class="btn btn-lg btn-blue" role="button">제품보기</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>