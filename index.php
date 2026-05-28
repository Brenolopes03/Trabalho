<?php
$nome = "Breno";
$cargo = "Desenvolvedor | Estudante de Tecnologia";
$telefone = "+55 33 9991-0274";
$email = "breninclb@gmail.com";
$github = "https://github.com/Brenolopes03/Trabalho";
$linkedin = "linkedin.com/in/seuusuario"; // ALTERA AQUI
$foto = "img/perfil.jpg";
$localizacao = "Brasil";

$sobre = "Olá! Meu nome é Breno e estou construindo minha trajetória na área de tecnologia.<br><br>
Tenho interesse em desenvolvimento, programação e soluções digitais. Busco aprender constantemente, desenvolver projetos práticos e evoluir minhas habilidades profissionais.<br><br>
Sou dedicado, curioso e gosto de resolver problemas usando tecnologia de forma simples, eficiente e criativa.";

$formacoes = [
    ["periodo" => "2026 - Atual", "curso" => "Curso / TI", "instituicao" => "Estacio"],
    ["periodo" => "2025 - 2026", "curso" => "Ensino superior completo", "instituicao" => "Estacio"]
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
        "descricao" => "Desenvolvimento de projetos práticos para aprendizado e aplicação de conceitos de tecnologia."
    ],
    [
        "periodo" => "2025 - 2026",
        "empresa" => "Aprendizado em Tecnologia",
        "cargo" => "Estudos em Programação",
        "descricao" => "Estudos de lógica, HTML, CSS, JavaScript e construção de páginas web."
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="style.css">
</head>

<body>

<main class="container">

<aside class="left_side">

<div class="profile_text">
<img src="<?php echo $foto; ?>" alt="Foto">
<h2><?php echo htmlspecialchars($nome); ?><br><span><?php echo htmlspecialchars($cargo); ?></span></h2>
</div>

<div class="contact_info">
<h3 class="title">Contato</h3>
<ul>
<li><i class="fa fa-phone"></i> <?php echo htmlspecialchars($telefone); ?></li>
<li><i class="fa fa-envelope"></i> <?php echo htmlspecialchars($email); ?></li>
<li><i class="fa fa-linkedin"></i> 
<a href="https://<?php echo $linkedin; ?>" target="_blank">LinkedIn</a></li>
<li><i class="fa fa-github"></i> 
<a href="<?php echo $github; ?>" target="_blank">GitHub</a></li>
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
<span><?php echo $i["nome"]; ?></span>
<div class="percent"><div style="width: <?php echo $i["nivel"]; ?>"></div></div>
</li>
<?php endforeach; ?>
</ul>
</div>

</aside>

<section class="right_side">

<div id="trilho" class="trilho">
<div class="indicador">
<i id="icone" class="bi bi-brightness-high-fill"></i>
</div>
</div>

<div class="about">
<h2>Sobre</h2>
<p><?php echo $sobre; ?></p>
</div>

<div class="about">
<h2>Experiência</h2>

<?php foreach ($experiencias as $e): ?>
<div class="box">
<h5><?php echo $e["periodo"]; ?> - <?php echo $e["empresa"]; ?></h5>
<h4><?php echo $e["cargo"]; ?></h4>
<p><?php echo $e["descricao"]; ?></p>
</div>
<?php endforeach; ?>

</div>

<div class="about skills">
<h2>Habilidades</h2>

<?php foreach ($habilidades as $h): ?>
<div class="box">
<h4><?php echo $h["nome"]; ?></h4>
<div class="percent"><div style="width: <?php echo $h["nivel"]; ?>"></div></div>
</div>
<?php endforeach; ?>

</div>

</section>

</main>

<script src="script.js"></script>

</body>
</html>
