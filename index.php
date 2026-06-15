<?php
$nome = "Breno";
$cargo = "Desenvolvedor | Estudante de Tecnologia";
$telefone = "+55 33 9991-0274";
$email = "breninclb@gmail.com";
$github = "https://github.com/Brenolopes03/Trabalho";
$linkedin = "https://www.linkedin.com/in/breno-lopes-bb6409412?trk=contact-info";
$foto = "perfil.png";
$localizacao = "Brasil";

$sobre = "Oie! Meu nome é Breno e estou construindo minha trajetória na área de tecnologia.<br><br>
Tenho interesse em desenvolvimento, programação e soluções digitais. Busco aprender constantemente, desenvolver projetos práticos e evoluir minhas habilidades profissionais.<br><br>
Sou dedicado quando a questão é tecnologia, gosto de resolver problemas usando tecnologia de forma simples, eficiente e criativa.";

$formacoes = [
    ["periodo" => "2026 - Atual", "curso" => "Curso / TI", "instituicao" => "Estácio"],
    ["periodo" => "2025 - 2026", "curso" => "Ensino superior completo", "instituicao" => "Estácio"]
];

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
    ["nome" => "PHP", "nivel" => "70%"],
    ["nome" => "GitHub", "nivel" => "70%"]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo - <?php echo htmlspecialchars($nome); ?></title>
    
    <!-- Links para os ícones funcionarem (Font Awesome e Bootstrap Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
        <!-- LADO ESQUERDO (LEFT SIDE) -->
        <aside class="left_side">
            <div class="profile_text">
                <img src="<?php echo $foto; ?>" alt="Foto do perfil Breno" class="profile-pic">
                <h2><?php echo htmlspecialchars($nome); ?><br><span><?php echo htmlspecialchars($cargo); ?></span></h2>
            </div>

            <!-- Seção de Contato dinâmica adicionada aqui -->
            <div class="contact_info">
                <h3 class="title">Contato</h3>
                <ul>
                    <li><i class="fa fa-phone"></i> <?php echo htmlspecialchars($telefone); ?></li>
                    <li><i class="fa fa-envelope"></i> <?php echo htmlspecialchars($email); ?></li>
                    <li><i class="fa fa-linkedin"></i> <a href="<?php echo $linkedin; ?>" target="_blank">LinkedIn</a></li>
                    <li><i class="fa fa-github"></i> <a href="<?php echo $github; ?>" target="_blank">GitHub</a></li>
                    <li><i class="fa fa-map-marker"></i> <?php echo htmlspecialchars($localizacao); ?></li>
                </ul>
            </div>

            <div class="contact_info education">
                <h3 class="title">Formação</h3>
                <ul>
                    <?php foreach ($formacoes as $f): ?>
                    <li>
                        <h5><?php echo $f["periodo"]; ?></h5>
                        <h4><?php echo $f["curso"]; ?></h4>
                        <h4><?php echo $f["instituicao"]; ?></h4>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="contact_info language">
                <h3 class="title">Idiomas</h3>
                <ul>
                    <?php foreach ($idiomas as $i): ?>
                    <li>
                        <span class="text"><?php echo $i["nome"]; ?></span>
                        <span class="percent">
                            <div style="width: <?php echo $i["nivel"]; ?>;"></div>
                        </span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>

        <!-- LADO DIREITO (RIGHT SIDE) -->
        <section class="right_side">
            <div class="light-dark-mode">
                <div class="trilho" id="trilho">
                    <div class="indicador">
                        <i class="bi bi-brightness-high-fill" id="icone"></i>
                    </div>
                </div>
            </div>

            <div class="about">
                <h2 class="title2">Sobre</h2>
                <p><?php echo $sobre; ?></p>
            </div>

            <div class="about">
                <h2 class="title2">Experiência</h2>
                <?php foreach ($experiencias as $e): ?>
                <div class="box">
                    <div class="year_company">
                        <h5><?php echo $e["periodo"]; ?></h5>
                        <h5><?php echo $e["empresa"]; ?></h5>
                    </div>
                    <div class="text">
                        <h4><?php echo $e["cargo"]; ?></h4>
                        <p><?php echo $e["descricao"]; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="about skills">
                <h2 class="title2">Habilidades Profissionais</h2>
                <?php foreach ($habilidades as $h): ?>
                <div class="box">
                    <h4><?php echo $h["nome"]; ?></h4>
                    <div class="percent">
                        <div style="width: <?php echo $h["nivel"]; ?>;"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </div> 

    <!-- Script do Modo Escuro no final da página -->
    <script src="script.js"></script>
</body>
</html>
