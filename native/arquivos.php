<?php 

/*



modes:
    r(read)
    w(write)
    x(exclusive write)- Apenas para criar, se o arquivo existir gera erro
    a(append)

Checking and information: 

    file_exists(string $path): bool ->  Verifica se o caminho informado existe

    filetype($path) - Retorna informações sobre tipo de arquivo
    
    is_dir($path) - Verifica se é um diretório
    is_file($path) - Verifica se é um arquivo
    is_executable($path) - Verifica se é executavel

    is_link($path) - Verifica se é um atalho

    is_readable — Tells whether a file exists and is readable
    is_uploaded_file — Tells whether the file was uploaded via HTTP POST
    is_writable — Tells whether the filename is writable

    stat(string $path) - Retorna informações sobre o arquivo

    atime(string $path) - Retorna timestamp do ultimo acesso do arquivo

    ctime(string $path) - Retorna timestamp da ultima modificação de permissões do arquivo

    mtime(string $path) - Retorna timestamp da ultima moficação de conteúdo do arquivo

    lmtime, lctime, latime: string - Retorna horario formatado do ultimo acesso, modificação de conteúdo ou permissões de um arquivo




Reading:


    file(string $path, $flags) - Le um arquivo inteiramente, e armazena em um array, cada elemento do array, é uma linha do arquivo



    file_get_contents(string $filename, $flags):string - Lê o conteúdo inteiro de um arquivo
        $filename: O caminho para o arquivo a ser lido.
        $flags (opcional): Um conjunto opcional de sinalizadores que modificam o comportamento da função. Alguns dos sinalizadores disponíveis incluem:
            FILE_USE_INCLUDE_PATH: Procura o arquivo no include_path. Por padrão, isso está desativado.
            FILE_IGNORE_NEW_LINES: Remove novas linhas da string retornada. Por padrão, isso está desativado.
            FILE_SKIP_EMPTY_LINES: Ignora linhas vazias ao ler o arquivo. Por padrão, isso está desativado.


CSV:

    fgetcsv(resource $file_descriptor, int $length) - Retorna o conteúdo de um arquivo csv, formatado em array

    fpucsv(resource $file_descriptor, array $data) - Converte um array php, em um arquivo csv



Main:

    fopen($path, $mode, bool $include_path)

        $include_path - Tenta procurar arquivo no diretório include_path configurado no php

    
    tmpfile():resource[$file_descriptor] - Abre um arquivo temporario no modo escrita

    fclose(resource $file_descriptor) - Fecha o file_descriptor e comita as alterações
    
    

    fread(resource $file_descriptor, int $bytes) - Lê uma certa quantidade de bytes de um arquivo

    filesize($file); - Retorna o tamanho do arquivo em bytes, ou false caso de erro


    fwrite(resource $file_descriptor, string $data, int $max_length) - Escreve o conteúdo de uma string em um arquivo

 
    touch($path) - Cria uma arquivo vazio

    unlink(string $path) - Remove um arquivo

    symlink($target, $link_name) - Cria link simbolico apontando para target. O link é criado no diretório atual,

    mkdir(string $path) - Cria um diretório

    rmdir(string $path) - Remove um diretório


    copy(string $source, string $dst) - Copia um arquivo para um destino

    rename(string $source, string $dst) - Move um arquivo para um destino

    basename(string $path, string $remove_suffix) -> Retorna o ultimo componente de um caminho

    dirname(string $path) - Retorna o caminho parent do caminho informado


    chmod(string $path, int $mod) - Altera as permissões de um arquivo.
        $mod deve começar com 0, e ter 4 digitos. Exemplo

            chmod('sample.txt', 0741) - O usuário proprietario tem permissões totais no arquivo, o grupo tem permissão de leitura, e outros de permissão de execução

    
    chgrp($filename, sting $group): Altera o grupo do arquivo especificado

    chown(string $path, string $owner('owner:group')) - Altera o proprietario e grupo de um arquivo
   

    disk_free_space(string $path): float|false ->  Retorna o espaço em disco disponivel de um sistema de arquivos, ou partição


    disk_total_space(string $path) - Retorna o tamanho total de um sistema de arquivos, ou partição


    Classes uteis para manipulação de arquivos:
            SplFileInfo - Classe para obter informações de arquivos

            SplFileObject - Classe para manipular arquivos de forma orientada a objetos



*/
