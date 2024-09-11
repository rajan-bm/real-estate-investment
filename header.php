<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="email=no,telephone=no,address=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>Toushin Media</title>
    <meta name="description" content="" />
    <meta name="keywords" content="">

    <!-- OGPタグ/twitterカード -->
    <meta property="og:url" content="xxxxxxxxxxxxxxxxxxxxxxx/" />
    <meta property="og:title" content="Toushin Media" />
    <meta property="og:type" content="website">
    <meta property="og:description" content="" />
    <meta property="og:image" content="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
    <meta name="twitter:card" content="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
    <meta name="twitter:site" content="" />
    <meta property="og:site_name" content="Toushin Media" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="" />

    <!-- canonical -->
    <link rel="canonical" href="xxxxxxxxxxxxxxxxxxxxxxx/" />

    <!-- ファビコン -->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <link rel="apple-touch-icon-precomposed" href="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
    <meta name="msapplication-TileImage" content="xxxxxxxxxxxxxxxxxxxxxxx/assets/img/ogp.jpg" />
    <meta name="msapplication-TileColor" content="######" />
    <meta name="theme-color" content="######">
    
    <!-- フィードページのURLを指定 -->
    <link rel="alternate" type="application/rss+xml" title="Toushin Media" href="xxxxxxxxxxxxxxxxxxxxxxx/" />
    <?php wp_head(); ?>

    <!--fonts-->
    <script>
        (function (d) {
            var config = {
                kitId: 'kyo6rnb',
                scriptTimeout: 3000,
                async: true
            },
                h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->

    <!-- HEADER  -->
    <header class="o-header o-header--investment">
        <div class="o-header__following" id="js-header-following">
          <div class="o-header__inner" id="js-header">
            <div class="o-header__inner2"><a class="o-header__logo-extend" href="/fudosan-toushi/">
              <p class="o-header__logo-wrapper"><span class="o-header__logo">東急リバブル</span></p>
              <p class="o-header__logo-extend-title">投資用</p></a>
              <div class="o-header__menu">
                <div class="o-header__menu-item o-header__menu-item--like m-header-favorite" id="js-header-dropdown-favorite">
                              <button class="o-header__menu-link iconfont-livable-like">お気に入り
                    <span class="m-header-favorite__add iconfont-livable-like_fill" id="js-favorite-icon"></span>
                    <span class="o-header__like-number" id="js-favorite-count" style="opacity: 0;"></span>
                  </button>
                              <div class="m-header-favorite__body m-header-property" id="js-header-dropdown-favorite-body">
                    <p class="m-header-property__headline a-heading">お気に入り</p>
                    <div class="a-change-type">
                      <ul class="a-change-type__list">
                        <li class="a-change-type__item is-current js-tab-trigger" data-tab-group="favorite" data-tab-name="buy">
                          <button class="a-change-type__link">投資</button>
                        </li>
                      </ul>
                    </div>

                    <script id="tmpl-favorite" type="text/x-tmpl">
                      {% if (o.items.length > 0) { %}
                        <ul class="m-header-property__list">
                        {% for (var i = 0, len = o.items.length; i < len; i++) { %}
                          <li class="m-header-property__item">
                            {% if (o.items[i].privateFlg) { %}
                            <a class="m-header-property__item-link rec_detail_link" href="javascript:void(0);"{%# o.items[i].dataExternalLink %}{%# o.items[i].dataPropertyId %}>
                            {% } else { %}
                            <a class="m-header-property__item-link rec_detail_link" href="{%# o.items[i].url %}" target="_blank"{%# o.items[i].dataExternalLink %}{%# o.items[i].dataPropertyId %}>
                            {% } %}
                            <div class="m-header-property__item-wrapper">
                              <p class="m-header-property__item-image-wrapper">
                              <img class="a-image" src="{%# o.items[i].imagePath %}" alt="">
                              </p>
                              <div class="m-header-property__item-inner">
                              <p class="m-header-property__item-tag">
                                <span class="a-tag a-tag--type">{%# o.items[i].propertyCategory %}</span>
                              </p>
                              <p class="m-header-property__item-headline"><span class="a-link-text">{%# o.items[i].name %}</span></p>
                              <p class="m-header-property__item-text">
                                <span class="a-price">{%# o.items[i].price %}</span>
                                {% if (o.items[i].consumptionTaxFlg) { %}
                                <span class="a-price__tax">（税込）</span>
                                {% } %}
                                {% if (o.items[i].privateFlg) { %}
                                {% if (o.items[i].layout) { %}/{% } %}{%# o.items[i].layout %}
                                {% } %}
                              </p>
                              {% if (o.items[i].yield != "" && !o.items[i].privateFlg) { %}
                              <p class="m-header-property__item-text"><span class="a-price__unit">利回り</span><span class="a-price">{%# o.items[i].yield %}</span></p>
                              {% } %}
                              <p class="m-header-property__item-route">{%# o.items[i].access %}</p>
                              </div>
                            </div>
                            </a>
                          </li>
                        {% } %}
                        </ul>
                        <div class="m-header-property__more js-tab" data-tab-group="favorite" data-tab-name="buy">
                          <a class="m-header-property__more-link a-link" href="/fudosan-toushi/favorite/">お気に入り一覧へ</a>
                        </div>
                      {% } else { %}

                        <ul class="m-header-property__list">
                          <li>
                            <div class="m-header-favorite__prompt">
                              <div class="m-header-favorite__prompt-mark iconfont-livable-like"></div>
                              <p class="m-header-favorite__prompt-text">
                                ハートマークのボタンから物件のお気に入り登録が可能です。<br>気になった物件を
                                <span class="m-header-favorite__prompt-emphasis">いつでも確認</span>でき、あとからじっくり
                                <span class="m-header-favorite__prompt-emphasis">物件の比較</span>をしたり<br>
                                <span class="m-header-favorite__prompt-emphasis">評価を付ける</span>こともできます。
                              </p>
                            </div>
                          </li>
                        </ul>
                        <div class="m-header-property__more">
                          <a class="m-header-property__more-link a-link" href="/fudosan-toushi/favorite/">もっと詳しく</a>
                        </div>
                      {% } %}
                     </script>
                    <div class="m-header-property__type js-m-header-property__type--buy is-current js-tab" id="js-header-favorite-investment" data-categoryId="6" data-tab-group="favorite" data-tab-name="buy">
                      <ul class="m-header-property__list">
                        <li class="js-header-loading"></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="o-header__menu-item o-header__menu-item--search" id="js-header-dropdown-search">
                  <button class="o-header__search-trigger iconfont-livable-search">さがす</button>
                  <div class="m-header-search" id="js-header-dropdown-search-body">
                    <form class="m-header-search__body" id="js-keyword-search-form" action="/fudosan-toushi/tatemono-bukken-all/" method="GET">
                      <div class="m-header-search__body-inner">
                        <div class="m-header-search__input-wrapper">
                          <span class="m-header-search__input-bg"></span>
                          <input class="m-header-search__input" id="js-suggest-input" type="text" name="keyword" placeholder="地名、駅、物件、店舗名など" autocomplete="off">
                          <button type="reset" class="m-header-search__input-clear iconfont-livable-close"></button>
                        </div>
                        <button class="m-header-search__submit iconfont-livable-search" type="submit">検索</button>
                        <button class="m-header-search__close" id="js-suggest-input-cancel">キャンセル</button>
                      </div>
                      <div class="m-header-suggest" id="js-suggest-body"></div>
                      <script type="text/javascript">
                        window.suggestData = {
                          history: {
                          endpoint:  '/recommend.json?frame_id=10&tracking_id=%TRACKING_ID%',
                          templateId: 'js-suggest-history'
                          },
                          suggests: {
                          pattern: {
                            endpoint: '/suggest.json?tracking_id=%TRACKING_ID%&mode=prefix&sf=suggest_ng&lf=suggest_name&method=ranking&rf=a30d&limit=10&quote=word&cm:auto&approx=true&of=suggest_name&of=suggest_type&of=suggest_url&fq=mst:suggest_word&word=%KEYWORD%'
                          },
                          property: {
                            endpoint:  '/suggest.json?tracking_id=%TRACKING_ID%&mode=partialand&word=%KEYWORD%&sf=property_name&sf=thumbnail_url&sf=detail_url&lf=property_name&method=both&rf=a30d&limit=10&quote=word&cm:auto&approx=true&of=mst&of=property_name&of=view_price&of=view_price_from&of=view_price_to&of=view_layout&of=route_station_names&of=land_area_square_meter_max&of=property_search_type&of=yield&of=detail_url&of=thumbnail_url&of=consumption_tax_flg&of=recommend_property_sub_type&of=land_area&of=land_area_square_meter_min&of=land_area_square_meter_max&of=rooms&of=layout_type_name&of=layout_type_min&of=layout_type_max&fq=(mst:mediate+OR+mst:bunjo+OR+mst:mediatebuilding+OR+mst:renthome+OR+mst:rentoffice+OR+mst:rentbuilding+OR+mst:house+OR+mst:library)+AND+private_flg_i:0+AND+ds:1&sort=sugclick_rnk_i+desc',
                            templateId: 'js-suggest-property'
                          },
                          area: {
                            endpoint:  '/suggest.json?tracking_id=%TRACKING_ID%&mode=partialand&word=%KEYWORD%&fq=&sf=area_city_name&sf=area_city_name_kana&lf=area_city_name&method=both&rf=a30d&limit=10&quote=word&cm:auto&approx=true&of=iid&of=prefecture_name&sort=sugclick_rnk_i+desc',
                            templateId: 'js-suggest-area'
                          },
                          line: {
                            endpoint:  '/suggest.json?tracking_id=%TRACKING_ID%&mode=partialand&word=%KEYWORD%&fq=&sf=route_name&sf=route_name_kana&lf=route_name&method=both&rf=a30d&limit=10&quote=word&cm:auto&fq=mst:*&approx=true&sort=sugclick_rnk_i+desc&of=prefecture_name',
                            templateId: 'js-suggest-line'
                          },
                          station: {
                            endpoint:  '/suggest.json?tracking_id=%TRACKING_ID%&mode=partialand&word=%KEYWORD%&fq=&sf=station_name&sf=station_name_kana&sf=sug_station_names&lf=station_name&method=both&rf=a30d&limit=10&quote=word&cm:auto&approx=true&of=route_name&of=junction_code&of=prefecture_name&of=train_route_display_priority&fq=large_area_name_su:shutoken&sort=sugclick_rnk_i+desc',
                            templateId: 'js-suggest-station'
                          },
                          store: {
                            endpoint:  '/suggest.json?tracking_id=%TRACKING_ID%&mode=partialand&word=%KEYWORD%&sf=temp_shop_name&sf=property_name&sf=property_name_kana&lf=temp_shop_name&method=both&rf=a30d&limit=10&quote=word&cm:auto&fq=mst:*&approx=true&of=detail_url&fq=mst:shop&sort=sugclick_rnk_i+desc',
                            templateId: 'js-suggest-store'
                          },
                          word: {
                            endpoint: '/suggest.json?tracking_id=%TRACKING_ID%&mode=prefix&sf=suggest_word&sf=suggest_variants&lf=suggest_name&method=ranking&rf=a30d&limit=10&quote=word&cm:auto&approx=true&of=suggest_name&of=suggest_type&of=suggest_url&fq=mst:suggest_word&word=%KEYWORD%',
                            templateId: 'js-suggest-word'
                          }
                          }
                        };
                      </script>
                      <script type="text/x-tmpl" id="js-suggest-history">
                        {% for (var i = 0, len = o.items.length; i < len; i++) { %}
                          <div class="m-header-suggest__item">
                          <a class="m-header-suggest__link iconfont-livable-search" href="{%# o.items[i].url %}">
                            <p class="m-header-suggest__item-headline">{%# o.items[i].keyword %}</p>
                            <p class="m-header-suggest__item-genre">フリーワード</p>
                          </a>
                          </div>
                        {% } %}
                      </script>
                      <script type="text/x-tmpl" id="js-suggest-property">
                        {% for (var i = 0, len = o.items.length; i < len && i < 3; i++) { %}
                          <div class="m-header-suggest__item">
                          <a class="m-header-suggest__link m-header-property__item-link" href="{%# o.items[i].url %}" data-item-id="{%# o.items[i].iid %}" data-sequenceNumber="{%# o.sequenceNumber %}" data-iid="{%# o.items[i].iid %}" target="_blank">
                            <p class="m-header-suggest__item-headline">{%# o.items[i].keyword %}</p>
                            {% if (o.items[i].isLibrary) { %}
                            <p class="m-header-suggest__item-type">中古マンションライブラリー</p>
                            {% } else if (o.items[i].isTochi) { %}
                            <p class="m-header-suggest__item-type"><span class="m-header-suggest__item-price">{%# o.items[i].price %}</span></p>
                            {% if (o.items[i].area) { %}
                              <p class="m-header-suggest__item-area">土地面積: {%# o.items[i].area %}</p>
                            {% } %}
                            {% } else { %}
                            <p class="m-header-suggest__item-type"><span class="m-header-suggest__item-price">{%# o.items[i].price %}</span></p>
                            {% if (o.items[i].layout) { %}
                              <p class="m-header-suggest__item-layout">間取り: {%# o.items[i].layout %}</p>
                            {% } %}
                            {% } %}
                            <p class="m-header-suggest__item-genre">{%# o.items[i].note %}</p>
                            <div class="m-header-suggest__item-image" style="background-image: url('{%# o.items[i].thumbnail %}')"></div>
                          </a>
                          </div>
                        {% } %}
                      </script>
                      <script type="text/x-tmpl" id="js-suggest-area">
                        {% for (var i = 0, len = o.items.length; i < len && i < 3; i++) { %}
                          <div class="m-header-suggest__item">
                          <a class="m-header-suggest__link iconfont-livable-map_pin" href="{%# o.items[i].url %}" data-sequenceNumber="{%# o.sequenceNumber %}" data-iid="{%# o.items[i].iid %}">
                            <p class="m-header-suggest__item-headline">{%# o.items[i].keyword %}の物件一覧をみる</p>
                            <p class="m-header-suggest__item-genre">{%# o.items[i].note %}</p>
                          </a>
                          </div>
                        {% } %}
                      </script>
                      <script type="text/x-tmpl" id="js-suggest-line">
                        {% for (var i = 0, len = o.items.length; i < len && i < 3; i++) { %}
                          <div class="m-header-suggest__item">
                          <a class="m-header-suggest__link iconfont-livable-transport" href="{%# o.items[i].url %}" data-sequenceNumber="{%# o.sequenceNumber %}" data-iid="{%# o.items[i].iid %}">
                            <p class="m-header-suggest__item-headline">{%# o.items[i].keyword %}</p>
                            <p class="m-header-suggest__item-genre">{%# o.items[i].note %}</p>
                          </a>
                          </div>
                        {% } %}
                      </script>
                      <script type="text/x-tmpl" id="js-suggest-station">
                        {% for (var i = 0, len = o.items.length; i < len && i < 3; i++) { %}
                          <div class="m-header-suggest__item">
                          <a class="m-header-suggest__link iconfont-livable-transport" href="{%# o.items[i].url %}" data-sequenceNumber="{%# o.sequenceNumber %}" data-iid="{%# o.items[i].iid %}">
                            <p class="m-header-suggest__item-headline">{%# o.items[i].keyword %}駅の物件一覧をみる</p>
                            <p class="m-header-suggest__item-genre">{%# o.items[i].note %}</p>
                          </a>
                          </div>
                        {% } %}
                      </script>
                      <script type="text/x-tmpl" id="js-suggest-store">
                        {% for (var i = 0, len = o.items.length; i < len && i < 3; i++) { %}
                          <div class="m-header-suggest__item">
                          <a class="m-header-suggest__link iconfont-livable-shop" href="{%# o.items[i].url %}" data-sequenceNumber="{%# o.sequenceNumber %}" data-iid="{%# o.items[i].iid %}">
                            <p class="m-header-suggest__item-headline">{%# o.items[i].keyword %}</p>
                            <p class="m-header-suggest__item-genre">{%# o.items[i].note %}</p>
                          </a>
                          </div>
                        {% } %}
                      </script>
                      <script type="text/x-tmpl" id="js-suggest-word">
                          {% for (var i = 0, len = o.items.length; i < len && i < 3; i++) { %}
                            <div class="m-header-suggest__item">
                              <a class="m-header-suggest__link {%# o.items[i].icon %}" href="{%# o.items[i].url %}" data-sequenceNumber="{%# o.sequenceNumber %}" data-iid="{%# o.items[i].iid %}">
                                <p class="m-header-suggest__item-headline">{%# o.items[i].keyword %}</p>
                                <p class="m-header-suggest__item-genre">{%# o.items[i].note %}</p>
                              </a>
                            </div>
                          {% } %}
                      </script>
                    </form>
                  </div>
                </div>
                <p class="o-header__menu-item o-header__menu-item--menu">
                  <button class="o-header__menu-trigger" id="js-header-menu-open">
                    <span class="o-header__menu-text">メニュー</span>
                    <span class="o-header__info-number js-myliv_notice_count"></span>
                  </button>
                </p>
              </div>
            </div>
          </div>
          <div class="o-header__content" id="js-header-menu">
            <div class="o-header__content-inner" id="js-header-menu-inner">
              <div class="m-header-content-search">
                <p class="m-header-content-search__title">投資用物件を探す
                </p>
                <div class="header-content-search__inner">
                  <form class="m-header-content-search__body" id="js-keyword-search-form-sp" action="/fudosan-toushi/tatemono-bukken-all/" method="GET">
                    <input class="m-header-content-search__input" id="js-suggest-input-sp" type="text" name="keyword" placeholder="地名、駅、物件、店舗名など" autocomplete="off">
                    <button class="m-header-content-search__submit iconfont-livable-search" type="submit">検索</button>
                  </form>
                  <div class="m-header-suggest m-header-suggest__spmenu" id="js-suggest-body-sp"></div>
                </div>
              </div>
                      <div class="o-header__login-wrapper" id="js-header-login">
                <ul class="o-header__login">
                  <li class="o-header__login-item"><a class="o-header__login-link iconfont-livable-mypage" href="/myliv/login/">ログイン</a></li>
                  <li class="o-header__login-item"><a class="o-header__login-link iconfont-livable-member_registration" href="/myliv/regist/">会員登録</a></li>
                </ul>
              </div>
                      <div class="o-header__user-wrapper" id="js-header-user" style="transform: translateX(0px) translate3d(0px, 0px, 0px);">
                <ul class="o-header__user">
                  <li class="o-header__user-item m-header-viewing" id="js-header-dropdown-viewing">
                    <a class="m-header-viewing__trigger iconfont-livable-viewing_conditions u-display__sponly" href="/fudosan-toushi/bukken-history/">閲覧履歴</a>
                    <button class="m-header-viewing__trigger iconfont-livable-viewing_conditions u-display__pconly">閲覧履歴</button>
                    <div class="m-header-viewing__body m-header-property" id="js-header-dropdown-viewing-body" style="opacity: 1; z-index: auto;">
                      <p class="m-header-property__headline a-heading">閲覧履歴</p>
                      <div class="m-header-property__type is-current" id="tlab-contents-history-buy" data-history-frame-id-pc="90240014" data-history-frame-id-sp="90240024"></div>
                      <div class="m-header-property__more"><a class="m-header-property__more-link a-link" href="/fudosan-toushi/bukken-history/">閲覧履歴一覧へ</a></div>
                    </div>
                  </li>
                  <li class="o-header__user-item m-header-search-condition" id="js-header-dropdown-search-condition" style="">
                    <button class="m-header-search-condition__trigger js-scroll-target" id="js-accordion-trigger-header-search"><span class="m-header-search-condition__trigger-text iconfont-livable-search_conditions">検索条件</span></button>
                    <div class="m-header-search-condition__body js-accordion" id="js-header-dropdown-search-condition-body" data-accordion-trigger="#js-accordion-trigger-header-search" data-accordion-device="sp" style="opacity: 1; z-index: auto;">
                      <div class="m-header-search-condition__body-inner">
                        <p class="m-header-search-condition__headline">保存した検索条件</p>

                        <script id="tmpl-search-condition" type="text/x-tmpl">
                          {% for (var i = 0, len = o.items.length; i < len; i++) { %}
                          <li class="m-header-search-condition__item">
                            <a class="m-header-search-condition__item-link" href="{%# o.items[i].url %}">
                            <p class="m-header-search-condition__item-time iconfont-livable-pick_up">{%# o.items[i].date %}</p>
                            <div class="m-header-search-condition__item-text-wrapper">
                              <p class="m-header-search-condition__item-text">{%# o.items[i].propertyType %} {%# o.items[i].searchCondition %}</p>
                            </div>
                            </a>
                          </li>
                          {% } %}
                        </script>
                        <ul class="m-header-search-condition__list" id="js-header-search-condition" data-kindCd="2">
                          <li class="js-header-loading"></li>
                        </ul>
                        <div class="m-header-search-condition__more"><a class="m-header-search-condition__more-link a-link" href="/fudosan-toushi/condition-list/">保存した検索条件一覧へ</a></div>
                      </div>
                      <div class="m-header-search-condition__body-inner">
                        <p class="m-header-search-condition__headline">最近検索した条件</p>

                        <script id="tmpl-recently-condition" type="text/x-tmpl">
                          {% if (o.items.length > 0) { %}
                            {% for (var i = 0, len = o.items.length; i < len; i++) { %}
                              <li class="m-header-search-condition__item">
                                <a class="m-header-search-condition__item-link" href="{%# o.items[i].url %}">
                                  <p class="m-header-search-condition__item-time iconfont-livable-sl_search">{%# o.items[i].date %}</p>
                                  <div class="m-header-search-condition__item-text-wrapper">
                                    <p class="m-header-search-condition__item-text">{%# o.items[i].propertyType %}{%# o.items[i].searchCondition %}</p>
                                  </div>
                                </a>
                              </li>
                            {% } %}
                          {% } %}
                        </script>
                        <ul class="m-header-search-condition__list" id="js-header-recently-condition">
                          <li class="js-header-loading"></li>
                        </ul>
                        <div class="m-header-search-condition__more">
                          <a class="m-header-search-condition__more-link a-link" href="/fudosan-toushi/condition-history/">
                            最近検索した条件一覧へ
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="o-header__other-wrapper" id="js-header-other">
                <ul class="o-header__other">
                  <li class="o-header__other-item" id="js-header-dropdown-language">
                    <button class="o-header__other-trigger" id="js-accordion-trigger-language"><span class="o-header__other-trigger-text iconfont-livable-language">Language</span></button>
                    <ul class="o-header__language js-accordion" id="js-header-dropdown-language-body" data-accordion-trigger="#js-accordion-trigger-language" data-accordion-device="sp">
                      <li class="o-header__language-item"><a class="o-header__language-link" href="/toushi/en/"><span class="o-header__language-text">English</span></a></li>
                      <li class="o-header__language-item"><a class="o-header__language-link" href="/toushi/tcn/"><span class="o-header__language-text">中文（繁体字）</span></a></li>
                      <li class="o-header__language-item"><a class="o-header__language-link" href="/toushi/cn/"><span class="o-header__language-text">中文（簡体字）</span></a></li>
                    </ul>
                  </li>
                  <li class="o-header__other-item"><a class="o-header__other-link iconfont-livable-zz18_home" href="/">総合TOP</a></li>
                </ul>
              </div>
                    </div>
            <div class="o-header__content-bg js-header-menu-close" id="js-header-menu-background"></div>
          </div>
        </div>
      </header>