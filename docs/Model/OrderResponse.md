# # OrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**object** | **string** |  | [optional]
**livemode** | **bool** |  | [optional]
**amount** | **int** |  | [optional]
**currency** | **string** |  | [optional]
**payment_status** | **string** | Current payment status of the order. It can be &#x60;null&#x60; for orders without payment information yet. | [optional]
**amount_refunded** | **int** |  | [optional]
**split_payment** | **bool** | Indicates whether the order uses split payments (when available/configured). | [optional]
**metadata** | **array<string,mixed>** | Metadata attached to the order. | [optional]
**is_refundable** | **bool** | Indicates whether the order is currently refundable. | [optional]
**created_at** | **int** |  | [optional]
**updated_at** | **int** |  | [optional]
**customer_info** | [**\DigitalFemsa\Model\OrderResponseCustomerInfo**](OrderResponseCustomerInfo.md) |  | [optional]
**shipping_contact** | [**\DigitalFemsa\Model\OrderResponseShippingContact**](OrderResponseShippingContact.md) |  | [optional]
**channel** | [**\DigitalFemsa\Model\OrderResponseChannel**](OrderResponseChannel.md) |  | [optional]
**fiscal_entity** | [**\DigitalFemsa\Model\OrderFiscalEntityResponse**](OrderFiscalEntityResponse.md) |  | [optional]
**checkout** | [**\DigitalFemsa\Model\OrderResponseCheckout**](OrderResponseCheckout.md) |  | [optional]
**line_items** | [**\DigitalFemsa\Model\OrderResponseProducts**](OrderResponseProducts.md) |  | [optional]
**discount_lines** | [**\DigitalFemsa\Model\OrderResponseDiscountLines**](OrderResponseDiscountLines.md) |  | [optional]
**charges** | [**\DigitalFemsa\Model\OrderResponseCharges**](OrderResponseCharges.md) |  | [optional]
**partial_reference** | **array<string,mixed>** | Partial reference information (when applicable). Structure may vary depending on the payment flow. | [optional]
**payments_info** | **array<string,mixed>** | Additional payment information (when available). Structure may vary. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
