# Introvert\CustomerApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](CustomerApi.md#create) | **POST** /crm/customer/create | Создает покупателей
[**getAll**](CustomerApi.md#getAll) | **GET** /crm/customer/list | Возвращает список покупателей
[**update**](CustomerApi.md#update) | **POST** /crm/customer/update | Обновляет покупателей


# **create**
> object create($body)

Создает покупателей



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Customer()); // \Introvert\Model\Customer[] | Массив объектов создаваемых покупателей

try {
    $result = $api->customer->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Customer[]**](../Model/Customer.md)| Массив объектов создаваемых покупателей | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> object getAll($crm_user_id, $id, $date_type, $date_from, $date_to, $tasks, $next_date_from, $next_date_to, $cf, $count, $offset)

Возвращает список покупателей



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$crm_user_id = array(56); // int[] | фильтр по id ответственного
$id = array(56); // int[] | фильтр по id
$date_type = "date_type_example"; // string | Выбрать элемент по дате создания или редактирования. Тип даты: create или modify
$date_from = "date_from_example"; // string | Дата с которой нужно начинать выборку. В формате ММ/ЧЧ/ГГГГ
$date_to = "date_to_example"; // string | Дата до которой нужно выбирать. В формате ММ/ЧЧ/ГГГГ
$tasks = array("tasks_example"); // string[] | Выбрать элемент по задачам
$next_date_from = "next_date_from_example"; // string | Выбрать элемент по дате след. покупки начиная с данной даты. В формате ММ/ЧЧ/ГГГГ
$next_date_to = "next_date_to_example"; // string | Выбрать элемент по дате след. покупки до данной даты. В формате ММ/ЧЧ/ГГГГ
$cf = "cf_example"; // string | Выбрать элемент по доп. полю [{fieldId: fieldValue}]      *    Для некоторых типов полей нужно передавать добпонительыне параметры      *      *    Дата и день рождения:      *    /from - Дата с которой нужно начинать выборку. В формате ММ/ЧЧ/ГГГГ      *    /to -Дата до которой нужно выбирать. В формате ММ/ЧЧ/ГГГГ      *      *    Мультисписок:      *    нужно передавать массив с параметрами поиска      *      *    Флаг:      *    В качестве значений принимает только 'Y' и 'N'
$count = 56; // int | Количество запрашиваемых элементов
$offset = 56; // int | смещение, относительно которого нужно вернуть элементы

try {
    $result = $api->customer->getAll($crm_user_id, $id, $date_type, $date_from, $date_to, $tasks, $next_date_from, $next_date_to, $cf, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crm_user_id** | [**int[]**](../Model/int.md)| фильтр по id ответственного | [optional]
 **id** | [**int[]**](../Model/int.md)| фильтр по id | [optional]
 **date_type** | **string**| Выбрать элемент по дате создания или редактирования. Тип даты: create или modify | [optional]
 **date_from** | **string**| Дата с которой нужно начинать выборку. В формате ММ/ЧЧ/ГГГГ | [optional]
 **date_to** | **string**| Дата до которой нужно выбирать. В формате ММ/ЧЧ/ГГГГ | [optional]
 **tasks** | [**string[]**](../Model/string.md)| Выбрать элемент по задачам | [optional]
 **next_date_from** | **string**| Выбрать элемент по дате след. покупки начиная с данной даты. В формате ММ/ЧЧ/ГГГГ | [optional]
 **next_date_to** | **string**| Выбрать элемент по дате след. покупки до данной даты. В формате ММ/ЧЧ/ГГГГ | [optional]
 **cf** | **string**| Выбрать элемент по доп. полю [{fieldId: fieldValue}]      *    Для некоторых типов полей нужно передавать добпонительыне параметры      *      *    Дата и день рождения:      *    /from - Дата с которой нужно начинать выборку. В формате ММ/ЧЧ/ГГГГ      *    /to -Дата до которой нужно выбирать. В формате ММ/ЧЧ/ГГГГ      *      *    Мультисписок:      *    нужно передавать массив с параметрами поиска      *      *    Флаг:      *    В качестве значений принимает только &#39;Y&#39; и &#39;N&#39; | [optional]
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

Обновляет покупателей



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = array(new Customer()); // \Introvert\Model\Customer[] | Массив объектов обновляемых покупателей

try {
    $result = $api->customer->update($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Customer[]**](../Model/Customer.md)| Массив объектов обновляемых покупателей | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

