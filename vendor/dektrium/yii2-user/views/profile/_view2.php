<html>
<style>table.detail-view th {
        width: 25%;
    }

    table.detail-view td {
        width: 75%;
    }
</style>

<?$model = \app\models\Experience;?>
<?= \yii\widgets\DetailView::widget([
    'model' => $model,
    'attributes' => [
        'company',
        'position',
        'startdate',
        'enddate',
        'location',
        'salary',
        'desc',

    ],
]) ?>

</html>
