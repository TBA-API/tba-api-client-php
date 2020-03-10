# # EventSimple

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | TBA event key with the format yyyy[EVENT_CODE], where yyyy is the year, and EVENT_CODE is the event code of the event. | 
**name** | **string** | Official name of event on record either provided by FIRST or organizers of offseason event. | 
**event_code** | **string** | Event short code, as provided by FIRST. | 
**event_type** | **int** | Event Type, as defined here: https://github.com/the-blue-alliance/the-blue-alliance/blob/master/consts/event_type.py#L2 | 
**district** | [**\TBA-API\v3client\TBA-API\v3client\model\DistrictList**](DistrictList.md) |  | [optional] 
**city** | **string** | City, town, village, etc. the event is located in. | [optional] 
**state_prov** | **string** | State or Province the event is located in. | [optional] 
**country** | **string** | Country the event is located in. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Event start date in &#x60;yyyy-mm-dd&#x60; format. | 
**end_date** | [**\DateTime**](\DateTime.md) | Event end date in &#x60;yyyy-mm-dd&#x60; format. | 
**year** | **int** | Year the event data is for. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


