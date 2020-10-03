<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "torneos".
 *
 * @property int $id
 * @property string $nombre
 * @property int $premio
 * @property int $organiza_id
 * @property int $ganador
 * @property string $fecha
 * @property string $lugar
 * @property int $nparticipantes
 * @property string $categoría
 */
class Torneos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'torneos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'premio', 'fecha', 'lugar', 'categoría'], 'required'],
            [['id', 'premio', 'organiza_id', 'ganador', 'nparticipantes'], 'integer'],
            [['fecha'], 'safe'],
            [['nombre'], 'string', 'max' => 125],
            [['lugar'], 'string', 'max' => 50],
            [['categoría'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'premio' => 'Premio',
            'organiza_id' => 'Organiza ID',
            'ganador' => 'Ganador',
            'fecha' => 'Fecha',
            'lugar' => 'Lugar',
            'nparticipantes' => 'Nparticipantes',
            'categoría' => 'Categoría',
        ];
    }
}
