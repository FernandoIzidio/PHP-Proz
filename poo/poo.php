<?php

/*


Uma classe é um molde que define os metódos(comportamentos) e atributos(caracteristicas) de suas instâncias objetos


Uma classe deve ser reutilizavel em diversos contextos


parent - Referência a parent class

self - Usado para acessar metódos ou atributos estaticos, ou seja metódos e atributos de classe

$this - Referência o objeto que executou/acessou determinado metódo ou atributo

new - Usado para criar instância de classe

extends - Usado para herdar os metódos e atributos de uma classe

implements - Instrução para implementar uma interface.

final - Impedi que uma classe seja extendida, ou um metódo e atributo seja sobreescrito, ou modificado em uma child class.


final class ClassName(){} - Impedi que a classe seja extendida


class Hello(){

    final public function sayHello (){

    } - Impedi que o metódo seja sobreescrito, ou modificado nas child class
}

class Pessoa{} - Cria uma classe

interface Pessoa{} - Cria uma interface - Classe que contém apenas metódos e atributos de assinatura

classe abstrata - Pode ter metódos atributos de assinatura e metódos e atributos concretos




associação - Quando um objeto usa um objeto de uma outra classe


agregação - Quando uma classe precisa de um objeto/instância de uma outra classe para executar um método




Composição - Quando o ciclo de vida de uma classe depende do ciclo de vida de outra classe




propertys/getters - Metódos que se comportam como atributos

setters - Permitem alterar o valor de atributos propertys/getters


abstração - Definir assinatura dos metódos na parent class, e as child class implementaram, ou definir os atributos e metódos mais importantes para um objeto]

herança - Um classe herda os metódos e atributos de uma outra classe


polomorfismo - Quandos child-class que herdam de uma mesma parent class, tem metódos de mesma assinatura, mas que se comportam de maneiras diferentes


encapsulamento - Controle de acesso:
    public - Disponivel em todo código

    protected - Disponivel apenas para a familia da classe(parent as childs) protegido pela familía de classes


    private - Disponivel apenas na parent class

    static - Utilizado para criar atributos/metódos de classe, ou seja atributos e metódos que não precisam de instância da classe para serem acessados



interfaces - Classes que contém apenas assinuturas de metódos, e não possuem nenhum metódo concreto


sobrecarga de metódos - Uma classe pode ter varios metódos de mesmo nome, e diferentes quantidades de argumentos,  e cada metódo de mesmo nome se comportar de maneira diferente. O php não suporta esse recurso. O php apenas suporta a sobreposição de metódos

Ou seja o php vai primeiro buscar o metódo nas child class, e depois nas parent class




*/




?>