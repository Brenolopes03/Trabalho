$nome = "Breno";
$cargo = "Desenvolvedor | Estudante de Tecnologia";
$telefone = "+55 33 9991-0274";
$email = "breninclb@gmail.com";
$github = "https://github.com/Brenolopes03/Trabalho";
$localizacao = "Brasil";

$sobre = "Olá! Meu nome é Breno e estou construindo minha trajetória na área de tecnologia.<br><br>
Tenho interesse em desenvolvimento, programação e soluções digitais. Busco aprender constantemente, desenvolver projetos práticos e evoluir minhas habilidades profissionais.<br><br>
Sou dedicado, curioso e gosto de resolver problemas usando tecnologia de forma simples, eficiente e criativa.";

$formacoes = [
    [
        "periodo" => "2026 - Atual",
        "curso" => "Curso / TI",
        "instituicao" => "Estacio"
    ],
    [
        "periodo" => "2025 - 2026",
        "curso" => "Ensino superior completo",
        "instituicao" => "Estacio"
    ]
];

$idiomas = [
    ["nome" => "Português", "nivel" => "100%"],
    ["nome" => "Inglês", "nivel" => "60%"]
];

$experiencias = [
    [
        "periodo" => "2026 - Atual",
        "empresa" => "Projetos Pessoais",
        "cargo" => "Estudante / Desenvolvedor Iniciante",
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
    <title>Currículo - <?php echo $nome; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <aside class="left_side">
            <section class="profile_text">
                <div class="img_bx">
                    <img src="<?php echo $foto; ?>" alt="Foto de <?php echo $nome; ?>">
                </div>

                <h1><?php echo $nome; ?><br><span><?php echo $cargo; ?></span></h1>
            </section>

            <section class="contact_info">
                <h2 class="title">Informações de Contato</h2>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone"></i></span>
                        <span class="text"><?php echo $telefone; ?></span>
                    </li>

                    <li>
                        <span class="icon"><i class="fa fa-envelope-o"></i></span>
                        <span class="text"><?php echo $email; ?></span>
                    </li>

                    <li>
                        <span class="icon"><i class="fa fa-linkedin-square"></i></span>
                        <a href="https://<?php echo $linkedin; ?>" target="_blank">
                            <span class="text"><?php echo $linkedin; ?></span>
                        </a>
                    </li>

                    <li>
                        <span class="icon"><i class="fa fa-github"></i></span>
                        <a href="https://<?php echo $github; ?>" target="_blank">
                            <span class="text"><?php echo $github; ?></span>
                        </a>
                    </li>

                    <li>
                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                        <span class="text"><?php echo $localizacao; ?></span>
                    </li>
                </ul>
            </section>

            <section class="contact_info education">
                <h2 class="title">Formação</h2>
                <ul>
                    <?php foreach ($formacoes as $formacao): ?>
                        <li>
                            <h3><?php echo $formacao["periodo"]; ?></h3>
                            <h4><?php echo $formacao["curso"]; ?></h4>
                            <h4><?php echo $formacao["instituicao"]; ?></h4>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section class="contact_info language">
                <h2 class="title">Idiomas</h2>
                <ul>
                    <?php foreach ($idiomas as $idioma): ?>
                        <li>
                            <span class="text"><?php echo $idioma["nome"]; ?></span>
                            <span class="percent">
                                <span style="width: <?php echo $idioma["nivel"]; ?>;"></span>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </aside>

        <section class="right_side">
            <div class="light-dark-mode">
                <div class="trilho" id="trilho" title="Alternar modo claro/escuro">
                    <div class="indicador">
                        <i class="bi bi-brightness-high-fill" id="icone"></i>
                    </div>
                </div>
            </div>

            <section class="about">
                <h2 class="title2">Sobre</h2>
                <p><?php echo $sobre; ?></p>
            </section>

            <section class="about">
                <h2 class="title2">Experiência</h2>

                <?php foreach ($experiencias as $experiencia): ?>
                    <div class="box">
                        <div class="year_company">
                            <h3><?php echo $experiencia["periodo"]; ?></h3>
                            <h3><?php echo $experiencia["empresa"]; ?></h3>
                        </div>

                        <div class="text">
                            <h4><?php echo $experiencia["cargo"]; ?></h4>
                            <p><?php echo $experiencia["descricao"]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>

            <section class="about skills">
                <h2 class="title2">Habilidades Profissionais</h2>

                <?php foreach ($habilidades as $habilidade): ?>
                    <div class="box">
                        <h4><?php echo $habilidade["nome"]; ?></h4>
                        <div class="percent">
                            <span style="width: <?php echo $habilidade["nivel"]; ?>;"></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>

