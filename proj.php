        <?php
        header("Content-Type: application/json");
        $in = file_get_contents("https://www.bloomberght.com/piyasa/intradaydata/dolar");
            $arr=json_decode($in)->SeriesData;
            echo json_encode($arr);
