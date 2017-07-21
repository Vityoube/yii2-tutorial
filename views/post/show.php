<?php 
//    $this->title='Article'
use app\components\MyWidget;
        ?>

<?php $this->beginBlock('block1'); ?>
<h1>Header</h1>
<?php $this->endBlock(); ?>

<h1>Show Action</h1>

<?php //echo MyWidget::widget(['name'=>'Vasia']);?>


<?php MyWidget::begin() ?>
    <h1>Hello World!</h1>
<?php MyWidget::end() ?>
    
<?php MyWidget::begin() ?>
    <h1>Hello World!</h1>
<?php MyWidget::end() ?>

<?php 
//foreach ($cats as $cat){
//    echo '<ul>';
//        echo '<li>'.$cat->title.'</li>';
//        $products=$cat->products;
//        foreach ($products as $product){
//            echo '<ul>';
//                echo '<li>'.$product->title.'</li>';
//            echo '</ul>';
//        }
//    echo '</ul>';
//} 
?>

<?php //        debug($cats) ?>
<?php //         echo count($cats[0]->products); ?>
<?php //        debug($cats) ?>

<button class="btn btn-success">Click me</button>

<?php // $this->registerJsFile('@web/js/scripts.js',['depends'=>'yii\web\YiiAsset']) ?>
<?php // $this->registerJs("$('.container').append('<p>Party!!!</p>');",\yii\web\View::POS_LOAD) ?>

<?php // $this->registerCss('.container{background: #ccc;}') ?>

<?php 
$js=<<<JS
    $(".btn").click(function(){
        $.ajax({
            url: 'index.php?r=post/index',
            data: { test: '123' },
            type: 'POST',
            success:  function(res){
                console.log(res);
            },
            error: function(){
                alert('Error');
            }
        });
    });
JS;
$this->registerJs($js);
?>