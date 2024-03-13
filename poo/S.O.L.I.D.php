<!-- 

    S (Single Responsability Princible) - Principio de responsabilidade unica, cada função deve ter apenas uma responsabilidade

    O (Open to extend Close to modify Princible) - Uma classe/objeto está disponivel para ser extendida, mas fechada para ser modificada


    L (Liskov Copy Princible) - Uma child class tem que ser capaz de substituir uma parent class

    I (Interface Segregation Princible) - Uma classe não deve ser forçado a implementar metódos/atributos que não utiliza. É melhor ter interfaces especializadas do que interfaces, gordas e cheias de metódos e atributos. Por exemplo: a interface animal tem os metódos abstratos correr() comer() voar() dormir(), um cachorro que herdasse dessa interface seria obrigado a implemeentar o metódo voar, então seria melhor especializar a interface Animal em duas, as interfaces Aereo e terrestre.

    Resumindo uma classe não deve ser forçada a implementar metódos e atributos que não utiliza/depende


    D (Dependencie inversion Princible) - Classes de alto nivel não devem depender de classes de baixo nivel, e não devem depender de implementações, e sim de contratos/assinaturas de classes abstratas, interfaces


 -->