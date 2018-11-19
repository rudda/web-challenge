<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estabelecimento".
 *
 * @property int $id
 * @property string $nome
 * @property string $cnpj
 * @property double $latitude
 * @property double $longitude
 * @property string $endereco
 */
class Estabelecimento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estabelecimento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome','endereco','cnpj','latitude','longitude'],'required'],
            [['latitude', 'longitude'], 'number'],
            [['nome', 'endereco'], 'string', 'max' => 40],
            [['cnpj'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Estabelecimento',
            'nome' => 'Nome Estabelecimento',
            'cnpj' => 'Cnpj',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'endereco' => 'Endereço',
        ];
    }

    public function fields()
    {
        return [
            'id',
            'name' => 'nome',
            'CNPJ' =>'cnpj',
            'lat' => 'latitude',
            'long' => 'longitude'
        ];
    }
}
