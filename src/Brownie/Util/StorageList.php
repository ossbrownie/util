<?php
/**
 * @category    Brownie/Util
 * @author      Brownie <oss.brownie@gmail.com>
 * @license     http://www.gnu.org/copyleft/lesser.html
 */

namespace Brownie\Util;

/**
 * Storage of data in the form of a list.
 */
class StorageList
{

    /**
     * Data to initialize the list.
     *
     * @var mixed
     */
    private $initData;

    /**
     * List.
     *
     * @var array
     */
    private $list;

    /**
     * Sets incoming values.
     *
     * @param mixed     $initData   Data to initialize the list.
     */
    public function __construct($initData = array())
    {
        $this->setInitData($initData);
    }

    /**
     * Sets data to initialize the list.
     *
     * @param mixed     $initData       Data for initialization.
     *
     * @return self
     */
    private function setInitData($initData)
    {
        $this->initData = $initData;
        return $this;
    }

    /**
     * Gets data to initialize the list.
     *
     * @return mixed
     */
    protected function getInitData()
    {
        return $this->initData;
    }

    /**
     * Gets value of by key name.
     *
     * @param string    $keyName            Key name.
     * @param mixed     $defaultValue       Default value.
     *
     * @return string|mixed
     */
    public function get($keyName, $defaultValue = null)
    {
        $list = $this->toArray();
        $keyName = strtolower($keyName);
        if (empty($list[$keyName])) {
            return $defaultValue;
        }
        return $list[$keyName];
    }

    /**
     * Returns the container as an array.
     *
     * @return array
     */
    public function toArray()
    {
        if (empty($this->list)) {
            $this->initList();
        }
        return $this->list;
    }

    /**
     * Sets the list.
     *
     * @param array     $list   List.
     *
     * @return self
     */
    protected function setList(array $list)
    {
        $this->list = $list;
        return $this;
    }

    /**
     * Initializes and sets the list.
     */
    protected function initList()
    {
        $this->setList($this->getInitData());
    }
}
