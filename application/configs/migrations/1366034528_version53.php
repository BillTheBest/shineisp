<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version53 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('products', 'server_group_id', 'integer', '4', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('products', 'server_group_id');
    }
}