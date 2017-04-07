<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $name
 * @property string $nickname
 * @property string $email
 * @property string $home_add
 * @property string $gender
 * @property string $cpnum
 * @property string $comments
 *
 * @property Trivia[] $trivias
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'nickname', 'email', 'gender', 'cpnum'], 'required'],
            [['nickname', 'home_add', 'gender', 'comments'], 'string'],
            [['cpnum'], 'integer'],
            ['email', 'email'],
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
            'cpnum' => 'Cpnum',
            'comments' => 'Comments',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrivias()
    {
        return $this->hasMany(Trivia::className(), ['profile_id' => 'id']);
    }
}
