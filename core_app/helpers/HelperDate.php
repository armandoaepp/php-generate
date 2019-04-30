<?php
class HelperDate
{

    public static function timestampsBd($timestamps = true)
    {
        $created_at = null;

        if ($timestamps) {
            $created_at = date('Y-m-d H:m:s');
        }

        $created_at = !empty($created_at) ? "'" . $created_at . "'" : "NULL";

        return $created_at;

    }

    /**
     * value[number days add]
     */
    public static function dateUpDay($value)
    {
        $date = date("d-m-Y");
        $new_date = date("d-m-Y", strtotime($date . "+ $value days"));
    }

    /**
     * value[number days subtract]
     */
    public static function dateDownDay($value)
    {
        $date = date("d-m-Y");
        $new_date = date("d-m-Y", strtotime($date . "- $value days"));
    }

    /**
     * value[number days subtract]
     */
    public static function dateNowDownDay($value)
    {
        $date = date("Y-m-d");
        $new_date = date("Y-m-d", strtotime($date . "- $value days"));
        return $new_date;
    }

}
