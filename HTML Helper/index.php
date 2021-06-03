<?php 

$arr = array("CA", "WA", "UT", "TX", "AZ", "NY");
$users = [
    ["id"=>1, "firstname"=>"Michael", "lastname"=>"Choi"],
    ["id"=>2, "firstname"=>"Tiffany", "lastname"=>"Joy"],
    ["id"=>3, "firstname"=>"Jhescela", "lastname"=>"Love"],
    ["id"=>4, "firstname"=>"Kaori", "lastname"=>"Mitsuha"]
];

function head($text){
    return "<h1>$text</h1>";
}
echo head("HTML HELPER!");

class HTML_Helper{

    function print_select($array){
        echo "<select>";
        foreach($array as $value){
            echo "<option value='strtolower($value)'>$value</option>";
        }
        echo "</select>";
    }

    public function print_table($array){
        $keys = array_keys($array[0]);

        echo '<table><tr>';
        foreach($keys as $key) {
            echo '<th>'.$key.'</th>';
        }
        echo '</tr>';

        foreach($array as $rows){
            echo '<tr>';
            foreach ($rows as $value) {
                echo '<td>'.$value.'</td>';
            }
            echo '</tr>';
        } 
        echo '</table>';
    }
}

$table = new HTML_Helper();
$table->print_table($users);

$select = new HTML_Helper();
$select->print_select($arr);


?>



