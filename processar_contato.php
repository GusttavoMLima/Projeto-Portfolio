<?php
// Inicia buffer de saída para capturar qualquer saída antes do JSON
ob_start();

// Ativa tratamento de erros para não quebrar o JSON
error_reporting(E_ALL);
ini_set('display_errors', 0); // Não exibe erros na saída (para não quebrar o JSON)

// Headers de segurança e CORS
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// Função para retornar erro em JSON
function retornarErro($mensagem) {
    ob_clean(); // Limpa qualquer saída anterior
    echo json_encode(array(
        'sucesso' => false,
        'erros' => array($mensagem)
    ), JSON_UNESCAPED_UNICODE);
    ob_end_flush();
    exit;
}

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
        ob_clean(); // Limpa qualquer saída anterior
        echo json_encode(array(
            'sucesso' => false,
            'erros' => $erros
        ), JSON_UNESCAPED_UNICODE);
        ob_end_flush();
        exit;
    }
    
    // Sanitização adicional para segurança
    $nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $mensagem = htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8');
    
    // Simula o processamento (não envia e-mail real, apenas simula)
    // Aqui você poderia adicionar código para enviar e-mail ou salvar em banco de dados
    // Exemplo de envio de e-mail:
    // $to = "seu-email@exemplo.com";
    // $subject = "Nova mensagem do portfólio de " . $nome;
    // $body = "Nome: " . $nome . "\nE-mail: " . $email . "\n\nMensagem:\n" . $mensagem;
    // mail($to, $subject, $body);
    
    // Retorna sucesso com mensagem personalizada
    try {
        ob_clean(); // Limpa qualquer saída anterior
        echo json_encode(array(
            'sucesso' => true,
            'mensagem' => "Obrigado pela mensagem, " . $nome . "! Recebi sua mensagem e entrarei em contato em breve."
        ), JSON_UNESCAPED_UNICODE);
        ob_end_flush();
        exit;
    } catch (Exception $e) {
        retornarErro('Erro ao processar sua mensagem. Por favor, tente novamente.');
    }
    
} else {
    // Se não foi POST, retorna erro em JSON
    retornarErro('Método não permitido. Use POST para enviar o formulário.');
}
?>

