
<?php

    require "./Repository.php";

    class Service implements Repository{

        public function save($ElectronicDevice){
            echo("saved.<br/>");
        }
        public function findAllDeviceReadyToSale(){}
        public function update(){}
        public function delete(){}
    }

?>