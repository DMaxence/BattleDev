<?php
//definition du tableau, vous pouvez changer ce qu il y a dedans 
//mais il faut dans ce cas changer la valeur du input 0 et ne pas oublier dincrementer les inputs suivants
$input[0] = '9';
$input[1] = 'rouge';
$input[2] = 'vert';
$input[3] = 'rouge';
$input[4] = 'vert';
$input[5] = 'bleu';
$input[6] = 'rouge';
$input[7] = 'rouge';
$input[8] = 'vert';
$input[9] = 'bleu';

// nb est le nombre de pairs retournees a la fin
$nb = 0;

//i est le terme iterateur du premier terme a comparer
$i = 1;

//j est le terme iterateur du deuxieme terme a comparer
$j = $i + 1;

//p est un iterateur pour remplir le tableau de zero
$p = 0;
for($p = 0; $p <= $input[0]; $p++){
    $tab[$p] = 0;
}

// ici on effectue les boucles pas plus de fois que de termes dans le tableau
for ($i = 1; $i <= $input[0]; $i++)
{
    $j = $i + 1;
    
    // le while est pour comparer le terme i avec tous les autres tant que j ne depasse pas le nb de termes du tableau
    while ($j <= $input[0])
    {
        // si le terme i et le terme j sont les memes
        if (strcmp($input[$i], $input[$j]) == 0)
        {
            // et que le terme n'a pas deja ete en paire
            if (0 != $tab[$i])
            {
                break;
            }
            // alors j'incremente nb, la position de i, la position de j et j
            else{

            $nb++;
            $tab[$i] = 1;
            $tab[$j] = 1;
            $j++;
            break;
            }
        }
        else
        {
            $j++;
        }
        
    }
}

// affichage du nombre de paires
echo $nb;
?>
