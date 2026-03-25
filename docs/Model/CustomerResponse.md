# # CustomerResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Customer&#39;s ID |
**object** | **string** |  |
**created_at** | **int** | Creation date of the object (Unix timestamp) |
**livemode** | **bool** | true if the object exists in live mode or false if the object exists in test mode |
**name** | **string** | Customer&#39;s name | [optional]
**email** | **string** |  | [optional]
**phone** | **string** | Customer&#39;s phone number | [optional]
**corporate** | **bool** | true if the customer is a company | [optional]
**custom_reference** | **string** | Custom reference | [optional]
**default_fiscal_entity_id** | **string** |  | [optional]
**default_shipping_contact_id** | **string** |  | [optional]
**metadata** | **array<string,mixed>** | Customer metadata (maps to contextual_data in backend) | [optional]
**payment_sources** | [**\DigitalFemsa\Model\CustomerPaymentMethodsResponse**](CustomerPaymentMethodsResponse.md) |  | [optional]
**fiscal_entities** | [**\DigitalFemsa\Model\CustomerFiscalEntitiesResponse**](CustomerFiscalEntitiesResponse.md) |  | [optional]
**shipping_contacts** | [**\DigitalFemsa\Model\CustomerResponseShippingContacts**](CustomerResponseShippingContacts.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
