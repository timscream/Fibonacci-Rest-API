<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fibonacci_m extends CI_Model {

    private function fibonacci_recursive($n){

        $fibonacci_recursive = [0,1];

        if($n==0 OR $n==1){ return 1; }
 
        for($i=2;$i<=$n;$i++)
        {
            $fibonacci_recursive[] = $fibonacci_recursive[$i-1]+$fibonacci_recursive[$i-2];
        }
        return $fibonacci_recursive[$n];
    }

    public function calculate_fibonacci_serie($n){

        return $this->fibonacci_recursive($n);
    }
}

/* End of file fibonacci_m.php */
/* Location: ./application/models/Fibonacci_m.php */