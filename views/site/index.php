<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Тестовый проект комменариев';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Статья!</h1>

        <p class="lead">Тестовая статья для комментариев.</p>

        
    </div>

    <div class="body-content">
      
        <div class="row">
            
            
                <a ><h3>Любя, съешь щипцы, — вздохнёт мэр, — кайф жгуч. 
                    Шеф взъярён тчк щипцы с эхом гудбай Жюль. Эй, жлоб!</h3></a>
<h5>asdasdasds</h5>
                <p >Любя, съешь щипцы, — вздохнёт мэр, — кайф жгуч. 
                    Шеф взъярён тчк щипцы с эхом гудбай Жюль. Эй, жлоб! 
                    Где туз? Прячь юных съёмщиц в шкаф. Экс-граф? Плюш изъят. Бьём чуждый цен хвощ! 
                    Эх, чужак! Общий съём цен шляп (юфть) — вдрызг! Любя, съешь щипцы, — вздохнёт мэр,
                    — кайф жгуч. Шеф взъярён тчк щипцы с эхом гудбай Жюль. Эй, жлоб! Где туз? Прячь
                    юных съёмщиц в шкаф. Экс-граф? Плюш изъят. Бьём чуждый цен хвощ! Эх, чужак! Общий
                    съём цен шляп (юфть) — вдрызг! Любя, съешь щипцы, — вздохнёт мэр, — кайф жгуч. 
                    Шеф взъярён тчк щипцы с эхом гудбай Жюль. Эй, жлоб! Где туз? Прячь юных съёмщиц в
                    шкаф. Экс-граф? Плюш изъят. Бьём чуждый цен хвощ! Эх, чужак! Общий съём цен шляп 
                    (юфть) — вдрызг! Любя, съешь щипцы, — вздохнёт мэр, — кайф жгуч. Шеф взъярён тчк
                    щипцы с эхом гудбай Жюль. Эй, жлоб! Где туз? Прячь юных съёмщиц в шкаф. Экс-граф? 
                    Плюш изъят. Бьём чуждый цен хвощ! Эх, чужак! Общий съём цен шляп (юфть) — вдрызг!
                    Любя, съешь щипцы, — вздохнёт мэр, — кайф жгуч. Шеф взъярён тчк щипцы с эхом гудбай
                    Жюль. Эй, жлоб! Где туз? Прячь юных съёмщиц в шкаф. Экс-граф? Плюш изъят. Бьём чуждый цен.</p>
                
                <p >Шеф взъярён тчк щипцы с эхом гудбай Жюль. Эй, жлоб! Где туз? Прячь юных съёмщиц в
                    шкаф. Экс-граф? Плюш изъят. Бьём чуждый цен хвощ! Эх, чужак! Общий съём цен шляп 
                    (юфть) — вдрызг! Любя, съешь щипцы, — вздохнёт мэр, — кайф жгуч. Шеф взъярён тчк
                    щипцы с эхом гудбай Жюль. Эй, жлоб! Где туз? Прячь юных съёмщиц в шкаф. Экс-граф? 
                    Плюш изъят. Бьём чуждый цен хвощ! Эх, чужак! Общий съём цен шляп (юфть) — вдрызг!
                   </p>
                <!-- <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            -->
            <br />
            <h4>Комментарии</h4>
            
                    <?php $i=0;
                    foreach ($model as $m){
                         if($i==3) $i=0;
                        ?>
            <div class="offset<?php echo $i*2; ?>">
                <img width="100" src="img/1.gif"  />
                <div style="margin-left: 120px; margin-top: -100px; min-height:140px;" ><a > <?php echo $m->attributes[user_name]; ?> </a>
                    <?php echo $m->attributes[body]; ?>
                </div>
            </div>
                    <?php  //  var_dump($m->attributes);
                    $i++;}?>
            <div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($new, 'id')->textInput() ?>

    <?= $form->field($new, 'body')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($new, 'content_id')->textInput() ?>

    <?= $form->field($new, 'created')->textInput() ?>

    <?= $form->field($new, 'user_name')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($new->isNewRecord ? 'Create' : 'Update', ['class' => $new->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
        </div>
       
    </div>
</div>
