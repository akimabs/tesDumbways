<?php

$conn = mysqli_connect('localhost', 'root', '', 'dumbways');

$getData = mysqli_query($conn, "SELECT biodata.id, biodata.full_name, date_format(biodata.date_of_birth,'%M-%d-%Y') as date, biodata.phone_number, biodata.address, biodata.last_education, biodata.religion, biodata.hobbies, cities.name FROM cities JOIN biodata ON cities.id = biodata.place_of_birth");

$getPlace = mysqli_query($conn, "SELECT cities.id, cities.name FROM cities");
$getSch = mysqli_query($conn, "SELECT biodata.last_education FROM biodata");
// $getReligion = mysqli_query($conn, "SELECT religion FROM information_schema.COLUMNS WHERE TABLE_NAME = 'biodata' AND COLUMN_NAME = 'last_education'");

$getReligion = mysqli_query($conn, "SELECT biodata.religion from biodata");
$getHobi = mysqli_query($conn, "SELECT biodata.hobbies from biodata");
// $count = mysqli_num_rows($getData);

function enum_values()
{
    global $conn;
    $query = "SELECT COLUMN_TYPE FROM information_schema.COLUMNS WHERE TABLE_NAME = 'biodata' AND COLUMN_NAME = 'last_education'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $enum_list = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE']) - 6))));
        $rows[] = $enum_list;
    };
    return $rows;
}

enum_values();
