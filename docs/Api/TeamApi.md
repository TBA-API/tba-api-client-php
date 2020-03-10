# TBA-API\v3client\TeamApi

All URIs are relative to *https://www.thebluealliance.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDistrictRankings**](TeamApi.md#getDistrictRankings) | **GET** /district/{district_key}/rankings | 
[**getDistrictTeams**](TeamApi.md#getDistrictTeams) | **GET** /district/{district_key}/teams | 
[**getDistrictTeamsKeys**](TeamApi.md#getDistrictTeamsKeys) | **GET** /district/{district_key}/teams/keys | 
[**getDistrictTeamsSimple**](TeamApi.md#getDistrictTeamsSimple) | **GET** /district/{district_key}/teams/simple | 
[**getEventTeams**](TeamApi.md#getEventTeams) | **GET** /event/{event_key}/teams | 
[**getEventTeamsKeys**](TeamApi.md#getEventTeamsKeys) | **GET** /event/{event_key}/teams/keys | 
[**getEventTeamsSimple**](TeamApi.md#getEventTeamsSimple) | **GET** /event/{event_key}/teams/simple | 
[**getEventTeamsStatuses**](TeamApi.md#getEventTeamsStatuses) | **GET** /event/{event_key}/teams/statuses | 
[**getTeam**](TeamApi.md#getTeam) | **GET** /team/{team_key} | 
[**getTeamAwards**](TeamApi.md#getTeamAwards) | **GET** /team/{team_key}/awards | 
[**getTeamAwardsByYear**](TeamApi.md#getTeamAwardsByYear) | **GET** /team/{team_key}/awards/{year} | 
[**getTeamDistricts**](TeamApi.md#getTeamDistricts) | **GET** /team/{team_key}/districts | 
[**getTeamEventAwards**](TeamApi.md#getTeamEventAwards) | **GET** /team/{team_key}/event/{event_key}/awards | 
[**getTeamEventMatches**](TeamApi.md#getTeamEventMatches) | **GET** /team/{team_key}/event/{event_key}/matches | 
[**getTeamEventMatchesKeys**](TeamApi.md#getTeamEventMatchesKeys) | **GET** /team/{team_key}/event/{event_key}/matches/keys | 
[**getTeamEventMatchesSimple**](TeamApi.md#getTeamEventMatchesSimple) | **GET** /team/{team_key}/event/{event_key}/matches/simple | 
[**getTeamEventStatus**](TeamApi.md#getTeamEventStatus) | **GET** /team/{team_key}/event/{event_key}/status | 
[**getTeamEvents**](TeamApi.md#getTeamEvents) | **GET** /team/{team_key}/events | 
[**getTeamEventsByYear**](TeamApi.md#getTeamEventsByYear) | **GET** /team/{team_key}/events/{year} | 
[**getTeamEventsByYearKeys**](TeamApi.md#getTeamEventsByYearKeys) | **GET** /team/{team_key}/events/{year}/keys | 
[**getTeamEventsByYearSimple**](TeamApi.md#getTeamEventsByYearSimple) | **GET** /team/{team_key}/events/{year}/simple | 
[**getTeamEventsKeys**](TeamApi.md#getTeamEventsKeys) | **GET** /team/{team_key}/events/keys | 
[**getTeamEventsSimple**](TeamApi.md#getTeamEventsSimple) | **GET** /team/{team_key}/events/simple | 
[**getTeamEventsStatusesByYear**](TeamApi.md#getTeamEventsStatusesByYear) | **GET** /team/{team_key}/events/{year}/statuses | 
[**getTeamMatchesByYear**](TeamApi.md#getTeamMatchesByYear) | **GET** /team/{team_key}/matches/{year} | 
[**getTeamMatchesByYearKeys**](TeamApi.md#getTeamMatchesByYearKeys) | **GET** /team/{team_key}/matches/{year}/keys | 
[**getTeamMatchesByYearSimple**](TeamApi.md#getTeamMatchesByYearSimple) | **GET** /team/{team_key}/matches/{year}/simple | 
[**getTeamMediaByTag**](TeamApi.md#getTeamMediaByTag) | **GET** /team/{team_key}/media/tag/{media_tag} | 
[**getTeamMediaByTagYear**](TeamApi.md#getTeamMediaByTagYear) | **GET** /team/{team_key}/media/tag/{media_tag}/{year} | 
[**getTeamMediaByYear**](TeamApi.md#getTeamMediaByYear) | **GET** /team/{team_key}/media/{year} | 
[**getTeamRobots**](TeamApi.md#getTeamRobots) | **GET** /team/{team_key}/robots | 
[**getTeamSimple**](TeamApi.md#getTeamSimple) | **GET** /team/{team_key}/simple | 
[**getTeamSocialMedia**](TeamApi.md#getTeamSocialMedia) | **GET** /team/{team_key}/social_media | 
[**getTeamYearsParticipated**](TeamApi.md#getTeamYearsParticipated) | **GET** /team/{team_key}/years_participated | 
[**getTeams**](TeamApi.md#getTeams) | **GET** /teams/{page_num} | 
[**getTeamsByYear**](TeamApi.md#getTeamsByYear) | **GET** /teams/{year}/{page_num} | 
[**getTeamsByYearKeys**](TeamApi.md#getTeamsByYearKeys) | **GET** /teams/{year}/{page_num}/keys | 
[**getTeamsByYearSimple**](TeamApi.md#getTeamsByYearSimple) | **GET** /teams/{year}/{page_num}/simple | 
[**getTeamsKeys**](TeamApi.md#getTeamsKeys) | **GET** /teams/{page_num}/keys | 
[**getTeamsSimple**](TeamApi.md#getTeamsSimple) | **GET** /teams/{page_num}/simple | 



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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getDistrictRankings: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getDistrictTeams: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getDistrictTeamsKeys: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getDistrictTeamsSimple: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getEventTeams: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getEventTeamsKeys: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getEventTeamsSimple: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getEventTeamsStatuses: ', $e->getMessage(), PHP_EOL;
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


## getTeam

> \TBA-API\v3client\TBA-API\v3client\model\Team getTeam($team_key, $if_modified_since)



Gets a `Team` object for the team referenced by the given key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeam($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\Team**](../Model/Team.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamAwards

> \TBA-API\v3client\TBA-API\v3client\model\Award[] getTeamAwards($team_key, $if_modified_since)



Gets a list of awards the given team has won.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamAwards($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamAwards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\Award[]**](../Model/Award.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamAwardsByYear

> \TBA-API\v3client\TBA-API\v3client\model\Award[] getTeamAwardsByYear($team_key, $year, $if_modified_since)



Gets a list of awards the given team has won in a given year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamAwardsByYear($team_key, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamAwardsByYear: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\Award[]**](../Model/Award.md)

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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamDistricts: ', $e->getMessage(), PHP_EOL;
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


## getTeamEventAwards

> \TBA-API\v3client\TBA-API\v3client\model\Award[] getTeamEventAwards($team_key, $event_key, $if_modified_since)



Gets a list of awards the given team won at the given event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventAwards($team_key, $event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamEventAwards: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\Award[]**](../Model/Award.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamEventMatches

> \TBA-API\v3client\TBA-API\v3client\model\Match[] getTeamEventMatches($team_key, $event_key, $if_modified_since)



Gets a list of matches for the given team and event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamEventMatches: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\Match[]**](../Model/Match.md)

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
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamEventMatchesKeys: ', $e->getMessage(), PHP_EOL;
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

> \TBA-API\v3client\TBA-API\v3client\model\Match[] getTeamEventMatchesSimple($team_key, $event_key, $if_modified_since)



Gets a short-form list of matches for the given team and event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamEventMatchesSimple: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\Match[]**](../Model/Match.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamEventStatus

> \TBA-API\v3client\TBA-API\v3client\model\TeamEventStatus getTeamEventStatus($team_key, $event_key, $if_modified_since)



Gets the competition rank and status of the team at the given event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$event_key = 'event_key_example'; // string | TBA Event Key, eg `2016nytr`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventStatus($team_key, $event_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamEventStatus: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\TeamEventStatus**](../Model/TeamEventStatus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamEvents

> \TBA-API\v3client\TBA-API\v3client\model\Event[] getTeamEvents($team_key, $if_modified_since)



Gets a list of all events this team has competed at.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEvents($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
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


## getTeamEventsByYear

> \TBA-API\v3client\TBA-API\v3client\model\Event[] getTeamEventsByYear($team_key, $year, $if_modified_since)



Gets a list of events this team has competed at in the given year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventsByYear($team_key, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamEventsByYear: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\Event[]**](../Model/Event.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamEventsByYearKeys

> string[] getTeamEventsByYearKeys($team_key, $year, $if_modified_since)



Gets a list of the event keys for events this team has competed at in the given year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventsByYearKeys($team_key, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamEventsByYearKeys: ', $e->getMessage(), PHP_EOL;
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


## getTeamEventsByYearSimple

> \TBA-API\v3client\TBA-API\v3client\model\EventSimple[] getTeamEventsByYearSimple($team_key, $year, $if_modified_since)



Gets a short-form list of events this team has competed at in the given year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventsByYearSimple($team_key, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamEventsByYearSimple: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\EventSimple[]**](../Model/EventSimple.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamEventsKeys

> string[] getTeamEventsKeys($team_key, $if_modified_since)



Gets a list of the event keys for all events this team has competed at.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventsKeys($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamEventsKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
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


## getTeamEventsSimple

> \TBA-API\v3client\TBA-API\v3client\model\EventSimple[] getTeamEventsSimple($team_key, $if_modified_since)



Gets a short-form list of all events this team has competed at.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamEventsSimple($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamEventsSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamEventsStatusesByYear: ', $e->getMessage(), PHP_EOL;
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


## getTeamMatchesByYear

> \TBA-API\v3client\TBA-API\v3client\model\Match[] getTeamMatchesByYear($team_key, $year, $if_modified_since)



Gets a list of matches for the given team and year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamMatchesByYear: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\Match[]**](../Model/Match.md)

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
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamMatchesByYearKeys: ', $e->getMessage(), PHP_EOL;
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

> \TBA-API\v3client\TBA-API\v3client\model\MatchSimple[] getTeamMatchesByYearSimple($team_key, $year, $if_modified_since)



Gets a short-form list of matches for the given team and year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamMatchesByYearSimple: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\MatchSimple[]**](../Model/MatchSimple.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamMediaByTag

> \TBA-API\v3client\TBA-API\v3client\model\Media[] getTeamMediaByTag($team_key, $media_tag, $if_modified_since)



Gets a list of Media (videos / pictures) for the given team and tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$media_tag = 'media_tag_example'; // string | Media Tag which describes the Media.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamMediaByTag($team_key, $media_tag, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamMediaByTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **media_tag** | **string**| Media Tag which describes the Media. |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\Media[]**](../Model/Media.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamMediaByTagYear

> \TBA-API\v3client\TBA-API\v3client\model\Media[] getTeamMediaByTagYear($team_key, $media_tag, $year, $if_modified_since)



Gets a list of Media (videos / pictures) for the given team, tag and year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$media_tag = 'media_tag_example'; // string | Media Tag which describes the Media.
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamMediaByTagYear($team_key, $media_tag, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamMediaByTagYear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **media_tag** | **string**| Media Tag which describes the Media. |
 **year** | **int**| Competition Year (or Season). Must be 4 digits. |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\Media[]**](../Model/Media.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamMediaByYear

> \TBA-API\v3client\TBA-API\v3client\model\Media[] getTeamMediaByYear($team_key, $year, $if_modified_since)



Gets a list of Media (videos / pictures) for the given team and year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$year = 56; // int | Competition Year (or Season). Must be 4 digits.
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamMediaByYear($team_key, $year, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamMediaByYear: ', $e->getMessage(), PHP_EOL;
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

[**\TBA-API\v3client\TBA-API\v3client\model\Media[]**](../Model/Media.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamRobots

> \TBA-API\v3client\TBA-API\v3client\model\TeamRobot[] getTeamRobots($team_key, $if_modified_since)



Gets a list of year and robot name pairs for each year that a robot name was provided. Will return an empty array if the team has never named a robot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamRobots($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamRobots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\TeamRobot[]**](../Model/TeamRobot.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamSimple

> \TBA-API\v3client\TBA-API\v3client\model\TeamSimple getTeamSimple($team_key, $if_modified_since)



Gets a `Team_Simple` object for the team referenced by the given key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamSimple($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\TeamSimple**](../Model/TeamSimple.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamSocialMedia

> \TBA-API\v3client\TBA-API\v3client\model\Media[] getTeamSocialMedia($team_key, $if_modified_since)



Gets a list of Media (social media) for the given team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamSocialMedia($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamSocialMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

[**\TBA-API\v3client\TBA-API\v3client\model\Media[]**](../Model/Media.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamYearsParticipated

> int[] getTeamYearsParticipated($team_key, $if_modified_since)



Gets a list of years in which the team participated in at least one competition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKey('X-TBA-Auth-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TBA-API\v3client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-TBA-Auth-Key', 'Bearer');


$apiInstance = new TBA-API\v3client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_key = 'team_key_example'; // string | TBA Team Key, eg `frc254`
$if_modified_since = 'if_modified_since_example'; // string | Value of the `Last-Modified` header in the most recently cached response by the client.

try {
    $result = $apiInstance->getTeamYearsParticipated($team_key, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamYearsParticipated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_key** | **string**| TBA Team Key, eg &#x60;frc254&#x60; |
 **if_modified_since** | **string**| Value of the &#x60;Last-Modified&#x60; header in the most recently cached response by the client. | [optional]

### Return type

**int[]**

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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeams: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamsByYear: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamsByYearKeys: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamsByYearSimple: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamsKeys: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new TBA-API\v3client\Api\TeamApi(
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
    echo 'Exception when calling TeamApi->getTeamsSimple: ', $e->getMessage(), PHP_EOL;
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

