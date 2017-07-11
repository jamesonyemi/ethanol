<?php 

function calculate_postpone_due_date($billingcycle)
{
    switch($billingcycle)
    {
        case "Monthly":         $months = 1; break;
        case "Quarterly":       $months = 3; break;
        case "Semi-Annually":   $months = 6; break;
        case "Annually":        $months = 12; break;
        case "Biennially":      $months = 24; break;
        case "Triennially":     $months = 36; break;
        default:                $months = 0; break;
    }


    if ($months == 0)
        return FALSE;    

    $today = date('Y-m-d');
    $next_due_date = strtotime($today.' + '.$months.' Months');
    return date('Y-m-d', $next_due_date);

}

echo calculate_postpone_due_date("Semi-Annually");

 ?>