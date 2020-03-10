# TBA-API\v3client\ListApi

All URIs are relative to *https://www.thebluealliance.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDistrictEvents**](ListApi.md#getDistrictEvents) | **GET** /district/{district_key}/events | 
[**getDistrictEventsKeys**](ListApi.md#getDistrictEventsKeys) | **GET** /district/{district_key}/events/keys | 
[**getDistrictEventsSimple**](ListApi.md#getDistrictEventsSimple) | **GET** /district/{district_key}/events/simple | 
[**getDistrictRankings**](ListApi.md#getDistrictRankings) | **GET** /district/{district_key}/rankings | 
[**getDistrictTeams**](ListApi.md#getDistrictTeams) | **GET** /district/{district_key}/teams | 
[**getDistrictTeamsKeys**](ListApi.md#getDistrictTeamsKeys) | **GET** /district/{district_key}/teams/keys | 
[**getDistrictTeamsSimple**](ListApi.md#getDistrictTeamsSimple) | **GET** /district/{district_key}/teams/simple | 
[**getEventTeams**](ListApi.md#getEventTeams) | **GET** /event/{event_key}/teams | 
[**getEventTeamsKeys**](ListApi.md#getEventTeamsKeys) | **GET** /event/{event_key}/teams/keys | 
[**getEventTeamsSimple**](ListApi.md#getEventTeamsSimple) | **GET** /event/{event_key}/teams/simple | 
[**getEventTeamsStatuses**](ListApi.md#getEventTeamsStatuses) | **GET** /event/{event_key}/teams/statuses | 
[**getEventsByYear**](ListApi.md#getEventsByYear) | **GET** /events/{year} | 
[**getEventsByYearKeys**](ListApi.md#getEventsByYearKeys) | **GET** /events/{year}/keys | 
[**getEventsByYearSimple**](ListApi.md#getEventsByYearSimple) | **GET** /events/{year}/simple | 
[**getTeamEventsStatusesByYear**](ListApi.md#getTeamEventsStatusesByYear) | **GET** /team/{team_key}/events/{year}/statuses | 
[**getTeams**](ListApi.md#getTeams) | **GET** /teams/{page_num} | 
[**getTeamsByYear**](ListApi.md#getTeamsByYear) | **GET** /teams/{year}/{page_num} | 
[**getTeamsByYearKeys**](ListApi.md#getTeamsByYearKeys) | **GET** /teams/{year}/{page_num}/keys | 
[**getTeamsByYearSimple**](ListApi.md#getTeamsByYearSimple) | **GET** /teams/{year}/{page_num}/simple | 
[**getTeamsKeys**](ListApi.md#getTeamsKeys) | **GET** /teams/{page_num}/keys | 
[**getTeamsSimple**](ListApi.md#getTeamsSimple) | **GET** /teams/{page_num}/simple | 



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


$apiInstance = new TBA-API\v3client\Api\ListApi(
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
    echo 'Exception when calling ListApi->getDistrictEvents: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\ListApi(
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
    echo 'Exception when calling ListApi->getDistrictEventsKeys: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\ListApi(
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
    echo 'Exception when calling ListApi->getDistrictEventsSimple: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\ListApi(
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
    echo 'Exception when calling ListApi->getDistrictRankings: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\ListApi(
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
    echo 'Exception when calling ListApi->getDistrictTeams: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\ListApi(
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
    echo 'Exception when calling ListApi->getDistrictTeamsKeys: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\ListApi(
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
    echo 'Exception when calling ListApi->getDistrictTeamsSimple: ', $e->getMessage(), PHP_EOL;
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


## getEventTeams

> \TBA-API\v3client\TBA-API\v3client\model\Team[] getEventTeams($event_key, $if_modified_since)



Gets a list of `Team` objects that competed in the given event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventTeams($event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getEventTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_key** | **string**| TBA Event Key, eg &#x60;2016nytr&#x60; |
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


## getEventTeamsKeys

> string[] getEventTeamsKeys($event_key, $if_modified_since)



Gets a list of `Team` keys that competed in the given event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventTeamsKeys($event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getEventTeamsKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_key** | **string**| TBA Event Key, eg &#x60;2016nytr&#x60; |
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


## getEventTeamsSimple

> \TBA-API\v3client\TBA-API\v3client\model\TeamSimple[] getEventTeamsSimple($event_key, $if_modified_since)



Gets a short-form list of `Team` objects that competed in the given event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventTeamsSimple($event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getEventTeamsSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_key** | **string**| TBA Event Key, eg &#x60;2016nytr&#x60; |
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


## getEventTeamsStatuses

> map[string,\TBA-API\v3client\TBA-API\v3client\model\TeamEventStatus] getEventTeamsStatuses($event_key, $if_modified_since)



Gets a key-value list of the event statuses for teams competing at the given event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventTeamsStatuses($event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getEventTeamsStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_key** | **string**| TBA Event Key, eg &#x60;2016nytr&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**map[string,\TBA-API\v3client\TBA-API\v3client\model\TeamEventStatus]**](../Model/TeamEventStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventsByYear

> \TBA-API\v3client\TBA-API\v3client\model\Event[] getEventsByYear($year, $if_modified_since)



Gets a list of events in the given year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventsByYear($year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getEventsByYear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Competition Year (or Season). Must be 4 digits. |
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


## getEventsByYearKeys

> string[] getEventsByYearKeys($year, $if_modified_since)



Gets a list of event keys in the given year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventsByYearKeys($year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getEventsByYearKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Competition Year (or Season). Must be 4 digits. |
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


## getEventsByYearSimple

> \TBA-API\v3client\TBA-API\v3client\model\EventSimple[] getEventsByYearSimple($year, $if_modified_since)



Gets a short-form list of events in the given year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventsByYearSimple($year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getEventsByYearSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Competition Year (or Season). Must be 4 digits. |
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


## getTeamEventsStatusesByYear

> map[string,\TBA-API\v3client\TBA-API\v3client\model\TeamEventStatus] getTeamEventsStatusesByYear($team_key, $year, $if_modified_since)



Gets a key-value list of the event statuses for events this team has competed at in the given year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventsStatusesByYear($team_key, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTeamEventsStatusesByYear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **year** | **int**| Competition Year (or Season). Must be 4 digits. |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**map[string,\TBA-API\v3client\TBA-API\v3client\model\TeamEventStatus]**](../Model/TeamEventStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeams

> \TBA-API\v3client\TBA-API\v3client\model\Team[] getTeams($page_num, $if_modified_since)



Gets a list of `Team` objects, paginated in groups of 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_num = 56; // int | Page number of results to return, zero-indexed
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeams($page_num, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_num** | **int**| Page number of results to return, zero-indexed |
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


## getTeamsByYear

> \TBA-API\v3client\TBA-API\v3client\model\Team[] getTeamsByYear($year, $page_num, $if_modified_since)



Gets a list of `Team` objects that competed in the given year, paginated in groups of 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$page_num = 56; // int | Page number of results to return, zero-indexed
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamsByYear($year, $page_num, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTeamsByYear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Competition Year (or Season). Must be 4 digits. |
 **page_num** | **int**| Page number of results to return, zero-indexed |
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


## getTeamsByYearKeys

> string[] getTeamsByYearKeys($year, $page_num, $if_modified_since)



Gets a list Team Keys that competed in the given year, paginated in groups of 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$page_num = 56; // int | Page number of results to return, zero-indexed
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamsByYearKeys($year, $page_num, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTeamsByYearKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Competition Year (or Season). Must be 4 digits. |
 **page_num** | **int**| Page number of results to return, zero-indexed |
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


## getTeamsByYearSimple

> \TBA-API\v3client\TBA-API\v3client\model\TeamSimple[] getTeamsByYearSimple($year, $page_num, $if_modified_since)



Gets a list of short form `Team_Simple` objects that competed in the given year, paginated in groups of 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$page_num = 56; // int | Page number of results to return, zero-indexed
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamsByYearSimple($year, $page_num, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTeamsByYearSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Competition Year (or Season). Must be 4 digits. |
 **page_num** | **int**| Page number of results to return, zero-indexed |
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


## getTeamsKeys

> string[] getTeamsKeys($page_num, $if_modified_since)



Gets a list of Team keys, paginated in groups of 500. (Note, each page will not have 500 teams, but will include the teams within that range of 500.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_num = 56; // int | Page number of results to return, zero-indexed
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamsKeys($page_num, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTeamsKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_num** | **int**| Page number of results to return, zero-indexed |
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


## getTeamsSimple

> \TBA-API\v3client\TBA-API\v3client\model\TeamSimple[] getTeamsSimple($page_num, $if_modified_since)



Gets a list of short form `Team_Simple` objects, paginated in groups of 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_num = 56; // int | Page number of results to return, zero-indexed
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamsSimple($page_num, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTeamsSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_num** | **int**| Page number of results to return, zero-indexed |
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

