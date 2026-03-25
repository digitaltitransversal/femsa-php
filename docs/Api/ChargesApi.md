# DigitalFemsa\ChargesApi

All URIs are relative to https://api.digitalfemsa.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharges()**](ChargesApi.md#getCharges) | **GET** /charges | List charges |
| [**ordersCreateCharge()**](ChargesApi.md#ordersCreateCharge) | **POST** /orders/{id}/charges | Create a charge for an order |
| [**updateCharge()**](ChargesApi.md#updateCharge) | **PUT** /charges/{id} | Update a charge |


## `getCharges()`

```php
getCharges($accept_language, $x_child_company_id, $limit, $next, $previous, $search): \DigitalFemsa\Model\GetChargesResponse
```

List charges

Retrieves a paginated list of charges for the authenticated account.  Use the pagination parameters (`limit`, `next_page`, `previous_page`) to navigate through results. Use `search` to filter charges (for example by id or reference).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.
$limit = 20; // int | The numbers of items to return, the maximum value is 250
$next = 'next_example'; // string | next page
$previous = 'previous_example'; // string | previous page
$search = 'search_example'; // string | General order search, e.g. by mail, reference etc.

try {
    $result = $apiInstance->getCharges($accept_language, $x_child_company_id, $limit, $next, $previous, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->getCharges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |
| **limit** | **int**| The numbers of items to return, the maximum value is 250 | [optional] [default to 20] |
| **next** | **string**| next page | [optional] |
| **previous** | **string**| previous page | [optional] |
| **search** | **string**| General order search, e.g. by mail, reference etc. | [optional] |

### Return type

[**\DigitalFemsa\Model\GetChargesResponse**](../Model/GetChargesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersCreateCharge()`

```php
ordersCreateCharge($id, $charge_request, $accept_language, $x_child_company_id): \DigitalFemsa\Model\ChargeOrderResponse
```

Create a charge for an order

Creates a new charge associated with an existing order.  Notes: - The charge is created for the order identified by the path parameter `id`. - Depending on the payment method, the charge may be created in a non-final status (for example, pending). - If the order does not meet the required conditions, the API may respond with **428 Precondition Required**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$charge_request = new \DigitalFemsa\Model\ChargeRequest(); // \DigitalFemsa\Model\ChargeRequest | requested field for a charge
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->ordersCreateCharge($id, $charge_request, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->ordersCreateCharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **charge_request** | [**\DigitalFemsa\Model\ChargeRequest**](../Model/ChargeRequest.md)| requested field for a charge | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\ChargeOrderResponse**](../Model/ChargeOrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCharge()`

```php
updateCharge($id, $charge_update_request, $accept_language, $x_child_company_id): \DigitalFemsa\Model\ChargeResponse
```

Update a charge

Updates an existing charge. Only `reference_id` can be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$charge_update_request = new \DigitalFemsa\Model\ChargeUpdateRequest(); // \DigitalFemsa\Model\ChargeUpdateRequest | requested field for update a charge
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->updateCharge($id, $charge_update_request, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->updateCharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **charge_update_request** | [**\DigitalFemsa\Model\ChargeUpdateRequest**](../Model/ChargeUpdateRequest.md)| requested field for update a charge | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\ChargeResponse**](../Model/ChargeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
