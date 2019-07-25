<?php

class tableProducts extends DB_entity {

    // protected $table_name2;

    // function __construct($link, $table_name, $table_name2 = null)
    // {
    //     parent::__construct($link, $table_name);
    //     $this->table_name2 = $table_name2;
    //     $this->current_select['FROM'] = ($table_name2 == null) ? $this->table_name : $this->table_name.", ".$this->table_name2;
    // }
    function productQueryPrepare()
    {
        $this->current_select['SELECT']='products.id AS id,products.name AS product_name,products.Idescription,products.price,products.count,category.name';
        $this->current_select['FROM']='category,products';
        $this->current_select['WHERE']='category.id=products.category_id';
        return $this;
    }
    function set_table_name($table_name){
        $this->current_select['FROM']=($this->table_name=$table_name);
        return $this;
    }
}