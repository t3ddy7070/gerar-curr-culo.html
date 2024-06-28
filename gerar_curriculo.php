<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo Gerado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Currículo Gerado</h1>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Dados pessoais
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $data_nascimento = $_POST['data_nascimento'];
            
            // Experiências profissionais
            if(isset($_POST['cargo'])) {
                $cargos = $_POST['cargo'];
                $empresas = $_POST['empresa'];
                $periodos = $_POST['periodo'];
            }
            
            // Exibição dos dados pessoais
            echo "<h2>Dados Pessoais</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>E-mail:</strong> $email</p>";
            echo "<p><strong>Telefone:</strong> $telefone</p>";
            echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
            
            // Exibição das experiências profissionais
            if (!empty($cargos)) {
                echo "<h2>Experiências Profissionais</h2>";
                for ($i = 0; $i < count($cargos); $i++) {
                    echo "<p><strong>Cargo:</strong> " . $cargos[$i] . "</p>";
                    echo "<p><strong>Empresa:</strong> " . $empresas[$i] . "</p>";
                    echo "<p><strong>Período:</strong> " . $periodos[$i] . "</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p><em>Nenhuma experiência profissional adicionada.</em></p>";
            }
        } else {
            echo "<p>Nenhum dado enviado. Por favor, preencha o formulário primeiro.</p>";
        }
        ?>
    </div>
</body>
</html>




