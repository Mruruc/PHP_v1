
<?php require './ElectronicDevice.php';

    class Phone extends ElectronicDevice{
        private $is5g;

        public function __construct($IME,$price,$is5g)
        {
            parent::__construct($IME,$price);
            $this->is5g=$is5g;
        }

        function __destruct()
        {
            
        }

        public function getPrice(){
            return  $this->price * 0.9;
        }


        public function __toString(){
           $is5gText= $this->is5g ? "Yes" : "No";
           return "Phone={IME={$this->IME}, Price={$this->price}, Supports 5G={$is5gText}}";
        }
    }
?>