<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fibonacci_m extends CI_Model {

    private function fibonacci_enhanced($n){

        $fibonacci_result = [0,1];

        if($n==0 OR $n==1){ return 1; }
 
        for($i=2;$i<=$n;$i++)
        {
            $fibonacci_result[] = $fibonacci_result[$i-1]+$fibonacci_result[$i-2];
        }

        return $fibonacci_result[$n];
    }

    private function fibonacci_recursive($n){

        $fibonacci_result = 0;
        
        function f($x)
        {
            if($x<=0)
                return 0;
            elseif($x==1)
                return 1;
            return f($x-1)+f($x-2);
        }

        for($i=1;$i<=$n;$i++)
        {
            $fibonacci_result = f($i).PHP_EOL;
        }

        return $fibonacci_result;
    }

    public function calculate_fibonacci_serie($n){

        return $this->fibonacci_recursive($n);
    }
}

/* End of file fibonacci_m.php */
/* Location: ./application/models/Fibonacci_m.php */