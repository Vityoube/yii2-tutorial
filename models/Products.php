<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $title
 * @property integer $alias
 * @property string $content
 * @property integer $parent
 *
 * @property Categories $parent0
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'parent'], 'required'],
            [['alias', 'parent'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['content'], 'string', 'max' => 200],
            [['title'], 'unique'],
            [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['parent' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'alias' => 'Alias',
            'content' => 'Content',
            'parent' => 'Parent',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent0()
    {
        return $this->hasOne(Categories::className(), ['id' => 'parent']);
    }
}
