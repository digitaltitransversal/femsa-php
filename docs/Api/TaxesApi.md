# DigitalFemsa\TaxesApi

All URIs are relative to https://api.digitalfemsa.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ordersCreateTaxes()**](TaxesApi.md#ordersCreateTaxes) | **POST** /orders/{id}/tax_lines | Create Tax |
| [**ordersDeleteTaxes()**](TaxesApi.md#ordersDeleteTaxes) | **DELETE** /orders/{id}/tax_lines/{tax_id} | Delete Tax |
| [**ordersUpdateTaxes()**](TaxesApi.md#ordersUpdateTaxes) | **PUT** /orders/{id}/tax_lines/{tax_id} | Update Tax |


## `ordersCreateTaxes()`

```php
ordersCreateTaxes($id, $order_tax_request, $accept_language, $x_child_company_id): \DigitalFemsa\Model\UpdateOrderTaxResponse
```

Create Tax

Creates a new tax line for an existing order. The tax line is added to the order identified by `id`. The response returns the created tax line.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$order_tax_request = new \DigitalFemsa\Model\OrderTaxRequest(); // \DigitalFemsa\Model\OrderTaxRequest | Request body for creating a tax line.
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->ordersCreateTaxes($id, $order_tax_request, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->ordersCreateTaxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **order_tax_request** | [**\DigitalFemsa\Model\OrderTaxRequest**](../Model/OrderTaxRequest.md)| Request body for creating a tax line. | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\UpdateOrderTaxResponse**](../Model/UpdateOrderTaxResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersDeleteTaxes()`

```php
ordersDeleteTaxes($id, $tax_id, $accept_language, $x_child_company_id): \DigitalFemsa\Model\UpdateOrderTaxResponse
```

Delete Tax

Deletes an existing tax line from an order. The tax line identified by `tax_id` belongs to the order identified by `id`. The response includes the deleted resource with `deleted: true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$tax_id = tax_lin_2tQ974hSHcsdeSZHG; // string | identifier
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->ordersDeleteTaxes($id, $tax_id, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->ordersDeleteTaxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **tax_id** | **string**| identifier | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\UpdateOrderTaxResponse**](../Model/UpdateOrderTaxResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersUpdateTaxes()`

```php
ordersUpdateTaxes($id, $tax_id, $update_order_tax_request, $accept_language, $x_child_company_id): \DigitalFemsa\Model\UpdateOrderTaxResponse
```

Update Tax

Updates an existing tax line for an order. The tax line identified by `tax_id` belongs to the order identified by `id`. Only the fields provided in the request body are updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$tax_id = tax_lin_2tQ974hSHcsdeSZHG; // string | identifier
$update_order_tax_request = new \DigitalFemsa\Model\UpdateOrderTaxRequest(); // \DigitalFemsa\Model\UpdateOrderTaxRequest | Request body for updating a tax line.
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->ordersUpdateTaxes($id, $tax_id, $update_order_tax_request, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->ordersUpdateTaxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **tax_id** | **string**| identifier | |
| **update_order_tax_request** | [**\DigitalFemsa\Model\UpdateOrderTaxRequest**](../Model/UpdateOrderTaxRequest.md)| Request body for updating a tax line. | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\UpdateOrderTaxResponse**](../Model/UpdateOrderTaxResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
