<?php

namespace common\db;

use yii\data\ActiveDataProvider;

/**
 * Class ActiveQuery
 * @package common\db
 */
class ActiveQuery extends \yii\db\ActiveQuery
{
    /**
     * @param int $page
     * @param int $pageSize
     * @return array
     */
    public function list(int $page = 1, int $pageSize = 20): array
    {
        $dataProvider = new ActiveDataProvider([
            'query' => $this,
            'pagination' => [
                'page' => $page - 1,
                'pageSize' => $pageSize,
            ],
        ]);

        return [
            'page' => $page,
            'pageSize' => $pageSize,
            'count' => $dataProvider->getTotalCount(),
            'items' => $dataProvider->getModels(),
        ];
    }
}