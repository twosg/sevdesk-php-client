<?php
/**
 * ModelAssetPos
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
 * ModelAssetPos Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelAssetPos implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_AssetPos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_sev_client' => 'object',
        '_asset' => 'object',
        '_year' => 'int',
        '_depreciation_amount' => 'float',
        '_residual_value' => 'float',
        '_month' => 'int',
        '_enshrined' => 'bool',
        '_correction' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_sev_client' => null,
        '_asset' => null,
        '_year' => null,
        '_depreciation_amount' => 'float',
        '_residual_value' => 'float',
        '_month' => null,
        '_enshrined' => null,
        '_correction' => null
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
        '_asset' => '_asset',
        '_year' => '_year',
        '_depreciation_amount' => '_depreciationAmount',
        '_residual_value' => '_residualValue',
        '_month' => '_month',
        '_enshrined' => '_enshrined',
        '_correction' => '_correction'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_sev_client' => 'setSevClient',
        '_asset' => 'setAsset',
        '_year' => 'setYear',
        '_depreciation_amount' => 'setDepreciationAmount',
        '_residual_value' => 'setResidualValue',
        '_month' => 'setMonth',
        '_enshrined' => 'setEnshrined',
        '_correction' => 'setCorrection'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_sev_client' => 'getSevClient',
        '_asset' => 'getAsset',
        '_year' => 'getYear',
        '_depreciation_amount' => 'getDepreciationAmount',
        '_residual_value' => 'getResidualValue',
        '_month' => 'getMonth',
        '_enshrined' => 'getEnshrined',
        '_correction' => 'getCorrection'
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
        $this->container['_asset'] = isset($data['_asset']) ? $data['_asset'] : null;
        $this->container['_year'] = isset($data['_year']) ? $data['_year'] : null;
        $this->container['_depreciation_amount'] = isset($data['_depreciation_amount']) ? $data['_depreciation_amount'] : null;
        $this->container['_residual_value'] = isset($data['_residual_value']) ? $data['_residual_value'] : null;
        $this->container['_month'] = isset($data['_month']) ? $data['_month'] : null;
        $this->container['_enshrined'] = isset($data['_enshrined']) ? $data['_enshrined'] : null;
        $this->container['_correction'] = isset($data['_correction']) ? $data['_correction'] : null;
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
     * @param \DateTime $_create date the asset position was created
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
     * @param \DateTime $_update date the asset position was last updated
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
     * Gets _asset
     * @return object
     */
    public function getAsset()
    {
        return $this->container['_asset'];
    }

    /**
     * Sets _asset
     * @param object $_asset asset the asset position belongs to
     * @return $this
     */
    public function setAsset($_asset)
    {
        $this->container['_asset'] = $_asset;

        return $this;
    }

    /**
     * Gets _year
     * @return int
     */
    public function getYear()
    {
        return $this->container['_year'];
    }

    /**
     * Sets _year
     * @param int $_year 
     * @return $this
     */
    public function setYear($_year)
    {
        $this->container['_year'] = $_year;

        return $this;
    }

    /**
     * Gets _depreciation_amount
     * @return float
     */
    public function getDepreciationAmount()
    {
        return $this->container['_depreciation_amount'];
    }

    /**
     * Sets _depreciation_amount
     * @param float $_depreciation_amount 
     * @return $this
     */
    public function setDepreciationAmount($_depreciation_amount)
    {
        $this->container['_depreciation_amount'] = $_depreciation_amount;

        return $this;
    }

    /**
     * Gets _residual_value
     * @return float
     */
    public function getResidualValue()
    {
        return $this->container['_residual_value'];
    }

    /**
     * Sets _residual_value
     * @param float $_residual_value 
     * @return $this
     */
    public function setResidualValue($_residual_value)
    {
        $this->container['_residual_value'] = $_residual_value;

        return $this;
    }

    /**
     * Gets _month
     * @return int
     */
    public function getMonth()
    {
        return $this->container['_month'];
    }

    /**
     * Sets _month
     * @param int $_month 
     * @return $this
     */
    public function setMonth($_month)
    {
        $this->container['_month'] = $_month;

        return $this;
    }

    /**
     * Gets _enshrined
     * @return bool
     */
    public function getEnshrined()
    {
        return $this->container['_enshrined'];
    }

    /**
     * Sets _enshrined
     * @param bool $_enshrined 
     * @return $this
     */
    public function setEnshrined($_enshrined)
    {
        $this->container['_enshrined'] = $_enshrined;

        return $this;
    }

    /**
     * Gets _correction
     * @return bool
     */
    public function getCorrection()
    {
        return $this->container['_correction'];
    }

    /**
     * Sets _correction
     * @param bool $_correction 
     * @return $this
     */
    public function setCorrection($_correction)
    {
        $this->container['_correction'] = $_correction;

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


