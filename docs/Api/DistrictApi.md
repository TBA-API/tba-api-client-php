# TBA-API\v3client\DistrictApi

All URIs are relative to *https://www.thebluealliance.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDistrictEvents**](DistrictApi.md#getDistrictEvents) | **GET** /district/{district_key}/events | 
[**getDistrictEventsKeys**](DistrictApi.md#getDistrictEventsKeys) | **GET** /district/{district_key}/events/keys | 
[**getDistrictEventsSimple**](DistrictApi.md#getDistrictEventsSimple) | **GET** /district/{district_key}/events/simple | 
[**getDistrictRankings**](DistrictApi.md#getDistrictRankings) | **GET** /district/{district_key}/rankings | 
[**getDistrictTeams**](DistrictApi.md#getDistrictTeams) | **GET** /district/{district_key}/teams | 
[**getDistrictTeamsKeys**](DistrictApi.md#getDistrictTeamsKeys) | **GET** /district/{district_key}/teams/keys | 
[**getDistrictTeamsSimple**](DistrictApi.md#getDistrictTeamsSimple) | **GET** /district/{district_key}/teams/simple | 
[**getDistrictsByYear**](DistrictApi.md#getDistrictsByYear) | **GET** /districts/{year} | 
[**getEventDistrictPoints**](DistrictApi.md#getEventDistrictPoints) | **GET** /event/{event_key}/district_points | 
[**getTeamDistricts**](DistrictApi.md#getTeamDistricts) | **GET** /team/{team_key}/districts | 



## getDistrictEvents

> \TBA-API\v3client\TBA-API\v3client\model\Event[] getDistrictEvents($district_key, $if_modified_since)



Gets a list of events in the given district.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$district_key = 'district_key_example'; // string | TBA District Key, eg `2016fim`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getDistrictEvents($district_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getDistrictEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **district_key** | **string**| TBA District Key, eg &#x60;2016fim&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\Event[]**](../Model/Event.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDistrictEventsKeys

> string[] getDistrictEventsKeys($district_key, $if_modified_since)



Gets a list of event keys for events in the given district.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$district_key = 'district_key_example'; // string | TBA District Key, eg `2016fim`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getDistrictEventsKeys($district_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getDistrictEventsKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **district_key** | **string**| TBA District Key, eg &#x60;2016fim&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

**string[]**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDistrictEventsSimple

> \TBA-API\v3client\TBA-API\v3client\model\EventSimple[] getDistrictEventsSimple($district_key, $if_modified_since)



Gets a short-form list of events in the given district.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$district_key = 'district_key_example'; // string | TBA District Key, eg `2016fim`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getDistrictEventsSimple($district_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getDistrictEventsSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **district_key** | **string**| TBA District Key, eg &#x60;2016fim&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\EventSimple[]**](../Model/EventSimple.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDistrictRankings

> \TBA-API\v3client\TBA-API\v3client\model\DistrictRanking[] getDistrictRankings($district_key, $if_modified_since)



Gets a list of team district rankings for the given district.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$district_key = 'district_key_example'; // string | TBA District Key, eg `2016fim`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getDistrictRankings($district_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getDistrictRankings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **district_key** | **string**| TBA District Key, eg &#x60;2016fim&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\DistrictRanking[]**](../Model/DistrictRanking.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDistrictTeams

> \TBA-API\v3client\TBA-API\v3client\model\Team[] getDistrictTeams($district_key, $if_modified_since)



Gets a list of `Team` objects that competed in events in the given district.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$district_key = 'district_key_example'; // string | TBA District Key, eg `2016fim`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getDistrictTeams($district_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getDistrictTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **district_key** | **string**| TBA District Key, eg &#x60;2016fim&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\Team[]**](../Model/Team.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDistrictTeamsKeys

> string[] getDistrictTeamsKeys($district_key, $if_modified_since)



Gets a list of `Team` objects that competed in events in the given district.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$district_key = 'district_key_example'; // string | TBA District Key, eg `2016fim`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getDistrictTeamsKeys($district_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getDistrictTeamsKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **district_key** | **string**| TBA District Key, eg &#x60;2016fim&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

**string[]**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDistrictTeamsSimple

> \TBA-API\v3client\TBA-API\v3client\model\TeamSimple[] getDistrictTeamsSimple($district_key, $if_modified_since)



Gets a short-form list of `Team` objects that competed in events in the given district.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$district_key = 'district_key_example'; // string | TBA District Key, eg `2016fim`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getDistrictTeamsSimple($district_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getDistrictTeamsSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **district_key** | **string**| TBA District Key, eg &#x60;2016fim&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\TeamSimple[]**](../Model/TeamSimple.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDistrictsByYear

> \TBA-API\v3client\TBA-API\v3client\model\DistrictList[] getDistrictsByYear($year, $if_modified_since)



Gets a list of districts and their corresponding district key, for the given year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getDistrictsByYear($year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getDistrictsByYear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Competition Year (or Season). Must be 4 digits. |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\DistrictList[]**](../Model/DistrictList.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventDistrictPoints

> \TBA-API\v3client\TBA-API\v3client\model\EventDistrictPoints getEventDistrictPoints($event_key, $if_modified_since)



Gets a list of team rankings for the Event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventDistrictPoints($event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getEventDistrictPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_key** | **string**| TBA Event Key, eg &#x60;2016nytr&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\EventDistrictPoints**](../Model/EventDistrictPoints.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamDistricts

> \TBA-API\v3client\TBA-API\v3client\model\DistrictList[] getTeamDistricts($team_key, $if_modified_since)



Gets an array of districts representing each year the team was in a district. Will return an empty array if the team was never in a district.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\DistrictApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamDistricts($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictApi->getTeamDistricts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\DistrictList[]**](../Model/DistrictList.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

