<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "p_ranking".
 *
 * @property int $id
 * @property int $puntos
 * @property int $t_ganados
 * @property int $p_ganados
 * @property int $p_perdidos
 * @property int $user_id
 */
class Ranking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'p_ranking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['puntos', 't_ganados', 'p_ganados', 'p_perdidos', 'user_id'], 'required'],
            [['puntos', 't_ganados', 'p_ganados', 'p_perdidos', 'user_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'puntos' => 'Puntos',
            't_ganados' => 'T Ganados',
            'p_ganados' => 'P Ganados',
            'p_perdidos' => 'P Perdidos',
            'user_id' => 'User ID',
        ];
    }
}
