<h1>Animal shelter</h1>

<?php
$catData = [
["type" => 'Cat', "color" => 'red and white', "race" => "persian", "age" => 5, "vet" => "Yes", "price" => 500, "addedVetPrice" => 1500],
["type" => 'Cat', "color" => 'grey', "race" => "egytian mau", "age" => 2, "vet" => "No", "price" => 500, "addedVetPrice" => 0 ],
];
$dogData = [
    ["type" => 'Dog', "color" => 'black and white', "race" => "husky", "age" => 7, "vet" => "Yes", "price" => 1500],
    ["type" => 'Dog', "color" => 'white', "race" => "samoyed", "age" => 3, "vet" => "No", "price" => 1500],
];
$rabbitData = [
    ["type" => 'Rabbit', "color" => 'multiple colors', "race" => "lionhead", "age" => 2, "vet" => "Yes", "price" => 150],
    ["type" => 'Rabbit', "color" => 'white', "race" => "drawf rabbit", "age" => 1, "vet" => "No", "price" => 150],
];





?><ul>
    <li style="color:#f20505";> <h2> Cat </h2>
    <?php foreach ($catData as ["type" => $catType, "color" => $catColor, "race" => $catRace, "age" => $catAge, "vet" => $catVet, "price" => $catPrice, "addedVetPrice" => $addedVetPrice])

/*$addedVetPrice = 1500;
if($catAge > 1 ) 
{
    echo "Total price: $catPrice<p>";
}
else{
    echo "<p>Total price: $catPrice + $addedVetPrice</p>";
}*/

  
{
    echo 
     "<ol><h3>Cats in the shelter:  $catType </h3>
            <ul>
                <p>Race: $catRace  </p>
                <p>Age:  $catAge  </p>
                <p>Color:  $catColor  </p>
                <p>Visit by the vet: $catVet </p>
                <p>Price for adobtion: $catPrice </p>
                <!--<p>Bill from the vet:  /*$addedVetPrice*/ </p>-->
                <!--<p>Price in total: /*$catPrice + $addedVetPrice*/</p>-->
            </ul>
        </ol>";
    
} 



               


/*function addedVetPrice($addedVetPrice, $catPrice)
{
return $catPrice + $addedVetPrice;
}*/



?>
  </li>
    <li style="color:#fc9003";> <h2> Dog </h2>
   <?php  foreach ($dogData as ["type" => $dogType, "color" => $dogColor, "race" => $dogRace, "age" => $dogAge, "vet" => $dogVet, "price" => $dogPrice])
{
    echo 
     "<ol><h3>Cats in the shelter:  $dogType </h3>
            <ul>
                <p>Race: $dogRace  </p>
                <p>Age:  $dogAge  </p>
                <p>Color:  $dogColor  </p>
                <p>Visit by the vet: $dogVet </p>
                <p>Price for adobtion: $dogPrice </p>
            </ul>
        </ol>";
    
}
?>

</li>
    <li style="color:#0aba07";><h2> Rabbit </h2>
<?php    foreach ($rabbitData as ["type" => $rabbitType, "color" => $rabbitColor, "race" => $rabbitRace, "age" => $rabbitAge, "vet" => $rabbitVet, "price" => $rabbitPrice])
{
    echo 
     "<ol><h3>Cats in the shelter:  $rabbitType </h3>
            <ul>
                <p>Race: $rabbitRace  </p>
                <p>Age:  $rabbitAge  </p>
                <p>Color:  $rabbitColor  </p>
                <p>Visit by the vet: $rabbitVet </p>
                <p>Price for adobtion: $rabbitPrice </p>
            </ul>
        </ol>";
    
} ?>
</li> 
</ul>
<ul> <?php

