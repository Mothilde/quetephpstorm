<?php
    include './header.php';
    $students = [
        [
        'Prenom' => 'Emmanuel',
        'Note' => '42'
        ],
        ['Prenom' => 'Thierry',
        'Note' => '51'
        ],
        ['Prenom' => 'Pascal',
        'Note' => '45'
        ],
        ['Prenom' => 'Eric',
        'Note' => '48'
        ],
        ['Prenom' => 'Nicolas',
        'Note' => '19'
        ],
    ];
    if(is_array($students)) { /* Si la valeur est un tableau, faire.. */
        echo '<table>';
            echo '<tr>';
                echo '<th>Prenom</th>';
                echo '<th>Note</th>';
            echo '</tr>';
        foreach ($students as $values) { /* Pour chaque valeur contenue dans le tableau, faire... */
            echo '<tr>';
                echo '<td>"' . $values["Prenom"] . '"</td>';
                echo '<td>"' . $values["Note"] . '"</td>';
            echo '</tr>';
        }
        $somme_notes = array_sum(array_column($students, 'Note'));
        $moyenne = $somme_notes / 5;
        echo '</table>';
        echo "La moyenne est de $moyenne .";
}
?>
</body>
</html>


