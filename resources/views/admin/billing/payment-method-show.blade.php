<style>
    .stripe-button-el{
        display: none;
    }
    .displayNone {
        display: none;
    }
    .checkbox-inline, .radio-inline {
        vertical-align: top !important;
    }
    .payment-type {
        border: 1px solid #e1e1e1;
        padding: 20px;
        background-color: #f3f3f3;
        border-radius: 10px;

    }
    .box-height {
        height: 78px;
    }
    .button-center{
        display: flex;
        justify-content: center;
    }
</style>
<div id="event-detail">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-cash"></i> Choose Payment Method</h4>
    </div>
    <div class="modal-body">
        <div class="form-body">
            <div class="row">
                <div class="col-12 col-sm-12 mt-40 text-center" id="onlineBox">
                    @if(($setting->paypal_status == 1 || $setting->stripe_status == 1))
                        <div class="form-group payment-type box-height">
                            @if($setting->paypal_client_id != null && $setting->paypal_secret != null && $setting->paypal_status == 1)
                                <button type="submit" class="btn btn-warning waves-effect waves-light paypalPayment pull-left" data-toggle="tooltip" data-placement="top" title="Choose Plan">
                                    <i class="icon-anchor display-small"></i><span>
                                    <i class="fa fa-paypal"></i> @lang('core.payPaypal')</span>
                                </button>
                            @endif

                            @if($setting->stripe_key != null && $setting->stripe_secret != null  && $setting->stripe_status == 1)
                                <div class="m-l-10">
                                    <form action="{{ route('admin.billing.stripe_payment') }}" method="POST">
                                        <input type="hidden" name="plan_id" value="{{ $package->id }}">
                                        <input type="hidden" name="type" value="{{ $type }}">
                                        {{ csrf_field() }}
                                        <script
                                                src="https://checkout.stripe.com/checkout.js"
                                                class="stripe-button d-flex flex-wrap justify-content-between align-items-center"
                                                data-email="{{ $company->email }}"
                                                data-key="{{ config('services.stripe.key') }}"
                                                @if($type == 'annual')
                                                    data-amount="{{ round($package->annual_price) * 100 }}"
                                                @else
                                                    data-amount="{{ round($package->monthly_price) * 100 }}"
                                                @endif
                                                data-button-name="Choose Plan"
                                                data-description="Payment through debit card."
                                                data-image="{{ $logo }}"
                                                data-locale="auto"
                                                data-currency="{{ $setting->currency }}">
                                        </script>

                                        <button type="submit" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Choose Plan">
                                            <i class="icon-anchor display-small"></i><span>
                                        <i class="fa fa-cc-stripe"></i> @lang('core.payStripe')</span></button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
    </div>
</div>
<script>

    // redirect on paypal payment page
    $('body').on('click', '.paypalPayment', function(){
        $.easyBlockUI('#package-select-form', 'Redirecting Please Wait...');
        var url = "{{ route('admin.paypal', [$package->id, $type]) }}";
        window.location.href = url;
    });

</script>

