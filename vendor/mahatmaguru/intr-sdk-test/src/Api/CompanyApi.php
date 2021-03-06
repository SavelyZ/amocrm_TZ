<?php
/**
 * CompanyApi
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
 * CompanyApi Class Doc Comment
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyApi
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
     * @return CompanyApi
     */
    public function setApiClient(\Introvert\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation create
     *
     * ?????????????? ????????????????
     *
     * @param \Introvert\Model\Company[] | array $body ???????????? ???????????????? ?????????????????????? ???????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function create($body = null)
    {
        list($response) = $this->createWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * ?????????????? ????????????????
     *
     * @param \Introvert\Model\Company[] | array $body ???????????? ???????????????? ?????????????????????? ???????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/crm/company/create";
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
        if (isset($body)) {
            $_tempBody = $body;
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
                '/crm/company/create'
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
     * Operation getAll
     *
     * ???????????????????? ???????????? ????????????????
     *
     * @param int[] $id ???????????? ???? id (optional)
     * @param string $ifmodif ???????????? ???? ???????? ??????????????????. timestamp ?????? ???????????? ?? ?????????????? &#39;D, j M Y H:i:s&#39; (optional)
     * @param int $count ???????????????????? ?????????????????????????? ?????????????????? (optional)
     * @param int $offset ????????????????, ???????????????????????? ???????????????? ?????????? ?????????????? ???????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getAll($id = null, $ifmodif = null, $count = null, $offset = null)
    {
        list($response) = $this->getAllWithHttpInfo($id, $ifmodif, $count, $offset);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * ???????????????????? ???????????? ????????????????
     *
     * @param int[] $id ???????????? ???? id (optional)
     * @param string $ifmodif ???????????? ???? ???????? ??????????????????. timestamp ?????? ???????????? ?? ?????????????? &#39;D, j M Y H:i:s&#39; (optional)
     * @param int $count ???????????????????? ?????????????????????????? ?????????????????? (optional)
     * @param int $offset ????????????????, ???????????????????????? ???????????????? ?????????? ?????????????? ???????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($id = null, $ifmodif = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/crm/company/list";
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
        if ($id !== null) {
            $queryParams['id'] = $id; //$this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }

        // query params
        if ($ifmodif !== null) {
            $queryParams['ifmodif'] = $this->apiClient->getSerializer()->toQueryValue($ifmodif);
        }

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
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
                '/crm/company/list'
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
     * Operation getById
     *
     * ???????????????????? ???????????????? ???? id
     *
     * @param int $id id ???????????????? (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getById($id)
    {
        list($response) = $this->getByIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getByIdWithHttpInfo
     *
     * ???????????????????? ???????????????? ???? id
     *
     * @param int $id id ???????????????? (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getByIdWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getById');
        }
        // parse inputs
        $resourcePath = "/crm/company/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
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
                '/crm/company/{id}'
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
     * Operation search
     *
     * ?????????? ????????????????
     *
     * @param string $query ???????????? ???????????? (required)
     * @param bool $check_mail ?????????????????? email ???? ???????????????????????? ?????????????? (optional)
     * @param bool $check_phone ?????????????????? ?????????????? ???? ???????????????????????? ?????????????? (optional)
     * @param string $check_field id ?????? ?????? ????????, ?????????????? ?????????? ?????????????????? ???? ???????????????????????? ?????????????? (optional)
     * @param string $type ?????? ????????????????: contact, company(????-??????????????????) ?????? all (optional, default to company)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function search($query, $check_mail = null, $check_phone = null, $check_field = null, $type = null)
    {
        list($response) = $this->searchWithHttpInfo($query, $check_mail, $check_phone, $check_field, $type);
        return $response;
    }

    /**
     * Operation searchWithHttpInfo
     *
     * ?????????? ????????????????
     *
     * @param string $query ???????????? ???????????? (required)
     * @param bool $check_mail ?????????????????? email ???? ???????????????????????? ?????????????? (optional)
     * @param bool $check_phone ?????????????????? ?????????????? ???? ???????????????????????? ?????????????? (optional)
     * @param string $check_field id ?????? ?????? ????????, ?????????????? ?????????? ?????????????????? ???? ???????????????????????? ?????????????? (optional)
     * @param string $type ?????? ????????????????: contact, company(????-??????????????????) ?????? all (optional, default to company)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchWithHttpInfo($query, $check_mail = null, $check_phone = null, $check_field = null, $type = null)
    {
        // verify the required parameter 'query' is set
        if ($query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query when calling search');
        }
        // parse inputs
        $resourcePath = "/crm/company/search";
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
        if ($query !== null) {
            $queryParams['query'] = $this->apiClient->getSerializer()->toQueryValue($query);
        }

        // query params
        if ($check_mail !== null) {
            $queryParams['check_mail'] = $this->apiClient->getSerializer()->toQueryValue($check_mail);
        }

        // query params
        if ($check_phone !== null) {
            $queryParams['check_phone'] = $this->apiClient->getSerializer()->toQueryValue($check_phone);
        }

        // query params
        if ($check_field !== null) {
            $queryParams['check_field'] = $this->apiClient->getSerializer()->toQueryValue($check_field);
        }

        // query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
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
                '/crm/company/search'
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
     * Operation update
     *
     * ?????????????????? ????????????????
     *
     * @param \Introvert\Model\Company[] | array $body ???????????? ???????????????? ?????????????????????? ???????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function update($body = null)
    {
        list($response) = $this->updateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation updateWithHttpInfo
     *
     * ?????????????????? ????????????????
     *
     * @param \Introvert\Model\Company[] | array $body ???????????? ???????????????? ?????????????????????? ???????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/crm/company/update";
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
        if (isset($body)) {
            $_tempBody = $body;
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
                '/crm/company/update'
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
