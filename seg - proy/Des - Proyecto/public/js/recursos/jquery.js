$(function() {
    jQuery('.home #login-nav').click(function(e){
        e.preventDefault();
        jQuery('.home .modal-login').toggleClass('show-modal');
    });
    jQuery('.single .btn-crear-fiesta').click(function(){
        jQuery('.single #modal-crear-fiesta').addClass('show-modal');
    });
    jQuery('.single i.fa.fa-times').click(function(){
        jQuery('.single #modal-crear-fiesta').removeClass('show-modal');
    });
    jQuery('i.fa.fa-bars').click(function(){
        jQuery('nav').toggleClass('show-modal');
    });
    jQuery('.modal-aviso i.fa.fa-times').click(function(){
        jQuery('.modal-aviso').addClass('hide-modal');
    })
    jQuery('.modal-login i.fa.fa-times').click(function(){
        jQuery('.modal-login').toggleClass('show-modal');
    });
});