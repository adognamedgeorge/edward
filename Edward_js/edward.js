//手机验证码
$(function() {
    let orderTime = 60;
    let timeLeft = orderTime;
    let getBtn = $('.get_button');
    let phoneNum = $('.phone_number');
    let reg = /^1[0-9]{10}$/;
    //手机号码符合规则，获取验证码按钮方可点击
    phoneNum.keyup( function() {
        if(reg.test(phoneNum.val())) {
            getBtn.removeAttr('disabled');
        }else{
            getBtn.attr('disabled',true)
        }
    });
    //计时函数
    function timeCount() {
        timeLeft-= 1;
        if(timeLeft > 0) {
            getBtn.val(timeLeft + '秒后重发');
            setTimeout(timeCount, 1000)
        }else{
            getBtn.val('重新发送');
            timeLeft = orderTime;
            getBtn.removeAttr('disabled');
        }
    }
    //验证码按钮点击事件
    getBtn.on('click', function() {
        $(this).attr("disabled", true);
        timeCount(this)
    })

})