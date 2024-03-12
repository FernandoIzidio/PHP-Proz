

<!-- dependências comuns (Disponiveis no APT/Snap): 
    php - Interpretador 

    php-cli - Linha de comando do php

    php-mysql - Responsável por fazer comunição do php com o MySql

    php-xml - Suporte para manipulação de XML no PHP.
    php-mbstring - Extensão de manipulação de strings multibyte.
    php-json - Suporte para manipulação de JSON.

    php-xdebug - Facilita muito na hora de debugar código php 

    php-unit - Fornece extrutura para testes em php

    composer - Gerenciador de dependências php

    libapache2-mod-php - Permite que o apache2 execute scripts php, no servidor web, ou seja faz integração entre apache e php 
    


/etc/php/8.0/apache2/php.ini - Configura o php no servidor apache2. Configs comuns:

    error_reporting 
    display_errors
    display_startup_errors 
    log_errors
    ignore_repeated_errors
    report_mleaks 
    track_errors

/etc/php/8.0/apache2/conf.d/20-xdebug.so - xdebug - Configura o xdebug 
    path do xdebug - /usr/lib/php/20052/xdebug

    zend_extension - Path do xdebug 
    xdebug.profiler_enable(On, Off) - Habilita a geração de perfis de depuração
    xdebug.profiler_output_dir:str - Define os diretórios onde os perfis de depuração são salvos.
    xdebug.profiler_output_name(foo.out.%p) - Define o nome do arquivo que salva o perfil de depuração 


    xdebug.remote_enable(On, Off) - Habilita a depuração remota 
    xdebug.remote_host:str - Define quais servidores tem permissão de debugar remotamente
    xdebug.remote_port - Define o porta de comunicação do xdebug
    xdebug.remote_handler:str(dbgp(debug protocol)) - Define o protocolo de comunicação do xdebug 


/etc/apache2/sites-available/000-default.conf - Arquivo de configuração do apache2 

    document_root = /var/www/

-->