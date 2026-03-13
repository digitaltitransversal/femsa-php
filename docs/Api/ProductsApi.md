# DigitalFemsa\ProductsApi

All URIs are relative to https://api.digitalfemsa.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ordersCreateProduct()**](ProductsApi.md#ordersCreateProduct) | **POST** /orders/{id}/line_items | Create Product |
| [**ordersDeleteProduct()**](ProductsApi.md#ordersDeleteProduct) | **DELETE** /orders/{id}/line_items/{line_item_id} | Delete Product |
| [**ordersUpdateProduct()**](ProductsApi.md#ordersUpdateProduct) | **PUT** /orders/{id}/line_items/{line_item_id} | Update Product |


## `ordersCreateProduct()`

```php
ordersCreateProduct($id, $product, $accept_language, $x_child_company_id): \DigitalFemsa\Model\ProductOrderResponse
```

Create Product

Creates a new product (line item) for an existing order. Use this endpoint to add an additional item to the order after it has been created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$product = new \DigitalFemsa\Model\Product(); // \DigitalFemsa\Model\Product | Fields required to create a new product (line item) for an existing order. This request adds a new item to the order.
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->ordersCreateProduct($id, $product, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->ordersCreateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **product** | [**\DigitalFemsa\Model\Product**](../Model/Product.md)| Fields required to create a new product (line item) for an existing order. This request adds a new item to the order. | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\ProductOrderResponse**](../Model/ProductOrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersDeleteProduct()`

```php
ordersDeleteProduct($id, $line_item_id, $accept_language, $x_child_company_id): \DigitalFemsa\Model\ProductOrderResponse
```

Delete Product

Deletes a product (line item) from an existing order. The API will validate whether the order can be modified before removing the item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$line_item_id = line_item_2tQ8HkkfbauaKP9Ho; // string | identifier
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->ordersDeleteProduct($id, $line_item_id, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->ordersDeleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **line_item_id** | **string**| identifier | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\ProductOrderResponse**](../Model/ProductOrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersUpdateProduct()`

```php
ordersUpdateProduct($id, $line_item_id, $update_product, $accept_language, $x_child_company_id): \DigitalFemsa\Model\ProductOrderResponse
```

Update Product

Updates an existing product (line item) for an existing order. Use this endpoint to modify the details of a specific line item in the order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$line_item_id = line_item_2tQ8HkkfbauaKP9Ho; // string | identifier
$update_product = new \DigitalFemsa\Model\UpdateProduct(); // \DigitalFemsa\Model\UpdateProduct | Fields allowed to update an existing product (line item) in an order. All fields are optional; only the provided fields will be updated.
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->ordersUpdateProduct($id, $line_item_id, $update_product, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->ordersUpdateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **line_item_id** | **string**| identifier | |
| **update_product** | [**\DigitalFemsa\Model\UpdateProduct**](../Model/UpdateProduct.md)| Fields allowed to update an existing product (line item) in an order. All fields are optional; only the provided fields will be updated. | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\ProductOrderResponse**](../Model/ProductOrderResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
