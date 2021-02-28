// avento de scroll
$(document).ready(function(){
    let img = document.getElementById('img')
    let header = document.getElementById('header')
    
    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            img.style.width = '85px'
            img.style.marginLeft = '24%'
            header.style.background = 'rgba(0, 0, 0, 0.9)'
        } else {
            img.style.width= '220px'
            img.style.marginLeft = '-2%'
            header.style.background = 'none'
            
        }
    });
    
});
