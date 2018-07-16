<?php
require_once $_SERVER['DOCUMENT_ROOT']."/gaming/config/config.php";
require_once LIBRARY_PATH."/handler/read.php";

if(isset($_REQUEST['navigation_type'], $_REQUEST['navigation_id'])):
    $type = $_REQUEST['navigation_type'];
    $id = $_REQUEST['navigation_id'];
    $query = "CALL read_navigation(:type, :id)";
    $params = [":type" => $type, ":id" => $id];
    $row = Read::execute($query, $params);
    if($row):
        for($i = 0; $i < count($row); $i++):
            $data[] = [
                        "id" => $row[$i][0], "name" => $row[$i][1], "logo" => $row[$i][2], 
                        "location" => $row[$i][3], "sub" => $row[$i][4]
            ];
        endfor;
    else:
        $data = array();
    endif;
    echo json_encode($data);
endif;