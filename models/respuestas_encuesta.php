<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "respuestas_encuesta".
 *
 * @property int $id
 * @property string $respuesta
 * @property int $responde_id
 * @property int $pregunta_id
 *
 * @property PreguntasEncuesta $pregunta
 */
class respuestas_encuesta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'respuestas_encuesta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['respuesta', 'responde_id', 'pregunta_id'], 'required'],
            [['respuesta'], 'string'],
            [['responde_id', 'pregunta_id'], 'integer'],
            [['pregunta_id'], 'exist', 'skipOnError' => true, 'targetClass' => PreguntasEncuesta::className(), 'targetAttribute' => ['pregunta_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'respuesta' => 'Respuesta',
            'responde_id' => 'Responde ID',
            'pregunta_id' => 'Pregunta ID',
        ];
    }

    /**
     * Gets query for [[Pregunta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPregunta()
    {
        return $this->hasOne(PreguntasEncuesta::className(), ['id' => 'pregunta_id']);
    }
}
