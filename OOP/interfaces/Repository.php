
<?php
    /**
     * Interface cannot have properties, while abstract classes can.
     * 
     * all interface methods must be public, while abstract class methods is public or protected.
     * 
     * All methods in an interface are abstract, 
     * so they cannot be implemented in code and the abstract keyword is not necessary
     * 
     * Classes can implement an interface while inheriting from another class at the same time.
     * 
     */
    interface Repository{
        public function save($ElectronicDevice);

        public function findAllDeviceReadyToSale();

        public function update();

        public function delete();
    }
?>