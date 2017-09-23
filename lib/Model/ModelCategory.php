<?php
/**
 * ModelCategory
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
 * Do not edit the class manually.
 */

namespace ispserverfarm\sevdesk\phpclient\Model;

use \ArrayAccess;

/**
 * ModelCategory Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelCategory implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_parent' => '\ispserverfarm\sevdesk\phpclient\Model\ModelCategory',
        '_name' => 'string',
        '_object_type' => 'string',
        '_priority' => 'int',
        '_code' => 'string',
        '_color' => 'string',
        '_sev_client' => 'object',
        '_posting_account' => 'string',
        '_type' => 'string',
        '_translation_code' => 'string',
        '_entry_type' => '\ispserverfarm\sevdesk\phpclient\Model\ModelEntryType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_parent' => null,
        '_name' => null,
        '_object_type' => null,
        '_priority' => null,
        '_code' => null,
        '_color' => null,
        '_sev_client' => null,
        '_posting_account' => null,
        '_type' => null,
        '_translation_code' => null,
        '_entry_type' => null
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
        '_parent' => '_parent',
        '_name' => '_name',
        '_object_type' => '_objectType',
        '_priority' => '_priority',
        '_code' => '_code',
        '_color' => '_color',
        '_sev_client' => '_sevClient',
        '_posting_account' => '_postingAccount',
        '_type' => '_type',
        '_translation_code' => '_translationCode',
        '_entry_type' => '_entryType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_parent' => 'setParent',
        '_name' => 'setName',
        '_object_type' => 'setObjectType',
        '_priority' => 'setPriority',
        '_code' => 'setCode',
        '_color' => 'setColor',
        '_sev_client' => 'setSevClient',
        '_posting_account' => 'setPostingAccount',
        '_type' => 'setType',
        '_translation_code' => 'setTranslationCode',
        '_entry_type' => 'setEntryType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_parent' => 'getParent',
        '_name' => 'getName',
        '_object_type' => 'getObjectType',
        '_priority' => 'getPriority',
        '_code' => 'getCode',
        '_color' => 'getColor',
        '_sev_client' => 'getSevClient',
        '_posting_account' => 'getPostingAccount',
        '_type' => 'getType',
        '_translation_code' => 'getTranslationCode',
        '_entry_type' => 'getEntryType'
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
        $this->container['_parent'] = isset($data['_parent']) ? $data['_parent'] : null;
        $this->container['_name'] = isset($data['_name']) ? $data['_name'] : null;
        $this->container['_object_type'] = isset($data['_object_type']) ? $data['_object_type'] : null;
        $this->container['_priority'] = isset($data['_priority']) ? $data['_priority'] : null;
        $this->container['_code'] = isset($data['_code']) ? $data['_code'] : null;
        $this->container['_color'] = isset($data['_color']) ? $data['_color'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_posting_account'] = isset($data['_posting_account']) ? $data['_posting_account'] : null;
        $this->container['_type'] = isset($data['_type']) ? $data['_type'] : null;
        $this->container['_translation_code'] = isset($data['_translation_code']) ? $data['_translation_code'] : null;
        $this->container['_entry_type'] = isset($data['_entry_type']) ? $data['_entry_type'] : null;
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
     * @param \DateTime $_create creation date of the category
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
     * @param \DateTime $_update date the category was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _parent
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelCategory
     */
    public function getParent()
    {
        return $this->container['_parent'];
    }

    /**
     * Sets _parent
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelCategory $_parent 
     * @return $this
     */
    public function setParent($_parent)
    {
        $this->container['_parent'] = $_parent;

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
     * @param string $_name 
     * @return $this
     */
    public function setName($_name)
    {
        $this->container['_name'] = $_name;

        return $this;
    }

    /**
     * Gets _object_type
     * @return string
     */
    public function getObjectType()
    {
        return $this->container['_object_type'];
    }

    /**
     * Sets _object_type
     * @param string $_object_type 
     * @return $this
     */
    public function setObjectType($_object_type)
    {
        $this->container['_object_type'] = $_object_type;

        return $this;
    }

    /**
     * Gets _priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['_priority'];
    }

    /**
     * Sets _priority
     * @param int $_priority 
     * @return $this
     */
    public function setPriority($_priority)
    {
        $this->container['_priority'] = $_priority;

        return $this;
    }

    /**
     * Gets _code
     * @return string
     */
    public function getCode()
    {
        return $this->container['_code'];
    }

    /**
     * Sets _code
     * @param string $_code 
     * @return $this
     */
    public function setCode($_code)
    {
        $this->container['_code'] = $_code;

        return $this;
    }

    /**
     * Gets _color
     * @return string
     */
    public function getColor()
    {
        return $this->container['_color'];
    }

    /**
     * Sets _color
     * @param string $_color 
     * @return $this
     */
    public function setColor($_color)
    {
        $this->container['_color'] = $_color;

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
     * @param object $_sev_client 
     * @return $this
     */
    public function setSevClient($_sev_client)
    {
        $this->container['_sev_client'] = $_sev_client;

        return $this;
    }

    /**
     * Gets _posting_account
     * @return string
     */
    public function getPostingAccount()
    {
        return $this->container['_posting_account'];
    }

    /**
     * Sets _posting_account
     * @param string $_posting_account 
     * @return $this
     */
    public function setPostingAccount($_posting_account)
    {
        $this->container['_posting_account'] = $_posting_account;

        return $this;
    }

    /**
     * Gets _type
     * @return string
     */
    public function getType()
    {
        return $this->container['_type'];
    }

    /**
     * Sets _type
     * @param string $_type 
     * @return $this
     */
    public function setType($_type)
    {
        $this->container['_type'] = $_type;

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
     * @param string $_translation_code 
     * @return $this
     */
    public function setTranslationCode($_translation_code)
    {
        $this->container['_translation_code'] = $_translation_code;

        return $this;
    }

    /**
     * Gets _entry_type
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelEntryType
     */
    public function getEntryType()
    {
        return $this->container['_entry_type'];
    }

    /**
     * Sets _entry_type
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelEntryType $_entry_type 
     * @return $this
     */
    public function setEntryType($_entry_type)
    {
        $this->container['_entry_type'] = $_entry_type;

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


