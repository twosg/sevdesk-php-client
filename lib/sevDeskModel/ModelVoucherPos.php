<?php
/**
 * ModelVoucherPos
 *
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk
 * @author   Swaagger Codegen team
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
 * Do not edit the class manually.
 */

namespace ispserverfarm\sevdesk\sevDeskModel;

use \ArrayAccess;

/**
 * ModelVoucherPos Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelVoucherPos implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_VoucherPos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_sev_client' => 'object',
        '_voucher' => '\ispserverfarm\sevdesk\sevDeskModel\ModelVoucher',
        '_accounting_type' => '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType',
        '_estimated_accounting_type' => '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType',
        '_tax_rate' => 'float',
        '_sum' => 'float',
        '_net' => 'bool',
        '_is_asset' => 'bool',
        '_sum_net' => 'float',
        '_sum_tax' => 'float',
        '_sum_gross' => 'float',
        '_sum_net_accounting' => 'float',
        '_sum_tax_accounting' => 'float',
        '_sum_gross_accounting' => 'float',
        '_comment' => 'string',
        '_is_gwg' => 'bool',
        '_catering_tax_rate' => 'float',
        '_catering_tip' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_sev_client' => null,
        '_voucher' => null,
        '_accounting_type' => null,
        '_estimated_accounting_type' => null,
        '_tax_rate' => 'float',
        '_sum' => 'float',
        '_net' => null,
        '_is_asset' => null,
        '_sum_net' => 'float',
        '_sum_tax' => 'float',
        '_sum_gross' => 'float',
        '_sum_net_accounting' => 'float',
        '_sum_tax_accounting' => 'float',
        '_sum_gross_accounting' => 'float',
        '_comment' => null,
        '_is_gwg' => null,
        '_catering_tax_rate' => 'float',
        '_catering_tip' => 'float'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        '_create' => '_create',
        '_update' => '_update',
        '_sev_client' => '_sevClient',
        '_voucher' => '_voucher',
        '_accounting_type' => '_accountingType',
        '_estimated_accounting_type' => '_estimatedAccountingType',
        '_tax_rate' => '_taxRate',
        '_sum' => '_sum',
        '_net' => '_net',
        '_is_asset' => '_isAsset',
        '_sum_net' => '_sumNet',
        '_sum_tax' => '_sumTax',
        '_sum_gross' => '_sumGross',
        '_sum_net_accounting' => '_sumNetAccounting',
        '_sum_tax_accounting' => '_sumTaxAccounting',
        '_sum_gross_accounting' => '_sumGrossAccounting',
        '_comment' => '_comment',
        '_is_gwg' => '_isGwg',
        '_catering_tax_rate' => '_cateringTaxRate',
        '_catering_tip' => '_cateringTip'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_sev_client' => 'setSevClient',
        '_voucher' => 'setVoucher',
        '_accounting_type' => 'setAccountingType',
        '_estimated_accounting_type' => 'setEstimatedAccountingType',
        '_tax_rate' => 'setTaxRate',
        '_sum' => 'setSum',
        '_net' => 'setNet',
        '_is_asset' => 'setIsAsset',
        '_sum_net' => 'setSumNet',
        '_sum_tax' => 'setSumTax',
        '_sum_gross' => 'setSumGross',
        '_sum_net_accounting' => 'setSumNetAccounting',
        '_sum_tax_accounting' => 'setSumTaxAccounting',
        '_sum_gross_accounting' => 'setSumGrossAccounting',
        '_comment' => 'setComment',
        '_is_gwg' => 'setIsGwg',
        '_catering_tax_rate' => 'setCateringTaxRate',
        '_catering_tip' => 'setCateringTip'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_sev_client' => 'getSevClient',
        '_voucher' => 'getVoucher',
        '_accounting_type' => 'getAccountingType',
        '_estimated_accounting_type' => 'getEstimatedAccountingType',
        '_tax_rate' => 'getTaxRate',
        '_sum' => 'getSum',
        '_net' => 'getNet',
        '_is_asset' => 'getIsAsset',
        '_sum_net' => 'getSumNet',
        '_sum_tax' => 'getSumTax',
        '_sum_gross' => 'getSumGross',
        '_sum_net_accounting' => 'getSumNetAccounting',
        '_sum_tax_accounting' => 'getSumTaxAccounting',
        '_sum_gross_accounting' => 'getSumGrossAccounting',
        '_comment' => 'getComment',
        '_is_gwg' => 'getIsGwg',
        '_catering_tax_rate' => 'getCateringTaxRate',
        '_catering_tip' => 'getCateringTip'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['_create'] = isset($data['_create']) ? $data['_create'] : null;
        $this->container['_update'] = isset($data['_update']) ? $data['_update'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_voucher'] = isset($data['_voucher']) ? $data['_voucher'] : null;
        $this->container['_accounting_type'] = isset($data['_accounting_type']) ? $data['_accounting_type'] : null;
        $this->container['_estimated_accounting_type'] = isset($data['_estimated_accounting_type']) ? $data['_estimated_accounting_type'] : null;
        $this->container['_tax_rate'] = isset($data['_tax_rate']) ? $data['_tax_rate'] : null;
        $this->container['_sum'] = isset($data['_sum']) ? $data['_sum'] : null;
        $this->container['_net'] = isset($data['_net']) ? $data['_net'] : null;
        $this->container['_is_asset'] = isset($data['_is_asset']) ? $data['_is_asset'] : null;
        $this->container['_sum_net'] = isset($data['_sum_net']) ? $data['_sum_net'] : 0.0;
        $this->container['_sum_tax'] = isset($data['_sum_tax']) ? $data['_sum_tax'] : 0.0;
        $this->container['_sum_gross'] = isset($data['_sum_gross']) ? $data['_sum_gross'] : 0.0;
        $this->container['_sum_net_accounting'] = isset($data['_sum_net_accounting']) ? $data['_sum_net_accounting'] : 0.0;
        $this->container['_sum_tax_accounting'] = isset($data['_sum_tax_accounting']) ? $data['_sum_tax_accounting'] : 0.0;
        $this->container['_sum_gross_accounting'] = isset($data['_sum_gross_accounting']) ? $data['_sum_gross_accounting'] : 0.0;
        $this->container['_comment'] = isset($data['_comment']) ? $data['_comment'] : null;
        $this->container['_is_gwg'] = isset($data['_is_gwg']) ? $data['_is_gwg'] : null;
        $this->container['_catering_tax_rate'] = isset($data['_catering_tax_rate']) ? $data['_catering_tax_rate'] : null;
        $this->container['_catering_tip'] = isset($data['_catering_tip']) ? $data['_catering_tip'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets _create
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['_create'];
    }

    /**
     * Sets _create
     * @param \DateTime $_create date the voucher positions was created
     * @return $this
     */
    public function setCreate($_create)
    {
        $this->container['_create'] = $_create;

        return $this;
    }

    /**
     * Gets _update
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->container['_update'];
    }

    /**
     * Sets _update
     * @param \DateTime $_update date the voucher position was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _sev_client
     * @return object
     */
    public function getSevClient()
    {
        return $this->container['_sev_client'];
    }

    /**
     * Sets _sev_client
     * @param object $_sev_client sevClient is the unique id every customer has and is used in nearly all operations
     * @return $this
     */
    public function setSevClient($_sev_client)
    {
        $this->container['_sev_client'] = $_sev_client;

        return $this;
    }

    /**
     * Gets _voucher
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelVoucher
     */
    public function getVoucher()
    {
        return $this->container['_voucher'];
    }

    /**
     * Sets _voucher
     * @param \ispserverfarm\sevdesk\sevDeskModel\ModelVoucher $_voucher voucher to which the position belongs
     * @return $this
     */
    public function setVoucher($_voucher)
    {
        $this->container['_voucher'] = $_voucher;

        return $this;
    }

    /**
     * Gets _accounting_type
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType
     */
    public function getAccountingType()
    {
        return $this->container['_accounting_type'];
    }

    /**
     * Sets _accounting_type
     * @param \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType $_accounting_type 
     * @return $this
     */
    public function setAccountingType($_accounting_type)
    {
        $this->container['_accounting_type'] = $_accounting_type;

        return $this;
    }

    /**
     * Gets _estimated_accounting_type
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType
     */
    public function getEstimatedAccountingType()
    {
        return $this->container['_estimated_accounting_type'];
    }

    /**
     * Sets _estimated_accounting_type
     * @param \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType $_estimated_accounting_type 
     * @return $this
     */
    public function setEstimatedAccountingType($_estimated_accounting_type)
    {
        $this->container['_estimated_accounting_type'] = $_estimated_accounting_type;

        return $this;
    }

    /**
     * Gets _tax_rate
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['_tax_rate'];
    }

    /**
     * Sets _tax_rate
     * @param float $_tax_rate 
     * @return $this
     */
    public function setTaxRate($_tax_rate)
    {
        $this->container['_tax_rate'] = $_tax_rate;

        return $this;
    }

    /**
     * Gets _sum
     * @return float
     */
    public function getSum()
    {
        return $this->container['_sum'];
    }

    /**
     * Sets _sum
     * @param float $_sum 
     * @return $this
     */
    public function setSum($_sum)
    {
        $this->container['_sum'] = $_sum;

        return $this;
    }

    /**
     * Gets _net
     * @return bool
     */
    public function getNet()
    {
        return $this->container['_net'];
    }

    /**
     * Sets _net
     * @param bool $_net 
     * @return $this
     */
    public function setNet($_net)
    {
        $this->container['_net'] = $_net;

        return $this;
    }

    /**
     * Gets _is_asset
     * @return bool
     */
    public function getIsAsset()
    {
        return $this->container['_is_asset'];
    }

    /**
     * Sets _is_asset
     * @param bool $_is_asset 
     * @return $this
     */
    public function setIsAsset($_is_asset)
    {
        $this->container['_is_asset'] = $_is_asset;

        return $this;
    }

    /**
     * Gets _sum_net
     * @return float
     */
    public function getSumNet()
    {
        return $this->container['_sum_net'];
    }

    /**
     * Sets _sum_net
     * @param float $_sum_net 
     * @return $this
     */
    public function setSumNet($_sum_net)
    {
        $this->container['_sum_net'] = $_sum_net;

        return $this;
    }

    /**
     * Gets _sum_tax
     * @return float
     */
    public function getSumTax()
    {
        return $this->container['_sum_tax'];
    }

    /**
     * Sets _sum_tax
     * @param float $_sum_tax 
     * @return $this
     */
    public function setSumTax($_sum_tax)
    {
        $this->container['_sum_tax'] = $_sum_tax;

        return $this;
    }

    /**
     * Gets _sum_gross
     * @return float
     */
    public function getSumGross()
    {
        return $this->container['_sum_gross'];
    }

    /**
     * Sets _sum_gross
     * @param float $_sum_gross 
     * @return $this
     */
    public function setSumGross($_sum_gross)
    {
        $this->container['_sum_gross'] = $_sum_gross;

        return $this;
    }

    /**
     * Gets _sum_net_accounting
     * @return float
     */
    public function getSumNetAccounting()
    {
        return $this->container['_sum_net_accounting'];
    }

    /**
     * Sets _sum_net_accounting
     * @param float $_sum_net_accounting 
     * @return $this
     */
    public function setSumNetAccounting($_sum_net_accounting)
    {
        $this->container['_sum_net_accounting'] = $_sum_net_accounting;

        return $this;
    }

    /**
     * Gets _sum_tax_accounting
     * @return float
     */
    public function getSumTaxAccounting()
    {
        return $this->container['_sum_tax_accounting'];
    }

    /**
     * Sets _sum_tax_accounting
     * @param float $_sum_tax_accounting 
     * @return $this
     */
    public function setSumTaxAccounting($_sum_tax_accounting)
    {
        $this->container['_sum_tax_accounting'] = $_sum_tax_accounting;

        return $this;
    }

    /**
     * Gets _sum_gross_accounting
     * @return float
     */
    public function getSumGrossAccounting()
    {
        return $this->container['_sum_gross_accounting'];
    }

    /**
     * Sets _sum_gross_accounting
     * @param float $_sum_gross_accounting 
     * @return $this
     */
    public function setSumGrossAccounting($_sum_gross_accounting)
    {
        $this->container['_sum_gross_accounting'] = $_sum_gross_accounting;

        return $this;
    }

    /**
     * Gets _comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['_comment'];
    }

    /**
     * Sets _comment
     * @param string $_comment 
     * @return $this
     */
    public function setComment($_comment)
    {
        $this->container['_comment'] = $_comment;

        return $this;
    }

    /**
     * Gets _is_gwg
     * @return bool
     */
    public function getIsGwg()
    {
        return $this->container['_is_gwg'];
    }

    /**
     * Sets _is_gwg
     * @param bool $_is_gwg 
     * @return $this
     */
    public function setIsGwg($_is_gwg)
    {
        $this->container['_is_gwg'] = $_is_gwg;

        return $this;
    }

    /**
     * Gets _catering_tax_rate
     * @return float
     */
    public function getCateringTaxRate()
    {
        return $this->container['_catering_tax_rate'];
    }

    /**
     * Sets _catering_tax_rate
     * @param float $_catering_tax_rate 
     * @return $this
     */
    public function setCateringTaxRate($_catering_tax_rate)
    {
        $this->container['_catering_tax_rate'] = $_catering_tax_rate;

        return $this;
    }

    /**
     * Gets _catering_tip
     * @return float
     */
    public function getCateringTip()
    {
        return $this->container['_catering_tip'];
    }

    /**
     * Sets _catering_tip
     * @param float $_catering_tip 
     * @return $this
     */
    public function setCateringTip($_catering_tip)
    {
        $this->container['_catering_tip'] = $_catering_tip;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ispserverfarm\sevdesk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ispserverfarm\sevdesk\ObjectSerializer::sanitizeForSerialization($this));
    }
}


