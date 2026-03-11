# # WebhookResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the webhook. |
**object** | **string** | Object name, which is webhook. |
**url** | **string** | The URL where events will be delivered. |
**status** | **string** | Current delivery status of the webhook. |
**subscribed_events** | **string[]** | List of event types the webhook is subscribed to. |
**synchronous** | **bool** | Indicates whether the webhook uses synchronous delivery behavior. |
**description** | **string** | Optional description of the webhook. | [optional]
**livemode** | **bool** | Indicates whether the webhook is in live mode or test mode. |
**active** | **bool** | Indicates whether the webhook is active. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
