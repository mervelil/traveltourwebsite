let menu =document.querySelector('#menu-btn');
let navbar =document.querySelector('.header .navbar');

menu.onclick = () => { 
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => { 
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper=new Swiper(".home-slider",{
    loop:true,
    navigation:{
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-prev",
    },
});


var swiper=new Swiper(".reviews-slider",{
    loop:true,
    spaceBetween:20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640:{
            slidesPerView:1,
           
        },
        768:{
            slidesPerView:2,
        },
        1024:{
            slidesPerView:3,
        },      
    },

});
let loadMoreBtn=document.querySelector('.packages .load-more .btn ');
let currentItem=3;
loadMoreBtn.onclick=()=>{
    let boxes=[...document.querySelectorAll('.packages .box-container .box')];
    for (var i =currentItem;i<currentItem+3;i++) {
        boxes[i].style.display='inline-block';
    };
    currentItem+=3;
    if (currentItem>=boxes.length) {
        loadMoreBtn.style.display='none';
    }

}

/**
 * Created by CORDELIA on 05-Sep-16.
 */

(function ($) {
    $('input[type=submit]').on('click',function (e){
        var name = $('input#name').val(),
            shout = $('input#shoutText').val(),
            date = getDate(),
            dataString = 'name='+name+'&shout='+shout+'&date='+date;

        if(name == '' || shout == ''){
           alert('Must fill both fields [name + shout]');
            //alert(date);
        }else{
            $.ajax({
                type:"post",
                url:"inc/shoutbox.php",
                data: dataString,
                cache: false,
                success: function(html){
                    $('#shouts ul').prepend(html);
                }
            });
        }

        e.preventDefault();
    });
})(jQuery);

function getDate(){
    var date = new Date(),
        month = date.getMonth() +1;
    date = date.getDate()+"-"+month+"-"+date.getFullYear();
    return date;
}