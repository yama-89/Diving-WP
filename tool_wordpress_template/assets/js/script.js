
document.addEventListener('DOMContentLoaded', function() {
  var library = sliderSettings.library;
  // Splideの読み込み
  if (library === "splide") {
    // Splideの読み込み
    if (document.querySelector('#mv_slider')) {
      new Splide('#mv_slider',
        {
          type: 'fade',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする true:有効、false:無効
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fade,slideの時使用)
          arrows: true,    // true:矢印ボタンを表示,false:非表示
          perPage: 1,      // 1ページに何枚のスライドを表示するかを指定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 1,  // 1ページに何枚のスライドを表示するかを指定
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center', //これを指定すると中央にある画像にフォーカスされる
          gap: '10px',     // 画像間の余白の設定
          pauseOnHover: false // true:マウスがスライダーの上にある間は自動再生を一時停止します,false:停止しない
        }
      ).mount();
    }
    if (document.querySelector('#gallery')) {
      new Splide('#gallery',
        {
          type: 'loop',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: true,    // true:矢印ボタンを表示
          perPage: 5,      // 1ページに何枚のスライドを表示するかを指定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 2,  // 1ページに何枚のスライドを表示するかを指定
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center',//これを指定すると中央にある画像にフォーカスされる
          gap: '10px',     // 画像間の余白の設定
        }
      ).mount();
    }
    // event
    if (document.querySelector('#post')) {
      new Splide('#post',
        {
          type: 'loop',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: true,    // true:矢印ボタンを表示
          perPage: 3,      // 1ページに何枚のスライドを表示するかを指定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 2,  // 1ページに何枚のスライドを表示するかを指定
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center',//これを指定すると中央にある画像にフォーカスされる
          gap: '10px',     // 画像間の余白の設定
        }
      ).mount();
    }
    // works
    if (document.querySelector('#works')) {
      new Splide('#works',
        {
          type: 'loop',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: true,    // true:矢印ボタンを表示
          perPage: 5,      // 1ページに何枚のスライドを表示するかを指定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 2,  // 1ページに何枚のスライドを表示するかを指定
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center',//これを指定すると中央にある画像にフォーカスされる
          gap: '10px',     // 画像間の余白の設定
        }
      ).mount();
    }
  }
  if (library === "swiper") {
    // Swiperの読み込み
    if (document.querySelector('#mv_slider')) {
      new Swiper('#mv_slider', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときの動き。選択肢：true：ループする, false：巻き戻す
        speed: 3000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 3000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 1,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: true,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 1,  // 1ページに表示するスライド数
          },
        },
      });
    }
    if (document.querySelector('#gallery')) {
      new Swiper('#gallery', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときに、先頭に巻き戻す。選択肢：true：巻き戻す, false：巻き戻さない
        speed: 3000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 3000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 4,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: true,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 6,  // 1ページに表示するスライド数
          },
        },
      });
    }
    if (document.querySelector('#works')) {
      new Swiper('#works', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときの動き。選択肢：true：ループする, false：巻き戻す
        speed: 1000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 1000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 1,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: false,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 3,  // 1ページに表示するスライド数
          },
        },
      });
    }
    if (document.querySelector('#post')) {
      new Swiper('#post', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときの動き。選択肢：true：ループする, false：巻き戻す
        speed: 1000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 1000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 1,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: false,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 3,  // 1ページに表示するスライド数
          },
        },
      });
    }
  }
  if (library === "slick") {
        //slick slider
    if (document.querySelector('#mv_slider')) {
      $('#mv_slider').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 3000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 3000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 1,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: false,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
    if (document.querySelector('#gallery')) {
      $('#gallery').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 3000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 3000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 5,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: false,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
    if (document.querySelector('#works')) {
      $('#works').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 1000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 1000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 1,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: true,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
    if (document.querySelector('#post')) {
      $('#post').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 1000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 1000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 3,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: true,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
  }
});

// お問い合わせフォーム送信完了ページに移動させる場合使用します。
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//   location = 'ここに完了ページのURLを記入';
//   // location = 'http://toolwordpressmv.local/contact-thanks/';
// }, false );
