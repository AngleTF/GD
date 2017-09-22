/**
 * Created by TF on 2017/9/15.
 */
window.onload = function (){
    console.log('作者:陶力峰');
    $('#thinkImg').click(function (){
        $('.bgImg').css('display','block').click(function (){
            $(this).css('display','none');
        })
    })
};
