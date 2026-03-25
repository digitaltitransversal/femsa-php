# # UpdateCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Customer&#39;s name. | [optional]
**email** | **string** | Customer email address. | [optional]
**phone** | **string** | Customer phone number. | [optional]
**corporate** | **bool** | True if the customer represents a company. | [optional]
**custom_reference** | **string** | Merchant-defined reference used to identify the customer in your system. | [optional]
**metadata** | **array<string,mixed>** | Arbitrary metadata associated with the customer. | [optional]
**payment_sources** | [**\DigitalFemsa\Model\CustomerPaymentMethodsRequest[]**](CustomerPaymentMethodsRequest.md) | Customer payment sources to create/attach (offline recurrent references). | [optional]
**default_payment_source_id** | **string** | Sets the default payment source for the customer (must be an existing payment source on the customer). | [optional]
**default_fiscal_entity_id** | **string** | Sets the default fiscal entity for the customer (must be an existing fiscal entity on the customer). | [optional]
**default_shipping_contact_id** | **string** | Sets the default shipping contact for the customer (must be an existing shipping contact on the customer). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
