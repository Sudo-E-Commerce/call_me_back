<link rel="stylesheet" type="text/css" href="/assets/call_me_back/css/style.css">
<script src="/assets/call_me_back/js/script.js" type="text/javascript"></script>

<div class="call_me_back">
  	<input type="text" name="phone" id="phone" class="phone" placeholder="@lang('Nhập số điện thoại của bạn...')" required><br>
  	<input type="hidden" name="name" class="name" value="{{ $name }}">
  	<input type="hidden" name="url" class="url" value="{{ $url }}">
  	<button class="submit_call" aria-hidden="true">@lang('Gọi lại cho tôi')</button>
</div>
<div id="toast-container" class="toast-top-right" style="display: none;">
    <div class="toast" aria-live="assertive" style="">
        <div class="toast-message"></div>
    </div>
</div>
