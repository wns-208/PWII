<?php
/**
 * crie um array no qual irá conter 3 pessoas (nome, idade).
 * faça um foreach para exibir cada uma das pessoas, e exiba
 * se a pessoa pode votar ou não.
 * idade de 16 a 18 voto opcional
 * idade entre 18 a 70 obrigatório
 * idade maior que 70 voto opcional
 */

 $pessoas = [
    [
        'nome' => 'osvado',
        'idade' => 17
    ],
    [
        'nome' => 'robelto',
        'idade' => 56
    ],
    [
        'nome' => 'hellomoto'
        'idade' => 34
    ]
];

foreach ($pessoas as $key => $value) {
    if($value['idade'] <=16 && $value['idade'] <18)
    echo 'bobao'
}
    
?>