
<?php
//===============================TRACCIA1===============================
/*$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = $text2;
$text7 = 'bevuto';
$text8 = "tutto";

echo "$text1 $text2 $text3 $text4 $text5 $text6 $text7 $text8";  
?>*/

//===============================TRACCIA2===============================
/*
$words1 = [
  'una',
  67,
  'vita',
  'colle',
  'mi',
  'rosso',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
  [
    'cammin',
    'Nel',
    [
      'selva',
      'la',
      [
        'via',
        'una',
        true,
      ]
    ],
  ]
],
    'ritrovai',
    'per'
  ],
'diritta'
];
$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'nostra',
  'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
  ]
];

$words3 = [
    'di',
    'in'
] ;

$pre_results1=$words1[6][3][1][1] . " " . $words1[6][3][0] . " " . "del" . " " . $words1[6][3][1][0] . " " . $words3[0] . " " . $words2['elemento2'] . " " . $words1[2];
$pre_results2=$words1[4] . " " . $words1[6][4] . " " . $words3[1] . " " . $words1[6][3][1][2][2][1] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . ",";
$pre_results3= "che' " . $words1[6][3][1][2][1] . " " . $words1[7] . " " . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " smarrita";

$results=$pre_results1 . " " . $pre_results2 . " " . $pre_results3;

echo($results);
*/

//===============================TRACCIA3===============================
/*

Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, 
per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
*/

/*
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'male'],
    ['name' => 'Giulia', 'surname' => 'Bianchi', 'gender' => 'female'],
    ['name' => 'Marco', 'surname' => 'Rossi', 'gender' => 'male'],
    ['name' => 'Laura', 'surname' => 'Verdi', 'gender' => 'female'],
    ['name' => 'Sofia', 'surname' => 'Esposito', 'gender' => 'female']
  ];

foreach ($users as $user) {
    if ($user['gender'] === 'male') {
      echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    } else if ($user['gender'] === 'female') {
      echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
      echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
  };
*/

//===============================TRACCIA4===============================
/*
Traccia 4:
Scrivere un programma che stampi in console tutti i numeri da uno a cento.

Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
se multiplo di 5 stampare “JAVASCRIPT”;
se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".
*/

/*
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
      echo "HACKADEMY\n";
    } else if ($i % 3 === 0) {
      echo "PHP\n";
    } else if ($i % 5 === 0) {
      echo "JAVASCRIPT\n";
    } else {
      echo $i . "\n";
    }
  };
*/
