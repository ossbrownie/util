<?php
/**
 * @category    Brownie/Util
 * @author      Brownie <oss.brownie@gmail.com>
 * @license     http://www.gnu.org/copyleft/lesser.html
 */

namespace Brownie\Util;

use Brownie\Util\Exception\UndefinedMethodException;

/**
 * Data storage in the form of an associative array.
 */
class StorageArray
{

    /**
     * List of supported fields.
     *
     * @var array
     */
    protected $fields = array();

    /**
     * Sets the incoming values.
     *
     * @param array     $fields             Set values list
     * @param bool      $isReinitialize     Reinitialization flag.
     */
    public function __construct($fields = array(), $isReinitialize = false)
    {
        if ($isReinitialize) {
            $this->initFields($fields);
        } else {
            foreach ($fields as $key => $value) {
                $method = 'set' . ucfirst($key);
                $this->$method($value);
            }
        }
    }

    /**
     * Call processing methods Set and Get.
     *
     * @param string    $name       Name.
     * @param mixed     $values     Value.
     *
     * @return mixed
     *
     * @throws UndefinedMethodException
     */
    public function __call($name, $values)
    {
        $method = substr($name, 0, 3);
        $nameField = lcfirst(substr($name, 3));
        if (!array_key_exists($nameField, $this->fields)) {
            throw new UndefinedMethodException('Call to undefined method ' . $name);
        }
        return $this->$method($nameField, $values);
    }

    /**
     * Initialization of supported fields.
     * Returns the current object.
     *
     * @param array     $fields     List of supported fields.
     *
     * @return self
     */
    private function initFields(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Sets values in the storage.
     * Returns the current object.
     *
     * @param string    $name       Name.
     * @param mixed     $values     Value.
     *
     * @return self
     */
    private function set($name, $values)
    {
        $this->fields[$name] = $values[0];
        return $this;
    }

    /**
     * Gets the values from the storage.
     *
     * @param string    $name   Name
     *
     * @return mixed
     */
    private function get($name)
    {
        return $this->fields[$name];
    }

    /**
     * Returns the storage as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->fields;
    }
}
