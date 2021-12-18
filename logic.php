<?php
class LaptopBrand{


    public function sum(){

        $laptop = array("Apple"=>1000000, "Hp"=>500000, "Lenovo"=>200000, "Dell"=>600000);
        $val = array_sum($laptop);
        echo "The sum of values in the Laptop Array is: $".$val."<br><br>";
    }

    public function brand($name){
      $laptop = array(1000000=> "Apple", 500000=>"Hp", 200000=>"Lenovo", 600000=>"Dell");
        $newNameLower = strtolower($name);
        $newName = ucfirst($newNameLower);
        $brandname = array_search($newName, $laptop);
       if(in_array($newName, $laptop))
      {
        echo "The price for ".$newName." "."is $".$brandname."<br><br>";
      }
        else {
          echo  $newName. " ". "laptop not available"."<br><br>";
        }

    }

    public function comparePrice($a, $b){
        $laptop = array(1000000=> "Apple", 500000=>"Hp", 200000=>"Lenovo", 600000=>"Dell");
            $key1 = array_search($a, $laptop);
            $key2 = array_search($b, $laptop);

            $result = $key1 - $key2;
            echo "The difference between ".$a." and ".$b." $".$result."<br><br>";
    }

    Public function highestPrice($prices =[]){
        $laptop = array("Apple"=>1000000, "Hp"=>500000, "Lenovo"=>200000, "Dell"=>600000);
        $prices = array_search(max($laptop), $laptop);
        echo "The highest price from the array is ".$prices;
    }



}
?>
