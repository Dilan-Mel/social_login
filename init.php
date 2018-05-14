<?php
 

  function goToAuthUrl(){

    $client_id ="227c91e387c2280a9a39";
    $redirect_url="https:4433//localhost/github/callback.php";
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
           $url = 'https://github.com/login/oauth/authorize?client_id='.$client_id. "&redirect_url=".$redirect_url."&scope=user";
           
           header("location: $url");

    }



  }  

  function fetchData()
  {
    $client_id ="227c91e387c2280a9a39";
    $redirect_url="https:4433//localhost/github/callback.php";

    if($_SERVER['REQUEST_METHOD']== 'GET'){
        if(isset($_GET['code'])){
            $code = $_GET['code'];
            $post = http_build_query(array(
                'client_id' => $client_id,
                'redirect_url'=> $redirect_url,
                'client_secret'=>'aa1eaef9117c758519916d729d12e2bf28d8ece1',
                'code'=>$code, 
            ));
        }

        $access_data = file_get_contents("https://github.com/login/oauth/access_token?".$post);
        $exploded1= explode('access_token=',$access_data);
        $exploded2=explode('&scope=user',$exploded1[1]);
        $access_token =$exploded2[0];

        $opts = ['http' =>[
                        'method'=>'GET',
                        'header'=>['user-Agent: PHP']

                    ]
        ];
            
			//fetch user data
            $url="https://api.github.com/user?access_token=$access_token";
            $context=stream_context_create($opts);
            $data=file_get_contents($url,false,$context);
            $user_data=json_decode($data,true);
            $username=$user_data['login'];

			//fetching email data
            $url1="https://api.github.com/user/emails?access_token=$access_token";
            $emails=file_get_contents($url1,false,$context);
            $emails=json_decode($emails,true);
            $email=$emails[0];
           
            
            $userPayload =[
                'username'=> $username,
                'email'=> $emails,
                'fetched from'=> "github"

            ];

            $_SESSION['payload']=$userPayload;
            $_SESSION['user']=$username;

            return $userPayload;



    }
    
    else{
        die('error'); 
    }
 }
