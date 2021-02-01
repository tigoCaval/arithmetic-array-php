<?php

class ArithmeticArray
{
     
    /**
     * Mathematical operation [+,-,*,/].
     * Maintains key association.
     * Example: $dividend = ['A'=>10,'B'=>20]; $divisor = ['A'=>2,'B'=>10]; ($dividend/$divisor) result ['A'=>5, 'B'=>2].
     * @param array $data
     * @param array $data2
     * @param string $symbol
     * 
     * @return array
     */
    public function operation($data, $data2, $symbol)
    {
        $result = [];
        foreach($data as $item){
            foreach($data2 as $value){
               if(key($data) == key($data2)){
                   if(!isset($result[key($data)]))
                       $result[key($data)] = $item;  
                   switch($symbol){
                       case '+':
                            $result[key($data)] =  round($result[key($data)]+$value,2);
                            break;
                       case '-':
                            $result[key($data)] =  round($result[key($data)]-$value,2);
                            break;
                       case '*':
                            $result[key($data)] =  round($result[key($data)]*$value,2);
                            break;   
                       case '/':
                            $result[key($data)] =  round($result[key($data)]/$value,2);
                            break;      
                       default:
                            $result = [];
                            break;
                   }     
               }  
               next($data2);    
            }
            reset($data2);
            next($data);  
        }
        arsort($result);
        return $result;
    }


}