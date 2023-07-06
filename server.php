<?php
$array= [
    "HTML",
    "CSS",
    "Responsive design",
    "JavaScript",
    "PHP",
];

header('Content-Type: application/jason');
echo json_encode($array);
?>