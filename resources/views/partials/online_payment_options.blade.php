@if (get_setting('paypal_payment') == 1)
    <option value="paypal">{{ translate('Paypal') }}</option>
@endif
@if (get_setting('stripe_payment') == 1)
    <option value="stripe">{{ translate('Stripe') }}</option>
@endif
@if (get_setting('mercadopago_payment') == 1)
    <option value="mercadopago">{{ translate('Mercadopago') }}</option>
@endif
@if (get_setting('sslcommerz_payment') == 1)
    <option value="sslcommerz">{{ translate('sslcommerz') }}</option>
@endif
@if (get_setting('instamojo_payment') == 1)
    <option value="instamojo">{{ translate('Instamojo') }}</option>
@endif
@if (get_setting('razorpay') == 1)
    <option value="razorpay">{{ translate('RazorPay') }}</option>
@endif
@if (get_setting('paystack') == 1)
    <option value="paystack">{{ translate('PayStack') }}</option>
@endif
@if (get_setting('voguepay') == 1)
    <option value="voguepay">{{ translate('Voguepay') }}</option>
@endif
@if (get_setting('payhere') == 1)
    <option value="payhere">{{ translate('Payhere') }}</option>
@endif
@if (get_setting('ngenius') == 1)
    <option value="ngenius">{{ translate('Ngenius') }}</option>
@endif
@if (get_setting('iyzico') == 1)
    <option value="iyzico">{{ translate('Iyzico') }}</option>
@endif
@if (get_setting('nagad') == 1)
    <option value="nagad">{{ translate('Nagad') }}</option>
@endif
@if (get_setting('bkash') == 1)
    <option value="bkash">{{ translate('Bkash') }}</option>
@endif
@if (get_setting('aamarpay') == 1)
    <option value="aamarpay">{{ translate('Amarpay') }}</option>
@endif
@if(get_setting('authorizenet'))
    <option value="authorizenet">{{ translate('Authorize Net') }}</option>
@endif
@if (get_setting('payku') == 1)
    <option value="payku">{{ translate('Payku') }}</option>
@endif
@if (get_setting('paymob_payment') == 1)
    <option value="paymob">{{ translate('Paymob') }}</option>
@endif

{{-- african payment gateways  --}}
@if (addon_is_activated('african_pg'))
    @if (get_setting('flutterwave') == 1)
        <option value="flutterwave">{{ translate('Flutterwave') }}</option>
    @endif
    @if (get_setting('payfast') == 1)
        <option value="payfast">{{ translate('PayFast') }}</option>
    @endif
@endif

{{-- Asian payment gateways  --}}
@if (addon_is_activated('paytm'))
    @if(get_setting('paytm_payment') == 1)
        <option value="paytm">{{ translate('Paytm')}}</option>
    @endif
    @if(get_setting('toyyibpay_payment') == 1)
        <option value="toyyibpay">{{ translate('ToyyibPay')}}</option>
    @endif
    @if (get_setting('myfatoorah') == 1)
        <option value="myfatoorah">{{ translate('MyFatoorah') }}</option>
    @endif
    @if (get_setting('khalti_payment') == 1)
        <option value="khalti">{{ translate('Khalti') }}</option>
    @endif
    @if (get_setting('phonepe_payment') == 1)
        <option value="phonepe">{{ translate('Phonepe') }}</option>
    @endif
@endif
