# # OrderRefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Amount to refund. If not provided, the API refunds the refundable amount of the selected charge. |
**charge_id** | **string** | Charge ID to refund. If not provided, the API selects a refundable charge from the order. | [optional]
**reason** | **string** | Refund reason. If not provided, the API uses a default reason. |
**expires_at** | **int** | Expiration timestamp for cash refunds (must be within the allowed range configured by the API). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
