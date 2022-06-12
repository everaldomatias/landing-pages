# Landing Pages
Plugin to manage landing pages on WordPress website.

## Plugins necessários

- Pods

## Corrigindo alguns problemas no desenvolvimento

### Não consegue instalar plugins pela loja do WordPress, acusa "Instalação falhou: Não foi possível criar o diretório."

- Acesse o container `docker exec -it e5eea6a157ba bash`
- Acesse a pasta wp-content `cd wp-content`
- Mude o proprietário da pasta plugins para www-data `chown www-data: plugins/`