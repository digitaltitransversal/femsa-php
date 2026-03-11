# # ApiKeyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the API key |
**object** | **string** | Object name, value is &#39;api_key&#39; |
**active** | **bool** | Indicates if the API key is active |
**livemode** | **bool** | Indicates if the API key is in production |
**role** | **string** | Indicates if the API key is private or public |
**description** | **string** | A name or brief explanation of what this API key is used for | [optional]
**prefix** | **string** | The first few characters of the authentication_token |
**created_at** | **int** | Unix timestamp in seconds of when the API key was created |
**updated_at** | **int** | Unix timestamp in seconds of when the API key was last updated |
**deactivated_at** | **int** | Unix timestamp in seconds of when the API key was deactivated | [optional]
**deleted** | **bool** | Indicates if the API key was deleted | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
