# Introvert\TransactionApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](TransactionApi.md#create) | **POST** /crm/transaction/create | Создает транзакции
[**delete**](TransactionApi.md#delete) | **POST** /crm/transaction/delete | Удаляет транзакции
[**getAll**](TransactionApi.md#getAll) | **GET** /crm/transaction/list | Возвращает список транзакций


# **create**
> object create($body)

Создает транзакции



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = new \Introvert\Model\Transaction(); // \Introvert\Model\Transaction | Объект создаваемой транзакции/транзакций

try {
    $result = $api->transaction->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Transaction**](../Model/\Introvert\Model\Transaction.md)| Объект создаваемой транзакции/транзакций | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> object delete($id)

Удаляет транзакции



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = array(56); // int[] | id транзакций

try {
    $result = $api->transaction->delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| id транзакций | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> object getAll($id, $customer_id, $count, $offset)

Возвращает список транзакций



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = array(56); // int[] | фильтр по id
$customer_id = array(56); // int[] | фильтр по id покупателя
$count = 56; // int | Количество запрашиваемых элементов
$offset = 56; // int | смещение, относительно которого нужно вернуть элементы

try {
    $result = $api->transaction->getAll($id, $customer_id, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| фильтр по id | [optional]
 **customer_id** | [**int[]**](../Model/int.md)| фильтр по id покупателя | [optional]
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

