Create vault user in mysql database on lab04:

$ sudo -i
$ mysql
mysql> GRANT ALL PRIVILEGES ON *.* TO 'vault'@'%' IDENTIFIED BY '1q2w3e4r5t';
mysql> GRANT GRANT OPTION ON *.* TO 'vault'@'%';
mysql> FLUSH PRIVILEGES;

Create Vault dynamic secret (any controller machine):

$ export VAULT_ADDR=http://192.168.238.11:8200
$ export VAULT_TOKEN=xxx

$ vault secrets enable database

$ vault write database/config/myapp plugin_name=mysql-database-plugin \
    connection_url="{{username}}:{{password}}@tcp(192.168.238.14:3306)/" \
    allowed_roles="myapp" username="vault" password="1q2w3e4r5t"

$ vault write database/roles/myapp \
    db_name=myapp \
    creation_statements="CREATE USER '{{name}}'@'%' IDENTIFIED BY '{{password}}'; GRANT ALL PRIVILEGES ON myapp.* TO '{{name}}'@'%';" \
    default_ttl="2m" max_ttl="6m"

Update /etc/consul-templates/config.inc.php.ctmpl on lab05:

Change:         {{ with secret "secret/myapp" }}
To:             {{ with secret "database/creds/myapp" }}

Restart consul-template on lab05:

$ sudo systemctl restart consul-template

Confirm that application is working, by pointing your browser to http://lab05/

By inspecting /var/www/html/config.inc.php file on lab05, confirm that password rotation is working.
