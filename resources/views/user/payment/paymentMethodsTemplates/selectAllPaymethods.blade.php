<div id="payMethod">
    <div class="hide">
        <div class="wm-custom-modal-diolog max-width-550px">
            <div class="wm-custom-modal-body px-3">
                <div class="wm-custom-modal-header m-0">
                     @auth
                        @if($userPaymentMethodcount > 0)
                        <span id="payMethodLabel">Select a Payment Option</span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close closeModel " onclick="closeModel()">
                            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                        @else

                       <!--<a href="{{ url(app()->getLocale().'/user/payment') }}"><span id="payMethodLabel">Add a Payment Method</span> </a>-->
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close closeModel" id="wm-custom-modal-close" onclick="closeModel()">
                            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                        @endif
                    @endauth
                </div>
                <div class="container-fluid p-0 m-0">
                    <div class="row gx-1">
                        @if($userPaymentMethodcount > 0)
                            <div class="col-12 mb-3 select-payment" >
                                @auth
                                @foreach($userPaymentMethod as $usermethod)

                                <a class="">
                                    <div  id="{{ $usermethod->id }}" onclick="addHiddenValues({{ $usermethod->id }})">
                                        <span>{{ $usermethod->method_type }} </span>
                                        <span><i class="bi bi-check-circle-fill"></i></span>
                                    </div>
                                </a>
                                @endforeach
                                @endauth
                            </div>
                        @else
                        <div class="col-12 text-center">
                            <img src="{{ asset('img/assets/img/not-found-icons/no-payment-method.svg') }}" class="no-record-icon" alt="">
                            <p class="mt-3 mb-2">You have not added any payment methods</p>
                            <a href="{{ url(app()->getLocale().'/user/payment') }}" class="btn-yellow">Add a Payment Method</a>
                            <div class="p-3"></div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @if($userPaymentMethodcount > 0)
            <button class="btn btn-yellow mt-4 " id="confirm_paymentOn_p2ptrading" style="float: right; margin: 10px;"> Confirm </button>
            @endif
        </div>
    </div>
</div>
<script>
    $('#confirm_paymentOn_p2ptrading').click(function(){
    var ele = $('#payMethod .custom-modal-bck-bg');
    ele.addClass('hide');
    ele.removeClass('custom-modal-bck-bg');
});
function closeModel(){
    $('#payMethod .custom-modal-bck-bg').removeClass('custom-modal-bck-bg').addClass('hide');
};

</script>






