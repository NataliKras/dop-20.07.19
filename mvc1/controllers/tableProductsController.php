<?php

class tableProductsController extends tableController {

    public $table_name = 'products';

    // function __construct($view)
    // {
    //     parent::__construct($view);
    //     global $conf;
    //     $this->view->setNewLayoutPath('views/layouts/mainLayout.php')->setNewViewPath('views/products/');
    //     $this->table=new tableProducts(new mysqli($conf["host"],$conf["user"],$conf["password"],$conf["db"]),$this->table_name);
    //     $this->table->set_page_size(5);
        
    // }
    
    // function actionShowTable()
    // {
    //     $this->table->productQueryPrepare();
    //     parent::actionShowTable();
    // }
    // function actionShowAddForm(){
    //     $this->render("addform",[
    //         'fields'=>array_diff($this->table->get_field(),['id','time']),
    //         'targetURL'=>'?t='.$this->classNameNP().'&a=addrow',
    //         'category'=>$this->table_categories->query()
    //     ]);
    // }
}

?>