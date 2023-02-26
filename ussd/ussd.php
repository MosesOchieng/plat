<?php



// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["sessionCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Hello there welcome to Place Ya Mat. \n";
    $response .= "1. Proceed in English. \n";
    $response .= "2. Endelea kwa Swahili. \n";
    $response .= "3. About Place Ya Mat. \n";
    

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON You choose option 1 .Kindly tell us what we should do for you. \n";
    $response .= "1. Find a Matatu for your route. \n";
    $response .= "2. Find a Matatu sacco with space to onboard. \n";
    $response .= "3. Share Matatu Directions. \n";
    $response .= "4. Back";

}else if($text == "2"){
  $response = "CON Karibu ,Endelea kwa kuchagua moja kati ya  \n";
  $response .= "1. Tafuta Matatu Gari la kuelekea unaposafiri \n";
  $response .= "2. Tafuta Shirika lenye Matatu lakuabiri \n";
  $response .= "3. Uwezo wa kupeana njia kueleka kwa gari";

}else if($text == "3"){
  $response = "END Hello there we are a tech company that allows you to find vehicles when commuting to new routes ,especially the ones you are not familiar with.We work with people commuting to new routes for the first time , foreighners , local tourist and also the 70 % of 4.2 million nairobi transiting everyday.";

}else if($text == "1*1"){
    $response = "CON  Choose your destination. \n";
    $response .="1. Kawangware \n";
    $response .="2. Juja \n";
    $response .="3. Lavington \n";
    $response .="4. Donholm. \n";
    $response .="4. Westlands. \n";
    $response .="5. Pangani. \n";
    $response .="6. Langata.";
    

}else if($text == "2*1"){
    $response = "CON Chagua Mahali unataka kuenda? \n";
    $response .="1. Kawangware \n";
    $response .="2. Juja \n";
    $response .="3. Lavington \n";
    $response .="4. Donholm. \n";
    $response .="4. Westlands. \n";
    $response .="5. Pangani. \n";
    $response .="6. Langata. \n";
    $response .="7. Kasarani.";
}else if($text == "1*2"){
    $response = "CON Kindly choose your destination  \n";
    $response .="1. Kawangware \n";
    $response .="2. Juja \n";
    $response .="3. Lavington \n";
    $response .="4. Donholm. \n";
    $response .="4. Westlands. \n";
    $response .="5. Pangani. \n";
    $response .="6. Langata. \n";
    $response .="7. Kasarani.";

}else if($text == "2*2"){
    $response = "CON Chagua Mahali unataka kuenda? \n";
    $response .="1. Kawangware \n";
    $response .="2. Juja \n";
    $response .="3. Lavington \n";
    $response .="4. Donholm. \n";
    $response .="4. Westlands. \n";
    $response .="5. Pangani. \n";
    $response .="6. Langata. \n";
    $response .="7. Kasarani.";
}else if($text == "1*3"){
    $response .="CON Kindly add in this format the location the person is moving to ,together with where they are and they will receive a short SMS with the directions. \n";
}else if($text == "2*3"){
    $response .="CON Kindly add in this format the location the person is moving to ,together with where they are and they will receive a short SMS with the directions. \n";
}else if($text == "1*1*1"){
    $response .="END Thank you for choosing this option ,you will receive an information on the place to get your Mat.";
}else if($text == "2*1*1"){
    $response .="END Thank you for choosing this option ,you will receive an information on the place to get your Mat.";
}else if($text == "1*1*2"){
    $response .="END Thank you for choosing this option ,you will receive an information on the place to get your Mat.";
     }

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

?>
