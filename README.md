Claro, aqui está o texto formatado como um README:

---

# API Gerenciamento de Biblioteca

## Sobre a API

Esse sistema de gerenciamento de biblioteca é uma aplicação feita utilizando o Framework Laravel e a linguagem PHP. Ela oferece endpoints para o cadastro e gerenciamento de autores, livros e empréstimos, com os acessos à API autenticados.

### Funcionalidades

#### Autores
- Permite criar, listar, atualizar e deletar autores.

#### Livros
- Permite criar, listar, atualizar e deletar livros.

#### Empréstimos
- Permite registrar e listar empréstimos de livros.

#### Usuário
- Permite registrar um usuário.

#### Autenticação
- Autenticação JWT para proteger os endpoints da API.
- O usuário pode registrar-se e autenticar-se na API.

## Como instalar

### Pré-requisitos
- Possuir PHP 8.3 instalado na máquina.
- Possuir Laravel 11 instalado na máquina.
- Possuir Composer instalado na máquina.
- Possuir Driver do SQLite (atualmente o banco de dados SQLite está dentro da pasta `database`, arquivo `database.sqlite`).

### Passo 1
Caso precise configurar o banco SQLite do zero, será necessário realizar as migrações do banco. Utilize o comando:

```sh
php artisan migrate
```

Em seguida, precisamos criar um usuário admin da aplicação. Para isso, usamos o Seed do database. Utilize o comando:

```sh
php artisan db:seed
```

### Passo 2
Vamos iniciar a API utilizando o comando:

```sh
php artisan serve
```

### Passo 3
Com a API iniciada, você pode começar a utilizar apontando para o seu host local nas seguintes URLs:

#### Rotas autenticadas

##### Autores

- Buscar Autores
  ```sh
  GET /api/autores
  ```

- Buscar Autores por ID
  ```sh
  GET /api/autores/{id}
  ```

- Criar Autores
  ```sh
  POST /api/autores
  ```

- Atualizar Autores por ID
  ```sh
  PUT /api/autores/{id}
  ```

- Deletar Autores por ID
  ```sh
  DELETE /api/autores/{id}
  ```
    
##### Livros

- Buscar Livros
  ```sh
  GET /api/livros
  ```

- Buscar Livros por ID
  ```sh
  GET /api/livros/{id}
  ```

- Criar Livros
  ```sh
  POST /api/livros
  ```

- Atualizar Livros por ID
  ```sh
  PUT /api/livros/{id}
  ```
  
- Deletar Livros por ID
  ```sh
  DELETE /api/livros/{id}
  ```

##### Empréstimos

- Buscar Empréstimos
  ```sh
  GET /api/emprestimos
  ```

- Buscar Empréstimos por ID
  ```sh
  GET /api/emprestimos/{id}
  ```

- Criar Empréstimos
  ```sh
  POST /api/emprestimos
  ```

- Atualizar Empréstimos por ID
  ```sh
  PUT /api/emprestimos/{id}
  ```

- Deletar Empréstimos por ID
  ```sh
  DELETE /api/emprestimos/{id}
  ```

#### Rotas não autenticadas

- Realizar Login
  ```sh
  POST /api/login
  ``` 

- Registrar Usuário
  ```sh
  POST /api/registrar
  ```

## Como usar a API

Pessoalmente, gosto de usar o Postman ou Insomnia, e também pode ser implementado no seu front-end. Bom uso!

---
