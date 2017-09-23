<?php
/**
 * ModelVatReportTest
 *
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
 * Please update the test case below to test the model.
 */

namespace ispserverfarm\sevdesk\phpclient;

/**
 * ModelVatReportTest Class Doc Comment
 *
 * @category    Class */
// * @description ModelVatReport
/**
 * @package     ispserverfarm\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelVatReportTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
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
     * Test "ModelVatReport"
     */
    public function testModelVatReport()
    {
    }

    /**
     * Test attribute "_create"
     */
    public function testPropertyCreate()
    {
    }

    /**
     * Test attribute "_update"
     */
    public function testPropertyUpdate()
    {
    }

    /**
     * Test attribute "_sev_client"
     */
    public function testPropertySevClient()
    {
    }

    /**
     * Test attribute "_country"
     */
    public function testPropertyCountry()
    {
    }

    /**
     * Test attribute "_report_date"
     */
    public function testPropertyReportDate()
    {
    }

    /**
     * Test attribute "_reporting_year"
     */
    public function testPropertyReportingYear()
    {
    }

    /**
     * Test attribute "_reporting_period"
     */
    public function testPropertyReportingPeriod()
    {
    }

    /**
     * Test attribute "_reporting_period_code"
     */
    public function testPropertyReportingPeriodCode()
    {
    }

    /**
     * Test attribute "_reporting_values"
     */
    public function testPropertyReportingValues()
    {
    }

    /**
     * Test attribute "_test_case"
     */
    public function testPropertyTestCase()
    {
    }

    /**
     * Test attribute "_actual_taxation"
     */
    public function testPropertyActualTaxation()
    {
    }

    /**
     * Test attribute "_corrected"
     */
    public function testPropertyCorrected()
    {
    }

    /**
     * Test attribute "_result_finance_authority"
     */
    public function testPropertyResultFinanceAuthority()
    {
    }

    /**
     * Test attribute "_finance_authority_ticket_number"
     */
    public function testPropertyFinanceAuthorityTicketNumber()
    {
    }
}
