# Links

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Сущность у которой необходимо получить связи (leads, contacts, companies, customers, catalog_elements) | 
**from_id** | **int** | ID элемента сущности (можно передавать массив с ID) | 
**to** | **string** | Сущность, которая привязана (leads, contacts, companies, customers, catalog_elements) | [optional] 
**to_id** | **int** | ID элемента сущности которая привязана (можно передавать массив с ID) | [optional] 
**from_catalog_id** | **int** | ID каталога, связи с которым необходимо получить (Обязательно для заполнения если from&#x3D;&#39;catalog_elements&#39;) | [optional] 
**to_catalog_id** | **int** | ID каталога, элементы которого привязаны к сущности (Обязательно для заполнения если to&#x3D;&#39;catalog_elements&#39;) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


