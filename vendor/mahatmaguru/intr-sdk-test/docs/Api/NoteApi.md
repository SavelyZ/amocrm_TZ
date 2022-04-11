# Introvert\NoteApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](NoteApi.md#create) | **POST** /crm/note/create | Создает примечания
[**createCall**](NoteApi.md#createCall) | **POST** /crm/note/createCall | Создает примечание-звонок
[**getAll**](NoteApi.md#getAll) | **GET** /crm/note/list | Возвращает список примечаний
[**getById**](NoteApi.md#getById) | **GET** /crm/note/{id} | Возвращает примечание по id
[**update**](NoteApi.md#update) | **POST** /crm/note/update | Обновляет примечания


# **create**
> object create($body)

Создает примечания



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Note()); // \Introvert\Model\Note[] | Массив объектов создаваемых примечаний

try {
    $result = $api->note->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Note[]**](../Model/Note.md)| Массив объектов создаваемых примечаний | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCall**
> object createCall($body)

Создает примечание-звонок



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = new \Introvert\Model\NoteCall(); // \Introvert\Model\NoteCall | Объект создаваемого примечания-звонка

try {
    $result = $api->note->createCall($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->createCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\NoteCall**](../Model/\Introvert\Model\NoteCall.md)| Объект создаваемого примечания-звонка | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> object getAll($element_id, $element_type, $ifmodif, $note_type, $id)

Возвращает список примечаний



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$element_id = array(56); // int[] | id элемента, к которому привязано примечание
$element_type = 2; // int | тип элемента, 2 (lead), 1 (contact), 3 (company). По умолчанию 2 (lead)
$ifmodif = "ifmodif_example"; // string | фильтр по дате изменения. timestamp или строка в формате 'D, j M Y H:i:s'
$note_type = "note_type_example"; // string | 
$id = array(56); // int[] | id примечания

try {
    $result = $api->note->getAll($element_id, $element_type, $ifmodif, $note_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **element_id** | [**int[]**](../Model/int.md)| id элемента, к которому привязано примечание | [optional]
 **element_type** | **int**| тип элемента, 2 (lead), 1 (contact), 3 (company). По умолчанию 2 (lead) | [optional] [default to 2]
 **ifmodif** | **string**| фильтр по дате изменения. timestamp или строка в формате &#39;D, j M Y H:i:s&#39; | [optional]
 **note_type** | **string**|  | [optional]
 **id** | [**int[]**](../Model/int.md)| id примечания | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getById**
> object getById($id, $element_type)

Возвращает примечание по id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = 56; // int | id примечания
$element_type = 2; // int | 2 (lead), 1 (contact). По умолчанию 2 (lead)

try {
    $result = $api->note->getById($id, $element_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->getById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id примечания |
 **element_type** | **int**| 2 (lead), 1 (contact). По умолчанию 2 (lead) | [optional] [default to 2]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> object update($body)

Обновляет примечания



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Note()); // \Introvert\Model\Note[] | Массив объектов обновляемых примечаний

try {
    $result = $api->note->update($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Note[]**](../Model/Note.md)| Массив объектов обновляемых примечаний | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

