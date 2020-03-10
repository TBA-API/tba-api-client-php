# # Team

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | TBA team key with the format &#x60;frcXXXX&#x60; with &#x60;XXXX&#x60; representing the team number. | 
**team_number** | **int** | Official team number issued by FIRST. | 
**nickname** | **string** | Team nickname provided by FIRST. | [optional] 
**name** | **string** | Official long name registered with FIRST. | 
**school_name** | **string** | Name of team school or affilited group registered with FIRST. | [optional] 
**city** | **string** | City of team derived from parsing the address registered with FIRST. | [optional] 
**state_prov** | **string** | State of team derived from parsing the address registered with FIRST. | [optional] 
**country** | **string** | Country of team derived from parsing the address registered with FIRST. | [optional] 
**address** | **string** | Will be NULL, for future development. | [optional] 
**postal_code** | **string** | Postal code from the team address. | [optional] 
**gmaps_place_id** | **string** | Will be NULL, for future development. | [optional] 
**gmaps_url** | **string** | Will be NULL, for future development. | [optional] 
**lat** | **double** | Will be NULL, for future development. | [optional] 
**lng** | **double** | Will be NULL, for future development. | [optional] 
**location_name** | **string** | Will be NULL, for future development. | [optional] 
**website** | **string** | Official website associated with the team. | [optional] 
**rookie_year** | **int** | First year the team officially competed. | [optional] 
**motto** | **string** | Team&#39;s motto as provided by FIRST. This field is deprecated and will return null - will be removed at end-of-season in 2019. | [optional] 
**home_championship** | [**object**](.md) | Location of the team&#39;s home championship each year as a key-value pair. The year (as a string) is the key, and the city is the value. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


