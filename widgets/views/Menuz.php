<?php

use app\models\Thelink;
use yii\helpers\Url;



/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketIsi */
/* @var $form yii\widgets\ActiveForm */
$data = Thelink::find()->all();
// $w = "active";

?>

<?php foreach ($data as $item): ?>
    <a class="dropdown-item" href="<?= $item->alamat_link?>"><?= $item->caption ?> </a>
<?php endforeach; ?>

