<?php

$clangcode = rex_clang::getCurrent()->getCode(); 

if (1 == $loadScript) {
    echo '<script src="https://www.google.com/recaptcha/api.js?hl='.$clangcode.'" async defer></script>';
}
?>
<div id="<?php echo $this->getHTMLId() ?>" class="g-recaptcha <?php echo $this->getWarningClass(); ?>" data-sitekey="<?php echo $publicKey ?>"></div>
