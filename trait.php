 <?php

    class Father
    {
        public function showFatherName()
        {
            echo "U Thura";
        }
    }
    trait Mother
    {

        public function showMotherName()
        {
            echo "Daw Mya";
        }
    }
    class children extends Father
    {
        use Mother;
        public function __construct()
        {
            $this->showMotherName();
            $this->showFatherName();
        }
    }
    $c = new Children();