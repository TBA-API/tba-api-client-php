# TBAAPI\v3client\MatchApi

All URIs are relative to *https://www.thebluealliance.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEventMatchTimeseries**](MatchApi.md#getEventMatchTimeseries) | **GET** /event/{event_key}/matches/timeseries | 
[**getEventMatches**](MatchApi.md#getEventMatches) | **GET** /event/{event_key}/matches | 
[**getEventMatchesKeys**](MatchApi.md#getEventMatchesKeys) | **GET** /event/{event_key}/matches/keys | 
[**getEventMatchesSimple**](MatchApi.md#getEventMatchesSimple) | **GET** /event/{event_key}/matches/simple | 
[**getMatch**](MatchApi.md#getMatch) | **GET** /match/{match_key} | 
[**getMatchSimple**](MatchApi.md#getMatchSimple) | **GET** /match/{match_key}/simple | 
[**getMatchTimeseries**](MatchApi.md#getMatchTimeseries) | **GET** /match/{match_key}/timeseries | 
[**getMatchZebra**](MatchApi.md#getMatchZebra) | **GET** /match/{match_key}/zebra_motionworks | 
[**getTeamEventMatches**](MatchApi.md#getTeamEventMatches) | **GET** /team/{team_key}/event/{event_key}/matches | 
[**getTeamEventMatchesKeys**](MatchApi.md#getTeamEventMatchesKeys) | **GET** /team/{team_key}/event/{event_key}/matches/keys | 
[**getTeamEventMatchesSimple**](MatchApi.md#getTeamEventMatchesSimple) | **GET** /team/{team_key}/event/{event_key}/matches/simple | 
[**getTeamMatchesByYear**](MatchApi.md#getTeamMatchesByYear) | **GET** /team/{team_key}/matches/{year} | 
[**getTeamMatchesByYearKeys**](MatchApi.md#getTeamMatchesByYearKeys) | **GET** /team/{team_key}/matches/{year}/keys | 
[**getTeamMatchesByYearSimple**](MatchApi.md#getTeamMatchesByYearSimple) | **GET** /team/{team_key}/matches/{year}/simple | 



## getEventMatchTimeseries

> string[] getEventMatchTimeseries($event_key, $if_modified_since)



Gets an array of Match Keys for the given event key that have timeseries data. Returns an empty array if no matches have timeseries data. *WARNING:* This is *not* official data, and is subject to a significant possibility of error, or missing data. Do not rely on this data for any purpose. In fact, pretend we made it up. *WARNING:* This endpoint and corresponding data models are under *active development* and may change at any time, including in breaking ways.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventMatchTimeseries($event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getEventMatchTimeseries: ', $e->getMessage(), PHP_EOL;
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


## getEventMatches

> \TBAAPI\v3client\TBAAPI\v3client\model\Match[] getEventMatches($event_key, $if_modified_since)



Gets a list of matches for the given event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventMatches($event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getEventMatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_key** | **string**| TBA Event Key, eg &#x60;2016nytr&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBAAPI\v3client\TBAAPI\v3client\model\Match[]**](../Model/Match.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventMatchesKeys

> string[] getEventMatchesKeys($event_key, $if_modified_since)



Gets a list of match keys for the given event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventMatchesKeys($event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getEventMatchesKeys: ', $e->getMessage(), PHP_EOL;
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


## getEventMatchesSimple

> \TBAAPI\v3client\TBAAPI\v3client\model\MatchSimple[] getEventMatchesSimple($event_key, $if_modified_since)



Gets a short-form list of matches for the given event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getEventMatchesSimple($event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getEventMatchesSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_key** | **string**| TBA Event Key, eg &#x60;2016nytr&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBAAPI\v3client\TBAAPI\v3client\model\MatchSimple[]**](../Model/MatchSimple.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMatch

> \TBAAPI\v3client\TBAAPI\v3client\model\Match getMatch($match_key, $if_modified_since)



Gets a `Match` object for the given match key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_key = 'match_key_example'; // string | TBA Match Key, eg `2016nytr_qm1`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getMatch($match_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_key** | **string**| TBA Match Key, eg &#x60;2016nytr_qm1&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBAAPI\v3client\TBAAPI\v3client\model\Match**](../Model/Match.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMatchSimple

> \TBAAPI\v3client\TBAAPI\v3client\model\MatchSimple getMatchSimple($match_key, $if_modified_since)



Gets a short-form `Match` object for the given match key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_key = 'match_key_example'; // string | TBA Match Key, eg `2016nytr_qm1`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getMatchSimple($match_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getMatchSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_key** | **string**| TBA Match Key, eg &#x60;2016nytr_qm1&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBAAPI\v3client\TBAAPI\v3client\model\MatchSimple**](../Model/MatchSimple.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMatchTimeseries

> object[] getMatchTimeseries($match_key, $if_modified_since)



Gets an array of game-specific Match Timeseries objects for the given match key or an empty array if not available. *WARNING:* This is *not* official data, and is subject to a significant possibility of error, or missing data. Do not rely on this data for any purpose. In fact, pretend we made it up. *WARNING:* This endpoint and corresponding data models are under *active development* and may change at any time, including in breaking ways.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_key = 'match_key_example'; // string | TBA Match Key, eg `2016nytr_qm1`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getMatchTimeseries($match_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getMatchTimeseries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_key** | **string**| TBA Match Key, eg &#x60;2016nytr_qm1&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

**object[]**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMatchZebra

> \TBAAPI\v3client\TBAAPI\v3client\model\Zebra getMatchZebra($match_key, $if_modified_since)



Gets Zebra MotionWorks data for a Match for the given match key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_key = 'match_key_example'; // string | TBA Match Key, eg `2016nytr_qm1`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getMatchZebra($match_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getMatchZebra: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_key** | **string**| TBA Match Key, eg &#x60;2016nytr_qm1&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBAAPI\v3client\TBAAPI\v3client\model\Zebra**](../Model/Zebra.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamEventMatches

> \TBAAPI\v3client\TBAAPI\v3client\model\Match[] getTeamEventMatches($team_key, $event_key, $if_modified_since)



Gets a list of matches for the given team and event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventMatches($team_key, $event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getTeamEventMatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **event_key** | **string**| TBA Event Key, eg &#x60;2016nytr&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBAAPI\v3client\TBAAPI\v3client\model\Match[]**](../Model/Match.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamEventMatchesKeys

> string[] getTeamEventMatchesKeys($team_key, $event_key, $if_modified_since)



Gets a list of match keys for matches for the given team and event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventMatchesKeys($team_key, $event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getTeamEventMatchesKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
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


## getTeamEventMatchesSimple

> \TBAAPI\v3client\TBAAPI\v3client\model\Match[] getTeamEventMatchesSimple($team_key, $event_key, $if_modified_since)



Gets a short-form list of matches for the given team and event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventMatchesSimple($team_key, $event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getTeamEventMatchesSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **event_key** | **string**| TBA Event Key, eg &#x60;2016nytr&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBAAPI\v3client\TBAAPI\v3client\model\Match[]**](../Model/Match.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamMatchesByYear

> \TBAAPI\v3client\TBAAPI\v3client\model\Match[] getTeamMatchesByYear($team_key, $year, $if_modified_since)



Gets a list of matches for the given team and year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamMatchesByYear($team_key, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getTeamMatchesByYear: ', $e->getMessage(), PHP_EOL;
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

[**\TBAAPI\v3client\TBAAPI\v3client\model\Match[]**](../Model/Match.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamMatchesByYearKeys

> string[] getTeamMatchesByYearKeys($team_key, $year, $if_modified_since)



Gets a list of match keys for matches for the given team and year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamMatchesByYearKeys($team_key, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getTeamMatchesByYearKeys: ', $e->getMessage(), PHP_EOL;
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

**string[]**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamMatchesByYearSimple

> \TBAAPI\v3client\TBAAPI\v3client\model\MatchSimple[] getTeamMatchesByYearSimple($team_key, $year, $if_modified_since)



Gets a short-form list of matches for the given team and year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBAAPI\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBAAPI\v3client\Api\MatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamMatchesByYearSimple($team_key, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchApi->getTeamMatchesByYearSimple: ', $e->getMessage(), PHP_EOL;
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

[**\TBAAPI\v3client\TBAAPI\v3client\model\MatchSimple[]**](../Model/MatchSimple.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

