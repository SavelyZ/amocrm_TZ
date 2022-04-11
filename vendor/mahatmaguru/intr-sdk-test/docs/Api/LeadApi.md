# Introvert\LeadApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allLinks**](LeadApi.md#allLinks) | **GET** /crm/lead/links | Возвращает связанные контакты по id
[**create**](LeadApi.md#create) | **POST** /crm/lead/create | Создает сделки
[**getAll**](LeadApi.md#getAll) | **GET** /crm/lead/list | Возвращает список сделок
[**getById**](LeadApi.md#getById) | **GET** /crm/lead/{id} | Возвращает сделку по id
[**links**](LeadApi.md#links) | **GET** /crm/lead/{id}/links | Возвращает связанные контакты по id
[**search**](LeadApi.md#search) | **GET** /crm/lead/search | Поиск сделок
[**update**](LeadApi.md#update) | **POST** /crm/lead/update | Обновляет сделки


# **allLinks**
> object allLinks($id)

Возвращает связанные контакты по id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = array(56); // int[] | id сделки

try {
    $result = $api->lead->allLinks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->allLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| id сделки |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create**
> object create($body)

Создает сделки



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Lead()); // \Introvert\Model\Lead[] | Массив объектов создаваемых сделок

try {
    $result = $api->lead->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Lead[]**](../Model/Lead.md)| Массив объектов создаваемых сделок |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> object getAll($crm_user_id, $status, $id, $ifmodif, $count, $offset)

Возвращает список сделок



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$crm_user_id = array(56); // int[] | фильтр по id ответственного
$status = array(56); // int[] | фильтр по id статуса
$id = array(56); // int[] | фильтр по id
$ifmodif = "ifmodif_example"; // string | фильтр по дате изменения. timestamp или строка в формате 'D, j M Y H:i:s'
$count = 56; // int | Количество запрашиваемых элементов
$offset = 56; // int | смещение, относительно которого нужно вернуть элементы

try {
    $result = $api->lead->getAll($crm_user_id, $status, $id, $ifmodif, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crm_user_id** | [**int[]**](../Model/int.md)| фильтр по id ответственного | [optional]
 **status** | [**int[]**](../Model/int.md)| фильтр по id статуса | [optional]
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

Возвращает сделку по id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = 56; // int | id сделки

try {
    $result = $api->lead->getById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id сделки |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **links**
> object links($id)

Возвращает связанные контакты по id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = 56; // int | id сделки

try {
    $result = $api->lead->links($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->links: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id сделки |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> object search($query, $count, $offset)

Поиск сделок



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$query = "query_example"; // string | строка поиска
$count = 56; // int | Количество запрашиваемых элементов
$offset = 56; // int | смещение, относительно которого нужно вернуть элементы

try {
    $result = $api->lead->search($query, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| строка поиска |
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

# **update**
> object update($body)

Обновляет сделки

Массив объектов обновляемых сделок

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Lead()); // \Introvert\Model\Lead[] | 

try {
    $result = $api->lead->update($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Lead[]**](../Model/Lead.md)|  | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

