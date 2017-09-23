<?php
/**
 * ModelInvoicePos
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
 * ModelInvoicePos Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelInvoicePos implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_InvoicePos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_invoice' => '\ispserverfarm\sevdesk\sevDeskModel\ModelInvoice',
        '_part' => '\ispserverfarm\sevdesk\sevDeskModel\ModelPart',
        '_quantity' => 'float',
        '_price' => 'float',
        '_name' => 'string',
        '_priority' => 'int',
        '_unity' => '\ispserverfarm\sevdesk\sevDeskModel\ModelUnity',
        '_sev_client' => 'object',
        '_position_number' => 'int',
        '_text' => 'string',
        '_discount' => 'float',
        '_tax_rate' => 'float',
        '_temporary' => 'bool',
        '_sum_net' => 'float',
        '_sum_gross' => 'float',
        '_sum_discount' => 'float',
        '_sum_tax' => 'float',
        '_sum_net_accounting' => 'float',
        '_sum_tax_accounting' => 'float',
        '_sum_gross_accounting' => 'float',
        '_price_net' => 'float',
        '_price_gross' => 'float',
        '_price_tax' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_invoice' => null,
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
        '_tax_rate' => 'float',
        '_temporary' => null,
        '_sum_net' => 'float',
        '_sum_gross' => 'float',
        '_sum_discount' => 'float',
        '_sum_tax' => 'float',
        '_sum_net_accounting' => 'float',
        '_sum_tax_accounting' => 'float',
        '_sum_gross_accounting' => 'float',
        '_price_net' => 'float',
        '_price_gross' => 'float',
        '_price_tax' => 'float'
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
        '_invoice' => '_invoice',
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
        '_tax_rate' => '_taxRate',
        '_temporary' => '_temporary',
        '_sum_net' => '_sumNet',
        '_sum_gross' => '_sumGross',
        '_sum_discount' => '_sumDiscount',
        '_sum_tax' => '_sumTax',
        '_sum_net_accounting' => '_sumNetAccounting',
        '_sum_tax_accounting' => '_sumTaxAccounting',
        '_sum_gross_accounting' => '_sumGrossAccounting',
        '_price_net' => '_priceNet',
        '_price_gross' => '_priceGross',
        '_price_tax' => '_priceTax'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_invoice' => 'setInvoice',
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
        '_tax_rate' => 'setTaxRate',
        '_temporary' => 'setTemporary',
        '_sum_net' => 'setSumNet',
        '_sum_gross' => 'setSumGross',
        '_sum_discount' => 'setSumDiscount',
        '_sum_tax' => 'setSumTax',
        '_sum_net_accounting' => 'setSumNetAccounting',
        '_sum_tax_accounting' => 'setSumTaxAccounting',
        '_sum_gross_accounting' => 'setSumGrossAccounting',
        '_price_net' => 'setPriceNet',
        '_price_gross' => 'setPriceGross',
        '_price_tax' => 'setPriceTax'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_invoice' => 'getInvoice',
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
        '_tax_rate' => 'getTaxRate',
        '_temporary' => 'getTemporary',
        '_sum_net' => 'getSumNet',
        '_sum_gross' => 'getSumGross',
        '_sum_discount' => 'getSumDiscount',
        '_sum_tax' => 'getSumTax',
        '_sum_net_accounting' => 'getSumNetAccounting',
        '_sum_tax_accounting' => 'getSumTaxAccounting',
        '_sum_gross_accounting' => 'getSumGrossAccounting',
        '_price_net' => 'getPriceNet',
        '_price_gross' => 'getPriceGross',
        '_price_tax' => 'getPriceTax'
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
        $this->container['_invoice'] = isset($data['_invoice']) ? $data['_invoice'] : null;
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
        $this->container['_tax_rate'] = isset($data['_tax_rate']) ? $data['_tax_rate'] : null;
        $this->container['_temporary'] = isset($data['_temporary']) ? $data['_temporary'] : null;
        $this->container['_sum_net'] = isset($data['_sum_net']) ? $data['_sum_net'] : null;
        $this->container['_sum_gross'] = isset($data['_sum_gross']) ? $data['_sum_gross'] : null;
        $this->container['_sum_discount'] = isset($data['_sum_discount']) ? $data['_sum_discount'] : null;
        $this->container['_sum_tax'] = isset($data['_sum_tax']) ? $data['_sum_tax'] : null;
        $this->container['_sum_net_accounting'] = isset($data['_sum_net_accounting']) ? $data['_sum_net_accounting'] : null;
        $this->container['_sum_tax_accounting'] = isset($data['_sum_tax_accounting']) ? $data['_sum_tax_accounting'] : null;
        $this->container['_sum_gross_accounting'] = isset($data['_sum_gross_accounting']) ? $data['_sum_gross_accounting'] : null;
        $this->container['_price_net'] = isset($data['_price_net']) ? $data['_price_net'] : null;
        $this->container['_price_gross'] = isset($data['_price_gross']) ? $data['_price_gross'] : null;
        $this->container['_price_tax'] = isset($data['_price_tax']) ? $data['_price_tax'] : null;
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
     * @param \DateTime $_create creation date of the invoice position
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
     * @param \DateTime $_update date the invoice position was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _invoice
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelInvoice
     */
    public function getInvoice()
    {
        return $this->container['_invoice'];
    }

    /**
     * Sets _invoice
     * @param \ispserverfarm\sevdesk\sevDeskModel\ModelInvoice $_invoice the Model_Invoice the invoice position belongs to
     * @return $this
     */
    public function setInvoice($_invoice)
    {
        $this->container['_invoice'] = $_invoice;

        return $this;
    }

    /**
     * Gets _part
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelPart
     */
    public function getPart()
    {
        return $this->container['_part'];
    }

    /**
     * Sets _part
     * @param \ispserverfarm\sevdesk\sevDeskModel\ModelPart $_part the product/part which belongs to the invoice position
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
     * @param float $_quantity the quantity of the product/part
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
     * @param float $_price the price of the product/part
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
     * @param string $_name the name of the product/part
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
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelUnity
     */
    public function getUnity()
    {
        return $this->container['_unity'];
    }

    /**
     * Sets _unity
     * @param \ispserverfarm\sevdesk\sevDeskModel\ModelUnity $_unity 
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
     * @param float $_discount does not get filled, discount is handled in the discount_model
     * @return $this
     */
    public function setDiscount($_discount)
    {
        $this->container['_discount'] = $_discount;

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
     * @param float $_tax_rate tax rate in percent
     * @return $this
     */
    public function setTaxRate($_tax_rate)
    {
        $this->container['_tax_rate'] = $_tax_rate;

        return $this;
    }

    /**
     * Gets _temporary
     * @return bool
     */
    public function getTemporary()
    {
        return $this->container['_temporary'];
    }

    /**
     * Sets _temporary
     * @param bool $_temporary 
     * @return $this
     */
    public function setTemporary($_temporary)
    {
        $this->container['_temporary'] = $_temporary;

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
     * @param float $_sum_discount does not get filled, sumDiscount is handled in the discount_model
     * @return $this
     */
    public function setSumDiscount($_sum_discount)
    {
        $this->container['_sum_discount'] = $_sum_discount;

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
     * Gets _sum_net_accounting
     * @return float
     */
    public function getSumNetAccounting()
    {
        return $this->container['_sum_net_accounting'];
    }

    /**
     * Sets _sum_net_accounting
     * @param float $_sum_net_accounting equals sumNet
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
     * @param float $_sum_tax_accounting equals sumTax
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
     * @param float $_sum_gross_accounting equals sumGross
     * @return $this
     */
    public function setSumGrossAccounting($_sum_gross_accounting)
    {
        $this->container['_sum_gross_accounting'] = $_sum_gross_accounting;

        return $this;
    }

    /**
     * Gets _price_net
     * @return float
     */
    public function getPriceNet()
    {
        return $this->container['_price_net'];
    }

    /**
     * Sets _price_net
     * @param float $_price_net net price of the product/part (one)
     * @return $this
     */
    public function setPriceNet($_price_net)
    {
        $this->container['_price_net'] = $_price_net;

        return $this;
    }

    /**
     * Gets _price_gross
     * @return float
     */
    public function getPriceGross()
    {
        return $this->container['_price_gross'];
    }

    /**
     * Sets _price_gross
     * @param float $_price_gross gross price of the product/part (one)
     * @return $this
     */
    public function setPriceGross($_price_gross)
    {
        $this->container['_price_gross'] = $_price_gross;

        return $this;
    }

    /**
     * Gets _price_tax
     * @return float
     */
    public function getPriceTax()
    {
        return $this->container['_price_tax'];
    }

    /**
     * Sets _price_tax
     * @param float $_price_tax 
     * @return $this
     */
    public function setPriceTax($_price_tax)
    {
        $this->container['_price_tax'] = $_price_tax;

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


