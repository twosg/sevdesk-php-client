<?php
/**
 * ContactApiTest
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\phpclient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sevDesk
 *
 * # Getting started  The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace ispserverfarm\sevdesk\phpclient;

use \ispserverfarm\sevdesk\phpclient\Configuration;
use \ispserverfarm\sevdesk\phpclient\ApiClient;
use \ispserverfarm\sevdesk\phpclient\ApiException;
use \ispserverfarm\sevdesk\phpclient\ObjectSerializer;

/**
 * ContactApiTest Class Doc Comment
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\phpclient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for addAddress
     *
     * Add an address.
     *
     */
    public function testAddAddress()
    {
    }

    /**
     * Test case for addContact
     *
     * Create a new contact of type person or company.
     *
     */
    public function testAddContact()
    {
    }

    /**
     * Test case for addContactCommunicationWay
     *
     * Create a new communication way for a contact.
     *
     */
    public function testAddContactCommunicationWay()
    {
    }

    /**
     * Test case for addMobile
     *
     * Add a new mobile number.
     *
     */
    public function testAddMobile()
    {
    }

    /**
     * Test case for addPhone
     *
     * Add a new phone number.
     *
     */
    public function testAddPhone()
    {
    }

    /**
     * Test case for addWebsite
     *
     * Add a new website.
     *
     */
    public function testAddWebsite()
    {
    }

    /**
     * Test case for contactAddEmail
     *
     * Add a new email.
     *
     */
    public function testContactAddEmail()
    {
    }

    /**
     * Test case for contactFactoryCreateContact
     *
     * Create a new contact of type person or company.
     *
     */
    public function testContactFactoryCreateContact()
    {
    }

    /**
     * Test case for contactGetAddresses
     *
     * Get the addresses of a specified contact.
     *
     */
    public function testContactGetAddresses()
    {
    }

    /**
     * Test case for deleteContact
     *
     * Delete an existing contact.
     *
     */
    public function testDeleteContact()
    {
    }

    /**
     * Test case for getContactBillingAddress
     *
     * Get the billing address of a specified contact.
     *
     */
    public function testGetContactBillingAddress()
    {
    }

    /**
     * Test case for getContactBillingEmail
     *
     * Get the billing email of a specified contact.
     *
     */
    public function testGetContactBillingEmail()
    {
    }

    /**
     * Test case for getContactCommunicationWays
     *
     * Get the communication ways of a specified contact.
     *
     */
    public function testGetContactCommunicationWays()
    {
    }

    /**
     * Test case for getContactMainAddress
     *
     * Get the main address of a specified contact.
     *
     */
    public function testGetContactMainAddress()
    {
    }

    /**
     * Test case for getContactMainEmail
     *
     * Get the main email of a specified contact.
     *
     */
    public function testGetContactMainEmail()
    {
    }

    /**
     * Test case for getContactMainMobile
     *
     * Get the main mobile of a specified contact.
     *
     */
    public function testGetContactMainMobile()
    {
    }

    /**
     * Test case for getContactMainPhone
     *
     * Get the main phone of a specified contact.
     *
     */
    public function testGetContactMainPhone()
    {
    }

    /**
     * Test case for getContactMainWebsite
     *
     * Get the main website of a specified contact.
     *
     */
    public function testGetContactMainWebsite()
    {
    }

    /**
     * Test case for getContactRelatedCommunicationWays
     *
     * Get the related communication ways of a specified contact.
     *
     */
    public function testGetContactRelatedCommunicationWays()
    {
    }

    /**
     * Test case for getContactTabsItemCount
     *
     * Get number of all invoices, orders, etc. of a specified contact.
     *
     */
    public function testGetContactTabsItemCount()
    {
    }

    /**
     * Test case for getContacts
     *
     * Get an overview of all contacts.
     *
     */
    public function testGetContacts()
    {
    }

    /**
     * Test case for getNextCustomerNumber
     *
     * Get the next customer number.
     *
     */
    public function testGetNextCustomerNumber()
    {
    }

    /**
     * Test case for updateContact
     *
     * Update an existing contact.
     *
     */
    public function testUpdateContact()
    {
    }
}
