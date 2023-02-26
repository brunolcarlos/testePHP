# testePHP
 Teste solicitado em PHP puro com padrão MVC

## Destaque
 O objetivo deste teste não é exibir habilidades com web design e sim com funcionalidades backend com PHP puro.


#Database

```
CREATE TABLE
  `products` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `description` varchar(255) COLLATE utf8mb4_bin NOT NULL,
    `price` float NOT NULL,
    `stock` int(11) NOT NULL,
    `image` varchar(255) COLLATE utf8mb4_bin DEFAULT '',
    `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 2 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_bin
```