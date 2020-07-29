$(function(){

    //DECLARACAO VARIAVEIS
    var delay = 6;
    var maxSlide = $('.banner-single').length - 1;
    var curSlide = 0;

    //INICIACAO DE FUNCOES
    initSlider();
    changeSlider();

    //DECLARACOES DE FUNCOES
    function initSlider() {
		$('.banner-single').hide();
        $('.banner-single').eq(0).show();
        for(var i = 0; i < maxSlide+1; i++) {
            var content = $('.bullets').html();
            if(i == 0) 
                content+='<span class="active-slider"></span>';
            else 
                content+='<span></span>';
            $('.bullets').html(content);
        }
    }
    function changeSlider() {
        setInterval(function(){
            $('.banner-single').eq(curSlide).fadeOut(2000);
            curSlide++;
            if (curSlide > maxSlide)
                curSlide = 0;
            $('.banner-single').eq(curSlide).fadeIn(2000); 
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(curSlide).addClass('active-slider');
        }, delay * 1000);
    }
    $('body').on('click','div.bullets span', function() {
        var currentBullet = $(this);
        $('.bullets span').removeClass('active-slider');
        $('.banner-single').eq(curSlide).fadeOut(2000);
        curSlide = currentBullet.index();
        $('.banner-single').eq(curSlide).fadeIn(2000);
        $('.bullets span').eq(curSlide).removeClass('active-slider');
        $('.bullets span').eq(curSlide).addClass('active-slider');
    })
})