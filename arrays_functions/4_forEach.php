<?php

    $alunos = [
        [
            'nome' => 'marquitos',
            'nota' => 5
        ],
        [
            'nome' => 'Jucilelson',
            'nota' => 10
        ]
    ];

    foreach ($alunos as $key => $value) {
        if($value['nota'] < 7 )
        echo 'aluno' .$value['nome'] . 'está Reprovado';
        else
        echo 'aluno' . $value['nome'] . 'está Aprovado';
    }

?>