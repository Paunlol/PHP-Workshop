<?php

// class Ranking_conditions {
//     private $condition_turn;

//     public function setturn($condition_main , $second = NULL){
//         $reward = array();
    
//         foreach($condition_main as $key => $value){
//             if (strpos($key, '-') == true) {
//                 $subKeys = explode('-', $key);
//                 $cnt = $subKeys[0];
//                 while($cnt <= $subKeys[1]){
//                     $reward[$cnt] = array($value);
//                     $cnt++;
//                 }
//             }else{
//                 $reward[$key] = array($value);
//             }
//         }
//         if($second != NULL){
//             foreach($second as $key => $value){
//                 if (strpos($key, '-') == true) {
//                     $subKeys = explode('-', $key);
//                     $cnt = $subKeys[0];
//                     while($cnt <= $subKeys[1]){
//                         array_push($reward[$cnt] , $value);
//                         $cnt++;
//                     }
//                 }else{
//                     array_push($reward[$key] ,$value);
//                 }
//             }
//         }
//         echo "<pre>";
//         $this->condition_turn = $reward;
//         print_r($this->condition_turn);die;
//     }

//     public function getreward($no , $turn_conditions){
//         $reward_conditions = 0;
//         foreach($this->condition_turn[$no] as $val){
//             if($turn_conditions >= $val){
//                 $reward_conditions = 
//             }
//         }
//     }

// }

// $main = [
//     '1'     =>  15000000,
//     '2-3'   =>  7000000,
//     '4-5'   =>  3000000,
//     '6-15'  =>  1000000
// ];

// $second = [
//     '1'     =>  7000000,
//     '1-3'   =>  3000000,
//     '1-5'   =>  1000000,
//     '1-15'  =>  500000
// ];

// $result = new Ranking_conditions();

// $result->setturn($main ,$second);