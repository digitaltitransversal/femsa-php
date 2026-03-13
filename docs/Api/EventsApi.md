# DigitalFemsa\EventsApi

All URIs are relative to https://api.digitalfemsa.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEvent()**](EventsApi.md#getEvent) | **GET** /events/{id} | Get Event |
| [**getEvents()**](EventsApi.md#getEvents) | **GET** /events | Get list of Events |
| [**resendEvent()**](EventsApi.md#resendEvent) | **POST** /events/{event_id}/webhook_logs/{webhook_log_id}/resend | Resend Event |


## `getEvent()`

```php
getEvent($id, $accept_language, $x_child_company_id): \DigitalFemsa\Model\EventResponse
```

Get Event

Returns a single event by its ID, including its payload (`data`) and webhook delivery information. The `webhook_status` indicates whether webhook notifications were applicable and their overall status. The [webhook_logs]) array contains delivery attempts (it can be empty when webhook notifications are not applicable or no attempts were created).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->getEvent($id, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvents()`

```php
getEvents($accept_language, $x_child_company_id, $limit, $search, $next, $previous): \DigitalFemsa\Model\GetEventsResponse
```

Get list of Events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.
$limit = 20; // int | The numbers of items to return, the maximum value is 250
$search = 'search_example'; // string | General order search, e.g. by mail, reference etc.
$next = 'next_example'; // string | next page
$previous = 'previous_example'; // string | previous page

try {
    $result = $apiInstance->getEvents($accept_language, $x_child_company_id, $limit, $search, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |
| **limit** | **int**| The numbers of items to return, the maximum value is 250 | [optional] [default to 20] |
| **search** | **string**| General order search, e.g. by mail, reference etc. | [optional] |
| **next** | **string**| next page | [optional] |
| **previous** | **string**| previous page | [optional] |

### Return type

[**\DigitalFemsa\Model\GetEventsResponse**](../Model/GetEventsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendEvent()`

```php
resendEvent($event_id, $webhook_log_id, $accept_language): \DigitalFemsa\Model\EventsResendResponse
```

Resend Event

Triggers a new delivery attempt for a specific webhook log associated with the given event. Use this endpoint to retry failed webhook deliveries (for example, non-2xx responses or timeouts). The response returns the updated webhook log with the latest attempt metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 6463d6e35a4c3e001819e760; // string | event identifier
$webhook_log_id = webhl_2tsv6NzWJHBWCkqGt; // string | webhook log identifier
$accept_language = es; // string | Use for knowing which language to use

try {
    $result = $apiInstance->resendEvent($event_id, $webhook_log_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->resendEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| event identifier | |
| **webhook_log_id** | **string**| webhook log identifier | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |

### Return type

[**\DigitalFemsa\Model\EventsResendResponse**](../Model/EventsResendResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
