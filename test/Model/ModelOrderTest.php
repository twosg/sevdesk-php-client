<?php
/**
 * ModelOrderTest
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
 * The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
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
 * ModelOrderTest Class Doc Comment
 *
 * @category    Class */
// * @description ModelOrder
/**
 * @package     ispserverfarm\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelOrderTest extends \PHPUnit_Framework_TestCase
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
     * Test "ModelOrder"
     */
    public function testModelOrder()
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
     * Test attribute "_oder_number"
     */
    public function testPropertyOderNumber()
    {
    }

    /**
     * Test attribute "_contact"
     */
    public function testPropertyContact()
    {
    }

    /**
     * Test attribute "_order_date"
     */
    public function testPropertyOrderDate()
    {
    }

    /**
     * Test attribute "_status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "_header"
     */
    public function testPropertyHeader()
    {
    }

    /**
     * Test attribute "_head_text"
     */
    public function testPropertyHeadText()
    {
    }

    /**
     * Test attribute "_foot_text"
     */
    public function testPropertyFootText()
    {
    }

    /**
     * Test attribute "_address_name"
     */
    public function testPropertyAddressName()
    {
    }

    /**
     * Test attribute "_address_street"
     */
    public function testPropertyAddressStreet()
    {
    }

    /**
     * Test attribute "_address_zip"
     */
    public function testPropertyAddressZip()
    {
    }

    /**
     * Test attribute "_address_city"
     */
    public function testPropertyAddressCity()
    {
    }

    /**
     * Test attribute "_address_country"
     */
    public function testPropertyAddressCountry()
    {
    }

    /**
     * Test attribute "_create_user"
     */
    public function testPropertyCreateUser()
    {
    }

    /**
     * Test attribute "_sev_client"
     */
    public function testPropertySevClient()
    {
    }

    /**
     * Test attribute "_delivery_terms"
     */
    public function testPropertyDeliveryTerms()
    {
    }

    /**
     * Test attribute "_payment_terms"
     */
    public function testPropertyPaymentTerms()
    {
    }

    /**
     * Test attribute "_origin"
     */
    public function testPropertyOrigin()
    {
    }

    /**
     * Test attribute "_version"
     */
    public function testPropertyVersion()
    {
    }

    /**
     * Test attribute "_small_settlement"
     */
    public function testPropertySmallSettlement()
    {
    }

    /**
     * Test attribute "_contact_person"
     */
    public function testPropertyContactPerson()
    {
    }

    /**
     * Test attribute "_tax_rate"
     */
    public function testPropertyTaxRate()
    {
    }

    /**
     * Test attribute "_tax_set"
     */
    public function testPropertyTaxSet()
    {
    }

    /**
     * Test attribute "_tax_text"
     */
    public function testPropertyTaxText()
    {
    }

    /**
     * Test attribute "_address_parent_name"
     */
    public function testPropertyAddressParentName()
    {
    }

    /**
     * Test attribute "_address_contact_ref"
     */
    public function testPropertyAddressContactRef()
    {
    }

    /**
     * Test attribute "_tax_type"
     */
    public function testPropertyTaxType()
    {
    }

    /**
     * Test attribute "_order_type"
     */
    public function testPropertyOrderType()
    {
    }

    /**
     * Test attribute "_send_date"
     */
    public function testPropertySendDate()
    {
    }

    /**
     * Test attribute "_address_parent_name2"
     */
    public function testPropertyAddressParentName2()
    {
    }

    /**
     * Test attribute "_address_name2"
     */
    public function testPropertyAddressName2()
    {
    }

    /**
     * Test attribute "_address_gender"
     */
    public function testPropertyAddressGender()
    {
    }

    /**
     * Test attribute "_address"
     */
    public function testPropertyAddress()
    {
    }

    /**
     * Test attribute "_currency"
     */
    public function testPropertyCurrency()
    {
    }

    /**
     * Test attribute "_sum_net"
     */
    public function testPropertySumNet()
    {
    }

    /**
     * Test attribute "_sum_tax"
     */
    public function testPropertySumTax()
    {
    }

    /**
     * Test attribute "_sum_gross"
     */
    public function testPropertySumGross()
    {
    }

    /**
     * Test attribute "_sum_discounts"
     */
    public function testPropertySumDiscounts()
    {
    }

    /**
     * Test attribute "_sum_net_foreign_currency"
     */
    public function testPropertySumNetForeignCurrency()
    {
    }

    /**
     * Test attribute "_sum_tax_foreign_currency"
     */
    public function testPropertySumTaxForeignCurrency()
    {
    }

    /**
     * Test attribute "_sum_gross_foreign_currency"
     */
    public function testPropertySumGrossForeignCurrency()
    {
    }

    /**
     * Test attribute "_sum_discounts_foreign_currency"
     */
    public function testPropertySumDiscountsForeignCurrency()
    {
    }

    /**
     * Test attribute "_weight"
     */
    public function testPropertyWeight()
    {
    }

    /**
     * Test attribute "_entry_type"
     */
    public function testPropertyEntryType()
    {
    }

    /**
     * Test attribute "_costumer_internal_note"
     */
    public function testPropertyCostumerInternalNote()
    {
    }

    /**
     * Test attribute "_show_net"
     */
    public function testPropertyShowNet()
    {
    }

    /**
     * Test attribute "_send_type"
     */
    public function testPropertySendType()
    {
    }
}
