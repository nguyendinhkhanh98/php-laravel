<?php
class MyIterator implements Iterator{
    private $var = aray();

    public function _construct($array){
        if(is_array($array)){
            $this->var = $array;
        }
    }

    public function rewind(){
        echo "rewinding \n";
        reset($this->var);
    }
    public function current(){
        $var = current($this->var);
        echo"current: $var \n";
        return $var;
    }
}
?>