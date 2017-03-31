<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $name
 * @property string $nickname
 * @property string $email
 * @property string $home_add
 * @property string $gender
 * @property string $cpnum
 * @property string $comments
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'nickname', 'email', 'home_add', 'gender', 'cpnum', 'comments'], 'required'],
            [['nickname', 'home_add', 'gender', 'comments'], 'string'],
            [['cpnum'], 'integer'],
            [['name', 'email'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'home_add' => 'Home Add',
            'gender' => 'Gender',
            'cpnum' => 'Cellphone number',
            'comments' => 'Comments',
        ];
    }
}
