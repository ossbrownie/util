<?php
/**
 * @category    Brownie/Util
 * @author      Brownie <oss.brownie@gmail.com>
 * @license     https://opensource.org/licenses/MIT
 */

namespace Brownie\Util;

/**
 * Storage of data in the registry with the ability to write and read data.
 */
class Registry
{

    /**
     * The name of the registry.
     *
     * @var null|string
     */
    protected $registryName = null;

    /**
     * Registry.
     *
     * @var array
     */
    private $registry = array();

    /**
     * Sets the input data.
     *
     * @param null|string   $registryName   The name of the registry.
     */
    public function __construct($registryName = null)
    {
        $this->setRegistryName($registryName);
    }

    /**
     * Sets the name of the registry.
     * Returns the current object.
     *
     * @param string    $registryName   The name of the registry.
     *
     * @return self
     */
    private function setRegistryName($registryName)
    {
        $this->registryName = $registryName;
        return $this;
    }

    /**
     * Sets the value in the registry by key.
     * Returns the current object.
     *
     * @param mixed     $value      Value in the registry.
     * @param mixed     $key        Key in the registry. (If you do not specify, something then PHP is assigned.)
     *
     * @return self
     */
    public function set($value, $key = null)
    {
        if (is_null($key)) {
            $this->registry[] = $value;
        } else {
            $this->registry[$key] = $value;
        }
        return $this;
    }

    /**
     * Returns the value by key from the registry.
     *
     * @param mixed     $key        Key in the registry.
     * @param mixed     $default    The default value.
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if ($this->has($key)) {
            return $this->registry[$key];
        }
        return $default;
    }

    /**
     * Returns the status of record availability in the registry by key.
     *
     * @param mixed     $key        Key in the registry.
     *
     * @return bool
     */
    public function has($key)
    {
        return isset($this->registry[$key]);
    }

    /**
     * Delete an record from the registry by key.
     * Returns the delete status.
     *
     * @param mixed     $key        Key in the registry.
     *
     * @return bool
     */
    public function delete($key)
    {
        if ($this->has($key)) {
            unset($this->registry[$key]);
            return true;
        }
        return false;
    }

    /**
     * Gets the number of records in the registry.
     *
     * @return int
     */
    public function count()
    {
        return count($this->toArray());
    }

    /**
     * Gets the registry as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->registry;
    }

    /**
     * Gets the name of the registry.
     *
     * @return null|string
     */
    public function getRegistryName()
    {
        return $this->registryName;
    }
}
