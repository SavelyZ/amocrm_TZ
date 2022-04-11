# Introvert\LinksApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAll**](LinksApi.md#getAll) | **POST** /crm/links/list | Метод для получения связей между сущностями аккаунта
[**getLinks**](LinksApi.md#getLinks) | **GET** /crm/links/getLinks | Метод для получения связей между сущностями аккаунта


# **getAll**
> object getAll($body)

Метод для получения связей между сущностями аккаунта



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Links()); // \Introvert\Model\Links[] | Массив объектов запрашиваемых ссылок

try {
    $result = $api->links->getAll($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Links[]**](../Model/Links.md)| Массив объектов запрашиваемых ссылок | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinks**
> object getLinks($from, $from_id, $to, $to_id, $from_catalog_id, $to_catalog_id)

Метод для получения связей между сущностями аккаунта



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$from = "from_example"; // string | Сущность у которой необходимо получить связи (leads, contacts, companies, customers, catalog_elements)
$from_id = array(56); // int[] | ID элемента сущности (можно передавать массив с ID)
$to = "to_example"; // string | Сущность, которая привязана (leads, contacts, companies, customers, catalog_elements)
$to_id = array(56); // int[] | ID элемента сущности которая привязана (можно передавать массив с ID)
$from_catalog_id = "from_catalog_id_example"; // string | ID каталога, связи с которым необходимо получить (Обязательно для заполнения если from='catalog_elements')
$to_catalog_id = "to_catalog_id_example"; // string | ID каталога, элементы которого привязаны к сущности (Обязательно для заполнения если to='catalog_elements')

try {
    $result = $api->links->getLinks($from, $from_id, $to, $to_id, $from_catalog_id, $to_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->getLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Сущность у которой необходимо получить связи (leads, contacts, companies, customers, catalog_elements) |
 **from_id** | [**int[]**](../Model/int.md)| ID элемента сущности (можно передавать массив с ID) |
 **to** | **string**| Сущность, которая привязана (leads, contacts, companies, customers, catalog_elements) | [optional]
 **to_id** | [**int[]**](../Model/int.md)| ID элемента сущности которая привязана (можно передавать массив с ID) | [optional]
 **from_catalog_id** | **string**| ID каталога, связи с которым необходимо получить (Обязательно для заполнения если from&#x3D;&#39;catalog_elements&#39;) | [optional]
 **to_catalog_id** | **string**| ID каталога, элементы которого привязаны к сущности (Обязательно для заполнения если to&#x3D;&#39;catalog_elements&#39;) | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

