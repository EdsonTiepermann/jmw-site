<?php include 'config.php'; ?>

<div id="data-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 circle-box">
                <div id="circleA"></div>
                <p>Conjuntos vendidos</p>
            </div>
            <div class="col-md-3 circle-box">
                <div id="circleB"></div>
                <p>Conjuntos alugados</p>
            </div>
            <div class="col-md-3 circle-box">
                <div id="circleC"></div>
                <p>Projetos entregues</p>
            </div>
            <div class="col-md-3 circle-box">
                <div id="circleD"></div>
                <p>Clientes satisfeitos</p>
            </div>
        </div>
    </div>
</div>

<script>
    function animationCircles(container, duration, times) {
        
        let circleA = new ProgressBar.Circle(container, {
            color: '#64DAF9',
            strokeWidth: 10,
            duration: duration,
            from: {
                color: '#AAA'
            },
            to: {
                color: '##65DAF9'
            },

            step: function(state, circle) {

                circle.path.setAttribute('stroke', state.color);

                let value = Math.round(circle.value() * times);
                
                circle.setText(value);
            }
        });

        let dataAreaOffset = $('#data-area').offset();
        let stop = 0;


        $(window).scroll(function(e) {
            let scroll = $(window).scrollTop();

            if(scroll > (dataAreaOffset.top - 500) && stop == 0) {
                circleA.animate(1.0);
                
            }
        });

    }

    $(document).ready(function() {
        // iniciando o loader quando o usuário chega no elemento

        let containerA = document.getElementById('circleA');
        let containerB = document.getElementById('circleB');
        let containerC = document.getElementById('circleC');
        let containerD = document.getElementById('circleD');

        animationCircles(containerA, 1000, 100);
        animationCircles(containerB, 1400, 1200);
        animationCircles(containerC, 900, 10);
        animationCircles(containerD, 1800, 3579);

        //parallax 
        setTimeout(function() {
            // $('#data-area').parallax({imageSrc: 'parallax1.png'});
            $('#data-area').parallax({imageSrc: './img/arte.jpg'});

        }, 250);
    });
</script>