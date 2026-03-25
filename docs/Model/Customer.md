# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Customer&#39;s name. |
**email** | **string** | Customer email address. |
**phone** | **string** | Customer phone number. | [optional]
**corporate** | **bool** | Indicates whether the customer email is corporate. | [optional] [default to false]
**custom_reference** | **string** | Merchant-defined reference used to identify the customer in your system. | [optional]
**metadata** | **array<string,mixed>** | Arbitrary metadata associated with the customer. | [optional]
**payment_sources** | [**\DigitalFemsa\Model\CustomerPaymentMethodsRequest[]**](CustomerPaymentMethodsRequest.md) | Customer payment sources to be created with the customer (optional). | [optional]
**fiscal_entities** | [**\DigitalFemsa\Model\CustomerFiscalEntitiesRequest[]**](CustomerFiscalEntitiesRequest.md) | Customer fiscal entities to be created with the customer (optional). | [optional]
**shipping_contacts** | [**\DigitalFemsa\Model\CustomerShippingContacts[]**](CustomerShippingContacts.md) | Customer shipping contacts to be created with the customer (optional). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
