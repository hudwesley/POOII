<?php
$host = "10.90.24.56";
$port = "5432";
$user = "aula";
$password = "aula";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port", $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM janio.aluno"; 
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['id'] . ", Nome: " . $row['nome'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Erro na conexão ou consulta: " . $e->getMessage();
}
?>
