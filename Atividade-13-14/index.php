<?php
    require_once "model\\pessoa.php";

    $pessoa = new \app\model\pessoa();
    $pessoa->setNome("Gustavo");
    $pessoa->setSobreNome("Bernardes");
    $pessoa->setDataNascimento(new DateTime("2002-19-06"));

    $pessoa->getTelefone()->setTipo(1);
    $pessoa->getTelefone()->setNome("Tel Celular");
    $pessoa->getTelefone()->setValor("(47) 988502189");

    $pessoa->getEndereco()->setLogradouro("Rua Oscar Strey");
    $pessoa->getEndereco()->setBairro("Fundo Canoas");
    $pessoa->getEndereco()->setCidade("Rio do Sul");
    $pessoa->getEndereco()->setCEP("89163575");
    $pessoa->getEndereco()->setEstado("SC");

    echo $pessoa->toJson();
?>