// モーダル画面
$(function() {
  const trigger = $('.p-menuInnerBtn'),
        wrapper = $('.p-modalWrapper'),
        layer = $('.p-modalLayer'),
        container = $('.p-modalContainer'),
        close = $('.p-modalContainerInnerClose');
  $(trigger).click(function() {
    const index = $(this).index();
    $(wrapper).eq(index).fadeIn(400);
    $(container).scrollTop(0);
    $('html, body').css('overflow', 'hidden');
  });
  $(layer).add(close).click(function() {
    $(wrapper).fadeOut(400);
    $('html, body').removeAttr('style');
  });
});
//画像のフェードイン
let winHeightPhoto,winScrollPhoto,scrollPosPhoto;
$(window).on('load scroll',function(){
  winScrollPhoto = $(window).scrollTop();
  winHeightPhoto = $(window).height();
  scrollPosPhoto = winHeightPhoto * 0.9 + winScrollPhoto;
  $(".p-orderDetilContentsInnerImgPhoto").each(function(){
    if($(this).offset().top <= scrollPosPhoto){
      $(this).addClass("show");
    }
  });
});
// STEPシール
let winHeightTape,winScrollTape,scrollPosTape;
$(window).on('load scroll',function(){
  winScrollTape = $(window).scrollTop();
  winHeightTape = $(window).height();
  scrollPosTape = winHeightTape * 0.9 + winScrollTape;
  $(".p-orderDetilContentsInnerStickerTitleText").each(function(){
    if($(this).offset().top <= scrollPosTape){
      $(this).addClass("sride");
    }
  });
});
