# Introvert\ContactApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](ContactApi.md#create) | **POST** /crm/contact/create | Создает контакты
[**getAll**](ContactApi.md#getAll) | **GET** /crm/contact/list | Возвращает список контактов
[**getById**](ContactApi.md#getById) | **GET** /crm/contact/{id} | Возвращает контакт по id
[**search**](ContactApi.md#search) | **GET** /crm/contact/search | Поиск контактов
[**update**](ContactApi.md#update) | **POST** /crm/contact/update | Обновляет контакты


# **create**
> object create($body)

Создает контакты



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Contact()); // \Introvert\Model\Contact[] | Массив объектов создаваемых контактов

try {
    $result = $api->contact->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Contact[]**](../Model/Contact.md)| Массив объектов создаваемых контактов | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> object getAll($crm_user_id, $id, $ifmodif, $count, $offset)

Возвращает список контактов



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$crm_user_id = array(56); // int[] | фильтр по id ответственного
$id = array(56); // int[] | фильтр по id
$ifmodif = "ifmodif_example"; // string | фильтр по дате изменения. timestamp или строка в формате 'D, j M Y H:i:s'
$count = 56; // int | Количество запрашиваемых элементов
$offset = 56; // int | смещение, относительно которого нужно вернуть элементы

try {
    $result = $api->contact->getAll($crm_user_id, $id, $ifmodif, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crm_user_id** | [**int[]**](../Model/int.md)| фильтр по id ответственного | [optional]
 **id** | [**int[]**](../Model/int.md)| фильтр по id | [optional]
 **ifmodif** | **string**| фильтр по дате изменения. timestamp или строка в формате &#39;D, j M Y H:i:s&#39; | [optional]
 **count** | **int**| Количество запрашиваемых элементов | [optional]
 **offset** | **int**| смещение, относительно которого нужно вернуть элементы | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getById**
> object getById($id)

Возвращает контакт по id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = 56; // int | id контакта

try {
    $result = $api->contact->getById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id контакта |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> object search($query, $check_mail, $check_phone, $check_field, $type)

Поиск контактов



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$query = "query_example"; // string | строка поиска
$check_mail = true; // bool | проверить email на соответствие запросу
$check_phone = true; // bool | проверить телефон на соответствие запросу
$check_field = "check_field_example"; // string | id или имя поля, которое нужно проверить на соответствие запросу
$type = "contact"; // string | Тип контакта: contact(по-умолчанию), company или all

try {
    $result = $api->contact->search($query, $check_mail, $check_phone, $check_field, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| строка поиска |
 **check_mail** | **bool**| проверить email на соответствие запросу | [optional] [default to true]
 **check_phone** | **bool**| проверить телефон на соответствие запросу | [optional]
 **check_field** | **string**| id или имя поля, которое нужно проверить на соответствие запросу | [optional]
 **type** | **string**| Тип контакта: contact(по-умолчанию), company или all | [optional] [default to contact]

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

Обновляет контакты



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Contact()); // \Introvert\Model\Contact[] | Массив объектов обновляемых контактов

try {
    $result = $api->contact->update($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Contact[]**](../Model/Contact.md)| Массив объектов обновляемых контактов | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

