$(document).ready(function(){
    $('.category_item').click(function(){
        var category = $(this).attr('id');
        
        if(category == 'all') {
            $('.design_item').addClass('hide');
            setTimeout(function() {
                $('.design_item').removeClass('hide');
            }, 300);
        } else {
            $('.design_item').addClass('hide');
            setTimeout(function() {
                $('.' + category).removeClass('hide');
            }, 300);            
        }
        
        
    })
});

/* 20190423 - EHW - Rewriting as ES6 */
/*
    Determined that jQuery is the quickest way to do this when I'm tired.

*/
