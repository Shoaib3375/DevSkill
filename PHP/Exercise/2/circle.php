<?php
class Circle
{
    public $Radius;
    private $Color;

    public function __construct( int $Radius )
    {
        $this->Radius = $Radius;
        $this->Color = 'Red';
    }

    private function CalculateArea()
    {
        $R = $this->Radius;
        return 3.14 * $R * $R;
    }
    public function CircleDetails()
    {
        echo $this->CalculateArea();
        echo $this->Color;
    }

}
$area = new Circle( 4 );
echo $area->CircleDetails();