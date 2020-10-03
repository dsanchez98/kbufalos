<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "premios".
 *
 * @property int $id
 * @property string $categoria
 * @property string $ganador
 * @property int $kairish_id
 * @property int $votos
 */
class Premios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'premios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoria', 'ganador', 'kairish_id', 'votos'], 'required'],
            [['kairish_id', 'votos'], 'integer'],
            [['categoria', 'ganador'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoria' => 'Categoria',
            'ganador' => 'Ganador',
            'kairish_id' => 'Kairish ID',
            'votos' => 'Votos',
        ];
    }
}
