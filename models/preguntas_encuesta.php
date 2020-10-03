<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "preguntas_encuesta".
 *
 * @property int $id
 * @property int $encuesta_id
 * @property int $organiza_id
 * @property string $pregunta
 *
 * @property Encuesta $encuesta
 * @property RespuestasEncuesta[] $respuestasEncuestas
 */
class preguntas_encuesta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'preguntas_encuesta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['encuesta_id', 'organiza_id', 'pregunta'], 'required'],
            [['encuesta_id', 'organiza_id'], 'integer'],
            [['pregunta'], 'string', 'max' => 50],
            [['encuesta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Encuesta::className(), 'targetAttribute' => ['encuesta_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'encuesta_id' => 'Encuesta ID',
            'organiza_id' => 'Organiza ID',
            'pregunta' => 'Pregunta',
        ];
    }

    /**
     * Gets query for [[Encuesta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncuesta()
    {
        return $this->hasOne(Encuesta::className(), ['id' => 'encuesta_id']);
    }

    /**
     * Gets query for [[RespuestasEncuestas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRespuestasEncuestas()
    {
        return $this->hasMany(RespuestasEncuesta::className(), ['pregunta_id' => 'id']);
    }
}
