<?php
/**
 * SmsApi
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
 * SmsApi Class Doc Comment
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmsApi
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
     * @return SmsApi
     */
    public function setApiClient(\Introvert\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getDPTemplates
     *
     * ???????????????????? ?????????????? sms ?????? ???????????????? ??????????????
     *
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getDPTemplates()
    {
        list($response) = $this->getDPTemplatesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getDPTemplatesWithHttpInfo
     *
     * ???????????????????? ?????????????? sms ?????? ???????????????? ??????????????
     *
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDPTemplatesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/sms/getDPTemplates";
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
                '/sms/getDPTemplates'
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
     * Operation getTemplates
     *
     * ???????????????????? ?????????????? sms
     *
     * @throws \Introvert\ApiException on non-2xx response
     * @return \Introvert\Model\SmsTemplate | array
     */
    public function getTemplates()
    {
        list($response) = $this->getTemplatesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getTemplatesWithHttpInfo
     *
     * ???????????????????? ?????????????? sms
     *
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of \Introvert\Model\SmsTemplate, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplatesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/sms/getTemplates";
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
                '\Introvert\Model\SmsTemplate',
                '/sms/getTemplates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Introvert\Model\SmsTemplate', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Introvert\Model\SmsTemplate', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation send
     *
     * ???????????????????? sms
     *
     * @param \Introvert\Model\Sms | array $body ???????????? ?????????????????????????? sms (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function send($body)
    {
        list($response) = $this->sendWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation sendWithHttpInfo
     *
     * ???????????????????? sms
     *
     * @param \Introvert\Model\Sms | array $body ???????????? ?????????????????????????? sms (required)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling send');
        }
        // parse inputs
        $resourcePath = "/sms";
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
                '/sms'
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
