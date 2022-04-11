# Introvert\CompanyApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](CompanyApi.md#create) | **POST** /crm/company/create | Создает компании
[**getAll**](CompanyApi.md#getAll) | **GET** /crm/company/list | Возвращает список компаний
[**getById**](CompanyApi.md#getById) | **GET** /crm/company/{id} | Возвращает компанию по id
[**search**](CompanyApi.md#search) | **GET** /crm/company/search | Поиск компаний
[**update**](CompanyApi.md#update) | **POST** /crm/company/update | Обновляет компании


# **create**
> object create($body)

Создает компании



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Company()); // \Introvert\Model\Company[] | Массив объектов создаваемых компаний

try {
    $result = $api->company->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Company[]**](../Model/Company.md)| Массив объектов создаваемых компаний | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> object getAll($id, $ifmodif, $count, $offset)

Возвращает список компаний



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = array(56); // int[] | фильтр по id
$ifmodif = "ifmodif_example"; // string | фильтр по дате изменения. timestamp или строка в формате 'D, j M Y H:i:s'
$count = 56; // int | Количество запрашиваемых элементов
$offset = 56; // int | смещение, относительно которого нужно вернуть элементы

try {
    $result = $api->company->getAll($id, $ifmodif, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

Возвращает компанию по id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = 56; // int | id компании

try {
    $result = $api->company->getById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id компании |

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

Поиск компаний



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
$type = "company"; // string | Тип контакта: contact, company(по-умолчанию) или all

try {
    $result = $api->company->search($query, $check_mail, $check_phone, $check_field, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| строка поиска |
 **check_mail** | **bool**| проверить email на соответствие запросу | [optional]
 **check_phone** | **bool**| проверить телефон на соответствие запросу | [optional]
 **check_field** | **string**| id или имя поля, которое нужно проверить на соответствие запросу | [optional]
 **type** | **string**| Тип контакта: contact, company(по-умолчанию) или all | [optional] [default to company]

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

Обновляет компании



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Company()); // \Introvert\Model\Company[] | Массив объектов обновляемых компаний

try {
    $result = $api->company->update($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Company[]**](../Model/Company.md)| Массив объектов обновляемых компаний | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

