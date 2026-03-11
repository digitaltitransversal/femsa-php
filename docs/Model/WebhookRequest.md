# # WebhookRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Webhook endpoint URL. Local URLs are not allowed. |
**subscribed_events** | **string[]** | List of event types the webhook is subscribed to. | [optional]
**events** | **string[]** | Alias for subscribed_events. | [optional]
**synchronous** | **bool** | Indicates whether the webhook uses synchronous delivery behavior. | [optional] [default to false]
**active** | **bool** | Indicates whether the webhook is active. | [optional] [default to true]
**description** | **string** | Optional description of the webhook. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
