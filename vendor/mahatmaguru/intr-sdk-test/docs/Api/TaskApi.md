# Introvert\TaskApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](TaskApi.md#create) | **POST** /crm/task/create | Создает задачи
[**getAll**](TaskApi.md#getAll) | **GET** /crm/task/list | Возвращает список задач
[**getById**](TaskApi.md#getById) | **GET** /crm/task/{id} | Возвращает задачу по id
[**update**](TaskApi.md#update) | **POST** /crm/task/update | Обновляет задачи


# **create**
> object create($body)

Создает задачи



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Task()); // \Introvert\Model\Task[] | Массив объектов создаваемых задач

try {
    $result = $api->task->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Task[]**](../Model/Task.md)| Массив объектов создаваемых задач |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> object getAll($id, $element_id, $crm_user_id, $type, $ifmodif)

Возвращает список задач



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = array(56); // int[] | фильтр по id задачи
$element_id = array(56); // int[] | фильтр по id родительского элемента
$crm_user_id = array(56); // int[] | фильтр по id ответственного
$type = "type_example"; // string | contact, lead <s>или company</s>. Получение данных только для контакта или сделки, при отсутствии этого параметра будут получены все данные, в том числе не прикрепленные к объектам
$ifmodif = "ifmodif_example"; // string | фильтр по дате изменения. timestamp или строка в формате 'D, j M Y H:i:s'

try {
    $result = $api->task->getAll($id, $element_id, $crm_user_id, $type, $ifmodif);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| фильтр по id задачи | [optional]
 **element_id** | [**int[]**](../Model/int.md)| фильтр по id родительского элемента | [optional]
 **crm_user_id** | [**int[]**](../Model/int.md)| фильтр по id ответственного | [optional]
 **type** | **string**| contact, lead &lt;s&gt;или company&lt;/s&gt;. Получение данных только для контакта или сделки, при отсутствии этого параметра будут получены все данные, в том числе не прикрепленные к объектам | [optional]
 **ifmodif** | **string**| фильтр по дате изменения. timestamp или строка в формате &#39;D, j M Y H:i:s&#39; | [optional]

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

Возвращает задачу по id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = 56; // int | id задачи

try {
    $result = $api->task->getById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id задачи |

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

Обновляет задачи



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Task()); // \Introvert\Model\Task[] | Массив объектов обновляемых задач

try {
    $result = $api->task->update($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Task[]**](../Model/Task.md)| Массив объектов обновляемых задач |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

