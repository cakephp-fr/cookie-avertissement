<?= $this->Html->css('CookieWarning.cookie_style'); ?>

<div id="htmlPopinCookies" class="block">
    <p class="clearfix">
        <em><span><?= __d('cookie_warning', 'Utilisation des cookies') ?></span>
            <?= __d('cookie_warning', "En poursuivant votre navigation sans modifier vos paramètres, vous acceptez l'utilisation des cookies ou technologies similaires pour disposer de services et d'offres adaptés à vos centres d'intérêts ainsi que pour la sécurisation des transactions sur notre site. Pour plus d’informations, gérer ou modifier les paramètres," ?>
        </em>
        <a href="http://www4.fnac.com/Help/fnaccom-cookies.aspx?bl=CNILinfoCookies">
            <?= __d('cookie_warning', 'cliquez ici' ?></a>
        <i class="icon icon_i_037_cross_03 close"></i>
    </p>
</div>
