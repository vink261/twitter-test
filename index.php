<?php
postTwitter('内容');


function postTwitter($postMsg){
    //「twitteroauth.php」読み込み
    //「OAuth.php」は「twitteroauth.php」と同じ場所に配置します
        require_once dirname(__FILE__) . '/twitteroauth.php';

    // 「Consumer key」値
    $consumerKey = '「Consumer key」の値';
    // 「Consumer secret」値
    $consumerSecret = '「Consumer secret」の値';
    // 「Access Token」値
    $accessToken = '「Access Token」の値';
    // 「Access Token Secret」値
    $accessTokenSecret = '「Access Token Secret」の値';

    //リクエストを投げる先（固定値）
    $url = "https://api.twitter.com/1.1/statuses/update.json";
    $method = "POST";

    // OAuthオブジェクト生成
    $twitterOAuth = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessTokenSecret);

    //投稿
    $res = $twitterOAuth->OAuthRequest($url,$method,array("status"=>"$postMsg"));

    // レスポンス表示
	
    header("Content-Type: application/xml");
    echo $res;
}
?>