# # OrderUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Order status update. Allowed values depend on server-side validations. | [optional]
**currency** | **string** | Currency used for the order. Uses ISO 4217 (3-letter code). Allowed values depend on server-side validations. | [optional]
**customer_info** | [**\DigitalFemsa\Model\CustomerInfo**](CustomerInfo.md) |  | [optional]
**line_items** | [**\DigitalFemsa\Model\Product[]**](Product.md) | List of products sold in the order. | [optional]
**shipping_lines** | [**\DigitalFemsa\Model\ShippingRequest[]**](ShippingRequest.md) | List of shipping costs applied to the order. | [optional]
**tax_lines** | [**\DigitalFemsa\Model\OrderTaxRequest[]**](OrderTaxRequest.md) |  | [optional]
**discount_lines** | [**\DigitalFemsa\Model\OrderDiscountLinesRequest[]**](OrderDiscountLinesRequest.md) | List of discounts applied to the order. | [optional]
**metadata** | **array<string,mixed>** | Additional information attached to the order. | [optional]
**return_url** | **string** | URL to redirect the customer after completing the flow (when applicable). | [optional]
**charges** | [**\DigitalFemsa\Model\ChargeRequest[]**](ChargeRequest.md) | Add new charges to the order. Subject to server-side validations (for example, maximum charges rules). | [optional]
**shipping_contact_id** | **string** | References an existing customer shipping contact. | [optional]
**shipping_contact** | [**\DigitalFemsa\Model\CustomerShippingContacts**](CustomerShippingContacts.md) |  | [optional]
**fiscal_entity_id** | **string** | References an existing customer fiscal entity. | [optional]
**fiscal_entity** | [**\DigitalFemsa\Model\OrderUpdateFiscalEntityRequest**](OrderUpdateFiscalEntityRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
