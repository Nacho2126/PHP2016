<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "GastonTable".
 *
 * @property string $Modelo
 * @property integer $Año
 * @property integer $Mes
 * @property integer $Dia
 */
class GastonTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'GastonTable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Modelo', 'Año', 'Mes', 'Dia'], 'required'],
            [['Año', 'Mes', 'Dia'], 'integer'],
            [['Modelo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Modelo' => 'Modelo',
            'Año' => 'Año',
            'Mes' => 'Mes',
            'Dia' => 'Dia',
        ];
    }
}
