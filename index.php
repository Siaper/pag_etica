<!DOCTYPE html>
<html lang="en">
<!-- Color principal #F8F9FA, color secundario #595794, color texto #595794-->

<?php include './partials/head.php'; ?>

<body id="page-top">

    <?php include './partials/navigation.php'; ?>

    <!-- Banner-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-#797A7A font-weight-bold">Ética y Deontología en la informática</h1>
                    <hr class="divider my-4" style="border-color:#595794" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-#797A7A-75 font-weight-light mb-5">"Después de tantos años estudiando la ética, he llegado a la conclusión de que toda ella se resume en tres virtudes: coraje para vivir, generosidad para convivir, y prudencia para sobrevivir" -Fernando Savater.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #595794;" href="./etica.php">Explora</a>
                </div>
            </div>
        </div>
    </header>

    <?php include './partials/footer.php'; ?>

    <div class="row">
        <div class="col-md-4 col-sm-12 button-fixed">
            <div class="p-3 pb-4 bg-custom text-white" style="border-radius: 22px;">
                <div class="row">
                    <div class="col-10">
                        <h2>Digital Workers</h2>
                    </div>
                    <div class="col-2 text-center">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <pre id="element" style="color: white; font-size: medium; font-family: Merryweather;" >Valores que traen éxito
                    
Miguel Humberto Bruno Alfonzo
Aníbal José Velásquez Carrión
                </pre>
                <button type="button" id="close" class="btn btn-danger w-100" style="background-color: #9f91f3; border-color: #9f91f3;">Cerrar</button>
            </div>
        </div>
    </div>
    <?php include './partials/bootstrap_scripts.php'; ?>

</body>

</html>