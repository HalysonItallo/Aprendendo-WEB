<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    /* 
    //recuperacao da data atual ou data corrente

    // dia/mes/ano horas:minutos
    echo date('d/m/Y H:i');

    echo '<br />';
    echo date_default_timezone_get(); //mostra o local do fusio horário que está em default no php
    date_default_timezone_set('America/Sao_Paulo'); //muda para o Brasil a hora que está no php
    echo '<br />';
    echo date('d/m/Y H:i');
    */
    
    //Para usar as função as datas devem está nesta formatação
    $data_inicial = '2018-04-24';
    $data_final = '2018-05-15';

    //timestamp
    //01/01/1970 -- 2018-04-24 (js -> milissegundos / php -> segundos)
    //Retorna os segundos da data de criação do sistema operacional e a data passada
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br />';
    echo $data_final . ' - ' . $time_final;
    
    
    //Diferença de segundos entre as datas
    $diferenca_times = $time_final - $time_inicial;
    //Existe a função abs que retorna o módulo do número(sempre positivo)
    echo '<br />';
    echo 'A diferença de segundos entre a data inicial e final é: ' . $diferenca_times;
    
    //Calculo de segundos por dia
    $segundos_existem_dia = 24 * 60 * 60;
    echo '<br />';
    echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';
    
    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
    echo '<br / >';
    echo 'A diferença em dias é: ' . $diferenca_de_dias_entre_as_datas;
    ?>


</body>

</html>