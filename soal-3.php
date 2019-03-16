
<?php 
$num_char = 7;
$onehalf = floor($num_char/2);
$onehalf_var = $onehalf;
$char1 = "- ";
$char2 = "* ";

for ($row = 1; $row <= $num_char; $row++){
    // loop kolom
    for ($col = 1; $col <= $num_char; $col++)
    {
        $char = $col > $onehalf_var && $col<= ($num_char - $onehalf_var) ? $char2 : $char1;
        echo $char;
    }
    $row <= $onehalf ? $onehalf_var-- : $onehalf_var++;
    echo '<br>';
}

?>

<!-- semoga lolos seleksi,semoga ada kebijakan karna saya baru belajar dan sangat berharap lolos seleksi -->