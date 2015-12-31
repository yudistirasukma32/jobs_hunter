<html>
<style>table.detail-view th {
        width: 25%;
    }

    table.detail-view td {
        width: 75%;
    }
</style>

<?$model = \app\models\Educations;?>
<?= \yii\widgets\DetailView::widget([
    'model' => $model,
    'attributes' => [
        'institution',
        'major',
        'graduated',
    ],
]) ?>

</html>
