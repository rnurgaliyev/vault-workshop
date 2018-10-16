Now we get secret from Vault.

Export vault variables, if were not previously exported:

$ export VAULT_ADDR=http://192.168.238.11:8200
$ export VAULT_TOKEN=xxx

Run Ansible playbook:

$ ansible-playbook -i lab.ini myapp.yml

Change secret values in Vault.
Ensure that changes are applied to /var/www/html/config.inc.php on lab05.
