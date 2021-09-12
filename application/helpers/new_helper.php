<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function date_custom($date = '')
    {
        $date = explode('-', $date);
        $month = convertMonth($date[1]);
        return $date[2].' '.$month.' '.$date[0];
    }   

    function convertMonth($date){
        if($date == '01'){
            return 'Januari';
        }
        
        elseif($date == '02'){
            return 'Februari';
        }
        
        elseif($date == '03'){
            return 'Maret';
        }
        
        elseif($date == '04'){
            return 'April';
        }
        
        elseif($date == '05'){
            return 'Mei';
        }
        
        elseif($date == '06'){
            return 'Juni';
        }
        
        elseif($date == '07'){
            return 'Juli';
        }
        
        elseif($date == '08'){
            return 'Agustus';
        }
        
        elseif($date == '09'){
            return 'September';
        }
        
        elseif($date == '10'){
            return 'Oktober';
        }
        
        elseif($date == '11'){
            return 'November';
        }
        
        elseif($date == '12'){
            return 'Desember';
        }
    }
    
}