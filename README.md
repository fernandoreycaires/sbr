<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre o projeto
<p>UTILIZANDO PARA APRENDIZAGEM</p>
<p>Sistema administrativo de controle de uma loja, para aprender a utilizar o framework Laravel e treinar o PHP. Apenas para estudos.</p>

<p>Utilizando o Laravel 7</p>

<p>Caso utilizar o NGINX</p>
<p>Configure o arquivo Nginx respectivo</p>
<p>sudo nano /etc/nginx/sites-available/default </p>
<br>
<p>Coloque as linhas abaixo</p>
<p>root /var/www/html/sbr/public; <b> # Altere o caminho para o caminho correto de seu arquivo até a pasta Public </b></p>
<p>try_files $uri $uri/ /index.php?$query_string;</p>

<br><br>

<p>Ajuste a configuração do DB no arquivo .env localizado na raiz </p>
<p>Rode a migration </p>
<p>$ php artisan migrate </p>
<p>Após rodar a migration, edite o arquivo routes/web.php </p>
<p> descomente a linha Auth::routes(); e comente a //Auth::routes(['register' => false]); para liberar a pagina que insere novos usuarios</p>
<p> acesse seusite.com.br/register</p>
<p> Crie um novo usuario  </p>
<p> Depois edite novamente o arquivo routes/web.php </p>
<p> Descomente a linha Auth::routes(['register' => false]); e comente a // Auth::routes(); para voltar a bloquear a pagina que insere novos usuarios</p>


<br><br>

<p>Caso Utilizar o ISPConfig 3 </p>
<br>
<p> Utilize as diretivas do Nginx abaixo </p>
<p> Atente-se para as observações </p>
<br>
<p>location = /robots.txt {  </p>
<p>  root {DOCROOT}sbr/public; <b> # Após o {DOCROOT} caso o Laravel não esteja na raiz, coloque o caminho correto até a pasta Public, neste caso esta dentrop da pasta SBR </b></p>
<p>  access_log off; </p>
<p>  log_not_found off; </p>
<p>  allow all;          </p>
<p>} </p>
<br>
<p>location / { </p>
<p>  root {DOCROOT}sbr/public; <b> # Após o {DOCROOT} caso o Laravel não esteja na raiz, coloque o caminho correto até a pasta Public, neste caso esta dentrop da pasta SBR </b></p>
<p>  try_files $uri $uri/ /index.php?$query_string; </p>
<p>}</p>
<br>
<p>location ~ \.php$ { </p>
<p>  root {DOCROOT}sbr/public; <b> # Após o {DOCROOT} caso o Laravel não esteja na raiz, coloque o caminho correto até a pasta Public, neste caso esta dentrop da pasta SBR </b></p>
<p>  include snippets/fastcgi-php.conf; </p>
<p>  fastcgi_pass unix:/var/run/php/php7.4-fpm.sock; <b> # Altere o PHP para a mesma versão que o cliente está utilizando </b></p>
<p>} </p>