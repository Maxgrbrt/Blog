<?php
/* Smarty version 3.1.30, created on 2017-11-29 10:45:33
  from "C:\Users\Max\Desktop\Site\www\Projet\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e8fcd750895_10061367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6a93132a69f2e8610edd5907b72a3585daceaa' => 
    array (
      0 => 'C:\\Users\\Max\\Desktop\\Site\\www\\Projet\\templates\\index.tpl',
      1 => 1511952324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e8fcd750895_10061367 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
    
    <div class="container">

        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Nos Articles </h1>


        </div>
    </div>

    <!-- Affichage du contenu d'un article sur la page index pour chaque article -->

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <div class="container" >
            <img class="card-img-top" src="img/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.jpg">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
</h4>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['texte'];?>
</p>
                <a href="#" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['value']->value['date_fr'];?>
</a>
                
              <a href="article_page.php?action=Lire&id_article=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-primary">Lire l'article</a>
              
    <!-- Affichage du bouton Modifer et Supprimer si l'utilisateur est connecté -->
                <?php if ($_smarty_tpl->tpl_vars['is_connect']->value == TRUE) {?>
                     
       
                    <a href="article.php?action=Modifier&id_article=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-primary">Modifier l'article</a>
                    <?php }?>
                    <!-- Le compte admin peut supprimer n'importe quel article -->
                    <?php if ($_smarty_tpl->tpl_vars['admin']->value == TRUE) {?>
                    <a href="article_page.php?action=Supprimer&id_article=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-danger">Supprimer l'article</a>
           <?php }?>
        </div></div></div><br>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <br>
    <div class="container">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
   
    <!-- Pagination jusqu'au nombre de page calculé dans la page php -->
    
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page_courante']->value == $_smarty_tpl->tpl_vars['i']->value) {?>active<?php }?>">
                    <a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&search=<?php echo $_smarty_tpl->tpl_vars['recherche']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                </li><?php }
}
?>

        </ul>
    </nav>
</div>
</div>





<!-- Bootstrap core JavaScript -->
<?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/popper/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>


<?php }
}
