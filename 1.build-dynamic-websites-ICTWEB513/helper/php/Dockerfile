# Use a imagem oficial do PHP como imagem base
FROM php:7.4-cli

# Instale as extensões necessárias e o servidor
RUN docker-php-ext-install pdo pdo_mysql

# Defina o diretório de trabalho no contêiner
WORKDIR /var/www/html

# Copie o arquivo PHP para o diretório de trabalho no contêiner
COPY . .

# Comando para iniciar o servidor PHP embutido
CMD [ "php", "-S", "0.0.0.0:80", "-t", "." ]
