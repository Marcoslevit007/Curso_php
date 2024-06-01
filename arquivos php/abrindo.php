<?php

//Abrindo e lendo arquivos com afunção fopen();
$meu_arquivo = fopen("dicionarioweb.txt", "r") or die("Não foi possivel abrir o arquivo");
echo fread($meu_arquivo, filesize("dicionarioweb.txt"));
fclose($meu_arquivo);

//O primeiro parametro dessa função contem o nome do arquivo
//O segundo parametro especifica em qual modo o arquivo deve ser aberto

//O arquivo deve ser aberto em um dos seguintes modos

//r = Abrir um arquivo so de leitura
//w = Abre um arquivo apenas para gravação
    // w = apaga os conteudos do arquivo já gravados
//a = Abre um arquivo apenas para gravação
    //a = preserva os dados ja existentes no arquivo
//x = Cria um novo arquivo apenas para gravação
    // x = Retorna um false e um erro se o arquivo já existir
//r+ = Abre um arquivo para leitura e gravação
//w+ = Abre um arquivo para leitura e gravação 
    //w+ = apaga o conteudo já existente de um arqquivo
//a+ = abre um arquivo para leitura e gravação
    //a+ = preserva o conteudo ja existente do arquivo
//x+ = cria um novo arquivo para leitura e gravação
    //x+ = retorna false e um erro se o arquivo ja existir