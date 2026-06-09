# 1. Usa a imagem oficial do PHP com o servidor Apache já configurado
FROM php:8.2-apache

# 2. Instala a extensão PDO MySQL (fundamental para o seu projeto conectar ao banco)
RUN docker-php-ext-install pdo pdo_mysql

# 3. Copia todos os arquivos da sua pasta atual para dentro do servidor web do Docker
COPY . /var/www/html/

# 4. Avisa que o container vai rodar na porta padrão da internet (80)
EXPOSE 80