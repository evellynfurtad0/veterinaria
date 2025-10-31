<?php
include 'includes/header_adm.php'
?>

<!-- Cabeçalho com imagem e frase de impacto -->
<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Bem-vinda, Gabriela!</h1>
                    <p class="lead fw-normal text-muted mb-5">
                        Agora você está logado. Confira já suas consultas agendadas.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/menina.png" alt="Imagem de animais de estimação" class="img-fluid">
            </div>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container px-5">
        <div class="row gx-5">
            <div class="col-12">
                <h2 class="display-6 mb-4">Consultas Pendentes</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover"
                        style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 255, 0.1); overflow: hidden; border-collapse: collapse;">
                        <thead class="table" style="background-color: #00569d; color: white;">
                            <tr>
                                <th scope="col">NOME CLIENTE</th>
                                <th scope="col">ESPÉCIE</th>
                                <th scope="col">PROCEDIMENTO</th>
                                <th scope="col">DATA</th>
                                <th scope="col">HORÁRIO</th>
                                <th scope="col">INFORMAÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center">Zé Felipe</td>
                                <td>Cachorro</td>
                                <td>Consulta de Rotina</td>
                                <td>31/10/2025</td>
                                <td>10:00</td>
                                <td>
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#infoModal">
                                        Saiba mais
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal com informações do Pet -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#00569d; color:white;">
                <h5 class="modal-title" id="infoModalLabel">Informações do Pet</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <table class="table table-striped table-hover">
                    <thead class="table-light">
                        <tr>
                            <th style="background-color:blue;">ID</th>
                            <th style="background-color:blue;">Nome Pet</th>
                            <th style="background-color:blue;">Dono</th>
                            <th style="background-color:blue;">Espécie</th>
                            <th style="background-color:blue;">Raça</th>
                            <th style="background-color:blue;">Idade</th>
                            <th style="background-color:blue;">Peso</th>
                            <th style="background-color:blue;">Sexo</th>
                            <th style="background-color:blue;">Procedimento</th>
                            <th style="background-color:blue;">Data</th>
                            <th style="background-color:blue;">Horário</th>
                            <th style="background-color:blue;">Observações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Zé Felipe</td>
                            <td>Virginia</td>
                            <td>Cachorro</td>
                            <td>Labrador Retriever</td>
                            <td>5 anos</td>
                            <td>30kg</td>
                            <td>Fêmea</td>
                            <td>Consulta de Rotina</td>
                            <td>31/10/2025</td>
                            <td>10:00</td>
                            <td>Cão Bravo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:blue;">Fechar</button>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
