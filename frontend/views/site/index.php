<?php
/* @var $this yii\web\View */
$this->title = 'Maya Rossa (Мая Егорова) - официальный сайт';
?>
<div class="site-index">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter36736135 = new Ya.Metrika({
                        id:36736135,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/36736135" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <?php
//    echo \common\widgets\DbCarousel::widget([
//        'key'=>'index',
//        'options' => [
//            'class' => 'slide', // enables slide effect
//        ],
//    ])
    ?>

    <div class="jumbotron">
        <h1>Сайт в процессе разрабоки!</h1>

        <p class="lead">Он будет посвещен певице - Мае Егоровой и вскоре будет опубликован.</p>

        <?php
//        echo common\widgets\DbMenu::widget([
//            'key'=>'frontend-index',
//            'options'=>[
//                'tag'=>'p'
//            ]
//        ])
        ?>

    </div>

    <div class="body-content">



    </div>
</div>
