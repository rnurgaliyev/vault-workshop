template {
  source = "/etc/consul-templates/config.inc.php.ctmpl"
  destination = "/var/www/html/config.inc.php"
}

vault {
  enabled = true
  renew_token = false
}

log_level = "trace"
