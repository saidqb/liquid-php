<?php
/**
 * CustomersApi
 * PHP version 5
 *
 * @category Class
 * @package  Liquid\Client
 * @author   http://github.com/liquidregistrar/liquid-php
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/liquidregistrar/liquid-php
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the liquid code generator program.
 * https://github.com/liquidregistrar/liquid-php
 * Do not edit the class manually.
 */

namespace Liquid\Client\Api;

use \Liquid\Client\Configuration;
use \Liquid\Client\ApiClient;
use \Liquid\Client\ApiException;
use \Liquid\Client\ObjectSerializer;

/**
 * CustomersApi Class Doc Comment
 *
 * @category Class
 * @package  Liquid\Client
 * @author   http://github.com/liquidregistrar/liquid-php
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/liquidregistrar/liquid-php
 */
class CustomersApi
{

    /**
     * API Client
     * @var \Liquid\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     * @param \Liquid\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.liqu.id/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     * @return \Liquid\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     * @param \Liquid\Client\ApiClient $apiClient set the API client
     * @return CustomersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }


    /**
     * allCustomer
     *
     * list all customers
     *
     * @param int $limit Limit number of records to be fetched. This should be a value between 10 to 100. (optional)
     * @param int $page_no Page number for which details are to be fetched (optional)
     * @param string $customer_id Customer Id(s) (optional)
     * @param string $email Email address of the Customer (optional)
     * @param string $name Name of Customer (optional)
     * @param string $company Company name of Customer (optional)
     * @param string $city City (optional)
     * @param string $state State (optional)
     * @param string $country_code Country Code (optional)
     * @param string $status Status of Customer. Values can be Active and Suspended. (optional)
     * @param string $creation_date_start UNIX TimeStamp for listing of Customer accounts whose Creation Date is greater than creation_date_start. Value can be yyyy-mm-dd. (optional)
     * @param string $creation_date_end UNIX TimeStamp for listing of Customer accounts whose Creation Date is less than creation_date_end. Value can be yyyy-mm-dd. (optional)
     * @param int $total_receipts_start Total receipts of Customer which is greater than total_receipts_start (optional)
     * @param int $total_receipts_end Total receipts of Customer which is less than total_receipts_end (optional)
     * @return void
     * @throws \Liquid\Client\ApiException on non-2xx response
     */
    public function allCustomer($limit=null, $page_no=null, $customer_id=null, $email=null, $name=null, $company=null, $city=null, $state=null, $country_code=null, $status=null, $creation_date_start=null, $creation_date_end=null, $total_receipts_start=null, $total_receipts_end=null)
    {


        // parse inputs
        $resourcePath = "/customers";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($page_no !== null) {
            $queryParams['page_no'] = $this->apiClient->getSerializer()->toQueryValue($page_no);
        }// query params
        if ($customer_id !== null) {
            $queryParams['customer_id'] = $this->apiClient->getSerializer()->toQueryValue($customer_id);
        }// query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }// query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        if ($company !== null) {
            $queryParams['company'] = $this->apiClient->getSerializer()->toQueryValue($company);
        }// query params
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }// query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
        }// query params
        if ($country_code !== null) {
            $queryParams['country_code'] = $this->apiClient->getSerializer()->toQueryValue($country_code);
        }// query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }// query params
        if ($creation_date_start !== null) {
            $queryParams['creation_date_start'] = $this->apiClient->getSerializer()->toQueryValue($creation_date_start);
        }// query params
        if ($creation_date_end !== null) {
            $queryParams['creation_date_end'] = $this->apiClient->getSerializer()->toQueryValue($creation_date_end);
        }// query params
        if ($total_receipts_start !== null) {
            $queryParams['total_receipts_start'] = $this->apiClient->getSerializer()->toQueryValue($total_receipts_start);
        }// query params
        if ($total_receipts_end !== null) {
            $queryParams['total_receipts_end'] = $this->apiClient->getSerializer()->toQueryValue($total_receipts_end);
        }





        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * createCustomer
     *
     * create a new customer
     *
     * @param string $email Email address of the Customer (required)
     * @param string $name Name of the Customer (required)
     * @param string $password Password for the Customer account. (required)
     * @param string $company Name of the Customer&#39;s company (required)
     * @param string $address_line_1 Address line 1 of the Customer&#39;s address (required)
     * @param string $city City (required)
     * @param string $state State. In case the State information is not available, you need to pass the value for this parameter as Not Applicable. (required)
     * @param string $country_code Country Code as per ISO 3166-1 alpha-2 (required)
     * @param string $zipcode ZIP code (required)
     * @param string $tel_cc_no Telephone number Country Code (required)
     * @param string $tel_no Telephone number (required)
     * @param string $address_line_2 Address line 2 of the Customer&#39;s address (optional)
     * @param string $address_line_3 Address line 3 of the Customer&#39;s address (optional)
     * @param string $alt_tel_cc_no Alternate Telephone number Country Code (optional)
     * @param string $alt_tel_no Alternate Telephone number (optional)
     * @param string $mobile_cc_no Mobile number Country Code (optional)
     * @param string $mobile_no Mobile number (optional)
     * @param string $fax_cc_no Fax number Country Code (optional)
     * @param string $fax_no Fax number (optional)
     * @return void
     * @throws \Liquid\Client\ApiException on non-2xx response
     */
    public function createCustomer($email, $name, $password, $company, $address_line_1, $city, $state, $country_code, $zipcode, $tel_cc_no, $tel_no, $address_line_2=null, $address_line_3=null, $alt_tel_cc_no=null, $alt_tel_no=null, $mobile_cc_no=null, $mobile_no=null, $fax_cc_no=null, $fax_no=null)
    {

        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling createCustomer');
        }
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling createCustomer');
        }
        // verify the required parameter 'password' is set
        if ($password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password when calling createCustomer');
        }
        // verify the required parameter 'company' is set
        if ($company === null) {
            throw new \InvalidArgumentException('Missing the required parameter $company when calling createCustomer');
        }
        // verify the required parameter 'address_line_1' is set
        if ($address_line_1 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_line_1 when calling createCustomer');
        }
        // verify the required parameter 'city' is set
        if ($city === null) {
            throw new \InvalidArgumentException('Missing the required parameter $city when calling createCustomer');
        }
        // verify the required parameter 'state' is set
        if ($state === null) {
            throw new \InvalidArgumentException('Missing the required parameter $state when calling createCustomer');
        }
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling createCustomer');
        }
        // verify the required parameter 'zipcode' is set
        if ($zipcode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $zipcode when calling createCustomer');
        }
        // verify the required parameter 'tel_cc_no' is set
        if ($tel_cc_no === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tel_cc_no when calling createCustomer');
        }
        // verify the required parameter 'tel_no' is set
        if ($tel_no === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tel_no when calling createCustomer');
        }

        // parse inputs
        $resourcePath = "/customers";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());




        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }// form params
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
        }// form params
        if ($password !== null) {
            $formParams['password'] = $this->apiClient->getSerializer()->toFormValue($password);
        }// form params
        if ($company !== null) {
            $formParams['company'] = $this->apiClient->getSerializer()->toFormValue($company);
        }// form params
        if ($address_line_1 !== null) {
            $formParams['address_line_1'] = $this->apiClient->getSerializer()->toFormValue($address_line_1);
        }// form params
        if ($address_line_2 !== null) {
            $formParams['address_line_2'] = $this->apiClient->getSerializer()->toFormValue($address_line_2);
        }// form params
        if ($address_line_3 !== null) {
            $formParams['address_line_3'] = $this->apiClient->getSerializer()->toFormValue($address_line_3);
        }// form params
        if ($city !== null) {
            $formParams['city'] = $this->apiClient->getSerializer()->toFormValue($city);
        }// form params
        if ($state !== null) {
            $formParams['state'] = $this->apiClient->getSerializer()->toFormValue($state);
        }// form params
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }// form params
        if ($zipcode !== null) {
            $formParams['zipcode'] = $this->apiClient->getSerializer()->toFormValue($zipcode);
        }// form params
        if ($tel_cc_no !== null) {
            $formParams['tel_cc_no'] = $this->apiClient->getSerializer()->toFormValue($tel_cc_no);
        }// form params
        if ($tel_no !== null) {
            $formParams['tel_no'] = $this->apiClient->getSerializer()->toFormValue($tel_no);
        }// form params
        if ($alt_tel_cc_no !== null) {
            $formParams['alt_tel_cc_no'] = $this->apiClient->getSerializer()->toFormValue($alt_tel_cc_no);
        }// form params
        if ($alt_tel_no !== null) {
            $formParams['alt_tel_no'] = $this->apiClient->getSerializer()->toFormValue($alt_tel_no);
        }// form params
        if ($mobile_cc_no !== null) {
            $formParams['mobile_cc_no'] = $this->apiClient->getSerializer()->toFormValue($mobile_cc_no);
        }// form params
        if ($mobile_no !== null) {
            $formParams['mobile_no'] = $this->apiClient->getSerializer()->toFormValue($mobile_no);
        }// form params
        if ($fax_cc_no !== null) {
            $formParams['fax_cc_no'] = $this->apiClient->getSerializer()->toFormValue($fax_cc_no);
        }// form params
        if ($fax_no !== null) {
            $formParams['fax_no'] = $this->apiClient->getSerializer()->toFormValue($fax_no);
        }


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * customerPrices
     *
     * list all prices settings for customers
     *
     * @return void
     * @throws \Liquid\Client\ApiException on non-2xx response
     */
    public function customerPrices()
    {


        // parse inputs
        $resourcePath = "/customers/prices";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());







        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * generatesATemporaryPassword
     *
     * Generates a temporary password for the specified Customer.
     *
     * @param int $customer_id Customer Id of the Customer for whom a temporary password needs to be generated. (required)
     * @return void
     * @throws \Liquid\Client\ApiException on non-2xx response
     */
    public function generatesATemporaryPassword($customer_id)
    {

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling generatesATemporaryPassword');
        }

        // parse inputs
        $resourcePath = "/customers/temp_password";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());

        // query params
        if ($customer_id !== null) {
            $queryParams['customer_id'] = $this->apiClient->getSerializer()->toQueryValue($customer_id);
        }





        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * contact
     *
     * retrieve a customer
     *
     * @param int $customer_id Customer Id of the Customer (required)
     * @return \Liquid\Client\Model\Customer
     * @throws \Liquid\Client\ApiException on non-2xx response
     */
    public function contact($customer_id)
    {

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling contact');
        }

        // parse inputs
        $resourcePath = "/customers/{customer_id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());



        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }



        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Liquid\Client\Model\Customer'
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 0:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Liquid\Client\Model\Customer', $httpHeader);
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }

        if (!$response) {
            return null;
        }

        return $this->apiClient->getSerializer()->deserialize($response, '\Liquid\Client\Model\Customer');

    }

    /**
     * updateCustomer
     *
     * update a customer
     *
     * @param int $customer_id Customer Id of the Customer whose details need to be modified (required)
     * @param string $email Email address of the Customer (required)
     * @param string $name Name of the Customer (required)
     * @param string $company Company name of the Customer (required)
     * @param string $address_line_1 Address line 1 of the Customer&#39;s address (required)
     * @param string $city City (required)
     * @param string $state State. In case the State information is not available, you need to pass the value for this parameter as Not Applicable. (required)
     * @param string $country_code Country Code as per ISO 3166-1 alpha-2. &lt;/br&gt; Example : id, us, gb, etc. (required)
     * @param string $zipcode ZIP code (required)
     * @param string $tel_cc_no Telephone number Country Code (required)
     * @param string $tel_no Telephone number (required)
     * @param string $address_line_2 Address line 2 of the Customer&#39;s address (optional)
     * @param string $address_line_3 Address line 3 of the Customer&#39;s address (optional)
     * @param string $alt_tel_cc_no Alternate Telephone Country Code (optional)
     * @param string $alt_tel_no Alternate Telephone number (optional)
     * @param string $mobile_cc_no Mobile number Country Code (optional)
     * @param string $mobile_no Mobile number (optional)
     * @param string $fax_cc_no Fax number Country Code (optional)
     * @param string $fax_no Fax number (optional)
     * @return void
     * @throws \Liquid\Client\ApiException on non-2xx response
     */
    public function updateCustomer($customer_id, $email, $name, $company, $address_line_1, $city, $state, $country_code, $zipcode, $tel_cc_no, $tel_no, $address_line_2=null, $address_line_3=null, $alt_tel_cc_no=null, $alt_tel_no=null, $mobile_cc_no=null, $mobile_no=null, $fax_cc_no=null, $fax_no=null)
    {

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling updateCustomer');
        }
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling updateCustomer');
        }
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling updateCustomer');
        }
        // verify the required parameter 'company' is set
        if ($company === null) {
            throw new \InvalidArgumentException('Missing the required parameter $company when calling updateCustomer');
        }
        // verify the required parameter 'address_line_1' is set
        if ($address_line_1 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_line_1 when calling updateCustomer');
        }
        // verify the required parameter 'city' is set
        if ($city === null) {
            throw new \InvalidArgumentException('Missing the required parameter $city when calling updateCustomer');
        }
        // verify the required parameter 'state' is set
        if ($state === null) {
            throw new \InvalidArgumentException('Missing the required parameter $state when calling updateCustomer');
        }
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling updateCustomer');
        }
        // verify the required parameter 'zipcode' is set
        if ($zipcode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $zipcode when calling updateCustomer');
        }
        // verify the required parameter 'tel_cc_no' is set
        if ($tel_cc_no === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tel_cc_no when calling updateCustomer');
        }
        // verify the required parameter 'tel_no' is set
        if ($tel_no === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tel_no when calling updateCustomer');
        }

        // parse inputs
        $resourcePath = "/customers/{customer_id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());



        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }
        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }// form params
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
        }// form params
        if ($company !== null) {
            $formParams['company'] = $this->apiClient->getSerializer()->toFormValue($company);
        }// form params
        if ($address_line_1 !== null) {
            $formParams['address_line_1'] = $this->apiClient->getSerializer()->toFormValue($address_line_1);
        }// form params
        if ($address_line_2 !== null) {
            $formParams['address_line_2'] = $this->apiClient->getSerializer()->toFormValue($address_line_2);
        }// form params
        if ($address_line_3 !== null) {
            $formParams['address_line_3'] = $this->apiClient->getSerializer()->toFormValue($address_line_3);
        }// form params
        if ($city !== null) {
            $formParams['city'] = $this->apiClient->getSerializer()->toFormValue($city);
        }// form params
        if ($state !== null) {
            $formParams['state'] = $this->apiClient->getSerializer()->toFormValue($state);
        }// form params
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }// form params
        if ($zipcode !== null) {
            $formParams['zipcode'] = $this->apiClient->getSerializer()->toFormValue($zipcode);
        }// form params
        if ($tel_cc_no !== null) {
            $formParams['tel_cc_no'] = $this->apiClient->getSerializer()->toFormValue($tel_cc_no);
        }// form params
        if ($tel_no !== null) {
            $formParams['tel_no'] = $this->apiClient->getSerializer()->toFormValue($tel_no);
        }// form params
        if ($alt_tel_cc_no !== null) {
            $formParams['alt_tel_cc_no'] = $this->apiClient->getSerializer()->toFormValue($alt_tel_cc_no);
        }// form params
        if ($alt_tel_no !== null) {
            $formParams['alt_tel_no'] = $this->apiClient->getSerializer()->toFormValue($alt_tel_no);
        }// form params
        if ($mobile_cc_no !== null) {
            $formParams['mobile_cc_no'] = $this->apiClient->getSerializer()->toFormValue($mobile_cc_no);
        }// form params
        if ($mobile_no !== null) {
            $formParams['mobile_no'] = $this->apiClient->getSerializer()->toFormValue($mobile_no);
        }// form params
        if ($fax_cc_no !== null) {
            $formParams['fax_cc_no'] = $this->apiClient->getSerializer()->toFormValue($fax_cc_no);
        }// form params
        if ($fax_no !== null) {
            $formParams['fax_no'] = $this->apiClient->getSerializer()->toFormValue($fax_no);
        }


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * deleteCustomer
     *
     * delete a customer
     *
     * @param int $customer_id Customer Id of the Customer that you want to delete (required)
     * @return void
     * @throws \Liquid\Client\ApiException on non-2xx response
     */
    public function deleteCustomer($customer_id)
    {

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling deleteCustomer');
        }

        // parse inputs
        $resourcePath = "/customers/{customer_id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());



        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }



        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * nsCustomer
     *
     * retrieve a customer's default ns
     *
     * @param int $customer_id The Customer for whom you want to fetch the default Name Servers. (required)
     * @return void
     * @throws \Liquid\Client\ApiException on non-2xx response
     */
    public function nsCustomer($customer_id)
    {

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling nsCustomer');
        }

        // parse inputs
        $resourcePath = "/customers/{customer_id}/ns/default";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());



        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }



        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

}
