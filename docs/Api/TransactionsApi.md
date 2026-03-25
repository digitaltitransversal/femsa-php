# DigitalFemsa\TransactionsApi

All URIs are relative to https://api.digitalfemsa.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTransaction()**](TransactionsApi.md#getTransaction) | **GET** /transactions/{id} | Get transaction |
| [**getTransactions()**](TransactionsApi.md#getTransactions) | **GET** /transactions | List transactions |


## `getTransaction()`

```php
getTransaction($id, $accept_language, $x_child_company_id): \DigitalFemsa\Model\TransactionResponse
```

Get transaction

Retrieves the details of a transaction by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6307a60c41de27127515a575; // string | Identifier of the resource
$accept_language = es; // string | Use for knowing which language to use
$x_child_company_id = 6441b6376b60c3a638da80af; // string | In the case of a holding company, the company id of the child company to which will process the request.

try {
    $result = $apiInstance->getTransaction($id, $accept_language, $x_child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the resource | |
| **accept_language** | **string**| Use for knowing which language to use | [optional] [default to &#39;es&#39;] |
| **x_child_company_id** | **string**| In the case of a holding company, the company id of the child company to which will process the request. | [optional] |

### Return type

[**\DigitalFemsa\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactions()`

```php
getTransactions($accept_language, $x_child_company_id, $limit, $next, $previous, $id, $charge_id, $type, $currency): \DigitalFemsa\Model\GetTransactionsResponse
```

List transactions

Returns a paginated list of transactions (ledger movements).  A transaction is a movement that represents the financial impact of payment operations, including amounts, fees, and net values. Transactions can be linked to a charge and may be linked to a transfer (payout) when they are included in a payout.  If you need payout-level information (destination, statement reference/description, payout status), use GET /transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DigitalFemsa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DigitalFemsa\Api\TransactionsApi(
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
$id = 65412a893cd69a0001c25892; // string | id of the object to be retrieved
$charge_id = 65412a893cd69a0001c25892; // string | id of the charge used for filtering
$type = capture; // string | type of the object to be retrieved
$currency = MXN; // string | currency of the object to be retrieved

try {
    $result = $apiInstance->getTransactions($accept_language, $x_child_company_id, $limit, $next, $previous, $id, $charge_id, $type, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactions: ', $e->getMessage(), PHP_EOL;
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
| **id** | **string**| id of the object to be retrieved | [optional] |
| **charge_id** | **string**| id of the charge used for filtering | [optional] |
| **type** | **string**| type of the object to be retrieved | [optional] |
| **currency** | **string**| currency of the object to be retrieved | [optional] |

### Return type

[**\DigitalFemsa\Model\GetTransactionsResponse**](../Model/GetTransactionsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.app-v2.1.0+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
