# Docker compose

### descriçao

Arquivo docker compose super simplificado para executar o magento

 ### Algumas coisas nao funcionam  
 * email (nao ha container)
 * redis (nao ha container)
 
 ### como usar
 
 No arquivo docker-compose.yml mudar o texto das linhas 26 e 47 para o nome da pasta onde o magento esta instalado. Apos isso executar o comando docker compose up -d ou (docker-compose up -d)
 O container montado, entao entrar no container do php (com nome mgphp) e executar a instaçao do magento pela linha de comando alterando os parametros de acordo com os dados do banco e do elasticsearch.
 