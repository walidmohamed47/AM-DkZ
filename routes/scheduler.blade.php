@extends('layouts.foodLayout')

@section('middlebar')
    <link href="/css/calendar.css" type="text/css" rel="stylesheet" />

    <div class="navHeader">
        <h4 style="margin-bottom: 10px; margin-top: 10px;">Create Meal Plan</h4>
    </div>

    <?php
        if(isset($month)){

        }
        else{

    ?>      
        <div class="container" style="text-align: center">
            <div style="display: inline-block">
                <form method="post" action="/calendarMeal">
                    {{csrf_field()}}        <!--  General -->
                    <div class="form-group row">
                        <label class="col-lg-6 control-label"> Select Month:</label>
                        <div class="col-lg-6">
                        <input class="form-control" type="month" name="month" >
                        </div>
                    </div>
                         <div class="form-group row">
                        <div class="col" style="text-align: center">
                            <input type="submit" class="btn btn-primary" value="Select" style="margin-left: -30px;">
                        </div>
                    </div>
                </form>
    <?php
        }
        if(isset($month))
        {
            ?>
            <br>
            <h4 style="margin-bottom: 10px; margin-top: 10px; margin-left: 480px;">{{$_SESSION['month']}}</h4>
            <form method="post" action="/calendar_meal">
                {{csrf_field()}}
            <?php
        echo draw_calendar($month);
        ?>
            <br>
            <input type="submit" class="btn btn-primary" value="Select" style="margin-left: 300px;">
            <?php
    }

            ?>
        </div>
    </div>
    @endsection







<?php

function draw_calendar($date){
    $month = date("m",strtotime($date));
    $year = date("y",strtotime($date));

    /* draw table */
    $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

    /* table headings */
    $headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
    $calendar.= '<tr class="calendar-row" style="color: #fff"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

    /* days and weeks vars now ... */
    $running_day = date('w',mktime(0,0,0,$month,1,$year));
    $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
    $days_in_this_week = 1;
    $day_counter = 0;
    $dates_array = array();

    /* row for week one */
    $calendar.= '<tr class="calendar-row">';

    /* print "blank" days until the first of the current week */
    for($x = 0; $x < $running_day; $x++):
        $calendar.= '<td class="calendar-day-np"> </td>';
        $days_in_this_week++;
    endfor;

    /* keep going with days.... */
    for($list_day = 1; $list_day <= $days_in_month; $list_day++):

        $calendar.= '<td class="calendar-day" style="background-color: #fff">';
        $calendar.= '<input type="checkbox" name="'.$list_day.'" > </input></a><div class="day-number">'.$list_day .'</div>';

        /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
        $calendar.= str_repeat('<p> </p>',2);

        $calendar.= '</td>';
        if($running_day == 6):
            $calendar.= '</tr>';
            if(($day_counter+1) != $days_in_month):
                $calendar.= '<tr class="calendar-row">';
            endif;
            $running_day = -1;
            $days_in_this_week = 0;
        endif;
        $days_in_this_week++; $running_day++; $day_counter++;
    endfor;



    /* finish the rest of the days in the week */
    if($days_in_this_week < 8):
        for($x = 1; $x <= (8 - $days_in_this_week); $x++):
            $calendar.= '<td class="calendar-day-np"> </td>';
        endfor;
    endif;

    /* final row */
    $calendar.= '</tr>';

    /* end the table */
    $calendar.= '</table>';

    /* all done, return result */
    return $calendar;
}
//echo draw_calendar($month,$bookings,$rooms,$type);

?>



          