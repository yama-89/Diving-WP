jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // ハンバーガーメニュー
  $(".js-hamburger,.js-drawer-open").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-drawer-open").fadeToggle();
    $("body").toggleClass("active");
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");
  });

  // mvスワイパー
  const swiper1 = new Swiper(".js-mv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
    },
  });

  // campaignスワイパー
  const swiper2 = new Swiper(".js-campaign-swiper", {
    spaceBetween: 24,
    loop: true,
    loopAdditionalSlides: 4,
    loopedSlides: 8,
    // maxBackfaceHiddenSlides:8,
    width: 280,
    speed: 3000,

    autoplay: {
      disableOnInteraction: false,
    },

    allowTouchMove: true,

    breakpoints: {
      768: {
        spaceBetween: 40,
        width: 333,
      },
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // ページトップ
  const pageTop = $(".js-page-top");
  pageTop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      // 100pxスクロールしたら発火
      pageTop.fadeIn(); // 100px以上スクロールしたらボタンをフェードイン
    } else {
      pageTop.fadeOut(); // 100px以下になったらボタンをフェードアウト
    }
  });
  pageTop.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500 // 500ミリ秒かけてページトップに戻る
    );
    return false;
  });

  $(document).ready(function () {
    let scrollHeight, scrollPosition, footHeight;
    $("#page-top").hide();
    $(window).on("scroll", function () {
      scrollHeight = $(document).height();
      scrollPosition = $(window).height() + $(window).scrollTop();
      footHeight = $("footer").innerHeight();

      if (scrollHeight - scrollPosition <= footHeight) {
        $("#page-top").css({
          position: "absolute",
          bottom: footHeight + 20,
        });
      } else {
        $("#page-top").css({
          position: "fixed",
          bottom: "20px",
        });
      }
    });

    $("#page-top").click(function () {
      $("body,html").animate(
        {
          scrollTop: 0,
        },
        400
      );
      return false;
    });
  });

  //イメージアニメーション
  // スクロールして表示領域に入ったらclass付与
  $(".js-fadeUp").on("inview", function () {
    $(this).addClass("is-inview");
  });

  //要素の取得とスピードの設定
  var box = $(".js-colorbox"),
    speed = 500;

  //.js-colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;

    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this)
          .delay(200)
          .animate({ width: "100%" }, speed, function () {
            image.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed);
          });
        counter = 1;
      }
    });
  });

  // タブメニュー
  const tabButton = $(".js-tab"),
    tabContent = $(".js-content");
  tabButton.on("click", function (e) {
    e.preventDefault();
    let index = tabButton.index(this);
    // console.log(index);
    tabButton.removeClass("is-active");
    $(this).addClass("is-active");
    tabContent.removeClass("is-active");
    tabContent.eq(index).addClass("is-active");
  });

  // タブへダイレクトリンクの実装
  $(document).ready(function () {
    var hash = window.location.hash;
    console.log(hash);
    if (hash) {
      var tabname = hash.slice(1); // ハッシュから#を取り除いたもの
      console.log(tabname);

      var tab = $(".js-content[id='" + tabname + "']");
      console.log(tab);
      console.log(tab.length);
      if (tab.length) {
        // タブ内のリンクをアクティブ化
        $(".js-tab").removeClass("is-active");
        $(".js-tab[href='#" + tabname + "']").addClass("is-active");
        console.log($(".js-tab[href='#" + tabname + "']"));

        // タブコンテンツを表示
        $(".js-content").removeClass("is-active");
        tab.addClass("is-active");
      }
    }
  });

  // フッターのリンクがクリックされたときの処理
  $(".nav-subitem__list a").on("click", function () {
    var targetHash = $(this).attr("href"); // クリックされたリンクのハッシュを取得
    // console.log(targetHash);
    // クリックされたタブをアクティブにし、そのタブのコンテンツを表示
    $(".js-tab").removeClass("is-active");
    $(".js-content").removeClass("is-active");
    $(targetHash).addClass("is-active");
    $(".js-tab[href='" + targetHash + "']").addClass("is-active");
    // console.log($(".js-tab[href='" + targetHash + "']"));
  });

  // //タブへダイレクトリンクの実装
  // //リンクからハッシュを取得
  // var hash = location.hash;
  // hash = (hash.match(/^#tab_panel-\d+$/) || [])[0];

  // //リンクにハッシュが入っていればtabnameに格納
  // if ($(hash).length) {
  //     var tabname = hash.slice(1);
  // } else {
  //     var tabname = "info-tab1";
  // }

  // //コンテンツ非表示・タブを非アクティブ
  // $(".page-information__container .js-tab").removeClass("is-active");
  // $(".page-information__container .js_content").removeClass("is-active");

  // //何番目のタブかを格納
  // var tabno = $(".page-information__container .info-tab#" + tabname).index();

  // //コンテンツ表示
  // $(".page-information__container .js_content").eq(tabno).addClass("is-active");

  // //タブのアクティブ化
  // $(".page-information__container .js-tab").eq(tabno).addClass("is-active");

  // フッターリンクをクリックしたときの処理
  // $("footer a[data-tab]").on("click", function (e) {
  //   e.preventDefault(); // リンクのデフォルト動作を無効化

  //   // クリックされたリンクの親要素のインデックスを取得
  //   const index = $(this).parent().index();

  //   // スクロールとタブの切り替えを同時に行う
  //   $("html, body").animate({ scrollTop: tabContent.eq(index).offset().top }, 300);
  //   tabButton.eq(index).trigger("click"); // タブクリックをシミュレート
  // });

  // 他ページからの遷移
  //タブへダイレクトリンクの実装
  //リンクからハッシュを取得
  // var hash = location.hash;
  // hash = (hash.match(/^#tab_panel-\d+$/) || [])[0];
  // //リンクにハッシュが入っていればtabnameに格納
  // if ($(hash).length) {
  //     var tabname = hash.slice(1);
  // } else {
  //     var tabname = "license-tab";
  // }
  // //コンテンツ非表示・タブを非アクティブ
  // $(".page-information__container .tab-button").removeClass("is-active");
  // $(".js-content .page-information__container").removeClass("is-active");
  // //何番目のタブかを格納
  // var tabno = $(".js-content" + tabname).index();
  // //コンテンツ表示
  // $(".js-content .page-information__container").eq(tabno).addClass("is-active");
  // //タブのアクティブ化
  // $(".page-information__container .tab-button").eq(tabno).addClass("is-active");

  // アコーディオン
  $(".faq-item .js-faq-item__content").css("display", "block");
  $(".faq-item .js-faq-item__title").addClass("open");
  $(".js-faq-item__title").on("click", function () {
    $(this).next().slideToggle(200);
    $(this).toggleClass("open", 200);
    /*クリックしたjs-accordion-title以外のopenクラスを削除*/
    // $(".js-faq-item__title").not(this).removeClass("open");
    /*クリックしたjs-accordion-title以外の要素を閉じる*/
    // $(".js-faq-item__title").not(this).next().slideUp(200);
    $(".js-faq-item__content").on("click", function () {
      // クリックしたコンテンツを閉じる
      $(this).slideUp(200);
      // 閉じた場合、対応するタイトルのクラスも削除する
      $(".js-faq-item__title").removeClass("open");
    });
  });

  // アーカイブアコーディオン
  $(".archive-lists .js-year").on("click", function () {
    // クリックされた年に関連する月のリストを探し、スライドトグルで表示・非表示を切り替える
    $(this).find(".js-month").slideToggle(200);
    $(this).toggleClass("open");

    // 他の年の月リストを閉じる
    // $(".archive-lists .js-year").not(this).find(".js-month").slideUp(200);
    // $(".archive-lists .js-year").not(this).removeClass("open");
  });

  // ==========================================================================
  // コース一覧の拡大画像モーダル処理
  // ==========================================================================

  // コース画像モーダル表示イベント
  $(".gallery__img img").click(function () {
    // まず、クリックした画像の HTML(<img>タグ全体)を#frayDisplay内にコピー
    $("#grayDisplay").html($(this).prop("outerHTML"));
    //そして、fadeInで表示する。
    $("#grayDisplay").fadeIn(200);
    return false;
  });

  // コース画像モーダル非表示イベント
  // モーダル画像背景 または 拡大画像そのものをクリックで発火
  $("#grayDisplay").click(function () {
    // 非表示にする
    $("#grayDisplay").fadeOut(200);
    return false;
  });
});
