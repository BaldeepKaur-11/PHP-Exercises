<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["Pizza", "Burger", "Pasta", "Ice-cream",  "Chicken"];
/*
Print every array element in a new line.
*/

echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";
echo $food[4] . "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>";
echo "<li>Pizza</li>";
echo "<li>Burger</li>";
echo "<li>Pasta</li>";
echo "<li>Ice-cream</li>";
echo "<li>Chicken</li>";
echo "</ul>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
  "Pizza" => "Italian food",
  "Burger" => "Italian meal",
  "Pasta" => "Italian meal",
  "Ice-cream" => "Dessert",
  "Chicken" => "Main course"
    
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo $food[0] . " | " . $food_assoc["Pizza"] . "<br>" 
 . $food[1] . " | " . $food_assoc["Pasta"] . "<br>"
 . $food[2] . " | " . $food_assoc["Burger"] . "<br>"
 . $food[3] . " | " . $food_assoc["Ice-cream"] . "<br>"
 . $food[4] . " | " . $food_assoc["Chicken"] . "<br>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [
 
  "Pizza"=> [
    "type" => "Italian food", 
    "origin" => "Italy"
  ],
  "Pasta"=>[
    "type" => "Italian Meal", 
    "origin" => "Italy"
  ],
  "Burger"=>[
    "type" => "Italian Meal", 
    "origin" => "Italy"
  ],
  "Icecream"=>[
    "type" => "Healthy food", 
    "origin" => "India"
  ],
   "Chicken"=>[
    "type" => "Main Course",
    "origin" => "India"
  ],
];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo $food[0]
 . " | "
 . $food_assoc["Pizza"]["type"]
 . " | "
 . $food_assoc["Pizza"]["origin"]
 . "<br>" . $food[1]
 . " | "
 . $food_assoc["Pasta"]["type"]
 . " | "
 . $food_assoc["Pasta"]["origin"]
 . "<br>" . $food[2]
 . " | "
  . $food_assoc["Burger"]["type"]
 . " | "
 . $food_assoc["Burger"]["origin"]
 . "<br>" . $food[3]
 . " | "
 . $food_assoc["Icecream"]["type"]
 . " | "
 . $food_assoc["Icecream"]["origin"]
 . "<br>" . $food[4]
 . " | "
 . $food_assoc["Chicken"]["type"]
 . " | "
 . $food_assoc["Chicken"]["origin"]
 . " | "
;




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo
"<table>
  <tr>
    <th>".$food[0]."</th>
    <th>".$food_assoc["Pizza"]["type"]."</th>
    <th>".$food_assoc["Pizza"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[1]."</th>
    <th>".$food_assoc["Pasta"]["type"]."</th>
    <th>".$food_assoc["Pasta"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[2]."</th>
    <th>".$food_assoc["Burger"]["type"]."</th>
    <th>".$food_assoc["Burger"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[3]."</th>
    <th>".$food_assoc["Icecream"]["type"]."</th>
    <th>".$food_assoc["Icecream"]["origin"]."</th>
  </tr>
   <tr>
    <th>".$food[4]."</th>
    <th>".$food_assoc["Chicken"]["type"]."</th>
    <th>".$food_assoc["Chicken"]["origin"]."</th>
  </tr>
</table>";
?>