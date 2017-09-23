<?php
/**
 * ModelSubscriptionType
 *
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\phpclient
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

namespace ispserverfarm\sevdesk\phpclient\sevDeskModel;

use \ArrayAccess;

/**
 * ModelSubscriptionType Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelSubscriptionType implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_SubscriptionType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_name' => 'string',
        '_plan_code' => 'string',
        '_plan_duration' => 'string',
        '_external_product_id' => 'string',
        '_external_product_id_sandbox' => 'string',
        '_sum_net' => 'float',
        '_sum_vat' => 'float',
        '_sum_gross' => 'float',
        '_external_product_id_gbp' => 'string',
        '_sum_net_gbp' => 'float',
        '_translation_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_name' => null,
        '_plan_code' => null,
        '_plan_duration' => null,
        '_external_product_id' => null,
        '_external_product_id_sandbox' => null,
        '_sum_net' => 'float',
        '_sum_vat' => 'float',
        '_sum_gross' => 'float',
        '_external_product_id_gbp' => null,
        '_sum_net_gbp' => 'float',
        '_translation_code' => null
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
        '_name' => '_name',
        '_plan_code' => '_planCode',
        '_plan_duration' => '_planDuration',
        '_external_product_id' => '_externalProductId',
        '_external_product_id_sandbox' => '_externalProductIdSandbox',
        '_sum_net' => '_sumNet',
        '_sum_vat' => '_sumVat',
        '_sum_gross' => '_sumGross',
        '_external_product_id_gbp' => '_externalProductIdGbp',
        '_sum_net_gbp' => '_sumNetGbp',
        '_translation_code' => '_translationCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_name' => 'setName',
        '_plan_code' => 'setPlanCode',
        '_plan_duration' => 'setPlanDuration',
        '_external_product_id' => 'setExternalProductId',
        '_external_product_id_sandbox' => 'setExternalProductIdSandbox',
        '_sum_net' => 'setSumNet',
        '_sum_vat' => 'setSumVat',
        '_sum_gross' => 'setSumGross',
        '_external_product_id_gbp' => 'setExternalProductIdGbp',
        '_sum_net_gbp' => 'setSumNetGbp',
        '_translation_code' => 'setTranslationCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_name' => 'getName',
        '_plan_code' => 'getPlanCode',
        '_plan_duration' => 'getPlanDuration',
        '_external_product_id' => 'getExternalProductId',
        '_external_product_id_sandbox' => 'getExternalProductIdSandbox',
        '_sum_net' => 'getSumNet',
        '_sum_vat' => 'getSumVat',
        '_sum_gross' => 'getSumGross',
        '_external_product_id_gbp' => 'getExternalProductIdGbp',
        '_sum_net_gbp' => 'getSumNetGbp',
        '_translation_code' => 'getTranslationCode'
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
        $this->container['_name'] = isset($data['_name']) ? $data['_name'] : null;
        $this->container['_plan_code'] = isset($data['_plan_code']) ? $data['_plan_code'] : null;
        $this->container['_plan_duration'] = isset($data['_plan_duration']) ? $data['_plan_duration'] : null;
        $this->container['_external_product_id'] = isset($data['_external_product_id']) ? $data['_external_product_id'] : null;
        $this->container['_external_product_id_sandbox'] = isset($data['_external_product_id_sandbox']) ? $data['_external_product_id_sandbox'] : null;
        $this->container['_sum_net'] = isset($data['_sum_net']) ? $data['_sum_net'] : null;
        $this->container['_sum_vat'] = isset($data['_sum_vat']) ? $data['_sum_vat'] : null;
        $this->container['_sum_gross'] = isset($data['_sum_gross']) ? $data['_sum_gross'] : null;
        $this->container['_external_product_id_gbp'] = isset($data['_external_product_id_gbp']) ? $data['_external_product_id_gbp'] : null;
        $this->container['_sum_net_gbp'] = isset($data['_sum_net_gbp']) ? $data['_sum_net_gbp'] : null;
        $this->container['_translation_code'] = isset($data['_translation_code']) ? $data['_translation_code'] : null;
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
     * @param \DateTime $_create date the subscription type was created
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
     * @param \DateTime $_update date the subscription type was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _name
     * @return string
     */
    public function getName()
    {
        return $this->container['_name'];
    }

    /**
     * Sets _name
     * @param string $_name name of the subscription type
     * @return $this
     */
    public function setName($_name)
    {
        $this->container['_name'] = $_name;

        return $this;
    }

    /**
     * Gets _plan_code
     * @return string
     */
    public function getPlanCode()
    {
        return $this->container['_plan_code'];
    }

    /**
     * Sets _plan_code
     * @param string $_plan_code code of the subscription plan
     * @return $this
     */
    public function setPlanCode($_plan_code)
    {
        $this->container['_plan_code'] = $_plan_code;

        return $this;
    }

    /**
     * Gets _plan_duration
     * @return string
     */
    public function getPlanDuration()
    {
        return $this->container['_plan_duration'];
    }

    /**
     * Sets _plan_duration
     * @param string $_plan_duration duration of the subscription plan in months
     * @return $this
     */
    public function setPlanDuration($_plan_duration)
    {
        $this->container['_plan_duration'] = $_plan_duration;

        return $this;
    }

    /**
     * Gets _external_product_id
     * @return string
     */
    public function getExternalProductId()
    {
        return $this->container['_external_product_id'];
    }

    /**
     * Sets _external_product_id
     * @param string $_external_product_id 
     * @return $this
     */
    public function setExternalProductId($_external_product_id)
    {
        $this->container['_external_product_id'] = $_external_product_id;

        return $this;
    }

    /**
     * Gets _external_product_id_sandbox
     * @return string
     */
    public function getExternalProductIdSandbox()
    {
        return $this->container['_external_product_id_sandbox'];
    }

    /**
     * Sets _external_product_id_sandbox
     * @param string $_external_product_id_sandbox 
     * @return $this
     */
    public function setExternalProductIdSandbox($_external_product_id_sandbox)
    {
        $this->container['_external_product_id_sandbox'] = $_external_product_id_sandbox;

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
     * @param float $_sum_net net sum payable for the subscription type
     * @return $this
     */
    public function setSumNet($_sum_net)
    {
        $this->container['_sum_net'] = $_sum_net;

        return $this;
    }

    /**
     * Gets _sum_vat
     * @return float
     */
    public function getSumVat()
    {
        return $this->container['_sum_vat'];
    }

    /**
     * Sets _sum_vat
     * @param float $_sum_vat vat sum payable for the subscription type
     * @return $this
     */
    public function setSumVat($_sum_vat)
    {
        $this->container['_sum_vat'] = $_sum_vat;

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
     * @param float $_sum_gross gross sum payable for the subscription type
     * @return $this
     */
    public function setSumGross($_sum_gross)
    {
        $this->container['_sum_gross'] = $_sum_gross;

        return $this;
    }

    /**
     * Gets _external_product_id_gbp
     * @return string
     */
    public function getExternalProductIdGbp()
    {
        return $this->container['_external_product_id_gbp'];
    }

    /**
     * Sets _external_product_id_gbp
     * @param string $_external_product_id_gbp 
     * @return $this
     */
    public function setExternalProductIdGbp($_external_product_id_gbp)
    {
        $this->container['_external_product_id_gbp'] = $_external_product_id_gbp;

        return $this;
    }

    /**
     * Gets _sum_net_gbp
     * @return float
     */
    public function getSumNetGbp()
    {
        return $this->container['_sum_net_gbp'];
    }

    /**
     * Sets _sum_net_gbp
     * @param float $_sum_net_gbp 
     * @return $this
     */
    public function setSumNetGbp($_sum_net_gbp)
    {
        $this->container['_sum_net_gbp'] = $_sum_net_gbp;

        return $this;
    }

    /**
     * Gets _translation_code
     * @return string
     */
    public function getTranslationCode()
    {
        return $this->container['_translation_code'];
    }

    /**
     * Sets _translation_code
     * @param string $_translation_code translation code for the subscription type
     * @return $this
     */
    public function setTranslationCode($_translation_code)
    {
        $this->container['_translation_code'] = $_translation_code;

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
            return json_encode(\ispserverfarm\sevdesk\phpclient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ispserverfarm\sevdesk\phpclient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


