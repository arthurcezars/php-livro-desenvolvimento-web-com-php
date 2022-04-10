<?php
# exibir 'bom dia', 'boa tarde' ou 'boa noite' de acordo com a hora
$hora = date('H');
echo "<p>Hora atual: ${hora}</p>";
if ($hora >= 6 && $hora < 12) {
  echo '<p>bom dia</p>';
} else if ($hora < 18){
  echo '<p>boa tarde</p>';
} else {
  echo '<p>boa noite</p>';
}
echo '</br>';

# exibir o dia atual como texto em negrito
$dia = date('l');
echo "<p><b>${dia}</b></p>";

# exibir os domingos em vermelho e os sabados em negrito
# fazer o calendario começar sem ser no domingo
# e um calendario do ano todo? será que é muito complexo?
?>