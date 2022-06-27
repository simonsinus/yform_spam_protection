<?php

rex_yform_manager_table_api::importTablesets(rex_file::get(rex_path::addon('.new.yform_spam_protection', 'install/rex_tmp_spam_protection_log.tableset.json')));

rex_yform_manager_table::deleteCache();
