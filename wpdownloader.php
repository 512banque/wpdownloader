<?php echo shell_exec('wget http://fr.wordpress.org/latest-fr_FR.zip && unzip latest-fr_FR.zip && mv wordpress/* ./ && rmdir ./wordpress/ && rm -f latest-fr_FR.zip && rm '.__FILE__); ?>
