<?php get_header(); ?>
    <main id="main">
        <div class="main-mv">
            <div class="s-investment-breadcrumb">
                <div class="container">
                    <div class="s-investment-breadcrumb__wpr">
                        <ul class="s-investment-breadcrumb__list">
                            <li class="s-investment-breadcrumb__item"><a href="/" class="s-investment-breadcrumb__link">不動産売買・仲介トップ</a></li>
                            <li class="s-investment-breadcrumb__item"><a href="#" class="s-investment-breadcrumb__link"> 不動産投資・収益物件</a></li>
                            <li class="s-investment-breadcrumb__item"><a href="#" class="s-investment-breadcrumb__link"> 不動産投資の基礎知識</a></li>
                            <li class="s-investment-breadcrumb__item active">カテゴリ名</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="page-title-bar">
                    <h2 class="heading__primary heading__primary--white heading__primary--center">不動産投資の基礎知識</h2>
                    <p class="heading__desc heading__desc--white">初心者から経験者まで役立つ不動産投資の基礎知識を解説します。</p>
                </div>
            </div>
        </div>
        <div class="s-investment-articles-listing">
            <div class="container">
                <?php // $allPostCats = get_the_category();
                //dd($allPostCats);
                ?>
                <h3 class="heading__tertiary">タグ一覧</h3>
                <div class="s-investment-tag-list">
                    <a href="#" class="s-investment-tag-box">#不動産投資</a>
                    <a href="#" class="s-investment-tag-box">#不動産購入</a>
                    <a href="#" class="s-investment-tag-box">#不動産売却</a>
                    <a href="#" class="s-investment-tag-box">#不動産査定</a>
                    <a href="#" class="s-investment-tag-box">#賃貸</a>
                    <a href="#" class="s-investment-tag-box">#貸したい</a>
                    <a href="#" class="s-investment-tag-box">#手続き</a>
                    <a href="#" class="s-investment-tag-box">#ノウハウ</a>
                    <a href="#" class="s-investment-tag-box">#住宅ローン</a>
                    <a href="#" class="s-investment-tag-box">#お金</a>
                    <a href="#" class="s-investment-tag-box">#税制・税金</a>
                    <a href="#" class="s-investment-tag-box">#制度・補助金</a>
                    <a href="#" class="s-investment-tag-box">#マンション</a>
                    <a href="#" class="s-investment-tag-box">#一戸建て</a>
                    <a href="#" class="s-investment-tag-box">#土地</a>
                    <a href="#" class="s-investment-tag-box">#相続</a>
                    <a href="#" class="s-investment-tag-box">#老後</a>
                    <a href="#" class="s-investment-tag-box">#介護</a>
                    <a href="#" class="s-investment-tag-box">#保険</a>
                    <a href="#" class="s-investment-tag-box">#外壁</a>
                    <a href="#" class="s-investment-tag-box">#メンテナンス</a>
                    <a href="#" class="s-investment-tag-box">#住宅設備</a>
                    <a href="#" class="s-investment-tag-box">#リフォーム</a>
                    <a href="#" class="s-investment-tag-box">#間取り</a>
                    <a href="#" class="s-investment-tag-box">#屋根</a>
                    <a href="#" class="s-investment-tag-box">#用語解説</a>
                </div>

                <div class="s-investment-articles-list">
                    <div class="s-investment-articles-list-tabs">
                        <p class="s-investment-articles-list-tab  active" data-tab="new-order">新着順</p>
                        <p class="s-investment-articles-list-tab " data-tab="popularity-order">人気順</p>
                    </div>
                    <div class="s-investment-articles-list-tabs-content">
                        <div class="s-investment-articles-list-container active" id="new-order">
                            <div class="s-investment-cards-row">
                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card01.jpg" alt="不動産投資初心者が知っておきたい基知識と始め方のポイント" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">2024.08.01</p>
                                        <h3 class="s-investment-cards-title">不動産投資初心者が知っておきたい基知識と始め方のポイント</h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">#不動産購入</p>
                                            <p class="s-investment-cards-tag">#不動産投資</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card02.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">2024.08.01</p>
                                        <h3 class="s-investment-cards-title">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…</h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">#不動産購入</p>
                                            <p class="s-investment-cards-tag">#不動産投資</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card03.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">2024.08.01</p>
                                        <h3 class="s-investment-cards-title">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…</h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">#不動産購入</p>
                                            <p class="s-investment-cards-tag">#不動産投資</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card04.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">2024.08.01</p>
                                        <h3 class="s-investment-cards-title">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…</h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">#不動産購入</p>
                                            <p class="s-investment-cards-tag">#不動産投資</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card05.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">2024.08.01</p>
                                        <h3 class="s-investment-cards-title">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…</h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">#不動産購入</p>
                                            <p class="s-investment-cards-tag">#不動産投資</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card06.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">2024.08.01</p>
                                        <h3 class="s-investment-cards-title">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…</h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">#不動産購入</p>
                                            <p class="s-investment-cards-tag">#不動産投資</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card07.jpg" alt="不動産投資初心者が知っておきたい基知識と始め方のポイント" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">2024.08.01</p>
                                        <h3 class="s-investment-cards-title">不動産投資初心者が知っておきたい基知識と始め方のポイント</h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">#不動産購入</p>
                                            <p class="s-investment-cards-tag">#不動産投資</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card08.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">2024.08.01</p>
                                        <h3 class="s-investment-cards-title">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…</h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">#不動産購入</p>
                                            <p class="s-investment-cards-tag">#不動産投資</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card09.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">2024.08.01</p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card10.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card11.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->
                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card12.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                            </div>
                        </div>
                        <div class="s-investment-articles-list-container" id="popularity-order">
                            <div class="s-investment-cards-row">
                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card01.jpg" alt="不動産投資初心者が知っておきたい基知識と始め方のポイント" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            不動産投資初心者が知っておきたい基知識と始め方のポイント
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card02.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card03.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card04.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card05.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card06.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card07.jpg" alt="不動産投資初心者が知っておきたい基知識と始め方のポイント" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            不動産投資初心者が知っておきたい基知識と始め方のポイント
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card08.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card09.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card10.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card11.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->
                                <!-- CARD -->
                                <a href="#" class="s-investment-cards-card">
                                    <div class="s-investment-cards-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/articles-list/articles-card12.jpg" alt="記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…" class="img-fluid">
                                    </div>
                                    <div class="s-investment-cards-content">
                                        <p class="s-investment-cards-date">
                                            2024.08.01
                                        </p>
                                        <h3 class="s-investment-cards-title">
                                            記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります…
                                        </h3>
                                        <div class="s-investment-cards-tags">
                                            <p class="s-investment-cards-tag">
                                                #不動産購入
                                            </p>
                                            <p class="s-investment-cards-tag">
                                                #不動産投資
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- CARD -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-investment-articles-listing-btn">
                    <a href="#" class="s-investment-btn__view-more">もっと見る</a>
                </div>
            </div>
        </div>

        <div class="s-investment-popular">
            <div class="s-investment-popular__wrapper">
                <div class="s-investment-popular__box">
                    <div class="s-investment-popular__heading-wrapper">
                        <h2 class="heading__primary">人気記事</h2>
                        <p class="heading__desc">注目度の高い記事をご紹介。<br>最新トレンドや人気のコンテンツをお届けします。</p>
                    </div>

                    <div class="s-investment-popular__heading-btn d-lg-block d-none">
                        <a href="#" class="s-investment-btn__view-more">もっと見る</a>
                    </div>
                    <div class="s-investment-popular__swiper-buttons d-lg-flex d-none">
                        <div class="s-investment-popular__swiper-navigation-prev pc">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.103" height="53.103" viewBox="0 0 53.103 53.103">
                                <defs>
                                    <filter id="Path_4" x="0" y="0" width="53.103" height="53.103" filterUnits="userSpaceOnUse">
                                        <feOffset dy="2" input="SourceAlpha" />
                                        <feGaussianBlur stdDeviation="2" result="blur" />
                                        <feFlood flood-opacity="0.114" />
                                        <feComposite operator="in" in2="blur" />
                                        <feComposite in="SourceGraphic" />
                                    </filter>
                                </defs>
                                <g id="Group_86" data-name="Group 86" transform="translate(6 3.371)">
                                    <g transform="matrix(1, 0, 0, 1, -6, -3.37)" filter="url(#Path_4)">
                                        <path id="Path_4-2" data-name="Path 4" d="M20.552,0A20.552,20.552,0,1,1,0,20.552,20.552,20.552,0,0,1,20.552,0Z" transform="translate(6 4)" fill="#fff" />
                                    </g>
                                    <path id="arrow_forward_ios_24dp_5F6368_FILL0_wght300_GRAD0_opsz24" d="M270.686-852.479l1-1-5.831-5.831,5.831-5.831-1-1.005-6.836,6.836Z" transform="translate(-247.243 880.686)" fill="#024f8a" stroke="#024f8a" stroke-width="0.5" />
                                </g>
                            </svg>

                        </div>
                        <div class="s-investment-popular__swiper-pagination pc"></div>
                        <div class="s-investment-popular__swiper-navigation-next pc">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.103" height="53.103" viewBox="0 0 53.103 53.103">
                                <defs>
                                    <filter id="Path_4" x="0" y="0" width="53.103" height="53.103" filterUnits="userSpaceOnUse">
                                        <feOffset dy="2" input="SourceAlpha" />
                                        <feGaussianBlur stdDeviation="2" result="blur" />
                                        <feFlood flood-opacity="0.114" />
                                        <feComposite operator="in" in2="blur" />
                                        <feComposite in="SourceGraphic" />
                                    </filter>
                                </defs>
                                <g id="Group_96" data-name="Group 96" transform="translate(6 4)">
                                    <g transform="matrix(1, 0, 0, 1, -6, -4)" filter="url(#Path_4)">
                                        <path id="Path_4-2" data-name="Path 4" d="M20.552,0A20.552,20.552,0,1,0,41.1,20.552,20.552,20.552,0,0,0,20.552,0Z" transform="translate(6 4)" fill="#fff" />
                                    </g>
                                    <path id="arrow_forward_ios_24dp_5F6368_FILL0_wght300_GRAD0_opsz24" d="M264.855-852.479l-1-1,5.831-5.831-5.831-5.831,1-1.005,6.836,6.836Z" transform="translate(-247.195 880.057)" fill="#024f8a" stroke="#024f8a" stroke-width="0.5" />
                                </g>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="s-investment-popular__right">
                    <div class="s-investment-popular__swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="s-investment-popular__swiper-box">
                                    <div class="s-investment-popular__swiper-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular/popular-swiper-01.jpg" alt="不動産投資初心者が知っておきたい基本知識と始め方のポイント" width="614" height="337" loading="lazy" class="img-fluid">
                                    </div>
                                    <div class="s-investment-popular__swiper-content">
                                        <p class="s-investment-popular__swiper-date">2024.08.01</p>
                                        <ul class="s-investment-popular__swiper-tags">
                                            <li class="s-investment-popular__swiper-tags-item">#不動産購入</li>
                                            <li class="s-investment-popular__swiper-tags-item">#不動産投資</li>
                                        </ul>
                                        <h2 class="s-investment-popular__swiper-title">不動産投資初心者が知っておきたい基本知識と始め方のポイント</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="s-investment-popular__swiper-box">
                                    <div class="s-investment-popular__swiper-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular/popular-swiper-02.jpg" alt="不動産投資初心者が知っておきたい基本知識と始め方のポイント" width="614" height="337" loading="lazy" class="img-fluid">
                                    </div>
                                    <div class="s-investment-popular__swiper-content">
                                        <p class="s-investment-popular__swiper-date">2024.08.01</p>
                                        <ul class="s-investment-popular__swiper-tags">
                                            <li class="s-investment-popular__swiper-tags-item">#不動産購入</li>
                                            <li class="s-investment-popular__swiper-tags-item">#不動産投資</li>
                                        </ul>
                                        <h2 class="s-investment-popular__swiper-title">不動産投資初心者が知っておきたい基本知識と始め方のポイント</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="s-investment-popular__swiper-box">
                                    <div class="s-investment-popular__swiper-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular/popular-swiper-01.jpg" alt="不動産投資初心者が知っておきたい基本知識と始め方のポイント" width="614" height="337" loading="lazy" class="img-fluid">
                                    </div>
                                    <div class="s-investment-popular__swiper-content">
                                        <p class="s-investment-popular__swiper-date">2024.08.01</p>
                                        <ul class="s-investment-popular__swiper-tags">
                                            <li class="s-investment-popular__swiper-tags-item">#不動産購入</li>
                                            <li class="s-investment-popular__swiper-tags-item">#不動産投資</li>
                                        </ul>
                                        <h2 class="s-investment-popular__swiper-title">不動産投資初心者が知っておきたい基本知識と始め方のポイント</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="s-investment-popular__swiper-box">
                                    <div class="s-investment-popular__swiper-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular/popular-swiper-02.jpg" alt="不動産投資初心者が知っておきたい基本知識と始め方のポイント" width="614" height="337" loading="lazy" class="img-fluid">
                                    </div>
                                    <div class="s-investment-popular__swiper-content">
                                        <p class="s-investment-popular__swiper-date">2024.08.01</p>
                                        <ul class="s-investment-popular__swiper-tags">
                                            <li class="s-investment-popular__swiper-tags-item">#不動産購入</li>
                                            <li class="s-investment-popular__swiper-tags-item">#不動産投資</li>
                                        </ul>
                                        <h2 class="s-investment-popular__swiper-title">不動産投資初心者が知っておきたい基本知識と始め方のポイント</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="s-investment-popular__swiper-box">
                                    <div class="s-investment-popular__swiper-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular/popular-swiper-01.jpg" alt="不動産投資初心者が知っておきたい基本知識と始め方のポイント" width="614" height="337" loading="lazy" class="img-fluid">
                                    </div>
                                    <div class="s-investment-popular__swiper-content">
                                        <p class="s-investment-popular__swiper-date">2024.08.01</p>
                                        <ul class="s-investment-popular__swiper-tags">
                                            <li class="s-investment-popular__swiper-tags-item">#不動産購入</li>
                                            <li class="s-investment-popular__swiper-tags-item">#不動産投資</li>
                                        </ul>
                                        <h2 class="s-investment-popular__swiper-title">不動産投資初心者が知っておきたい基本知識と始め方のポイント</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="s-investment-popular__swiper-box">
                                    <div class="s-investment-popular__swiper-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular/popular-swiper-02.jpg" alt="不動産投資初心者が知っておきたい基本知識と始め方のポイント" width="614" height="337" loading="lazy" class="img-fluid">
                                    </div>
                                    <div class="s-investment-popular__swiper-content">
                                        <p class="s-investment-popular__swiper-date">2024.08.01</p>
                                        <ul class="s-investment-popular__swiper-tags">
                                            <li class="s-investment-popular__swiper-tags-item">#不動産購入</li>
                                            <li class="s-investment-popular__swiper-tags-item">#不動産投資</li>
                                        </ul>
                                        <h2 class="s-investment-popular__swiper-title">不動産投資初心者が知っておきたい基本知識と始め方のポイント</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="s-investment-popular__swiper-buttons d-lg-none">
                            <div class="s-investment-popular__swiper-navigation-prev mobile">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.103" height="53.103" viewBox="0 0 53.103 53.103">
                                    <defs>
                                        <filter id="Path_4" x="0" y="0" width="53.103" height="53.103" filterUnits="userSpaceOnUse">
                                            <feOffset dy="2" input="SourceAlpha" />
                                            <feGaussianBlur stdDeviation="2" result="blur" />
                                            <feFlood flood-opacity="0.114" />
                                            <feComposite operator="in" in2="blur" />
                                            <feComposite in="SourceGraphic" />
                                        </filter>
                                    </defs>
                                    <g id="Group_86" data-name="Group 86" transform="translate(6 3.371)">
                                        <g transform="matrix(1, 0, 0, 1, -6, -3.37)" filter="url(#Path_4)">
                                            <path id="Path_4-2" data-name="Path 4" d="M20.552,0A20.552,20.552,0,1,1,0,20.552,20.552,20.552,0,0,1,20.552,0Z" transform="translate(6 4)" fill="#fff" />
                                        </g>
                                        <path id="arrow_forward_ios_24dp_5F6368_FILL0_wght300_GRAD0_opsz24" d="M270.686-852.479l1-1-5.831-5.831,5.831-5.831-1-1.005-6.836,6.836Z" transform="translate(-247.243 880.686)" fill="#024f8a" stroke="#024f8a" stroke-width="0.5" />
                                    </g>
                                </svg>

                            </div>
                            <div class="s-investment-popular__swiper-pagination mobile"></div>
                            <div class="s-investment-popular__swiper-navigation-next mobile">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.103" height="53.103" viewBox="0 0 53.103 53.103">
                                    <defs>
                                        <filter id="Path_4" x="0" y="0" width="53.103" height="53.103" filterUnits="userSpaceOnUse">
                                            <feOffset dy="2" input="SourceAlpha" />
                                            <feGaussianBlur stdDeviation="2" result="blur" />
                                            <feFlood flood-opacity="0.114" />
                                            <feComposite operator="in" in2="blur" />
                                            <feComposite in="SourceGraphic" />
                                        </filter>
                                    </defs>
                                    <g id="Group_96" data-name="Group 96" transform="translate(6 4)">
                                        <g transform="matrix(1, 0, 0, 1, -6, -4)" filter="url(#Path_4)">
                                            <path id="Path_4-2" data-name="Path 4" d="M20.552,0A20.552,20.552,0,1,0,41.1,20.552,20.552,20.552,0,0,0,20.552,0Z" transform="translate(6 4)" fill="#fff" />
                                        </g>
                                        <path id="arrow_forward_ios_24dp_5F6368_FILL0_wght300_GRAD0_opsz24" d="M264.855-852.479l-1-1,5.831-5.831-5.831-5.831,1-1.005,6.836,6.836Z" transform="translate(-247.195 880.057)" fill="#024f8a" stroke="#024f8a" stroke-width="0.5" />
                                    </g>
                                </svg>

                            </div>
                        </div>
                        <div class="s-investment-popular__heading-btn d-lg-none">
                            <a href="#" class="s-investment-btn__view-more">もっと見る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTACT -->
        <div class="s-investment-contact">
            <div class="container">
                <div class="s-investment__product-top">
                    <h2 class="heading__secondary">投資用物件なら東急リバブルに<br class="d-md-none">ご相談ください</h2>
                </div>
                <div class="s-investment-contact-row">
                    <div class="s-investment-contact-col">
                        <p class="s-investment-contact-title">
                            投資用不動産の査定を無料で承ります。
                        </p>
                        <div class="s-investment-contact-btn">
                            <a href="">
                                <span>無料査定</span>
                            </a>
                        </div>
                    </div>
                    <div class="s-investment-contact-col">
                        <p class="s-investment-contact-title">
                            地域に精通した不動産のプロがお客様の<br class="d-md-none">ご要望にお応えいたします。
                        </p>
                        <div class="s-investment-contact-btn">
                            <a href="">
                                <span>お問い合わせ</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer();
