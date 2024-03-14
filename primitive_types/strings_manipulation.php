<?php 
/*
Main:
    strlen(word) -> - Retorna o comprimento da string
    
    strpos(haystack, needle) -> Retorna a posição de needle(agulha) no haystack(palheiro)
    
    stripos(haystack, needle) -> Versão insensitiva de strpos

    str_replace(pattern, replace, subject) - Substitui pattern, por replace, na string 
    subject
    
    str_ireplace(pattern, replace, subject/string) - Versão isensitiva de str_replace

  

    strtolower(string) -> Converte string para minúsculo
    strtoupper(string) -> Converte todos caracteres de uma string para maiusculo
    
    ucfirst(string)(Upper Case First) - Converte o primeiro caracter de uma string para maisculo

    lcfirst(string) - Converte o primeiro caracter de uma string para minúsculo


    wordwrap(string, lenght, bool $cutword) - Usado para representar longos textos de forma mais curta


    ucwords(string) - Converte cada primeiro caracter de cada palavra para maiusculo

    trim(string) - Remove espaços em branco antes e depois da string
    
    chop(rtrim)(string) - Remove espaços em branco a direita de um string


    explode(delimiter, string) - Converte string em array

    implode ou join(glue/seperador, array) - Converte um array em string

    str_contains(haystack, needle) - Verifica se needle(agulha) está presente no haystack(palheiro)

    str_pad(string, lenght, pad_string) - Prenche uma string até o comprimento especificado, usando caracters de prenchimento

    str_shuffle(string) - Embaralha uma string


    str_getcsv - Converte uma string csv para array

    chr(int $ascii) -> Converte um número da tabela ascii em seu caracter correspondente na ascii


    number_format(number, house_decimal, decimal_separator, thousands_sepator) - Usado para formatar númeross

    money_format(format(%i(segue convenções do pais), %n(tira o simbolo da moeda)), string) - Converte um número string, em sua representação monetária, de acordo com o locale


    crypt(string, salt) - Usado para hashear strings, comumente utilizado para hashear senhas, os dois primeiros caracters de salt, definem o algoritmo de criptografia, que por padrão é o DES.

    sha1(string) - Retorna o hash sha1 de uma string

    md5(string) - Retorna o hash md5 de uma string

    

    setlocale(categoria(LC_ALL, LC_Monetary), locale(en_US, pt_BR)) - Altera o locale do código para as categorias especificadas, frequentemente utilizado em internacionalização.







Others:
    addcslashes(string, charlist)- Escapa caracters da charlist usando barra invertida nos respectivos caracters, dentro da string

    addslashes($string) - Escapa caracters de ' ou "", espaços em brancos e etc, dentro de uma string, frequentemente utilizado em consultas sql

    bin2hex(string) - Converte dados binários(não necessariamente bytes) em uma represetação hexadecimal

    hex2bin(hex) - Converte hexadecimal em binário.


    chunk_split(string, lenght) - Divide uma string em pedaços menores, ex:

        chunk_split("This is a foo message", 8), Separa a string, em pedaços de 8 caracters, e mostra uma saida mais curta. Ex:

                this i 
                s a fo
                o mess
                age











*/







?>