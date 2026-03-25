# # OrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Currency with which the payment will be made. |
**customer_info** | [**\DigitalFemsa\Model\OrderRequestCustomerInfo**](OrderRequestCustomerInfo.md) |  |
**line_items** | [**\DigitalFemsa\Model\Product[]**](Product.md) | List of [products](https://developers.digitalfemsa.io/reference/orderscreateproduct) that are sold in the order. You must have at least one product. |
**charges** | [**\DigitalFemsa\Model\ChargeRequest[]**](ChargeRequest.md) | List of [charges](https://developers.digitalfemsa.io/reference/orderscreatecharge) that are applied to the order | [optional]
**checkout** | [**\DigitalFemsa\Model\CheckoutRequest**](CheckoutRequest.md) |  | [optional]
**discount_lines** | [**\DigitalFemsa\Model\OrderDiscountLinesRequest[]**](OrderDiscountLinesRequest.md) | List of [discounts](https://developers.digitalfemsa.io/reference/orderscreatediscountline) that are applied to the order. You must have at least one discount. | [optional]
**tax_lines** | [**\DigitalFemsa\Model\OrderTaxRequest[]**](OrderTaxRequest.md) | List of [taxes](https://developers.digitalfemsa.io/reference/orderscreatetaxes) that are applied to the order. | [optional]
**needs_shipping_contact** | **bool** | Allows you to fill out the shipping information at checkout | [optional]
**shipping_contact** | [**\DigitalFemsa\Model\CustomerShippingContacts**](CustomerShippingContacts.md) |  | [optional]
**shipping_lines** | [**\DigitalFemsa\Model\ShippingRequest[]**](ShippingRequest.md) | List of [shipping costs](https://developers.digitalfemsa.io/reference/orderscreateshipping). If the online store offers digital products. | [optional]
**fiscal_entity** | [**\DigitalFemsa\Model\OrderFiscalEntityRequest**](OrderFiscalEntityRequest.md) |  | [optional]
**processing_mode** | **string** | Indicates the processing mode for the order, either ecommerce, recurrent or validation. | [optional]
**metadata** | **array<string,mixed>** | Arbitrary key-value data that you can attach to the order for your internal use (e.g. &#x60;customer_segment&#x60;, &#x60;sales_channel&#x60;, &#x60;internal_order_id&#x60;). It is not used for payment processing or fraud decisions. Keys should be strings; values can be any JSON value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
