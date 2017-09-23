<?php
/**
 * ModelOrderPos
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
 * ModelOrderPos Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelOrderPos implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_OrderPos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_order' => '\ispserverfarm\sevdesk\phpclient\Model\ModelOrder',
        '_part' => '\ispserverfarm\sevdesk\phpclient\Model\ModelPart',
        '_quantity' => 'float',
        '_price' => 'float',
        '_name' => 'string',
        '_priority' => 'int',
        '_unity' => '\ispserverfarm\sevdesk\phpclient\Model\ModelUnity',
        '_sev_client' => 'object',
        '_position_number' => 'int',
        '_text' => 'string',
        '_discount' => 'float',
        '_optional' => 'bool',
        '_optional_chargeable' => 'bool',
        '_tax_rate' => 'float',
        '_sum_net' => 'float',
        '_sum_gross' => 'float',
        '_sum_discount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_order' => null,
        '_part' => null,
        '_quantity' => 'float',
        '_price' => 'float',
        '_name' => null,
        '_priority' => null,
        '_unity' => null,
        '_sev_client' => null,
        '_position_number' => null,
        '_text' => null,
        '_discount' => 'float',
        '_optional' => null,
        '_optional_chargeable' => null,
        '_tax_rate' => 'float',
        '_sum_net' => 'float',
        '_sum_gross' => 'float',
        '_sum_discount' => 'float'
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
        '_order' => '_order',
        '_part' => '_part',
        '_quantity' => '_quantity',
        '_price' => '_price',
        '_name' => '_name',
        '_priority' => '_priority',
        '_unity' => '_unity',
        '_sev_client' => '_sevClient',
        '_position_number' => '_positionNumber',
        '_text' => '_text',
        '_discount' => '_discount',
        '_optional' => '_optional',
        '_optional_chargeable' => '_optionalChargeable',
        '_tax_rate' => '_taxRate',
        '_sum_net' => '_sumNet',
        '_sum_gross' => '_sumGross',
        '_sum_discount' => '_sumDiscount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_order' => 'setOrder',
        '_part' => 'setPart',
        '_quantity' => 'setQuantity',
        '_price' => 'setPrice',
        '_name' => 'setName',
        '_priority' => 'setPriority',
        '_unity' => 'setUnity',
        '_sev_client' => 'setSevClient',
        '_position_number' => 'setPositionNumber',
        '_text' => 'setText',
        '_discount' => 'setDiscount',
        '_optional' => 'setOptional',
        '_optional_chargeable' => 'setOptionalChargeable',
        '_tax_rate' => 'setTaxRate',
        '_sum_net' => 'setSumNet',
        '_sum_gross' => 'setSumGross',
        '_sum_discount' => 'setSumDiscount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_order' => 'getOrder',
        '_part' => 'getPart',
        '_quantity' => 'getQuantity',
        '_price' => 'getPrice',
        '_name' => 'getName',
        '_priority' => 'getPriority',
        '_unity' => 'getUnity',
        '_sev_client' => 'getSevClient',
        '_position_number' => 'getPositionNumber',
        '_text' => 'getText',
        '_discount' => 'getDiscount',
        '_optional' => 'getOptional',
        '_optional_chargeable' => 'getOptionalChargeable',
        '_tax_rate' => 'getTaxRate',
        '_sum_net' => 'getSumNet',
        '_sum_gross' => 'getSumGross',
        '_sum_discount' => 'getSumDiscount'
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
        $this->container['_order'] = isset($data['_order']) ? $data['_order'] : null;
        $this->container['_part'] = isset($data['_part']) ? $data['_part'] : null;
        $this->container['_quantity'] = isset($data['_quantity']) ? $data['_quantity'] : null;
        $this->container['_price'] = isset($data['_price']) ? $data['_price'] : null;
        $this->container['_name'] = isset($data['_name']) ? $data['_name'] : null;
        $this->container['_priority'] = isset($data['_priority']) ? $data['_priority'] : null;
        $this->container['_unity'] = isset($data['_unity']) ? $data['_unity'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_position_number'] = isset($data['_position_number']) ? $data['_position_number'] : null;
        $this->container['_text'] = isset($data['_text']) ? $data['_text'] : null;
        $this->container['_discount'] = isset($data['_discount']) ? $data['_discount'] : null;
        $this->container['_optional'] = isset($data['_optional']) ? $data['_optional'] : null;
        $this->container['_optional_chargeable'] = isset($data['_optional_chargeable']) ? $data['_optional_chargeable'] : null;
        $this->container['_tax_rate'] = isset($data['_tax_rate']) ? $data['_tax_rate'] : null;
        $this->container['_sum_net'] = isset($data['_sum_net']) ? $data['_sum_net'] : null;
        $this->container['_sum_gross'] = isset($data['_sum_gross']) ? $data['_sum_gross'] : null;
        $this->container['_sum_discount'] = isset($data['_sum_discount']) ? $data['_sum_discount'] : null;
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
     * @param \DateTime $_create creation date of the order position
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
     * @param \DateTime $_update date the order position was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _order
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelOrder
     */
    public function getOrder()
    {
        return $this->container['_order'];
    }

    /**
     * Sets _order
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelOrder $_order Model_Order the position belongs to
     * @return $this
     */
    public function setOrder($_order)
    {
        $this->container['_order'] = $_order;

        return $this;
    }

    /**
     * Gets _part
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelPart
     */
    public function getPart()
    {
        return $this->container['_part'];
    }

    /**
     * Sets _part
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelPart $_part The Model_Part which is used in Model_OrderPos
     * @return $this
     */
    public function setPart($_part)
    {
        $this->container['_part'] = $_part;

        return $this;
    }

    /**
     * Gets _quantity
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['_quantity'];
    }

    /**
     * Sets _quantity
     * @param float $_quantity quantity of the Model_Part
     * @return $this
     */
    public function setQuantity($_quantity)
    {
        $this->container['_quantity'] = $_quantity;

        return $this;
    }

    /**
     * Gets _price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['_price'];
    }

    /**
     * Sets _price
     * @param float $_price price of the Model_Part
     * @return $this
     */
    public function setPrice($_price)
    {
        $this->container['_price'] = $_price;

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
     * Gets _unity
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelUnity
     */
    public function getUnity()
    {
        return $this->container['_unity'];
    }

    /**
     * Sets _unity
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelUnity $_unity 
     * @return $this
     */
    public function setUnity($_unity)
    {
        $this->container['_unity'] = $_unity;

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
     * Gets _position_number
     * @return int
     */
    public function getPositionNumber()
    {
        return $this->container['_position_number'];
    }

    /**
     * Sets _position_number
     * @param int $_position_number 
     * @return $this
     */
    public function setPositionNumber($_position_number)
    {
        $this->container['_position_number'] = $_position_number;

        return $this;
    }

    /**
     * Gets _text
     * @return string
     */
    public function getText()
    {
        return $this->container['_text'];
    }

    /**
     * Sets _text
     * @param string $_text 
     * @return $this
     */
    public function setText($_text)
    {
        $this->container['_text'] = $_text;

        return $this;
    }

    /**
     * Gets _discount
     * @return float
     */
    public function getDiscount()
    {
        return $this->container['_discount'];
    }

    /**
     * Sets _discount
     * @param float $_discount 
     * @return $this
     */
    public function setDiscount($_discount)
    {
        $this->container['_discount'] = $_discount;

        return $this;
    }

    /**
     * Gets _optional
     * @return bool
     */
    public function getOptional()
    {
        return $this->container['_optional'];
    }

    /**
     * Sets _optional
     * @param bool $_optional 
     * @return $this
     */
    public function setOptional($_optional)
    {
        $this->container['_optional'] = $_optional;

        return $this;
    }

    /**
     * Gets _optional_chargeable
     * @return bool
     */
    public function getOptionalChargeable()
    {
        return $this->container['_optional_chargeable'];
    }

    /**
     * Sets _optional_chargeable
     * @param bool $_optional_chargeable 
     * @return $this
     */
    public function setOptionalChargeable($_optional_chargeable)
    {
        $this->container['_optional_chargeable'] = $_optional_chargeable;

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
     * Gets _sum_discount
     * @return float
     */
    public function getSumDiscount()
    {
        return $this->container['_sum_discount'];
    }

    /**
     * Sets _sum_discount
     * @param float $_sum_discount 
     * @return $this
     */
    public function setSumDiscount($_sum_discount)
    {
        $this->container['_sum_discount'] = $_sum_discount;

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


