
    $(document).ready(function(){

        $('.closed-eye-icon').parent().on('click',function(){
            if($('.closed-eye-icon').hasClass('hidden')){
                $('.closed-eye-icon').removeClass('hidden');
                 $('.open-eye-icon').addClass('hidden');
                $('.password-input').attr('type','password');
            }
            else{
                $('.closed-eye-icon').addClass('hidden');
                $('.open-eye-icon').removeClass('hidden');
                $('.password-input').attr('type','text');
            }

        });
    });
