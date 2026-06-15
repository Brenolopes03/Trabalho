<?php
$nome = "Breno";
$foto = "perfil.png";

$sobre = "Oie! Meu nome é Breno e estou construindo minha trajetória na área de tecnologia.

Tenho interesse em desenvolvimento, programação e soluções digitais. Busco aprender constantemente, desenvolver projetos práticos e evoluir minhas habilidades profissionais.

Sou dedicado quando a questão é tecnologia, gosto de resolver problemas usando tecnologia de forma simples, eficiente e criativa.";

$idiomas = [
    ["nome" => "Português", "nivel" => "100%"],
    ["nome" => "Inglês", "nivel" => "60%"]
];

$experiencias = [
    [
        "periodo" => "2026 - Atual",
        "empresa" => "Projetos Pessoais",
        "cargo" => "Estudante da Estácio / Desenvolvedor Iniciante",
        "descricao" => "Desenvolvimento de projetos práticos para aprendizado, criação de páginas web, estudo de programação e aplicação de conceitos de tecnologia em soluções reais."
    ],
    [
        "periodo" => "2025 - 2026",
        "empresa" => "Aprendizado em Tecnologia",
        "cargo" => "Estudos em Programação",
        "descricao" => "Estudos voltados para lógica de programação, HTML, CSS, JavaScript e construção de páginas profissionais para portfólio e currículo online."
    ]
];

$habilidades = [
    ["nome" => "HTML", "nivel" => "85%"],
    ["nome" => "CSS", "nivel" => "80%"],
    ["nome" => "JavaScript", "nivel" => "65%"],
    ["nome" => "GitHub", "nivel" => "70%"]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo - <?php echo $nome; ?></title>

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<div class="container">

    <!-- LADO ESQUERDO -->
    <div class="left_side">

        <img src="<?php echo $foto; ?>" alt="Foto de <?php echo $nome; ?>" class="profile-pic">

        <h2 style="text-align:center; margin-top:15px;">
            <?php echo $nome; ?>
        </h2>

        <div class="contact_info language">
            <h3 class="title">Idiomas</h3>

            <ul>
                <?php foreach($idiomas as $idioma): ?>
                <li>
                    <span class="text">
                        <?php echo $idioma["nome"]; ?>
                    </span>

                    <span class="percent">
                        <div style="width: <?php echo $idioma["nivel"]; ?>;"></div>
                    </span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

    <!-- LADO DIREITO -->
    <div class="right_side">

        <div class="light-dark-mode">
            <div class="trilho" id="trilho">
                <div class="indicador">
                    <i class="bi bi-brightness-high-fill" id="icone"></i>
                </div>
            </div>
        </div>

        <!-- SOBRE -->
        <div class="about">
            <h2 class="title2">Sobre</h2>

            <p>
                <?php echo nl2br($sobre); ?>
            </p>
        </div>

        <!-- EXPERIÊNCIA -->
        <div class="about">
            <h2 class="title2">Experiência</h2>

            <?php foreach($experiencias as $exp): ?>
            <div class="box">

                <div class="year_company">
                    <h5><?php echo $exp["periodo"]; ?></h5>
                    <h5><?php echo $exp["empresa"]; ?></h5>
                </div>

                <div class="text">
                    <h4><?php echo $exp["cargo"]; ?></h4>

                    <p>
                        <?php echo $exp["descricao"]; ?>
                    </p>
                </div>

            </div>
            <?php endforeach; ?>

        </div>

        <!-- HABILIDADES -->
        <div class="about skills">
            <h2 class="title2">Habilidades Profissionais</h2>

            <?php foreach($habilidades as $habilidade): ?>
            <div class="box">

                <h4>
                    <?php echo $habilidade["nome"]; ?>
                </h4>

                <div class="percent">
                    <div style="width: <?php echo $habilidade["nivel"]; ?>;"></div>
                </div>

            </div>
            <?php endforeach; ?>

        </div>

    </div>

</div>

<script src="script.js"></script>

</body>
</html>
