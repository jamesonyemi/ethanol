<?php 

class TimeClass {

    private static $days = array(
        'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
    );

    /**
     * relativeTime()
     * @param int $time
     * @param string $format
     */
    public static function relative($time, $format = 'jS F Y'){
        if(date('d/m/Y', $time) === date('d/m/Y')){
            return 'Today';
        }else if(date('d/m/Y', $time) === date('d/m/Y', time() - 3600 * 24)){
            return 'Yesterday';
        }else if((time() - $time) < 3600 * 24 * 8){
            return 'Last ' . self::$days[date('w', $time)];
        }else{
            return date($format, $time);
        }

    }

   public static function relativeTime($timestamp, $format = 'Y-m-d H:i:s'){
        $dif = time() - $timestamp;

        $dateArray = array(
            "second" => 60,     // 60 seconds in 1 minute
            "minute" => 60,     // 60 minutes in 1 hour
            "hour" => 24,       // 24 hours in 1 day
            "day" => 7,         // 7 days in 1 week
            "week" => 4,        // 4 weeks in 1 month
            "month" => 12,      // 12 months in 1 year
            "year" => INF,        // Up to 10 years
        );

        foreach($dateArray as $key => $item){
            if($dif < $item)
                return $dif . ' ' . $key . ($dif == 1? '' : '') . ' ago';
            $dif = round($dif/$item);
        }
        return date($format, $timestamp);

    }

}

echo TimeClass::relative(time() -60*60*24*10) .'<br/>';
echo TimeClass::relativeTime(time() - (gmdate("Y-m-d")));


?>