<?php
/* @var $this yii\web\View */
use yii\widgets\LinkPager;
?>
<div class="content-section-a"style="background-color:white;"  >

<div class="container">
    <div class="row">
        <div class="col-lg-5 col-sm-6">
           
            <div class="clearfix"></div>

<?php

    foreach($news as $blog){
        
        echo '<h2>'.'<a href='.'index.php?r=news%2Fnews-detail&id_news='.$blog->id_news.'>'.$blog->judul.'</a>'.'</h2>';
        echo '<p><span class="label label-danger">'.$blog->date.'</span></p>';
        echo '<p>'.substr($blog->konten,0,100).'....</p>';
        echo '<a class="btn btn-success" href='.'index.php?r=news%2Fnews-detail&id_news='.$blog->id_news.'>'.'lanjutkan membaca'.'</a>';
        echo '<br>';
        echo '<hr>';
    }
    
?>
