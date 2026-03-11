# # TransfersResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the transfer. |
**object** | **string** | Object name, which is transfer. |
**amount** | **int** | Amount in cents of the transfer. |
**created_at** | **int** | Date and time of creation of the transfer in Unix format. |
**currency** | **string** | The currency of the transfer. It uses the 3-letter code of ISO 4217. |
**livemode** | **bool** | Indicates whether the transfer was created in live mode or test mode. |
**status** | **string** | Code indicating transfer status. |
**statement_reference** | **string** | Reference number of the transfer. |
**statement_description** | **string** | Description of the transfer. |
**destination** | [**\DigitalFemsa\Model\TransfersResponseDestination**](TransfersResponseDestination.md) |  |
**fee** | **int** | Total fee for the transfer (present only when requesting the &#39;details&#39; expansion). | [optional]
**capture_amount** | **int** | Present only when requesting the &#39;details&#39; expansion. | [optional]
**capture_fee** | **int** | Present only when requesting the &#39;details&#39; expansion. | [optional]
**capture_net** | **int** | Present only when requesting the &#39;details&#39; expansion. | [optional]
**refund_amount** | **int** | Present only when requesting the &#39;details&#39; expansion. | [optional]
**refund_fee** | **int** | Present only when requesting the &#39;details&#39; expansion. | [optional]
**refund_net** | **int** | Present only when requesting the &#39;details&#39; expansion. | [optional]
**payout_amount** | **int** | Present only when requesting the &#39;details&#39; expansion. | [optional]
**payout_fee** | **int** | Present only when requesting the &#39;details&#39; expansion. | [optional]
**payout_net** | **int** | Present only when requesting the &#39;details&#39; expansion. | [optional]
**transactions** | **object[]** | Present only when requesting the &#39;details&#39; expansion. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
