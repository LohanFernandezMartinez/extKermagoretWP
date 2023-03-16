<?php
$foot='';
$basket='';

// On vérifie si le formulaire a été soumis
if (isset($_POST['foot']) && isset($_POST['basket'])) {
  $foot = 'checked';
  $basket = 'checked';
  update_user_meta(get_current_user_id(), 'foot', $foot);
  update_user_meta(get_current_user_id(), 'basket', $basket);
  echo get_current_user_id();
}
?>

<div class="wrap">
  <h1>Veep IA</h1>
  <p>Voici une extension permettant de créer une page web et son contenu</p>
  <form method="post">
  <p>Quels sont vos loisirs préférés ?</p>
  <input type="checkbox" name="foot" <?php echo esc_attr($foot); ?>>
  <label>Foot</label>
  <input type="checkbox" name="basket" <?php echo esc_attr($basket); ?>>
  <label>Basket</label>
  <!--<input type="checkbox" id="lecture" name="loisirs[]" value="lecture">
  <label for="lecture">Lecture</label>
  <input type="checkbox" id="musique" name="loisirs[]" value="musique">
  <label for="musique">Musique</label>-->
  <input type="submit" name="submit" value="Envoyer">
</form>
</div>
