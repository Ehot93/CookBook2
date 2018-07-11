
<?php 
$conn = mysqli_connect('localhost','root','','Recipes');
$query = 'select * from Food';
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach ($data as $item) {
    echo "ID - ".$item['id']."<br>";
    echo "Категория: ".$item['Категория']."<br>";
    echo "Порции: ".$item['Порции']."<br>";
    echo "Тип: ".$item['Тип']."<br>";
    echo "Время: ".$item['Время']."<br>";
    echo "Название: ".$item['Название']."<br>";
    echo "Рецепт: ".$item['Рецепт']."<br>";
    echo "Ингредиенты: ".$item['Ингредиенты']."<br>";
}
 ?>