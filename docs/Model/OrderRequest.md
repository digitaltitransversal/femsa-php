# # OrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charges** | [**\DigitalFemsa\Model\ChargeRequest[]**](ChargeRequest.md) | List of [charges](https://developers.digitalfemsa.io/reference/orderscreatecharge) that are applied to the order | [optional]
**checkout** | [**\DigitalFemsa\Model\CheckoutRequest**](CheckoutRequest.md) |  | [optional]
**return_url** | **string** | Optional return URL used by some payment/checkout flows. | [optional]
**currency** | **string** | Currency with which the payment will be made. It uses the 3-letter code of the [International Standard ISO 4217.](https://es.wikipedia.org/wiki/ISO_4217) |
**customer_info** | [**\DigitalFemsa\Model\CustomerInfo**](CustomerInfo.md) |  |
**discount_lines** | [**\DigitalFemsa\Model\OrderDiscountLinesRequest[]**](OrderDiscountLinesRequest.md) | List of [discounts](https://developers.digitalfemsa.io/reference/orderscreatediscountline) that are applied to the order. You must have at least one discount. | [optional]
**fiscal_entity** | **object** | Fiscal entity of the order, Currently it is a purely informative field | [optional]
**line_items** | [**\DigitalFemsa\Model\Product[]**](Product.md) | List of [products](https://developers.digitalfemsa.io/reference/orderscreateproduct) that are sold in the order. You must have at least one product. |
**metadata** | **array<string,mixed>** | Metadata associated with the order | [optional]
**needs_shipping_contact** | **bool** | Allows you to fill out the shipping information at checkout | [optional]
**processing_mode** | **string** | Indicates the processing mode for the order, either ecommerce, recurrent or validation. | [optional]
**shipping_contact** | [**\DigitalFemsa\Model\CustomerShippingContacts**](CustomerShippingContacts.md) |  | [optional]
**shipping_lines** | [**\DigitalFemsa\Model\ShippingRequest[]**](ShippingRequest.md) | List of [shipping costs](https://developers.digitalfemsa.io/reference/orderscreateshipping). If the online store offers digital products. | [optional]
**tax_lines** | [**\DigitalFemsa\Model\OrderTaxRequest[]**](OrderTaxRequest.md) | List of [taxes](https://developers.digitalfemsa.io/reference/orderscreatetaxes) that are applied to the order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
