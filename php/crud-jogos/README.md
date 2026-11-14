# CRUD de jogos (PHP + MySQL)

Projeto didático baseado na proposta do PDF da aula: cadastrar, consultar, alterar e excluir jogos usando PHP, PDO e MySQL. A listagem também pode ser consultada pela API JSON com `fetch()`.

## Funcionalidades

- Cadastro de jogos com nome e plataforma.
- Listagem dos registros salvos no banco.
- Edição e exclusão por ID.
- API JSON em `api_jogos.php` e página de consulta assíncrona em `consultar.html`.
- Validação no servidor, consultas preparadas e escape de saída HTML.

## Estrutura

| Arquivo | Responsabilidade |
|---|---|
| `schema.sql` | Cria o banco `jogos_aula` e a tabela `jogos`. |
| `db.php` | Abre a conexão PDO com o MySQL. |
| `index.php` | Exibe o formulário de cadastro e a lista. |
| `salvar.php` | Valida e cadastra um jogo. |
| `editar.php` | Exibe o formulário de edição e atualiza o jogo. |
| `excluir.php` | Exclui um jogo por ID via POST. |
| `api_jogos.php` | Retorna os jogos em JSON. |
| `consultar.html` | Consulta a API usando `fetch()`. |
| `includes/funcoes.php` | Validação e funções compartilhadas. |

## Configuração e execução

1. Inicie o MySQL (por exemplo, pelo XAMPP).
2. Execute `schema.sql` no phpMyAdmin ou no cliente MySQL.
3. Configure a conexão em `db.php` se o ambiente não usar os padrões locais:
   - `DB_HOST` (padrão `127.0.0.1`)
   - `DB_NAME` (padrão `jogos_aula`)
   - `DB_USER` (padrão `root`)
   - `DB_PASS` (padrão vazio, como na configuração local padrão do XAMPP)
4. Na pasta do projeto, inicie o servidor PHP:

   ```sh
   php -S localhost:8000
   ```

5. Acesse `http://localhost:8000/`, cadastre jogos, edite um registro e exclua outro. Para testar a consulta AJAX, acesse `http://localhost:8000/consultar.html`.

## Testes

Execute os testes de validação sem precisar conectar ao MySQL:

```sh
php tests/run.php
```

O exemplo é destinado a estudo local e ainda não inclui autenticação, autorização ou proteção CSRF. Não publique as credenciais de desenvolvimento em um servidor acessível pela internet.
