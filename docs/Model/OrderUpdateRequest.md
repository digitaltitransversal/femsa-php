# # OrderUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Currency code in ISO 4217 (3-letter uppercase). | [optional]
**customer_info** | [**\DigitalFemsa\Model\OrderUpdateRequestCustomerInfo**](OrderUpdateRequestCustomerInfo.md) |  | [optional]
**line_items** | [**\DigitalFemsa\Model\Product[]**](Product.md) | List of [products](https://developers.femsa.com/v2.1.0/reference/orderscreateproduct) that are sold in the order. You must have at least one product. | [optional]
**charges** | [**\DigitalFemsa\Model\ChargeRequest[]**](ChargeRequest.md) |  | [optional]
**discount_lines** | [**\DigitalFemsa\Model\OrderDiscountLinesRequest[]**](OrderDiscountLinesRequest.md) | List of [discounts](https://developers.femsa.com/v2.1.0/reference/orderscreatediscountline) that are applied to the order. You must have at least one discount. | [optional]
**tax_lines** | [**\DigitalFemsa\Model\OrderTaxRequest[]**](OrderTaxRequest.md) |  | [optional]
**shipping_contact_id** | **string** | Existing shipping contact id from the customer to link to this order. | [optional]
**shipping_contact** | [**\DigitalFemsa\Model\CustomerShippingContacts**](CustomerShippingContacts.md) |  | [optional]
**shipping_lines** | [**\DigitalFemsa\Model\ShippingRequest[]**](ShippingRequest.md) | List of [shipping costs](https://developers.femsa.com/v2.1.0/reference/orderscreateshipping). If the online store offers digital products. | [optional]
**fiscal_entity_id** | **string** | Existing fiscal entity id from the customer to link to this order. | [optional]
**fiscal_entity** | [**\DigitalFemsa\Model\OrderUpdateFiscalEntityRequest**](OrderUpdateFiscalEntityRequest.md) |  | [optional]
**return_url** | **string** | URL where the customer should be redirected after completing a payment flow (if applicable). | [optional]
**metadata** | **array<string,mixed>** | Arbitrary key-value data that you can attach to the order for your internal use. It is not used for payment processing. Keys should be strings; values can be any JSON value. | [optional]
**status** | **string** | Order status update (only allowed transitions will be accepted). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
