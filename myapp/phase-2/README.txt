Now we get secret from Vault.

Set some secret in vault (any controller machine):

$ vault write secret/myapp username=user123 password=pass123

Export vault variables, check secret name/path in vault, and run Ansible playbook:

$ export VAULT_ADDR=http://192.168.238.11:8200
$ export VAULT_TOKEN=xxx
$ cat ./group_vars/all/secrets.yml
$ ansible-playbook -i lab.ini myapp.yml

Confirm that application is working, by pointing your browser to http://lab05/
