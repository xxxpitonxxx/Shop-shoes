<?
include 'dbconnect.php';
$json = json_decode(file_get_contents("php://input"), true);

switch ($json['action']) {
    case "reg":

        $login = $json['payload']['login'];
        $pass = $json['payload']['pass'];
        $email = $json['payload']['email'];
        $name = $json['payload']['name'];

            $db = dbconn();

        $pass = md5($pass);
        $query = $db->query("INSERT INTO `Users`(`login`, `pass`, `email`, `name`) VALUES ('$login','$pass','$email','$name')");

        if($query) {
            echo json_encode([
                "status"=>"ok",
            ]);
        }
        
        break;

        //добавление товара

        case "getStuff":
            $db = dbconn();

            $query = $db->query("SELECT * FROM `goods_store`"); //только с товарами

            $data = [];

            while($row = $query->fetch_assoc()){
                array_push($data, $row);
            }

            echo json_encode($data);

            break;
}