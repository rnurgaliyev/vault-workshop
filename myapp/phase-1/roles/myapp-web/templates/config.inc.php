<?php

    $database_host = "{{ hostvars[groups['myapp-db'][0]].ansible_host }}";
    $database_user = "{{ database_user }}";
    $database_pass = "{{ database_pass }}";

?>
