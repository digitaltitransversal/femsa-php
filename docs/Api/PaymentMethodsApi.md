# DigitalFemsa\PaymentMethodsApi

All URIs are relative to https://api.digitalfemsa.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomerPaymentMethods()**](PaymentMethodsApi.md#createCustomerPaymentMethods) | **POST** /customers/{id}/payment_sources | Create Payment Method |
| [**deleteCustomerPaymentMethods()**](PaymentMethodsApi.md#deleteCustomerPaymentMethods) | **DELETE** /customers/{id}/payment_sources/{payment_method_id} | Delete Payment Method |
| [**getCustomerPaymentMethods()**](PaymentMethodsApi.md#getCustomerPaymentMethods) | **GET** /customers/{id}/payment_sources | Get Payment Methods |
| [**updateCustomerPaymentMethods()**](PaymentMethodsApi.md#updateCustomerPaymentMethods) | **PUT** /customers/{id}/payment_sources/{payment_method_id} | Update Payment Method |


## `createCustomerPaymentMethods()`

```php
createCustomerPaymentMethods($id, $create_customer_payment_methods_request, $accept_language, $x_child_company_id): \DigitalFemsa\Model\CreateCustomerPaymentMethodsResponse
```

Create Payment Method

Creates a new payment method for a customer. The payment method is associated with the customer identified by `id`. The accepted fields depend on the payment method `type`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$create_customer_payment_methods_request = {"type":"oxxo_recurrent","expires_at":1553273553}; // \DigitalFemsa\Model\CreateCustomerPaymentMethodsRequest | requested field for customer payment methods
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->createCustomerPaymentMethods($id, $create_customer_payment_methods_request, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->createCustomerPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **create_customer_payment_methods_request** | [**\DigitalFemsa\Model\CreateCustomerPaymentMethodsRequest**](../Model/CreateCustomerPaymentMethodsRequest.md)| requested field for customer payment methods | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\CreateCustomerPaymentMethodsResponse**](../Model/CreateCustomerPaymentMethodsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomerPaymentMethods()`

```php
deleteCustomerPaymentMethods($id, $payment_method_id, $accept_language, $x_child_company_id): \DigitalFemsa\Model\UpdateCustomerPaymentMethodsResponse
```

Delete Payment Method

Deletes a specific payment method of a customer. After deletion, the payment method can no longer be used for future payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$payment_method_id = src_2tQ974hSHcsdeSZHG; // string | Identifier of the payment method
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->deleteCustomerPaymentMethods($id, $payment_method_id, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->deleteCustomerPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **payment_method_id** | **string**| Identifier of the payment method | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\UpdateCustomerPaymentMethodsResponse**](../Model/UpdateCustomerPaymentMethodsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerPaymentMethods()`

```php
getCustomerPaymentMethods($id, $accept_language, $x_child_company_id, $limit, $next, $previous, $search): \DigitalFemsa\Model\GetPaymentMethodResponse
```

Get Payment Methods

Get a list of Payment Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.
$limit = 20; // int | The numbers of items to return, the maximum value is 250
$next = 'next_example'; // string | next page
$previous = 'previous_example'; // string | previous page
$search = 'search_example'; // string | General order search, e.g. by mail, reference etc.

try {
    $result = $apiInstance->getCustomerPaymentMethods($id, $accept_language, $x_child_company_id, $limit, $next, $previous, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getCustomerPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |
| **limit** | **int**| The numbers of items to return, the maximum value is 250 | [optional] [default to 20] |
| **next** | **string**| next page | [optional] |
| **previous** | **string**| previous page | [optional] |
| **search** | **string**| General order search, e.g. by mail, reference etc. | [optional] |

### Return type

[**\DigitalFemsa\Model\GetPaymentMethodResponse**](../Model/GetPaymentMethodResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomerPaymentMethods()`

```php
updateCustomerPaymentMethods($id, $payment_method_id, $update_payment_methods, $accept_language, $x_child_company_id): \DigitalFemsa\Model\UpdateCustomerPaymentMethodsResponse
```

Update Payment Method

Updates a specific payment method of a customer. Use this endpoint to modify the payment method identified by `payment_method_id` for the customer identified by `id`. The fields that can be updated depend on the payment method `type`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$payment_method_id = src_2tQ974hSHcsdeSZHG; // string | Identifier of the payment method
$update_payment_methods = new \DigitalFemsa\Model\UpdatePaymentMethods(); // \DigitalFemsa\Model\UpdatePaymentMethods | Request body for updating a customer payment method.
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->updateCustomerPaymentMethods($id, $payment_method_id, $update_payment_methods, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->updateCustomerPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **payment_method_id** | **string**| Identifier of the payment method | |
| **update_payment_methods** | [**\DigitalFemsa\Model\UpdatePaymentMethods**](../Model/UpdatePaymentMethods.md)| Request body for updating a customer payment method. | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\UpdateCustomerPaymentMethodsResponse**](../Model/UpdateCustomerPaymentMethodsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
