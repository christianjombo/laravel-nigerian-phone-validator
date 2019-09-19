<?php

if (! function_exists('nigerian_phone')) {
    /**
     * Get a Nigerian phone formatted string if the string matches the Nigerian Phone number format.
     * False is returned if the string does not match.
     *
     * @param string            $number
     * @param string            $local
     * @return string|bool      $phone
     */
    function nigerian_phone($number, $local = false)
    {
        $phone = false;
        if(preg_match('/(?:(?:(?:\+)?234)?\(0\))?0?(?P<numbers>[789][01]\d{1}[ ]?\d{3}[ ]?\d{4})/', $number, $match)){
            if($local == false){
                $phone = "+234".@$match[1];
            }else{
                $phone = "0".@$match[1];
            }
        }

        return $phone;
    }
}