<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Torneos;

/**
 * TorneosSearch represents the model behind the search form of `app\models\Torneos`.
 */
class TorneosSearch extends Torneos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'premio', 'organiza_id', 'ganador', 'nparticipantes'], 'integer'],
            [['nombre', 'fecha', 'lugar', 'categoría'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Torneos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'premio' => $this->premio,
            'organiza_id' => $this->organiza_id,
            'ganador' => $this->ganador,
            'fecha' => $this->fecha,
            'nparticipantes' => $this->nparticipantes,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'lugar', $this->lugar])
            ->andFilterWhere(['like', 'categoría', $this->categoría]);

        return $dataProvider;
    }
}
