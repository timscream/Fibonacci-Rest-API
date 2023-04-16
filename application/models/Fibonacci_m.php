<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fibonacci_m extends CI_Model {

    private function fibonacci_enhanced($n){ //hotfix-V0.3.1-sn

        $fibonacci_result = [0,1];

        if($n==0 OR $n==1){ return 1; }
 
        for($i=2;$i<=$n;$i++)
        {
            $fibonacci_result[] = $fibonacci_result[$i-1]+$fibonacci_result[$i-2];
        }

        return $fibonacci_result[$n];
    } //hotfix-V0.3.1-en

    /* private function fibonacci_recursive($n){ //deprecated hotfix-V0.3.1-so

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
            $fibonacci_result = f($i);
        }

        return $fibonacci_result;
    } */ //hotfix-V0.3.1-eo

    public function calculate_fibonacci_serie($n){

        return $this->fibonacci_enhanced($n);
    }
}

/* End of file fibonacci_m.php */
/* Location: ./application/models/Fibonacci_m.php */