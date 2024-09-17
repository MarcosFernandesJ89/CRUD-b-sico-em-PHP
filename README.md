# CRUD Básico em PHP e MySQL

Este projeto é um exemplo básico de um sistema CRUD (Create, Read, Update, Delete) desenvolvido em PHP com MySQL. Ele inclui funcionalidades para gerenciar times e jogadores em uma aplicação web. O objetivo é fornecer uma base simples para entender e implementar operações básicas de banco de dados usando PHP e MySQL.

## Funcionalidades

- **Cadastro de Times**: Permite adicionar novos times ao banco de dados.
- **Cadastro de Jogadores**: Permite adicionar novos jogadores, associando-os a um time existente.
- **Edição de Times e Jogadores**: Permite editar informações de times e jogadores já cadastrados.
- **Exclusão de Times e Jogadores**: Permite excluir times e jogadores do banco de dados.
- **Listagem de Times e Jogadores**: Exibe uma lista de todos os times e jogadores cadastrados com opções para editar e excluir.

## Tecnologias Utilizadas

- **PHP**: Linguagem de script do lado do servidor para manipulação de dados e lógica de aplicação.
- **MySQL**: Sistema de gerenciamento de banco de dados relacional para armazenar dados.
- **HTML/CSS**: Para a estrutura e estilização das páginas web.

## Estrutura do Projeto

- **`index.php`**: Página inicial com links para cadastrar times e jogadores.
- **`cadastro_times.php`**: Formulário para cadastro de novos times.
- **`cadastro_jogadores.php`**: Formulário para cadastro de novos jogadores.
- **`editar_time.php`**: Formulário para editar informações de um time existente.
- **`editar_jogador.php`**: Formulário para editar informações de um jogador existente.
- **`excluir_time.php`**: Script para excluir um time do banco de dados.
- **`excluir_jogador.php`**: Script para excluir um jogador do banco de dados.
- **`update_jogador.php`**: Script para atualizar as informações de um jogador.
- **`config.php`**: Configurações do banco de dados e conexão.

## Como Executar

1. **Clonar o Repositório**:

    ```bash
    git clone https://github.com/MarcosFernandesJ89/CRUD-basico-em-PHP.git
    ```

2. **Configurar o Ambiente**:
    - Certifique-se de que o servidor web (como XAMPP ou WAMP) está configurado e funcionando.
    - Importe o banco de dados MySQL incluído (se houver um arquivo `.sql` no repositório) para o seu servidor MySQL.

3. **Configurar o Banco de Dados**:
    - Edite o arquivo `config.php` para definir as credenciais do banco de dados.

4. **Executar o Projeto**:
    - Navegue até a pasta do projeto no seu servidor local e acesse `index.php` através do seu navegador.

## Contribuições

Contribuições são bem-vindas! Se você deseja melhorar este projeto, por favor, faça um fork e envie um pull request com suas alterações.

## Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).
