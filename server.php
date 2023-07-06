<?php
$string= file_get_contents('data/todo_list.json');

$array= json_decode($string,true);

if(isset($_POST['newTask']) && $_POST['newTask'] !== '' ){
    $task = [
        'text' => $_POST['newTask'],
        'done'=> false,
        ];
    array_push($array, $task);
    $array_encoded = json_encode($array);

    file_put_contents('data/todo_list.json', $array_encoded);
}

header('Content-Type: application/jason');
echo json_encode($array)
?>