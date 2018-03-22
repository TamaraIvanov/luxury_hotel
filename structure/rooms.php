<?php
/**
 * Created by PhpStorm.
 * User: Mladja
 * Date: 10-Jan-18
 * Time: 21:37
 */


$page = $_POST['page'];
$offset = $_POST['offset'];
$filter = $_POST['active_filter'];

setRooms($offset, $page, $filter);


function setRooms($offset = 3, $page = 1, $filter) {

    $room_titles = ['Apartment Room', 'Honeymoon Room', 'Presidential Room', 'Family Room', 'Standard Room', 'Single Room', 'Luhury Room'];
    $room_types = ['apartment', 'double', 'single', 'family'];
    $rooms = [];

    for($i = 0; $i < $offset; $i++) {
       $rooms[$i]['title'] = $room_titles[array_rand($room_titles)];
       $rooms[$i]['type'] = $filter === "all" ? $room_types[array_rand($room_types)] : $filter;
       $rooms[$i]['image'] = 'http://localhost/tamara/luxury_hotel/img/room'.rand(1,9).'.jpg';
       $rooms[$i]['price'] = rand(50,900);
    }

    echo json_encode(['success' => 'true', 'data' => $rooms]);

}
