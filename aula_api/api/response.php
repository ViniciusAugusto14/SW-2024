<?php
 class Response{
    public static function resposta($status = 200,$message = 'API running is ok',$data=null){
        //corpo da resposta
        header('Content-Type; application/json');
        return json_encode([
            'status' => $status,
            'mensagem' => $message,
            'data' => $data
        ]);
    }
 }