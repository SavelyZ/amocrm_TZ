<?php
/**
 * YadroApi
 * PHP version 5
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * INTROVERT API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Introvert\Api;

use \Introvert\ApiClient;
use \Introvert\ApiException;
use \Introvert\Configuration;
use \Introvert\ObjectSerializer;

/**
 * YadroApi Class Doc Comment
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class YadroApi
{
    /**
     * API Client
     *
     * @var \Introvert\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Introvert\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Introvert\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://test.api.yadrocrm.ru/tmp');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Introvert\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Introvert\ApiClient $apiClient set the API client
     *
     * @return YadroApi
     */
    public function setApiClient(\Introvert\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getResponsible
     *
     * ???????????????????? ???????????????????????????? ???????????????????????? ???????????????? ?????????????????????????? ?? ???????????????? ??????????????
     *
     * @param string $weight_type ?????? ??????????????????????????      * weightall - ?? ?????????? ??????????      * weightsite, weightcall, ... - ???????????????? ???? ???????????? ??????????(site, call, ...) (required)
     * @param string[] $group id ?????????????????????????? (crm), ?????? email ?????????????????????? ???????????????????? ?? ???????? (optional)
     * @param string[] $amo_group id ?????????? ?????????????????????????? (crm) (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getResponsible($weight_type, $group = null, $amo_group = null)
    {
        list($response) = $this->getResponsibleWithHttpInfo($weight_type, $group, $amo_group);
        return $response;
    }

    /**
     * Operation getResponsibleWithHttpInfo
     *
     * ???????????????????? ???????????????????????????? ???????????????????????? ???????????????? ?????????????????????????? ?? ???????????????? ??????????????
     *
     * @param string $weight_type ?????? ??????????????????????????      * weightall - ?? ?????????? ??????????      * weightsite, weightcall, ... - ???????????????? ???? ???????????? ??????????(site, call, ...) (required)
     * @param string[] $group id ?????????????????????????? (crm), ?????? email ?????????????????????? ???????????????????? ?? ???????? (optional)
     * @param string[] $amo_group id ?????????? ?????????????????????????? (crm) (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResponsibleWithHttpInfo($weight_type, $group = null, $amo_group = null)
    {
        // verify the required parameter 'weight_type' is set
        if ($weight_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $weight_type when calling getResponsible');
        }
        // parse inputs
        $resourcePath = "/yadro/users/getResponsible";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($weight_type !== null) {
            $queryParams['weight_type'] = $this->apiClient->getSerializer()->toQueryValue($weight_type);
        }

        // query params
        if ($group !== null) {
            $queryParams['group'] = $group; //$this->apiClient->getSerializer()->serializeCollection($group, 'multi', true);
        }

        // query params
        if ($amo_group !== null) {
            $queryParams['amo_group'] = $amo_group; //$this->apiClient->getSerializer()->serializeCollection($amo_group, 'multi', true);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/yadro/users/getResponsible'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUsers
     *
     * ???????????????????? ???????????? ?????????????????????????? ????????
     *
     * @throws \Introvert\ApiException on non-2xx response
     * @return \Introvert\Model\YadroUser[] | array
     */
    public function getUsers()
    {
        list($response) = $this->getUsersWithHttpInfo();
        return $response;
    }

    /**
     * Operation getUsersWithHttpInfo
     *
     * ???????????????????? ???????????? ?????????????????????????? ????????
     *
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of \Introvert\Model\YadroUser[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsersWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/yadro/users/list";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/yadro/users/list'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getWeight
     *
     * ???????????????????? ???????????? ?????????? ?????????????????????????? ????????
     *
     * @param int[] $users id ?????????????????????????? (crm) (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getWeight($users)
    {
        list($response) = $this->getWeightWithHttpInfo($users);
        return $response;
    }

    /**
     * Operation getWeightWithHttpInfo
     *
     * ???????????????????? ???????????? ?????????? ?????????????????????????? ????????
     *
     * @param int[] $users id ?????????????????????????? (crm) (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWeightWithHttpInfo($users)
    {
        // verify the required parameter 'users' is set
        if ($users === null) {
            throw new \InvalidArgumentException('Missing the required parameter $users when calling getWeight');
        }
        // parse inputs
        $resourcePath = "/yadro/users/getWeight";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($users !== null) {
            $queryParams['users'] = $users; //$this->apiClient->getSerializer()->serializeCollection($users, 'multi', true);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/yadro/users/getWeight'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setWeight
     *
     * ?????????????????????????? ???????? ?????????????????????????? ????????
     *
     * @param \Introvert\Model\UsersWeights | array $users_weights ??????????, ?????? ???????? id ????????????????????????      *  {id: {weightType: \&quot;weightValue\&quot;}, ...} (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function setWeight($users_weights)
    {
        list($response) = $this->setWeightWithHttpInfo($users_weights);
        return $response;
    }

    /**
     * Operation setWeightWithHttpInfo
     *
     * ?????????????????????????? ???????? ?????????????????????????? ????????
     *
     * @param \Introvert\Model\UsersWeights | array $users_weights ??????????, ?????? ???????? id ????????????????????????      *  {id: {weightType: \&quot;weightValue\&quot;}, ...} (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function setWeightWithHttpInfo($users_weights)
    {
        // verify the required parameter 'users_weights' is set
        if ($users_weights === null) {
            throw new \InvalidArgumentException('Missing the required parameter $users_weights when calling setWeight');
        }
        // parse inputs
        $resourcePath = "/yadro/users/setWeight";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($users_weights)) {
            $_tempBody = $users_weights;
        }


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/yadro/users/setWeight'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
