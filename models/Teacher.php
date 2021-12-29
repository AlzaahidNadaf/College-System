<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $teacher_id
 * @property string $name
 * @property string $birthday
 * @property string $sex
 * @property string $religion
 * @property string $blood_group
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'birthday', 'sex', 'religion', 'blood_group', 'address', 'phone', 'email'], 'required'],
            [['name', 'birthday', 'sex', 'religion', 'blood_group', 'address', 'phone', 'email'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'name' => 'Name',
            'birthday' => 'Birthday',
            'sex' => 'Sex',
            'religion' => 'Religion',
            'blood_group' => 'Blood Group',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
