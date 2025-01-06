
# Site para Dedetizadora

Este projeto é um site informativo e funcional para empresas de dedetização, com informações sobre os cuidados necessários antes, durante e após o processo de desinsetização, além de funcionalidades administrativas para gerenciar usuários.

## Funcionalidades

- **Página Principal**: Acessível a todos os visitantes, com informações gerais sobre dedetização e cuidados a serem tomados.
- **Página de Informações**: Acessível nos footer e no botão de "Saiba mais", uma página para informar os clientes sobre desinsetização e etc.
- **Tela de Login**: Permite que usuários cadastrados ou o administrador acessem suas respectivas áreas.
- **Autenticação de Usuários**: Sistema de login para usuários cadastrados.
- **Cadastro de Usuários**: Tela para novos usuários se cadastrarem no sistema.
- **Painel Administrativo**: Exclusivo para o administrador, com funcionalidades de CRUD (Criar, Ler, Atualizar, Deletar) para gerenciar os usuários cadastrados.

## Detalhes do Painel Administrativo

- **Login do Administrador**:
  - Nome: Richard
  - Email: admin@gmail.com
  - Senha: 123456
- **CRUD de Usuários**: O administrador pode adicionar, editar e excluir usuários cadastrados.

## Tecnologias Utilizadas

- **Front-End**: HTML, CSS, JavaScript
- **Back-End**: PHP
- **Banco de Dados**: MySQL (Usando PHPMyAdmin)

## Instruções para Execução

### Requisitos

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas ou prontas para uso em sua máquina:

- [XAMPP](https://www.apachefriends.org/pt_br/index.html) ou qualquer outro servidor que suporte PHP e MySQL.
- [PHPMyAdmin](https://www.phpmyadmin.net/) para gerenciar o banco de dados.

### Passos para Implementação Local

1. **Clone o Repositório**:
   Clone este repositório para a sua máquina local:
   ```bash
   git clone https://github.com/RDEsley/Dedetizadora.git
   ```
   
2. **Configuração do Ambiente de Desenvolvimento**:
   - Baixe e instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html) ou qualquer servidor que suporte PHP e MySQL.
   - Após a instalação, abra o XAMPP e inicie o Apache e o MySQL.

3. **Importação do Banco de Dados**:
   - O banco de dados **não está incluso** no repositório, mas foi desenvolvido no MySQL utilizando o PHPMyAdmin.
   - Para criar o banco de dados, siga os passos abaixo:
     - Abra o PHPMyAdmin através do painel de controle do XAMPP.
     - Crie um novo banco de dados com o nome de **dedetizacao**.
     - Importe o arquivo SQL que será fornecido para a criação das tabelas necessárias. O arquivo pode ser encontrado na pasta `/database` do repositório.

4. **Configuração do Banco de Dados**:
   - Abra o arquivo `config.php` e ajuste as configurações de conexão com o banco de dados:
     ```php
     <?php
     $servername = "localhost";
     $username = "root"; // padrão do XAMPP
     $password = ""; // padrão do XAMPP
     $dbname = "dedetizacao"; // nome do banco de dados criado

     // Criar conexão
     $conn = new mysqli($servername, $username, $password, $dbname);
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ?>
     ```

5. **Acessando o Site**:
   - Após configurar o ambiente de desenvolvimento e o banco de dados, inicie o servidor Apache e MySQL no XAMPP.
   - Acesse o site no navegador, digitando `http://localhost/Dedetizadora/public/` na barra de endereços.

### Estrutura do Projeto

- `/public`: Contém os arquivos públicos do site, como HTML, CSS e JavaScript.
- `/admin`: Contém as funcionalidades administrativas, incluindo o CRUD de usuários e o login do administrador.
- `/database`: Arquivos relacionados ao banco de dados (como o script SQL).
- `/config`: Arquivos de configuração, incluindo a conexão com o banco de dados.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

## Contato

Desenvolvido por **Richard Esley**. Para mais informações, entre em contato através do e-mail **admin@gmail.com**.
