<?php
include('function.php');
view($_GET['id']);


include(HEADER_TEMPLATE);
?>

<h2>Cliente <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<div class="detail-panel">
    <div class="detail-grid">
        <div class="detail-item">
            <span class="detail-label">Nome / Razão Social:</span>
            <span class="detail-value"><?php echo $customer['name']; ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">CPF / CNPJ:</span>
            <span class="detail-value"><?php echo $customer['cpf_cnpj']; ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">Data de Nascimento:</span>
            <span class="detail-value"><?php echo formatData($customer['birthdate'], "d/m/Y"); ?></span>
        </div>
    </div>
</div>

<div class="detail-panel">
    <div class="detail-grid">
        <div class="detail-item">
            <span class="detail-label">Endereço:</span>
            <span class="detail-value"><?php echo $customer['address']; ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">Bairro:</span>
            <span class="detail-value"><?php echo $customer['hood']; ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">CEP:</span>
            <span class="detail-value"><?php echo cep($customer['zip_code']); ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">Data de Cadastro:</span>
            <span class="detail-value"><?php echo formatData($customer['created'], "d/m/Y : H:i:s"); ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">Data da última atualização:</span>
            <span class="detail-value"><?php echo formatData($customer['modified'], "d/m/Y - H:i:s"); ?></span>
        </div>
    </div>
</div>

<div class="detail-panel">
    <div class="detail-grid">
        <div class="detail-item">
            <span class="detail-label">Cidade:</span>
            <span class="detail-value"><?php echo $customer['city']; ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">Telefone:</span>
            <span class="detail-value"><?php echo telefone($customer['phone']); ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">Celular:</span>
            <span class="detail-value"><?php echo telefone($customer['mobile']); ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">UF:</span>
            <span class="detail-value"><?php echo $customer['state']; ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">Inscrição Estadual:</span>
            <span class="detail-value"><?php echo number_format($customer['ie'], 0, ",", "."); ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">Imagem:</span>
            <span class="detail-value">
                <?php if (!empty($customer['imagem'])): ?>
                    <img src="<?php echo BASEURL . 'uploads/' . $customer['imagem']; ?>" alt="Imagem do cliente"
                        class="detail-image">
                <?php else: ?>
                    &mdash;
                <?php endif; ?>
            </span>
        </div>
    </div>
</div>

<div id="actions" class="row">
    <div class="col-md-12">
        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-secondary"><i
                class="fa-solid fa-pen-to-square"></i> Editar</a>
        <a href="index.php" class="btn btn-light"><i class="fa-solid fa-arrow-rotate-left"></i> Voltar</a>
    </div>

</div>

<?php include FOOTER_TEMPLATE; ?>