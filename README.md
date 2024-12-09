
# Site de Dedetização

Este projeto é um site informativo e funcional para dedetizadoras. Ele contém informações sobre os cuidados necessários antes, durante e depois do processo de desinsetização e etc, além de funcionalidades administrativas (CRUD de usuários).

## Funcionalidades

- **Página Principal**: Acessível a todos, com informações gerais sobre dedetização.
- **Tela de Login**: Permite que usuários cadastrados ou o administrador acessem suas áreas.
- **Página PHP com Login**: Autenticação de usuários.
- **Cadastro de Usuários**: Tela para novos usuários se cadastrarem no sistema.
- **Painel Administrativo**: Exclusivo para o administrador, com funcionalidades de CRUD para gerenciar os usuários cadastrados.

## Detalhes do Painel Administrativo

- **Login do Administrador**:
  - Nome: Richard
  - Email: admin@gmail.com
  - Senha: 123456

- **CRUD de Usuários**: O administrador pode adicionar, editar e excluir usuários cadastrados.

## Tecnologias Utilizadas

- **Front-End**: HTML, CSS, JavaScript
- **Back-End**: PHP
- **Banco de Dados**: MySQL

## Instruções para Execução

1. Clone este repositório:
   ```bash
   git clone https://github.com/SeuUsuario/ProjetoDedetizacao.git
   ```
2. Configure o ambiente de desenvolvimento local com um servidor web compatível com PHP (ex: XAMPP, WAMP).
3. Importe o banco de dados:
   - O arquivo SQL está localizado na pasta `/database`.
4. Ajuste as configurações de conexão ao banco de dados no arquivo `config.php`.
5. Inicie o servidor e acesse o site pelo navegador.

## Estrutura do Projeto

- `/public`: Contém os arquivos públicos do site, como HTML, CSS e JavaScript.
- `/admin`: Contém as funcionalidades administrativas (CRUD, login do admin).
- `/database`: Arquivos relacionados ao banco de dados (ex: script SQL).
- `/config`: Configuração de conexão com o banco de dados.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

---

Desenvolvido por Richard Esley.
