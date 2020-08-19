<?php
/* Smarty version 3.1.30, created on 2020-08-19 14:51:54
  from "/opt/lampp/htdocs/mesProjets/bpensamanev1/src/view/client/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3d206ae29347_80489229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b6c67b27a072bdd022b6aebda3a3c88e90bb366' => 
    array (
      0 => '/opt/lampp/htdocs/mesProjets/bpensamanev1/src/view/client/index.html',
      1 => 1597841508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3d206ae29347_80489229 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/css/mystyle.css" />
    <title>Creation client</title>
</head>

<body>

    <header class="topbar">
        <h3>BANQUE DU <span style="color: white;">PEUPLE</span></h3>
    </header>
    <div>
        <nav class="sidebar">
            <a class="dash" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client">Dashboard </a>
            <a class="compt" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte" style="color: black;">Compte</a>
            <a class="dash" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client">Client </a>
        </nav>
    </div>

    <form id="inscription" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/insert">
        <legend>
            <h2>Ajout de Client</h2>
        </legend>

        <select id="typeclient" name="typeclient" class="typeclient" onchange="return chwclient()">
            <option value="0">--Choix Type Client--</option>
            <option value="1" id="cp" class="clp">Client Physique </option>
            <option value="2" id="cm" class="clm">Client Moral</option>
        </select>
        <main id="clientphysique">
            <fieldset>
                <legend>Client Physique</legend>
                <select name="nature" id="natclient" onchange="return chwnatclient()">
                    <option value="0">Nature client physique</option>
                    <option value="1">Salarié</option>
                    <option value="2">Non Salarié</option>
                </select>

                <label for="nameph"> Nom</label>
                <input type="text" name="nomph" id="nameph">
                <label for="" id="contrnameph" class="contr">Veillez saisir le nom</label>
                <label for="prenomph">Prénom</label>
                <input type="text" name="prenomph" id="prenomph">
                <label for="" id="contrprenomph" class="contr"> Veillez saisir le prénom</label> <br>
                <label for="ninph">NIN</label>
                <input type="text" name="ninph" id="ninph">
                <label for="" id="contrnin" class="contr">Veillez saisir le numéro d'identification</label>
                <label for="">Adresse</label>
                <input type="text" name="adresseph" id="adresseph">
                <label for="" id="contradresseph" class="contr">Veillez saisir l'adresse</label>
                <label for="telph">Téléphone</label>
                <input type="text" name="telph" id="telph">
                <label for="" id="contrtelph" class="contr">Veillez saisir le numéro de téléphone</label><br>
                <label for="mailph">Email</label>
                <input type="email" name="emailph" id="mailph">
                <label for="" id="contrmailph" class="contr">Veillez saisir l'adresse email</label>
                <label for="profession">Profession</label>
                <input type="text" name="profession" id="profession">
                <label for="" id="contrprofession" class="contr">Veillez saisr la profession</label><br>
                <label for="loginph">Login</label>
                <input type="text" name="loginph" id="loginph">
                <label for="" id="contrloginph" class="contr">Veillez saisir le login</label>
                <label for="passwordph">Password</label>
                <input type="password" name="passwordph" id="passwordph">
                <label for="" id="contrpasswordph" class="contr">Veillez saisir le mot de pass</label> <br>
                <label for="soldeph" class="salaire">Salaire</label>
                <input type="text" name="salaire" class="salaire" id="soldeph">
                <label for="" id="contrsoldeph" class="contr">Veillez saisir le salaire</label>
                <p id="employeur" class="employeur"> Employeur
                    <select name="" id=""> 
                        <option value="">Entreprise</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientmors']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
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

                    </select>
                </p>
            </fieldset>
        </main>
        <aside id="clientmoral" class="climo">
            <fieldset>
                <legend>Client Moral</legend>
                <label for="nommor">Nom</label>
                <input type="text" name="nommor" id="nommor">
                <label for="" id="contrnommor" class="contr">Veillez saisir le nom</label>
                <label for="adresse">Adresse</label>
                <input type="text" name="adressemor" id="adresse">
                <label for="" id="contradresse" class="contr">Veillez saisir l'dresse</label><br>
                <label for="social">Raison social</label>
                <input type="text" name="raisonsocial" id="social"><br>
                <label for="" id="contrsocial" class="contr">Veillez saisir la raison social</label>
                <label for="telmor">Téléphone</label>
                <input type="text" name="telmor" id="telmor">
                <label for="" id="contrtelmor" class="contr">Veillez saisir téléphone</label>
                <label for="mailmor">E-mail</label>
                <input type="text" name="mailmor" id="mailmor">
                <label for="" id="contrmailmor" class="contr">Veillez saisir l'adresse mail</label>
                <label for="loginmor">Login</label>
                <input type="text" name="loginmor" id="loginmor">
                <label for="" id="contrloginmor" class="contr">Veillez saisir le login</label>
                <label for="passwordmor">Password</label>
                <input type="password" name="passwordmor" id="passwordmor">
                <label for="" id="contrpasswordmor" class="contr">Veillez saisir le mot de passe</label>
            </fieldset>
        </aside>

        <div class="boutton" id="boutton">
            <button type="submit" name="submit" class="ajout" onclick="return validate() "> Ajouter </button>
        </div>
    </form>


    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/client.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
