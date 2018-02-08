<?php
/**
 * Created by PhpStorm.
 * User: Mladja
 * Date: 10-Jan-18
 * Time: 21:37
 */


$page = $_POST['page'];
$offset = $_POST['offset'];

setRooms($offset, $page);


function setRooms($offset = 3, $page = 1) {

    $room_titles = ['Apartment Room', 'Honeymoon Room', 'Presidential Room', 'Family Room', 'Standard Room', 'Single Room', 'Luhury Room'];
    $rooms = [];

    for($i = 0; $i < $offset; $i++) {
       $rooms[$i]['title'] =  $room_titles[array_rand($room_titles)];
       $rooms[$i]['image'] =  'http://localhost/tamara/luxury_hotel/img/room'.rand(1,9).'.jpg';
       $rooms[$i]['price'] =  rand(50,900);

    }


    echo json_encode(['success' => 'true', 'data' => $rooms]);

}
