<?php
 class Response{
    public static function resposta($status = 200,$message = 'API running is ok',$data=null){
        //corpo da resposta
        header('Content-Type; application/json');

        if(!API_IS_ACTIVE){
            return json_encode([
            'status'=> 400,
            'mensagem' => 'A API não esta rodando ',
            'api_version'=> API_VERSION,
            'time_response' => time(),
            'data_atual' => date('Y-m-d H:i'),
            'dados' => null
            ]);
        }

        return json_encode([
            'status' => $status,
            'mensagem' => $message,
            'api_version'=> API_VERSION,
            'time_response' => time(),
            'data_atual' => date('Y-m-d H:i'),
            'data' => $data
        ]);
    }
 }