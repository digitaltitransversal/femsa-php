# DigitalFemsa\OrdersApi

All URIs are relative to https://api.digitalfemsa.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOrder()**](OrdersApi.md#cancelOrder) | **POST** /orders/{id}/cancel | Cancel Order |
| [**cancelOrderRefund()**](OrdersApi.md#cancelOrderRefund) | **DELETE** /orders/{id}/refunds/{refund_id} | Cancel Refund |
| [**captureOrder()**](OrdersApi.md#captureOrder) | **POST** /orders/{id}/capture | Capture Order |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /orders | Create order |
| [**getOrderById()**](OrdersApi.md#getOrderById) | **GET** /orders/{id} | Get Order |
| [**getOrders()**](OrdersApi.md#getOrders) | **GET** /orders | Get a list of Orders |
| [**orderRefund()**](OrdersApi.md#orderRefund) | **POST** /orders/{id}/refunds | Refund Order |
| [**updateOrder()**](OrdersApi.md#updateOrder) | **PUT** /orders/{id} | Update order |


## `cancelOrder()`

```php
cancelOrder($id, $accept_language, $x_child_company_id): \DigitalFemsa\Model\OrderResponse
```

Cancel Order

Cancels an existing order. This operation marks the order as cancelled and prevents further processing depending on its current state. If the order cannot be cancelled (for example, due to its status or related charge constraints), the API returns an error response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->cancelOrder($id, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.2.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrderRefund()`

```php
cancelOrderRefund($id, $refund_id, $accept_language, $x_child_company_id): \DigitalFemsa\Model\OrderResponse
```

Cancel Refund

Cancels a refund previously created for an order. This operation is only available when the refund is still cancellable according to its current status and the payment method rules. If the refund cannot be cancelled, the API returns an error response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$refund_id = 6407b5bee1329a000175ba11; // string | refund identifier
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->cancelOrderRefund($id, $refund_id, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelOrderRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **refund_id** | **string**| refund identifier | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.2.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `captureOrder()`

```php
captureOrder($id, $accept_language, $x_child_company_id, $order_capture_request): \DigitalFemsa\Model\OrderResponse
```

Capture Order

Captures (finalizes) an order that has been previously authorized. Use this endpoint to capture a specific amount. The captured amount must be greater than 0 and must comply with the order and charge constraints enforced by the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.
$order_capture_request = new \DigitalFemsa\Model\OrderCaptureRequest(); // \DigitalFemsa\Model\OrderCaptureRequest | Requested fields for capturing an order

try {
    $result = $apiInstance->captureOrder($id, $accept_language, $x_child_company_id, $order_capture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->captureOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |
| **order_capture_request** | [**\DigitalFemsa\Model\OrderCaptureRequest**](../Model/OrderCaptureRequest.md)| Requested fields for capturing an order | [optional] |

### Return type

[**\DigitalFemsa\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.2.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($order_request, $accept_language, $x_child_company_id): \DigitalFemsa\Model\OrderResponse
```

Create order

Creates a new order. Optionally, you can include `charges` to create payment charges for the order during creation. If checkout parameters are provided and a checkout is created/linked, the response may include a `checkout` object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_request = new \DigitalFemsa\Model\OrderRequest(); // \DigitalFemsa\Model\OrderRequest | Fields used to create an Order.  Required: - `currency` - `line_items` - `customer_info`  Customer information is required to successfully create an order in this API, since downstream flows (such as creating charges, checkout configuration, and validating referenced customer sub-documents) require customer context.  Provide `customer_info` in one of the following ways: - Reference an existing customer using [customer_info.customer_id] OR - Provide customer details (at minimum `customer_info.name` and `customer_info.email`) to create the order with customer context.  You can create the order in one of these ways: - Include `charges` to create the order and attempt charging it immediately (only one charge object is allowed). - Include `checkout` to create the order with embedded checkout configuration.  Important validation rules: - `charges` and `checkout` are mutually exclusive in the same request. - If you provide `shipping_contact_id` or `fiscal_entity_id`, you must also provide [customer_info.customer_id] so the API can validate the referenced customer sub-documents.
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->createOrder($order_request, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_request** | [**\DigitalFemsa\Model\OrderRequest**](../Model/OrderRequest.md)| Fields used to create an Order.  Required: - &#x60;currency&#x60; - &#x60;line_items&#x60; - &#x60;customer_info&#x60;  Customer information is required to successfully create an order in this API, since downstream flows (such as creating charges, checkout configuration, and validating referenced customer sub-documents) require customer context.  Provide &#x60;customer_info&#x60; in one of the following ways: - Reference an existing customer using [customer_info.customer_id] OR - Provide customer details (at minimum &#x60;customer_info.name&#x60; and &#x60;customer_info.email&#x60;) to create the order with customer context.  You can create the order in one of these ways: - Include &#x60;charges&#x60; to create the order and attempt charging it immediately (only one charge object is allowed). - Include &#x60;checkout&#x60; to create the order with embedded checkout configuration.  Important validation rules: - &#x60;charges&#x60; and &#x60;checkout&#x60; are mutually exclusive in the same request. - If you provide &#x60;shipping_contact_id&#x60; or &#x60;fiscal_entity_id&#x60;, you must also provide [customer_info.customer_id] so the API can validate the referenced customer sub-documents. | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.2.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderById()`

```php
getOrderById($id, $accept_language, $x_child_company_id): \DigitalFemsa\Model\OrderResponse
```

Get Order

Returns the full details of an Order by its ID. The response follows the standard Order representation, including nested previews (for example `charges`, `line_items`, `shipping_lines`, `tax_lines`, and `discount_lines`) when available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->getOrderById($id, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.2.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($accept_language, $x_child_company_id, $limit, $search, $next, $previous): \DigitalFemsa\Model\GetOrdersResponse
```

Get a list of Orders

Returns a paginated list of orders created in your account. Use pagination parameters to navigate through results, and `search` to filter by supported criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\OrdersApi(
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
    $result = $apiInstance->getOrders($accept_language, $x_child_company_id, $limit, $search, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
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

[**\DigitalFemsa\Model\GetOrdersResponse**](../Model/GetOrdersResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.2.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderRefund()`

```php
orderRefund($id, $order_refund_request, $accept_language, $x_child_company_id): \DigitalFemsa\Model\OrderResponse
```

Refund Order

Creates a refund for an order. This operation is used to refund a previously paid order (fully or partially, depending on the request body). The API will validate the order and its related charges before processing the refund. If the refund cannot be created due to business rules or state, an error response is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$order_refund_request = new \DigitalFemsa\Model\OrderRefundRequest(); // \DigitalFemsa\Model\OrderRefundRequest | requested field for a refund
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->orderRefund($id, $order_refund_request, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **order_refund_request** | [**\DigitalFemsa\Model\OrderRefundRequest**](../Model/OrderRefundRequest.md)| requested field for a refund | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.2.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($id, $order_update_request, $accept_language): \DigitalFemsa\Model\OrderResponse
```

Update order

Updates an existing order by its ID.  Orders are the central resource in the API. Updating an order may also update related order sub-resources when they are included in the request payload, according to server-side validations.  Only fields supported by the API can be modified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$order_update_request = new \DigitalFemsa\Model\OrderUpdateRequest(); // \DigitalFemsa\Model\OrderUpdateRequest | requested field for an order
$accept_language = es; // string | Use for knowing which language to use

try {
    $result = $apiInstance->updateOrder($id, $order_update_request, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **order_update_request** | [**\DigitalFemsa\Model\OrderUpdateRequest**](../Model/OrderUpdateRequest.md)| requested field for an order | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |

### Return type

[**\DigitalFemsa\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.2.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
