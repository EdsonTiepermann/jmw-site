<style>
     * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

        /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
    }
</style>
<body style="padding: 0; margin: 0;">

<?php include 'config.php'; ?>
<?php include_once 'header.php'; ?>

<main>
    <?php include 'slide.php'; ?>

    <div class="container container-fluid py-4" >
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">JMW</h1>
                <p class="lead fw-normal">Referência Nacional em Solução Industrial.</p>
                <a class="btn btn-outline-secondary" href="#">Saiba mais vendas</a>
                <a class="btn btn-outline-secondary" href="#">Saiba mais locações</a>
            </div>
        </div>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 bg-dark text-white rounded-3">
                    <h2>Vendas</h2>
                    <p>Trabalhamos com kits com alta resistência, temos kits novos e usados, consulte o nosso estoque através dos nossos consultores</p>
                    <button class="btn btn-outline-light" type="button">Example button</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Locações</h2>
                    <p>Lugamos por hora, diária, semanal ou mensal, entre em contato com um de nossos representantes</p>
                    <button class="btn btn-outline-secondary" type="button">Example button</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once 'cardAnimation.php'; ?>
<?php include_once 'clients.php'; ?>

<?php include_once 'info-parallax.php'; ?>

<?php include_once 'formEmail.php'; ?>

<?php include 'footer.php'; ?>
</body>
