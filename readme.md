# Sistema Crédito para todxs#
## Sobre:
Este projeto é uma proposta de conhecimento, para participação de um processo seletivo.

## Conteúdo:
    Neste projeto contem um sistema de emprestimo e registro de dividas em PHP, HTML e CSS.

## Informações básicas de noções das paginas:
    - index.php = pede o Cpf do usuário e consulta se há cadastro.
    - dividas.php = Mostra as dividas negativadas ou em dia de empresas terceiras e emprestimos.
    - teste.php = Para inserir no banco de dados exemplos de dividas/emprestimos e cadastros. (Para saber senha e cpf necessario editar o arquivo cpt7.sql)
    - renegociar.php = Para renegociar dividas de terceiros que esteja negativada.
    - incluirdivida.php = incluir divida de empresa terceira a um cpf.(não é necessário o cpf esta cadastrado no banco de dados)
    - proposta.php = para fazer uma proposta de emprestimo (necessário estar logado), será direcionado para revisão do contrato e aceitação ou cancelamento.
    Dividas e emprestimo funciona com situação via banco de dados:
        - 1 para em dia.
        - 2 para Negativado.
        - 3 para em analise.
        Para mudar esta situação ainda se faz necessário fazer alteração diretamente no banco de dados.

## Requisitos necessarios para funcionar:
    -XAMPP(APACHE e MYSQL);
    Disponivel no link: https://www.apachefriends.org/download.html
## Instalando:
    Para instalar é necessário copiar os arquivos para a pasta HTDOCS do diretorio do programa XAMPP.
    É extremamente necessário editar as seguinte linhas do arquivo no diretorio CREDITOPARATODXS/db/connection.php:
        - @define('HOST', '127.0.0.1'); <-- Define o ip do banco de dados
        - @define('USUARIO', 'admin');<-- Define o nome do usuario 
        - @define('SENHA', '123'); <-- Define a senha do usuario
    É extremamente necessário usar e instalar no banco dedados o modelo dados pronto em db/cpt7.sql

## Para proximas atualizações:
    - Inserir proteção nas paginas de conexão com banco de dados e paginas que deve ser bloqueada a usuario.
    - Inserir pagina para alteração de dados do usuário.
    - Inserir pagina de administração pelo Credito para todxs.
    - Inserir menu e informação de usuário(nome, CPF, salario) em paginas.
    - Inserir uma pagina para rever contrato de emprestimos feitos/ativos.
    - Inserir gerador de boleto para dividas e emprestimo.
    - Alterar/Inserir datas de vencimento em renegociação e emprestimo.
    - Alterar formas de passar informação do formulario para banco de dados.
    - Realizar limpeza de código.
## Desenvolvedor
**Sistema desenvolvido por** *Kauê Taylan Ochner.* 
**Dispónivel em *https://github.com/kakoch/codigoparatodos.git***

**Este sistema é livre para qualquer uso, não se faz necessário o utilização de licensa para uso ou edição.**
