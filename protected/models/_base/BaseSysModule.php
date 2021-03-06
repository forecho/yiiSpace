<?php

/**
* This is the model base class for the table "sys_module".
* DO NOT MODIFY THIS FILE! It is automatically generated by giix.
* If any changes are necessary, you must set or override the required
* property or method in class "SysModule".
*
* Columns in table "sys_module" available as properties of the model,
* and there are no model relations.
*
* @property string $id
* @property string $module_id
* @property string $title
* @property string $vendor
* @property string $version
* @property string $dependencies
* @property string $ctime
*
*/
abstract class BaseSysModule extends YsActiveRecord {

public static function model($className=__CLASS__) {
return parent::model($className);
}

public function tableName() {
return 'sys_module';
}

public static function representingColumn() {
return 'module_id';
}

public function rules() {
return array(
array('module_id, version', 'length', 'max'=>32),
array('title, dependencies', 'length', 'max'=>255),
array('vendor', 'length', 'max'=>64),
array('ctime', 'length', 'max'=>11),
array('module_id, title, vendor, version, dependencies, ctime', 'default', 'setOnEmpty' => true, 'value' => null),
array('id, module_id, title, vendor, version, dependencies, ctime', 'safe', 'on'=>'search'),
);
}

public function relations() {
return array(
);
}

public function pivotModels() {
return array(
);
}

public function attributeLabels() {
return array(
'id' => Yii::t('sys_module', 'id'),
'module_id' => Yii::t('sys_module', 'module_id'),
'title' => Yii::t('sys_module', 'title'),
'vendor' => Yii::t('sys_module', 'vendor'),
'version' => Yii::t('sys_module', 'version'),
'dependencies' => Yii::t('sys_module', 'dependencies'),
'ctime' => Yii::t('sys_module', 'ctime'),
);
}

public function search() {
$criteria = new CDbCriteria;

$criteria->compare('id', $this->id, true);
$criteria->compare('module_id', $this->module_id, true);
$criteria->compare('title', $this->title, true);
$criteria->compare('vendor', $this->vendor, true);
$criteria->compare('version', $this->version, true);
$criteria->compare('dependencies', $this->dependencies, true);
$criteria->compare('ctime', $this->ctime, true);

return new CActiveDataProvider($this, array(
'criteria' => $criteria,
));
}
}