# Primeira api utilizando o framework lumen

Minha primeira api com o framework lumen e dingo api.

### Criando usuário
metodo post:
```
    api/create/user
```

Campos necessário para criar um usuário name, description, idade.

### Buscar usuário

metodo get: 
```
    api/user/{id}
```
Valor retornado se o usuário existir id, name, decription, idade, create_at, update_at.

### Atualizando usuário

metodo post:
```
    api/update/user/{id}
```
Campos necessário para atualizar o usuário name, decription, idade.

### Listar todos usuários

metodo get:
```
    api/user/{id}
```

Lista todos usuário e suas informações.

### Deletar usuário

metodo get:
```
    api/delete/user/{id}
```

Deleta o usuário pelo id.

#### Tecnólogias usadas

[Lumen 8](https://github.com/laravel/lumen)
[Dingo Api](https://github.com/dingo/api)
