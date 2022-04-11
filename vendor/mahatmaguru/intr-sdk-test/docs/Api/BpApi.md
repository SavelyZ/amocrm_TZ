# Introvert\BpApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTemplates**](BpApi.md#getTemplates) | **GET** /bp/getTemplates | Возвращает шаблоны БП2.0
[**getTemplatesByTasksId**](BpApi.md#getTemplatesByTasksId) | **GET** /bp/getTemplatesByTasksId | Возвращает id шаблонов БП2.0 по id задач


# **getTemplates**
> \Introvert\Model\BPTemplate getTemplates()

Возвращает шаблоны БП2.0

Возвращает шаблоны БП2.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();

try {
    $result = $api->bp->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BpApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Introvert\Model\BPTemplate**](../Model/BPTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplatesByTasksId**
> object getTemplatesByTasksId($id)

Возвращает id шаблонов БП2.0 по id задач

Возвращает id шаблонов БП2.0 по id задач

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = array(56); // int[] | id задач

try {
    $result = $api->bp->getTemplatesByTasksId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BpApi->getTemplatesByTasksId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| id задач | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

