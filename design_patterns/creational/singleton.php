<?php
/*
Singleton padrão de design, onde é criado uma classe de instância unica privada, e é fornecido um metódo publico para acessar a unica instãncia da classe.


Padrão de design muito comum nos contextos:

    Conexão com banco de dados- Garante que apenas uma conexão com o banco de dados seja feita na aplicação

    Registro de log - Garante que os logs da aplicação, sejam armazenados em um único arquivo

    Configurações- Definar uma unica instância que vai implementar as configurações da aplicação


*/


final class DataBaseConnection  {
    private static $connection;


    private function __construct(string $host, int $port, string $user, string $password) {
        self::$connection = ["server" => $host, "port" => $port, "user"=> $user,"password"=> $password]; //Emula uma conexão com o banco de dados
    }

    public static function getConnection($host=null, int $port=null, string $user=null, string $password=null) {
        if (!isset(self::$connection)) {
            if ($host && $port && $user && $password) {
                new self($host, $port, $user, $password);
                return self::$connection;
             } 
            
            throw new Exception("Cann't find db server");
        }else {
            
            return self::$connection;
        }
    }
}


$db = DataBaseConnection::getConnection("Localhost", 8000, "fooUser", "password");

print_r($db);

$db = DataBaseConnection::getConnection("Localhost2", 80400, "fooUser", "passworASDFd");

print_r($db);

?>
