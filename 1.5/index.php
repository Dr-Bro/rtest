<?php 
//PHP >=7.1
/**
 * Class Item
 */
class Item
{
    /**
     * @var array
     */
    private $fields;
    /**
     * @var Item
     */
    private $parent;
    /**
     * Возвращает массив, например, строк
     *
     * @return array
     */

    public function setFields($fields){

             $this->fields = $fields;
    }

    public function setParents():void{

            $this->parent = new Item;
    }


    public function getFields(): array
    {
        return $this->fields;
    }
    /**
     * Возвращает родителя если он установлен, или null если его не имеется
     *
     * @return Item|null
     */
    public function getParent(): ?Item
    {
        return $this->parent;
    }
}

$res = new Item;
$res::setFields(array(1,2,4,8));
// $res::setParents();
$res->getFields();
 ?>