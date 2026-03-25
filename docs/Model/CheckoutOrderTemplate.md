# # CheckoutOrderTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | ISO 4217 currency code for the order. |
**customer_info** | [**\DigitalFemsa\Model\CheckoutOrderTemplateCustomerInfo**](CheckoutOrderTemplateCustomerInfo.md) |  | [optional]
**line_items** | [**\DigitalFemsa\Model\Product[]**](Product.md) | Products to buy. Each contains unit price and quantity used to calculate the order total. |
**metadata** | **array<string,mixed>** | Arbitrary key-value data attached to the order for internal use. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
