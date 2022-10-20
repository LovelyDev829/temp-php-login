if (typeof (jQuery) != 'undefined') {
    $(document).ready(function () {
        $('#CaptchaUpdateButton').click(function (event) {
            event.preventDefault();
            var captchaImage = $('#CaptchaImage');

            var captchaImageSrc = captchaImage.attr('src');            
            var tmsParameter = '&tm=';
            var tmsParameterPosition = captchaImageSrc.indexOf('&tm=');
            if (tmsParameterPosition > 0){
                captchaImageSrc = captchaImageSrc.substring(0, tmsParameterPosition);
            }
            captchaImageSrc +=  tmsParameter + new Date().getTime();
            captchaImage.attr('src', captchaImageSrc);               
        });
    });
}
