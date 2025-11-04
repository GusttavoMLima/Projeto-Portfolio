<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitiza e valida os dados recebidos
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : '';
    
    // Array para armazenar erros
    $erros = array();
    
    // Validação do nome
    if (empty($nome)) {
        $erros[] = "O campo nome é obrigatório.";
    } elseif (strlen($nome) < 2) {
        $erros[] = "O nome deve ter pelo menos 2 caracteres.";
    }
    
    // Validação do e-mail
    if (empty($email)) {
        $erros[] = "O campo e-mail é obrigatório.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Por favor, insira um e-mail válido.";
    }
    
    // Validação da mensagem
    if (empty($mensagem)) {
        $erros[] = "O campo mensagem é obrigatório.";
    } elseif (strlen($mensagem) < 10) {
        $erros[] = "A mensagem deve ter pelo menos 10 caracteres.";
    }
    
    // Se houver erros, retorna JSON com os erros
    if (!empty($erros)) {
        header('Content-Type: application/json');
        echo json_encode(array(
            'sucesso' => false,
            'erros' => $erros
        ));
        exit;
    }
    
    // Simula o processamento (não envia e-mail real, apenas simula)
    // Aqui você poderia adicionar código para enviar e-mail ou salvar em banco de dados
    
    // Retorna sucesso com mensagem personalizada
    header('Content-Type: application/json');
    echo json_encode(array(
        'sucesso' => true,
        'mensagem' => "Obrigado pela mensagem, " . htmlspecialchars($nome) . "! Recebi sua mensagem e entrarei em contato em breve."
    ));
    exit;
    
} else {
    // Se não foi POST, redireciona para a página principal
    header('Location: index.html');
    exit;
}
?>

