<?php

    $data = array(
        array('name'=>'Taro','mail'=>'taro@yamada','tel'=>'090-999-999'),
        array('name'=>'Max','mail'=>'max123@yamada','tel'=>'090-123-999'),
        array('name'=>'John','mail'=>'john011@yamada','tel'=>'090-999-456'),
        array('name'=>'Tim','mail'=>'tim@yamada','tel'=>'090-777-999'),
    )

    $id = $_GET['id'] * 1;

    if ($id < count($data)){
        $result = $data[$id];
    } else {
        $result = $data[0];
    }

    header('Content-type:application/json; charset=utf8');
    echo json_encode($result)
?>