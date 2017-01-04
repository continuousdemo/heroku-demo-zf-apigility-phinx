<?php
namespace PsApiBase\Model\Entity;

/**
 * Contient des m�thodes g�n�riques � toutes les entit�s
 */
abstract class AbstractEntity
{
    /**
     * getArrayCopy
     * @return array
     */
    public function getArrayCopy() {
        return get_object_vars($this);
    }

    /**
     * exchangeArray
     * @param $data
     */
    public function exchangeArray($data) {
        if (is_array($data)) {
            foreach($data as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }
}