<?php

use yii\helpers\Html;

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Специалисты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ge-create">
    <div class="row">
		<div class="col-sm-6">
			<div class="box">
				<div class="box-header with-border">
					<div style="float: left">
						<h3 class="box-title">Новый специалист</h3>
					</div>
				</div>
				<div class="box-body">
					<?= $this->render('_form', ['model' => $model]) ?>
				</div>
			</div>
		</div>
	</div>
</div>