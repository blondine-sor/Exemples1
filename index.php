<?php 
$team1_data =["Canadiens",3];

echo $team1_data[0];
$team1_data =[
    "name"=> "Canadiens",
    "score"=> 3,
    "url"=> "www.canadiens.ca"
];
$team2_data =[
    "name"=> "Bulldogs",
    "score"=> 2,
    "url" => "www.bulldogs.us"
];
var_dump($team1_data);//affiche le tableau et le type de variable et son length
print_r($team2_data);
var_dump($team2_data["name"]) ;//affiche un seul element du tableau
echo '</br>';
foreach($team2_data as $data){ //affiche chaque element du tableau
    echo $data;
    echo '</br>';
}
$team3_data =[
    "name"=> "Jets",
    "score"=> 2,
    "url" => "www.jets.fr"
];
$teams=[$team1_data,$team2_data,$team3_data];
var_dump($teams);
echo'</br>';
foreach($teams as $data){
    if($data["score"] == 2){
        var_dump($data);
    }
}





?>