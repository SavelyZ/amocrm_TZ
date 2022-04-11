# Introvert\YadroApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getResponsible**](YadroApi.md#getResponsible) | **GET** /yadro/users/getResponsible | Возвращает ответственного пользователя согласно распределению и сдвигает очередь
[**getUsers**](YadroApi.md#getUsers) | **GET** /yadro/users/list | Возвращает список пользователей ядра
[**getWeight**](YadroApi.md#getWeight) | **GET** /yadro/users/getWeight | Возвращает список весов пользователей ядра
[**setWeight**](YadroApi.md#setWeight) | **POST** /yadro/users/setWeight | Устанавливает веса пользователей ядра


# **getResponsible**
> object getResponsible($weight_type, $group, $amo_group)

Возвращает ответственного пользователя согласно распределению и сдвигает очередь



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$weight_type = "weight_type_example"; // string | тип распределения      * weightall - в общем котле      * weightsite, weightcall, ... - отдельно от других лидов(site, call, ...)
$group = array("group_example"); // string[] | id пользователей (crm), или email сотрудников настроеных в ядре
$amo_group = array("amo_group_example"); // string[] | id групп пользователей (crm)

try {
    $result = $api->yadro->getResponsible($weight_type, $group, $amo_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling YadroApi->getResponsible: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **weight_type** | **string**| тип распределения      * weightall - в общем котле      * weightsite, weightcall, ... - отдельно от других лидов(site, call, ...) |
 **group** | [**string[]**](../Model/string.md)| id пользователей (crm), или email сотрудников настроеных в ядре | [optional]
 **amo_group** | [**string[]**](../Model/string.md)| id групп пользователей (crm) | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Introvert\Model\YadroUser[] getUsers()

Возвращает список пользователей ядра



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();

try {
    $result = $api->yadro->getUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling YadroApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Introvert\Model\YadroUser[]**](../Model/YadroUser.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWeight**
> object getWeight($users)

Возвращает список весов пользователей ядра



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$users = array(56); // int[] | id пользователей (crm)

try {
    $result = $api->yadro->getWeight($users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling YadroApi->getWeight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **users** | [**int[]**](../Model/int.md)| id пользователей (crm) |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setWeight**
> object setWeight($users_weights)

Устанавливает веса пользователей ядра



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$users_weights = new \Introvert\Model\UsersWeights(); // \Introvert\Model\UsersWeights | Обект, где ключ id пользователя      *  {id: {weightType: \"weightValue\"}, ...}

try {
    $result = $api->yadro->setWeight($users_weights);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling YadroApi->setWeight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **users_weights** | [**\Introvert\Model\UsersWeights**](../Model/\Introvert\Model\UsersWeights.md)| Обект, где ключ id пользователя      *  {id: {weightType: \&quot;weightValue\&quot;}, ...} |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

