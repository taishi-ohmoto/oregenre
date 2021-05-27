jQuery(function($){

    // TOPボタンの表示
    var TopBtn = $('.topButton');
    TopBtn.hide();
    // スクロール位置が100でボタンを表示
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            TopBtn.fadeIn();
        } 
        else {
            TopBtn.fadeOut();
        }
    });

    


    // ボタンを押下するとトップへ移動
    TopBtn.click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 300);
        return false;
    });

    // ヘッダーの背景
    var header = $('header');
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            header.css({
                'background-color':'black',
                'transition':'2s'
            });
        } 
        else {
            header.css('background-color','transparent');
        }
    });

    // スクロール時のアニメーション
    $(window).scroll(function() {
        //スクロール量を取得
        var scroll = $(window).scrollTop();
        

        //ウィンドウの高さを取得
        var windowHeight = $(window).height();

        $('.aboutMe').each(function(){
            //要素の位置の取得
            var target = $(this).offset().top;
            // console.log(target);

            //目的の要素が画面内に少し入ったらクラスを付与する
            if (scroll > target - windowHeight + 300){
                $('.aboutMe').addClass('aboutMeMove');
            }
        });

        $('.subcontent').each(function(){
            //要素の位置の取得
            var target = $(this).offset().top;
            // console.log(target);

            //目的の要素が画面内に少し入ったらクラスを付与する
            if (scroll > target - windowHeight + 300){
                $('.subcontent').css({
                    'opacity':'1',
                    'transition':'1s'
                });
            }    
        });

        $('footer').each(function(){
            // footerの高さを取得
            var footerHeight = $(this).offset().top;
            // console.log(footerHeight);
            // console.log(scroll);
            // console.log(windowHeight);
    
    
            //目的の要素が画面内に少し入ったらクラスを付与する
            if (scroll > footerHeight - windowHeight){
                $('#topButton').removeClass('topButton');
            }else{
                $('#topButton').addClass('topButton');
            }
        });

    });

});

