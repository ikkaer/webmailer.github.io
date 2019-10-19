<!-- To correctly insert a widget in WordPress, it is recommended to remove all comments and line breaks beforehand (ie, the code must be one line) -->
<div id="kiwitaxi_widget_wrapper"></div>    <!-- container in which widget will be inserted -->

<!-- Recommended to insert the script directly before the closing tag </body> -->
<script type="text/javascript" async="async" defer="defer">
var kiwitaxiWidgetOptions = {
    language: 'en',    /* Widget language. You can set "en", "es", "de", "fr", "pt", "pl" or "ru" */
    theme: '0',    /* Theme of widget. By default 0. You can choose theme by setting value from 0 to 9 or a,b,c,d */
    display_currency: 'USD',    /* Transfer price currency which will be displayed in widget. You can choose: "USD", "EUR", "RUB" */
    payment_currency: 'USD',    /* Payment currency (if different from display_currency). You can choose one of the following: "RUB", "EUR", "USD" */
    disable_currency_selector: false,    /* This parameter disables or enables currency selector availability for end-users. false - enabled, true - disabled */
    country: '',    /* Widget will suggest waypoints within this country first (you can specify name in Russian or English) */
    place_from: '',    /* Default pick-up location value ( you can specify name in Russian, English or three-symbol IATA code for airports) */
    place_to: '',    /* Default drop-off location value ( you can specify name in Russian, English or three-symbol IATA code for airports) */
    hide_form_extras: false,    /* Hide additional elements from the first page: true or false */
    hide_external_links: false,    /* Hide external links leading to Kiwitaxi web site (FAQ, terms of service delivery), true или false */
    default_form_title: 'Find a comfortable and affordable transfer all around the world!', /* Default header when pick-up and drop-off points are not set. You can hide this header by leaving the parameter empty: '' */
    /*max_height: 1000,*/     /* Maximum widget height in pixels. Vertical scrollbar will appear if widget doesn't fit in. */
    partner_id: '5cc974126034b',    /* Partner ID */
    banner_id: 'a34c5cdd',    /* Banner ID */
    target: 'kiwitaxi_widget_wrapper'    /* HTML-container identifier in which widget will be inserted */
};
(function () {
    var kw = document.createElement('script');
    kw.type = 'text/javascript';
    kw.async = true;
    kw.src = '//widget.kiwitaxi.com/widget.js';
    try {
        var s = document.getElementsByTagName('head')[0];
        s.appendChild(kw);
    } catch (e) {
        console.error(e.message)
    }
})();
</script>