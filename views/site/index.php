<?php

/** @var yii\web\View $this */

use miloschuman\highcharts\Highcharts;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?= Highcharts::widget([
        'options'=>'{
      "title": { "text": "Fruit Consumption" },
      "xAxis": {
         "categories": ["Apples", "Bananas", "Oranges"]
      },
      "yAxis": {
         "title": { "text": "Fruit eaten" }
      },
      "series": [
             { "name": "Jane", "data": [1, 0, 4] },
             { "name": "John", "data": [5, 7,3] }
          ]
       }'
    ]); ?>
</div>
