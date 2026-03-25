# # Checkout

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Payment link name. |
**type** | **string** | Checkout type. |
**recurrent** | **bool** | false: single use. true: multiple payments |
**payments_limit_count** | **int** | Required when &#x60;recurrent&#x60; is true. Maximum number of payments allowed through the link. | [optional]
**allowed_payment_methods** | **string[]** | Payment methods available in the payment link. |
**needs_shipping_contact** | **bool** | This flag allows you to fill in the shipping information at checkout. |
**starts_at** | **int** | Start time for the link. Unix timestamp in seconds. | [optional]
**expires_at** | **int** | Expiration time for the link (Unix timestamp in seconds). Valid range is between 2 and 365 days (calculated from the next day of creation at 00:01). |
**can_not_expire** | **bool** | If true, the link does not expire. | [optional]
**order_template** | [**\DigitalFemsa\Model\CheckoutOrderTemplate**](CheckoutOrderTemplate.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
