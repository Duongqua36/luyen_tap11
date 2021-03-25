
<?php
//function isMod3($number){
//    if ($number%3 ==0)
//        echo true;
//        echo false;
//}
//$number = 10;
//if(isMod3($number)){
//    echo "chia hết cho 3";
//}else
//    echo "không chia hết cho 3";

class Hv{
    private $Ma;
    private $Ten;
    private $Tuoi;


    public function __construct($Ma,$Ten,$Tuoi)
    {
        $this->Ma= $Ma;
        $this->Ten=$Ten;
        $this->Tuoi=$Tuoi;

    }
    /**
     * @return mixed
     */
    public function getMa()
    {
        return $this->Ma;
    }

    /**
     * @param mixed $Ma
     */
    public function setMa($Ma)
    {
        $this->Ma = $Ma;
    }

    /**
     * @return mixed
     */
    public function getTen()
    {
        return $this->Ten;
    }

    /**
     * @param mixed $Ten
     */
    public function setTen($Ten)
    {
        $this->Ten = $Ten;
    }

    /**
     * @return mixed
     */
    public function getTuoi()
    {
        return $this->Tuoi;
    }

    /**
     * @param mixed $Tuoi
     */
    public function setTuoi($Tuoi)
    {
        $this->Tuoi = $Tuoi;
    }
}
$HV=new hv('868','Dương','18');
echo 'Mã học viên là :'.$HV->getMa()."<br>";
echo 'Tên học viên là :'.$HV->getTen().'<br>';
echo 'Tuổi học viên là :'.$HV->getTuoi();