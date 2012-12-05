<?php

class m121205_034714_contract extends CDbMigration
{
	public function up()
	{
		$transaction=$this->getDbConnection()->beginTransaction();
		try {
			$this->createTable('contract',array(
				'id'=>'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
				'id_user'=>'INT NOT NULL',
				'type'=>'INT(11) NOT NULL COMMENT '\\\'email\\\'\\n\\\'email_spam\\\'\\n\\\'phone_spam\\\'\\n\\\'mobile\\\'\\n\\\'phone\\\'\\n\\\'fb\\\'\\n\\\'vk\\\'\\n\\\'skype\\\'\\n\\\'qq\\\'\\n\\\'renren\\\'',
				'value'=>'VARCHAR(255) NOT NULL',
				'create_time'=>'TIMESTAMP NULL',
				'update_time'=>'TIMESTAMP NULL'
			));
			$transaction->commit();
		}
		catch(Exception $e) {
			$transaction->rollback();
			return false;
		}
		
	}

	public function down()
	{
		$transaction=$this->getDbConnection()->beginTransaction();
		try {
			$this->dropTable('contract');
			$transaction->commit();
		}
		catch(Exception $e) {
			$transaction->rollback();
			return false;
		}
	}

}