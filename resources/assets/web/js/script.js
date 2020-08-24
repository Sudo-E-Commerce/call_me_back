function alert_show(type='success',message='') {
    $('#toast-container .toast').addClass('toast-'+type);
    $('#toast-container .toast div').text(message);
    $('#toast-container').css('display','block');
    setTimeout(function() {
        $('#toast-container').css('display','none');
        $('#toast-container .toast').removeClass('toast-'+type);
        $('#toast-container .toast div').text('');
    }, 5000);
}
$(document).ready(function(){
	$('body').on('click','.submit_call',function(){
		var phone =$('.phone').val();
		var name =$('.name').val();
		var url =$('.url').val();
		if (!$.isNumeric($(".phone").val())){
			alert_show(type='error','Vui lòng nhập đúng số điện thoại!');
			return this;
		}
		$.ajax({
			headers:{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
			dataType:'json',type:'POST',
			data:{
				phone:phone,
				name:name,
				url:url
			},
			url: '/ajax/phone',
            method: "POST",
			success:function(data){
				alert_show(type='success', data.message);
			},
			error:function(){
				alert_show(type='error','Có lỗi xảy ra');
			}
		})
	})
});