<?php

// $endPointApi = $config->dashboardApi->endPoint . "leads";
// $apiAuthToken = $config->dashboardApi->token;
// echo "<pre>";
// print_r($_POST);
// die;
if (isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["ip2loc_ip"]) && !empty($_POST["ip2loc_ip"]) && $_POST["ip2loc_ip"] !== "undefined") {
    // $leadData1 = formatApiLeadData($_POST);
    // $leadData = json_encode($leadData1);

    $curl = curl_init();
    curl_setopt_array($curl, array(
        // CURLOPT_URL => $endPointApi,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        // CURLOPT_POSTFIELDS =>  $leadData,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Accept: application/json',
            // 'Authorization: Bearer ' . $apiAuthToken
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);

    $response = json_decode($response);

    $parameter = null;
    // if (isset($response->token) && !empty($response->token)) {
    //     $parameter = "?ap=" . $response->token . "&package=" . $leadData1["package"] . "&amount=" . $leadData1["amount"] . "&name=" . $_POST["name"] . "&email=" . $_POST["email"];
    // }
?>

<script type="text/javascript">
window.location.replace("thank-you<?php echo $parameter; ?>");
</script>

<?php
} else {

?>

<script type="text/javascript">
window.location.replace("/");
</script>

<?php
}
?>