<?php
/**
 * ModelCheckAccount
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
 * ModelCheckAccount Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelCheckAccount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_CheckAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_sev_client' => 'object',
        '_name' => 'string',
        '_type' => 'string',
        '_import_type' => 'string',
        '_currency' => 'string',
        '_check_acc_id' => 'string',
        '_pin' => 'string',
        '_default_account' => 'string',
        '_status' => 'int',
        '_translation_code' => 'string',
        '_bank_server' => 'string',
        '_balance' => 'float',
        '_figo_account_id' => 'string',
        '_credential1' => 'string',
        '_credential2' => 'string',
        '_credential3' => 'string',
        '_accounting_number' => 'int',
        '_figo_preferred_tan_scheme' => 'string',
        '_iban' => 'string',
        '_bic' => 'string',
        '_base_account' => 'bool',
        '_priority' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_sev_client' => null,
        '_name' => null,
        '_type' => null,
        '_import_type' => null,
        '_currency' => null,
        '_check_acc_id' => null,
        '_pin' => null,
        '_default_account' => null,
        '_status' => null,
        '_translation_code' => null,
        '_bank_server' => null,
        '_balance' => 'float',
        '_figo_account_id' => null,
        '_credential1' => null,
        '_credential2' => null,
        '_credential3' => null,
        '_accounting_number' => null,
        '_figo_preferred_tan_scheme' => null,
        '_iban' => null,
        '_bic' => null,
        '_base_account' => null,
        '_priority' => 'float'
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
        '_name' => '_name',
        '_type' => '_type',
        '_import_type' => '_importType',
        '_currency' => '_currency',
        '_check_acc_id' => '_checkAccId',
        '_pin' => '_pin',
        '_default_account' => '_defaultAccount',
        '_status' => '_status',
        '_translation_code' => '_translationCode',
        '_bank_server' => '_bankServer',
        '_balance' => '_balance',
        '_figo_account_id' => '_figoAccountId',
        '_credential1' => '_credential1',
        '_credential2' => '_credential2',
        '_credential3' => '_credential3',
        '_accounting_number' => '_accountingNumber',
        '_figo_preferred_tan_scheme' => '_figoPreferredTanScheme',
        '_iban' => '_iban',
        '_bic' => '_bic',
        '_base_account' => '_baseAccount',
        '_priority' => '_priority'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_sev_client' => 'setSevClient',
        '_name' => 'setName',
        '_type' => 'setType',
        '_import_type' => 'setImportType',
        '_currency' => 'setCurrency',
        '_check_acc_id' => 'setCheckAccId',
        '_pin' => 'setPin',
        '_default_account' => 'setDefaultAccount',
        '_status' => 'setStatus',
        '_translation_code' => 'setTranslationCode',
        '_bank_server' => 'setBankServer',
        '_balance' => 'setBalance',
        '_figo_account_id' => 'setFigoAccountId',
        '_credential1' => 'setCredential1',
        '_credential2' => 'setCredential2',
        '_credential3' => 'setCredential3',
        '_accounting_number' => 'setAccountingNumber',
        '_figo_preferred_tan_scheme' => 'setFigoPreferredTanScheme',
        '_iban' => 'setIban',
        '_bic' => 'setBic',
        '_base_account' => 'setBaseAccount',
        '_priority' => 'setPriority'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_sev_client' => 'getSevClient',
        '_name' => 'getName',
        '_type' => 'getType',
        '_import_type' => 'getImportType',
        '_currency' => 'getCurrency',
        '_check_acc_id' => 'getCheckAccId',
        '_pin' => 'getPin',
        '_default_account' => 'getDefaultAccount',
        '_status' => 'getStatus',
        '_translation_code' => 'getTranslationCode',
        '_bank_server' => 'getBankServer',
        '_balance' => 'getBalance',
        '_figo_account_id' => 'getFigoAccountId',
        '_credential1' => 'getCredential1',
        '_credential2' => 'getCredential2',
        '_credential3' => 'getCredential3',
        '_accounting_number' => 'getAccountingNumber',
        '_figo_preferred_tan_scheme' => 'getFigoPreferredTanScheme',
        '_iban' => 'getIban',
        '_bic' => 'getBic',
        '_base_account' => 'getBaseAccount',
        '_priority' => 'getPriority'
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
        $this->container['_name'] = isset($data['_name']) ? $data['_name'] : null;
        $this->container['_type'] = isset($data['_type']) ? $data['_type'] : null;
        $this->container['_import_type'] = isset($data['_import_type']) ? $data['_import_type'] : null;
        $this->container['_currency'] = isset($data['_currency']) ? $data['_currency'] : null;
        $this->container['_check_acc_id'] = isset($data['_check_acc_id']) ? $data['_check_acc_id'] : null;
        $this->container['_pin'] = isset($data['_pin']) ? $data['_pin'] : null;
        $this->container['_default_account'] = isset($data['_default_account']) ? $data['_default_account'] : null;
        $this->container['_status'] = isset($data['_status']) ? $data['_status'] : null;
        $this->container['_translation_code'] = isset($data['_translation_code']) ? $data['_translation_code'] : null;
        $this->container['_bank_server'] = isset($data['_bank_server']) ? $data['_bank_server'] : null;
        $this->container['_balance'] = isset($data['_balance']) ? $data['_balance'] : null;
        $this->container['_figo_account_id'] = isset($data['_figo_account_id']) ? $data['_figo_account_id'] : null;
        $this->container['_credential1'] = isset($data['_credential1']) ? $data['_credential1'] : null;
        $this->container['_credential2'] = isset($data['_credential2']) ? $data['_credential2'] : null;
        $this->container['_credential3'] = isset($data['_credential3']) ? $data['_credential3'] : null;
        $this->container['_accounting_number'] = isset($data['_accounting_number']) ? $data['_accounting_number'] : null;
        $this->container['_figo_preferred_tan_scheme'] = isset($data['_figo_preferred_tan_scheme']) ? $data['_figo_preferred_tan_scheme'] : null;
        $this->container['_iban'] = isset($data['_iban']) ? $data['_iban'] : null;
        $this->container['_bic'] = isset($data['_bic']) ? $data['_bic'] : null;
        $this->container['_base_account'] = isset($data['_base_account']) ? $data['_base_account'] : null;
        $this->container['_priority'] = isset($data['_priority']) ? $data['_priority'] : null;
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
     * @param \DateTime $_create date the CheckAccount was created
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
     * @param \DateTime $_update date the CheckAccount was last updated
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
     * Gets _name
     * @return string
     */
    public function getName()
    {
        return $this->container['_name'];
    }

    /**
     * Sets _name
     * @param string $_name name of the CheckAccount
     * @return $this
     */
    public function setName($_name)
    {
        $this->container['_name'] = $_name;

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
     * @param string $_type type of the CheckAccount
     * @return $this
     */
    public function setType($_type)
    {
        $this->container['_type'] = $_type;

        return $this;
    }

    /**
     * Gets _import_type
     * @return string
     */
    public function getImportType()
    {
        return $this->container['_import_type'];
    }

    /**
     * Sets _import_type
     * @param string $_import_type 
     * @return $this
     */
    public function setImportType($_import_type)
    {
        $this->container['_import_type'] = $_import_type;

        return $this;
    }

    /**
     * Gets _currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['_currency'];
    }

    /**
     * Sets _currency
     * @param string $_currency 
     * @return $this
     */
    public function setCurrency($_currency)
    {
        $this->container['_currency'] = $_currency;

        return $this;
    }

    /**
     * Gets _check_acc_id
     * @return string
     */
    public function getCheckAccId()
    {
        return $this->container['_check_acc_id'];
    }

    /**
     * Sets _check_acc_id
     * @param string $_check_acc_id 
     * @return $this
     */
    public function setCheckAccId($_check_acc_id)
    {
        $this->container['_check_acc_id'] = $_check_acc_id;

        return $this;
    }

    /**
     * Gets _pin
     * @return string
     */
    public function getPin()
    {
        return $this->container['_pin'];
    }

    /**
     * Sets _pin
     * @param string $_pin 
     * @return $this
     */
    public function setPin($_pin)
    {
        $this->container['_pin'] = $_pin;

        return $this;
    }

    /**
     * Gets _default_account
     * @return string
     */
    public function getDefaultAccount()
    {
        return $this->container['_default_account'];
    }

    /**
     * Sets _default_account
     * @param string $_default_account boolean showing whether this account is the default account or not
     * @return $this
     */
    public function setDefaultAccount($_default_account)
    {
        $this->container['_default_account'] = $_default_account;

        return $this;
    }

    /**
     * Gets _status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['_status'];
    }

    /**
     * Sets _status
     * @param int $_status 
     * @return $this
     */
    public function setStatus($_status)
    {
        $this->container['_status'] = $_status;

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
     * Gets _bank_server
     * @return string
     */
    public function getBankServer()
    {
        return $this->container['_bank_server'];
    }

    /**
     * Sets _bank_server
     * @param string $_bank_server 
     * @return $this
     */
    public function setBankServer($_bank_server)
    {
        $this->container['_bank_server'] = $_bank_server;

        return $this;
    }

    /**
     * Gets _balance
     * @return float
     */
    public function getBalance()
    {
        return $this->container['_balance'];
    }

    /**
     * Sets _balance
     * @param float $_balance 
     * @return $this
     */
    public function setBalance($_balance)
    {
        $this->container['_balance'] = $_balance;

        return $this;
    }

    /**
     * Gets _figo_account_id
     * @return string
     */
    public function getFigoAccountId()
    {
        return $this->container['_figo_account_id'];
    }

    /**
     * Sets _figo_account_id
     * @param string $_figo_account_id 
     * @return $this
     */
    public function setFigoAccountId($_figo_account_id)
    {
        $this->container['_figo_account_id'] = $_figo_account_id;

        return $this;
    }

    /**
     * Gets _credential1
     * @return string
     */
    public function getCredential1()
    {
        return $this->container['_credential1'];
    }

    /**
     * Sets _credential1
     * @param string $_credential1 
     * @return $this
     */
    public function setCredential1($_credential1)
    {
        $this->container['_credential1'] = $_credential1;

        return $this;
    }

    /**
     * Gets _credential2
     * @return string
     */
    public function getCredential2()
    {
        return $this->container['_credential2'];
    }

    /**
     * Sets _credential2
     * @param string $_credential2 
     * @return $this
     */
    public function setCredential2($_credential2)
    {
        $this->container['_credential2'] = $_credential2;

        return $this;
    }

    /**
     * Gets _credential3
     * @return string
     */
    public function getCredential3()
    {
        return $this->container['_credential3'];
    }

    /**
     * Sets _credential3
     * @param string $_credential3 
     * @return $this
     */
    public function setCredential3($_credential3)
    {
        $this->container['_credential3'] = $_credential3;

        return $this;
    }

    /**
     * Gets _accounting_number
     * @return int
     */
    public function getAccountingNumber()
    {
        return $this->container['_accounting_number'];
    }

    /**
     * Sets _accounting_number
     * @param int $_accounting_number 
     * @return $this
     */
    public function setAccountingNumber($_accounting_number)
    {
        $this->container['_accounting_number'] = $_accounting_number;

        return $this;
    }

    /**
     * Gets _figo_preferred_tan_scheme
     * @return string
     */
    public function getFigoPreferredTanScheme()
    {
        return $this->container['_figo_preferred_tan_scheme'];
    }

    /**
     * Sets _figo_preferred_tan_scheme
     * @param string $_figo_preferred_tan_scheme 
     * @return $this
     */
    public function setFigoPreferredTanScheme($_figo_preferred_tan_scheme)
    {
        $this->container['_figo_preferred_tan_scheme'] = $_figo_preferred_tan_scheme;

        return $this;
    }

    /**
     * Gets _iban
     * @return string
     */
    public function getIban()
    {
        return $this->container['_iban'];
    }

    /**
     * Sets _iban
     * @param string $_iban 
     * @return $this
     */
    public function setIban($_iban)
    {
        $this->container['_iban'] = $_iban;

        return $this;
    }

    /**
     * Gets _bic
     * @return string
     */
    public function getBic()
    {
        return $this->container['_bic'];
    }

    /**
     * Sets _bic
     * @param string $_bic 
     * @return $this
     */
    public function setBic($_bic)
    {
        $this->container['_bic'] = $_bic;

        return $this;
    }

    /**
     * Gets _base_account
     * @return bool
     */
    public function getBaseAccount()
    {
        return $this->container['_base_account'];
    }

    /**
     * Sets _base_account
     * @param bool $_base_account 
     * @return $this
     */
    public function setBaseAccount($_base_account)
    {
        $this->container['_base_account'] = $_base_account;

        return $this;
    }

    /**
     * Gets _priority
     * @return float
     */
    public function getPriority()
    {
        return $this->container['_priority'];
    }

    /**
     * Sets _priority
     * @param float $_priority 
     * @return $this
     */
    public function setPriority($_priority)
    {
        $this->container['_priority'] = $_priority;

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


