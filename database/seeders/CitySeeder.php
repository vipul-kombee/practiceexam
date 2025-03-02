<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\State;

class CitySeeder extends Seeder
{
    public function run()
    {
        $cities = [
            ['name' => 'Ahmedabad', 'state_id' => 1],
            ['name' => 'Surat', 'state_id' => 1],
            ['name' => 'Vadodara', 'state_id' => 1],
            ['name' => 'Rajkot', 'state_id' => 1],
            ['name' => 'Gandhinagar', 'state_id' => 1],
            ['name' => 'Bhavnagar', 'state_id' => 1],
            ['name' => 'Jamnagar', 'state_id' => 1],
            ['name' => 'Junagadh', 'state_id' => 1],
            ['name' => 'Anand', 'state_id' => 1],
            ['name' => 'Navsari', 'state_id' => 1],

            ['name' => 'Mumbai', 'state_id' => 2],
            ['name' => 'Pune', 'state_id' => 2],
            ['name' => 'Nagpur', 'state_id' => 2],
            ['name' => 'Thane', 'state_id' => 2],
            ['name' => 'Nashik', 'state_id' => 2],
            ['name' => 'Aurangabad', 'state_id' => 2],
            ['name' => 'Solapur', 'state_id' => 2],
            ['name' => 'Amravati', 'state_id' => 2],
            ['name' => 'Kolhapur', 'state_id' => 2],
            ['name' => 'Navi Mumbai', 'state_id' => 2],

            ['name' => 'Jaipur', 'state_id' => 3],
            ['name' => 'Jodhpur', 'state_id' => 3],
            ['name' => 'Udaipur', 'state_id' => 3],
            ['name' => 'Kota', 'state_id' => 3],
            ['name' => 'Bikaner', 'state_id' => 3],
            ['name' => 'Ajmer', 'state_id' => 3],
            ['name' => 'Alwar', 'state_id' => 3],
            ['name' => 'Bharatpur', 'state_id' => 3],
            ['name' => 'Sikar', 'state_id' => 3],
            ['name' => 'Pali', 'state_id' => 3],

            ['name' => 'Lucknow', 'state_id' => 4],
            ['name' => 'Kanpur', 'state_id' => 4],
            ['name' => 'Agra', 'state_id' => 4],
            ['name' => 'Varanasi', 'state_id' => 4],
            ['name' => 'Prayagraj', 'state_id' => 4],
            ['name' => 'Bareilly', 'state_id' => 4],
            ['name' => 'Meerut', 'state_id' => 4],
            ['name' => 'Ghaziabad', 'state_id' => 4],
            ['name' => 'Noida', 'state_id' => 4],
            ['name' => 'Gorakhpur', 'state_id' => 4],

            ['name' => 'Bengaluru', 'state_id' => 5],
            ['name' => 'Mysore', 'state_id' => 5],
            ['name' => 'Hubli', 'state_id' => 5],
            ['name' => 'Mangalore', 'state_id' => 5],
            ['name' => 'Belgaum', 'state_id' => 5],
            ['name' => 'Gulbarga', 'state_id' => 5],
            ['name' => 'Davanagere', 'state_id' => 5],
            ['name' => 'Bellary', 'state_id' => 5],
            ['name' => 'Shimoga', 'state_id' => 5],
            ['name' => 'Tumkur', 'state_id' => 5],

            ['name' => 'Chennai', 'state_id' => 6],
            ['name' => 'Coimbatore', 'state_id' => 6],
            ['name' => 'Madurai', 'state_id' => 6],
            ['name' => 'Tiruchirappalli', 'state_id' => 6],
            ['name' => 'Salem', 'state_id' => 6],
            ['name' => 'Erode', 'state_id' => 6],
            ['name' => 'Vellore', 'state_id' => 6],
            ['name' => 'Tirunelveli', 'state_id' => 6],
            ['name' => 'Thoothukudi', 'state_id' => 6],
            ['name' => 'Kanchipuram', 'state_id' => 6],

            ['name' => 'Kolkata', 'state_id' => 7],
            ['name' => 'Howrah', 'state_id' => 7],
            ['name' => 'Durgapur', 'state_id' => 7],
            ['name' => 'Asansol', 'state_id' => 7],
            ['name' => 'Siliguri', 'state_id' => 7],
            ['name' => 'Malda', 'state_id' => 7],
            ['name' => 'Kharagpur', 'state_id' => 7],
            ['name' => 'Haldia', 'state_id' => 7],
            ['name' => 'Bardhaman', 'state_id' => 7],
            ['name' => 'Midnapore', 'state_id' => 7],

            ['name' => 'Bhopal', 'state_id' => 8],
            ['name' => 'Indore', 'state_id' => 8],
            ['name' => 'Gwalior', 'state_id' => 8],
            ['name' => 'Jabalpur', 'state_id' => 8],
            ['name' => 'Ujjain', 'state_id' => 8],
            ['name' => 'Sagar', 'state_id' => 8],
            ['name' => 'Dewas', 'state_id' => 8],
            ['name' => 'Satna', 'state_id' => 8],
            ['name' => 'Ratlam', 'state_id' => 8],
            ['name' => 'Rewa', 'state_id' => 8],

            ['name' => 'Patna', 'state_id' => 9],
            ['name' => 'Gaya', 'state_id' => 9],
            ['name' => 'Bhagalpur', 'state_id' => 9],
            ['name' => 'Muzaffarpur', 'state_id' => 9],
            ['name' => 'Purnia', 'state_id' => 9],
            ['name' => 'Darbhanga', 'state_id' => 9],
            ['name' => 'Bihar Sharif', 'state_id' => 9],
            ['name' => 'Arrah', 'state_id' => 9],
            ['name' => 'Begusarai', 'state_id' => 9],
            ['name' => 'Katihar', 'state_id' => 9],

            ['name' => 'Ludhiana', 'state_id' => 10],
            ['name' => 'Amritsar', 'state_id' => 10],
            ['name' => 'Jalandhar', 'state_id' => 10],
            ['name' => 'Patiala', 'state_id' => 10],
            ['name' => 'Bathinda', 'state_id' => 10],
            ['name' => 'Hoshiarpur', 'state_id' => 10],
            ['name' => 'Mohali', 'state_id' => 10],
            ['name' => 'Pathankot', 'state_id' => 10],
            ['name' => 'Moga', 'state_id' => 10],
            ['name' => 'Sangrur', 'state_id' => 10]
        ];

        City::insert($cities);
    }
}
