# wstools


## PHP
using Github Codespaces
A Solução Recomendada: Configurar o Dev Container
Se você ainda não tem, crie uma pasta chamada .devcontainer na raiz do seu projeto e, dentro dela, um arquivo chamado devcontainer.json.

Adicione o seguinte conteúdo para forçar o Codespaces a usar o PHP 8.5:

JSON
{
  "name": "PHP 8.5 Environment",
  "image": "mcr.microsoft.com/devcontainers/php:1-8.5"
}
Por que fazer assim? A Microsoft mantém imagens prontas para o Codespaces. Ao definir a versão 8.5, o ambiente já nasce com o PHP correto, OpenSSL configurado e sem erros de permissão de serviços.

Depois de salvar o arquivo:

Pressione Ctrl + Shift + P (ou Cmd + Shift + P no Mac).

Digite e selecione: Codespaces: Rebuild Container.