<html>
<style>
    table.detail-view th {
        width: 25%;
        font-size: small;
    }

    table.detail-view td {
        width: 75%;
        font-size: small;
    }


</style>

<?$model = \app\models\Vacancy;?>
<?= \yii\widgets\DetailView::widget([
    'model' => $model,
    'attributes' => [
        //'id',
        //'company_id',
        'company.name',
        'position',
        'description:ntext',
        'company.email',
        'company.address',
        'company.location',
        //'start_date',
        'expired',
        // 'status',
        ['name' => 'lihat',
            'value' => \yii\helpers\Html::a('View', ['vacancy/view', 'id' => $model->id]),
            'attribute' => 'url',
            'format' => 'html',
        ],
    ],
]) ?>
<hr/>
</html>
