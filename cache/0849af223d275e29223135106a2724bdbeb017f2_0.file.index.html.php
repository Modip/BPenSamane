<?php
/* Smarty version 3.1.30, created on 2020-08-19 13:13:51
  from "/opt/lampp/htdocs/mesProjets/bpensamanev1/src/view/compte/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3d096feac989_85000129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0849af223d275e29223135106a2724bdbeb017f2' => 
    array (
      0 => '/opt/lampp/htdocs/mesProjets/bpensamanev1/src/view/compte/index.html',
      1 => 1597835613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3d096feac989_85000129 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php ';?>extract($data); <?php echo '?>';?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/css/mystyle.css"/>
    <title>Creation compte</title>
</head>

<body>

    <header class="topbar">
        <h3>BANQUE DU <span style="color: white;">PEUPLE</span></h3>
    </header>
    <nav class="sidebar">
        <a class="dash" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client">Dashboard </a>
        <a class="compt" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte" style="color: black;">Compte</a>
        <a class="dash" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client">Client </a>
    </nav>
    <form id="inscription" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/insert">
        <div class="container">
            <h2>Ouverture de Compte</h2>
            <select id="typeclient" name="typeclient" onchange="chwclient()">
                <option value="0">--Choix Type Client--</option>
                <option value="1" id="cp" class="clp">Client Physique</option>
                <option value="2" id="cm" class="clm">Client Moral</option>
            </select>
            <main id="clientphysique">
                <fieldset class="clientphysique" id="cliphysique">
                    <legend>Client Physique </legend>
                    <select name="idClient" id="idClient">
                        <option value="">Clients</option>
                        <!-- Afficher les clients recuperer par la fonction du meme nom -->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
">
                            <?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>

                        </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select> <br>

                    <select name="agence" id="idagence">
                        <option value="">Agence</option>
                        <!--afficher les agences grace à la fonction afficherAgence-->

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agences']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
">
                            <?php echo $_smarty_tpl->tpl_vars['agence']->value->getNom();?>

                        </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </select> <br>
                    <select name="typecompte" id="chx" onchange="return chwcompt()">
                        <option value="0">Type de Compte</option>
                        <!--afficher les types de compte grace à la fonction afficherTypecompte -->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typecomptes']->value, 'typecompte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['typecompte']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['typecompte']->value->getId();?>
">
                            <?php echo $_smarty_tpl->tpl_vars['typecompte']->value->getLibelle();?>

                        </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select> <br>

                    <label for="cle"> Clé RIB</label>
                    <input type="" name="clerib" class="cp" id="clerib">
                    <label for="contrclerib" id="contrclerib" class="contr"> veillez saisir la clé RIB</label>
                    <label for="solde"> Solde</label>
                    <input type="" name="solde" class="cp" id="solde">
                    <label for="" id="contrsolde" class="contr">Veillez saisir le solde </label>
                    <label for="agios"> Agios</label>
                    <input type="" name="agios" id="agios">
                    <label for="" id="contragios" class="contr"> Veillez saisir les agios</label>
                    <label for="fraisou">Frais</label>
                    <input type="text" name="fraisph" id="fraisou">
                    <label for="" id="contrfraisou" class="contr"> Veillez saisir les frais </label>
                    <label for="date">Date d'ouverture</label>
                    <input type="date" name="dateou" id="dateou">
                    <label for="" id="contrdateou" class="contr"> Veillez choisir la date </label>

                    <div id="datebloc" style="display: none;">
                        <label for="date">Date de blocage</label>
                        <input type="date" name="dateoub" class="cp" id="dateoub"> <br>
                        <label for="date">Date de déblocage</label>
                        <input type="date" name="datedeb" id="datedeb">
                    </div>

                </fieldset>
            </main>
            <aside id="clientmoral">
                <fieldset class="clientmoral" id="climoral">
                    <select name="clientmor">
                        <option value="0">Clients</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientmors']->value, 'clientmor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clientmor']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
">
                        <?php echo $_smarty_tpl->tpl_vars['clientmor']->value->getNom();?>

                        </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select> <br>
                    <legend> client moral </legend>
                    <label for="cle">Clé RIB</label>
                    <input type="text" name="cleribmor" id="cleribmor">
                    <label for="contrclerib" id="contrcleribmor" class="contr"> veillez saisir la clé RIB</label>
                    <label for="solde">Solde initial</label>
                    <input type="text" name="soldemor" id="soldemor">
                    <label for="" id="contrsoldemor" class="contr">Veillez saisir le solde initial</label><br>
                    <label for="fraismor">Frais</label>
                    <input type="text" name="fraismor" id="fraismor">
                    <label for="" id="contrfraismor" class="contr">Veillez saisir les frais</label><br>
                    <label for="dateoum">Date d'ouverture</label>
                    <input type="date" name="dateoum" class="cp" id="dateoum">
                </fieldset>
            </aside>

            <div class="boutton" id="boutton">
                <input class="ajout" type="submit" name="ajouter" value="Ajouter" onclick="return validation()">
            </div>
        </div>
    </form>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/compte.js"><?php echo '</script'; ?>
>
    
</body>

</html><?php }
}
