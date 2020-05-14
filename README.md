# :whale: Docker Image com ambiente Apache + PHP + MongoDB

## :wrench: Passos para Executar o Container
1. Clone esse repositório.
2. Com o repositório baixado, navegue até ele pelo terminal.
3. Estando dentro da pasta raiz, execute o comando abaixo:
```docker
docker-compose up
```

## :elephant: Código PHP
* Todo o código PHP deve ficar dentro da pasta **/src**. Eu criei um mapeamento automático para que a cada alteração feita no código o Docker copie seu conteúdo para dentro do Conteiner.

## :fallen_leaf: Conexão com o MongoDB
* Eu estou usando o **Robo 3T** para me conectar com o MongoDB. [Link para Download](https://robomongo.org/)
* Para conectar no Robo 3T basta conectar com **localhost** e porta **27017**

## :fallen_leaf: + :elephant: Conectar MongoDB no PHP
1. Dentro da pasta **/src** eu deixei um CRUD de exemplo.
2. Ficará mais ou menos assim:
```php
<?php
    /* 
        Aqui a conexão não é localhost, é mrb-mongodb. 
        É dessa forma pois estamos conectando o container do MongoDB no container do PHP.
    */
    $manager = new \MongoDB\Driver\Manager("mongodb://mrb-mongodb");

    $db = new \MongoDB\Driver\BulkWrite;
```

