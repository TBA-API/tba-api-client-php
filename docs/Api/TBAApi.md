# TBAAPI\v3client\TBAApi

All URIs are relative to *https://www.thebluealliance.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatus**](TBAApi.md#getStatus) | **GET** /status | 



## getStatus

> \TBAAPI\v3client\TBAAPI\v3client\model\APIStatus getStatus($if_modified_since)



Returns API status, and TBA status information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\TBAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getStatus($if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TBAApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBAAPI\v3client\TBAAPI\v3client\model\APIStatus**](../Model/APIStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

