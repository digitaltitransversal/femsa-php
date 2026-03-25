# # TransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the transaction. |
**object** | **string** | Object name, which is transaction. |
**amount** | **int** | The amount of the transaction. |
**fee** | **int** | The amount to be deducted for taxes and commissions. |
**net** | **int** | The net amount after deducting commissions and taxes. |
**currency** | **string** | The currency of the transaction. It uses the 3-letter code of ISO 4217. |
**status** | **string** | Code indicating transaction status. |
**type** | **string** | Transaction type. |
**created_at** | **int** | Date and time of creation of the transaction in Unix format. |
**livemode** | **bool** | Indicates whether the transaction was created in live mode or test mode. |
**charge** | **string** | Charge ID associated with the transaction (present only if the transaction belongs to a charge). | [optional]
**transfer** | **string** | Transfer ID associated with the transaction (present only if the transaction belongs to a transfer). | [optional]
**transferred_at** | **int** | Date and time when the transaction was transferred, in Unix format. | [optional]
**formula** | **string** | Transaction fee formula identifier (if available). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
